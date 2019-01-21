<div class="container">
    <fieldset>
        <legend>Laporan Masuk</legend>
    </fieldset>
    <hr>
    <?php foreach ($report as $r) { ?>
        <div class="container-fluid" style="cursor: pointer; ">
            <div class="row">
                <div class="col-md-12">
                    <div class="card text-white mb-3">
                        <div class="card-header  bg-danger">
                            <div class="row">
                                <div class="col-md-9 col-sm-12">
                                    Dilaporan Oleh : <?php echo $r->nama ?> [<?php echo $r->nik ?>]
                                </div>
                                <div class="col-md-3 col-sm-12 pr-4">
                                    <a class="btn btn-success" onclick="return updateData('<?php echo $r->id ?>')"><span class="fa fa-check"></span> Tandai Telah Ditindak Lanjut</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body text-dark">
                            <div class="row border p-3 m-1">
                                <div class="col-md-6">
                                    <p class="lead font">Nomor telepon pelapor : <a class="font-weight-bold" href="tel:<?php echo $r->nomor_telepon ?>"><?php echo $r->nomor_telepon ?></a> </p>
                                </div>
                                <div class="col-md-6 text-right">
                                    <p class="lead">Dilaporkan Pada : <span class="font-weight-bold"><?php echo date_format(date_create($r->dilaporkan_pada), 'd M Y H:i:s') ?></span></p>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-6">
                                    <fieldset>
                                        <legend>Detail Laporan </legend>
                                    </fieldset>
                                    <hr>
                                    <table class="table table-striped ">
                                        <tr>
                                            <td>Jumlah Korban</td>
                                            <td>:</td>
                                            <td><?php echo $r->jumlah_korban ?> Orang</td>
                                        </tr>
                                        <tr>
                                            <td>Status Korban</td>
                                            <td>:</td>
                                            <td><?php echo $r->status_korban ?></td>
                                        </tr>
                                        <tr>
                                            <td>Kondisi Korban</td>
                                            <td>:</td>
                                            <td><?php echo $r->kondisi_korban ?></td>
                                        </tr>
                                        <tr>
                                            <td>Foto Terkini</td>
                                            <td>:</td>
                                            <td><img class="img img-fluid img-thumbnail" width="75%" src="<?php echo IMAGE_URL . $r->gambar ?>" /></td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="col-md-6">
                                    <fieldset>
                                        <legend>Lokasi</legend>
                                    </fieldset>
                                    <hr>
                                    <div style="overflow:hidden;width: 100%;position: relative;">
                                        <?php
                                        $lokDb = $r->posisi;
                                        $loc = explode(";", $lokDb);
                                        ?>
                                        <iframe width="100%" height="250" src="https://maps.google.com/maps?width=700&amp;height=440&amp;hl=en&amp;q=
                                                <?php echo $loc[0] ?>,<?php echo $loc[1] ?>
                                                +(Lokasi%20Pelapor)&amp;ie=UTF8&amp;t=&amp;z=12&amp;iwloc=B&amp;output=embed" 
                                                frameborder="0" 
                                                scrolling="no" 
                                                marginheight="0" 
                                                marginwidth="0"></iframe><br />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>
</div>

<script>
    function updateData(id) {
        swal({
            title: "Konfirmasi",
            text: "Apakah Anda Yakin Ingin Mengupdate Laporan ini ?",
            type: 'question',
            showConfirmButton: true,
            showCancelButton: true
        }).then((result) => {
            if (result.value) {
                doUpdate(id);
            }
        });
    }

    function doUpdate(id) {
        var url = "<?php echo site_url('dashboard/update_status') ?>";
        $.ajax({
            url: url,
            data: {'id': id},
            type: 'POST',
            dataType: 'json',
            success: function (data, textStatus, jqXHR) {
                if (data.status == '0') {
                    swal({
                        title: textStatus,
                        text: data.message,
                        type: 'success',
                        showConfirmButton: true
                    }).then((result) => {
                        if (result.value) {
                            window.location.reload();
                        }
                    });
                } else {
                    swal("peringatan", data.message, 'warning');
                }
            },
            error: function (jqXHR, textStatus, errorThrown) {
                swal('Kesalahan', textStatus, 'error')
            }
        });
    }
</script>