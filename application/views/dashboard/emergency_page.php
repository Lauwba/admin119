<div class="container">
    <fieldset>
        <legend>Laporan Masuk</legend>
    </fieldset>
    <hr>
    <div class="container-fluid" style="cursor: pointer; ">
        <div class="row">
            <div class="col-md-12">
                <div class="card text-white mb-3">
                    <div class="card-header  bg-danger">Dilaporan Oleh : Sigit Suryono [1606022502940003]</div>
                    <div class="card-body text-dark">
                        <div class="row border p-3 m-1">
                            <div class="col-md-6">
                                <p class="lead font">Nomor telepon pelapor : <a class="font-weight-bold" href="tel:08512452145">08512452145</a> </p>
                            </div>
                            <div class="col-md-6 text-right">
                                <p class="lead">Dilaporkan Pada : <span class="font-weight-bold">12 Januari 2019 10:50:10</span></p>
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
                                        <td>1 Orang</td>
                                    </tr>
                                    <tr>
                                        <td>Status Korban</td>
                                        <td>:</td>
                                        <td>MD</td>
                                    </tr>
                                    <tr>
                                        <td>Kondisi Korban</td>
                                        <td>:</td>
                                        <td>MD</td>
                                    </tr>
                                    <tr>
                                        <td>Alamat Detail</td>
                                        <td>:</td>
                                        <td>MD</td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-md-6">
                                <fieldset>
                                    <legend>Lokasi</legend>
                                </fieldset>
                                <hr>
                                <div style="overflow:hidden;width: 100%;position: relative;">
                                    <iframe width="100%" height="250" src="https://maps.google.com/maps?width=700&amp;height=440&amp;hl=en&amp;q=
                                            <?php echo $lat ?>,<?php echo $longi ?>
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

    <script>
        function openMaps(lat, lng) {
            var url = "<?php echo site_url('dashboard/maps') ?>" + "?lat=" + lat + "&lng=" + lng;
            var disp_setting = "toolbar=no,location=no,";
            disp_setting += "directories=no,menubar=no,";
            disp_setting += "scrollbars=yes,width=650, height=425, left=100, top=25";
            window.open(url, "Lokasi", disp_setting);
        }
        $(document).ready(function () {
            var url = "<?php echo site_url('dashboard/maps/-7.7520206/110.4892787') ?>";
            $.ajax({
                url: url,
                success: function (data, textStatus, jqXHR) {
                    //                document.getElementById("map").innerHTML = data;
                },
                error: function (jqXHR, textStatus, errorThrown) {

                }
            });
        });
    </script>