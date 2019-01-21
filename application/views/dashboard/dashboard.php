<div class="container">
    <div class="container-fluid border p-4">
        <h4 class="mb-4">10 Laporan Masuk Terbaru</h4>
        <table class="table table-striped table-bordered table-hover dataTable small">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Pelapor</th>
                    <th>No KTP</th>
                    <th>Lokasi Laporan</th>
                    <th>Keadaan</th>
                    <th>Tanggal/Waktu Laporan</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach ($report as $r) {
                    ?>
                    <tr>
                        <td><?php echo $no ?></td>
                        <td><?php echo $r->nama ?></td>
                        <td><?php echo $r->nik ?></td>
                        <td>
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
                        </td>
                        <td>
                            <p ><span class="font-weight-bold">Jumlah Korban : </span> <?php echo $r->jumlah_korban ?></p>
                            <p ><span class="font-weight-bold">Status Korban : </span> <?php echo $r->status_korban ?></p>
                            <p ><span class="font-weight-bold">Kondisi Korban : </span> <?php echo $r->kondisi_korban ?></p>
                        </td>
                        <td><?php echo date_format(date_create($r->dilaporkan_pada), 'd M Y H:i:s') ?></td>
                    </tr>
                    <?php
                    $no++;
                }
                ?>
            </tbody>
        </table>
    </div>
    <br>
    <div class="container-fluid border p-4">
        <h4 class="mb-4">10 User Login Terakhir</h4>
        <table class="table table-striped table-bordered table-hover dataTable small">
            <thead>
                <tr>
                    <th>No</th>
                    <th>User/Email</th>
                    <th>Nama</th>
                    <th>Tanggal/Waktu</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach ($last_login as $l) {
                    ?>
                    <tr>
                        <td><?php echo $no ?></td>
                        <td><?php echo $l->email ?></td>
                        <td><?php echo $l->nama ?></td>
                        <td><?php echo date_format(date_create($l->last_login), 'd M Y H:i:s') ?></td>
                    </tr>
                    <?php
                    $no++;
                }
                ?>
            </tbody>
        </table>
    </div>
</div>