<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <div class="alert alert-warning">
        <h4>sekolah</h4>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <div class="border-bottom-warning">
                <h5 class="font-weight-bold">Ranking Metode WP</h5>
            </div>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th class="text-center">Ranking</th>
                        <th class="text-center">Nama</th>
                        <th class="text-center">Sekolah</th>
                        <th class="text-center">Vektor_V (Total Nilai WP)</th>
                    </tr>
                </thead>
                <!-- <tbody>
                    <?php
                    $rk = 1;
                    foreach ($dosenWP as $v) : ?>
                        <tr>
                            <td class="text-center"><?= $rk ?></td>
                            <td><?= $v['nama']; ?></td>
                            <td class="text-center"><?= $v['jurusan']; ?></td>
                            <td class="text-center"><?= round($v['vektor_v'], 4); ?></td>
                        </tr>
                    <?php $rk++;
                    endforeach; ?>
                </tbody> -->
            </table>
        </div>
        <div class="col-lg-6">
            <div class="border-bottom-success">
                <h5 class="font-weight-bold">Ranking Metode SAW</h5>
            </div>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th class="text-center">Ranking</th>
                        <th class="text-center">Nama</th>
                        <th class="text-center">Sekolah</th>
                        <th class="text-center">Vi (Total Nilai SAW)</th>
                    </tr>
                </thead>
                <!-- <tbody>
                    <?php
                    $rk = 1;
                    foreach ($dosenSAW as $v) : ?>
                        <tr>
                            <td class="text-center"><?= $rk ?></td>
                            <td><?= $v['nama']; ?></td>
                            <td class="text-center"><?= $v['jurusan']; ?></td>
                            <td class="text-center"><?= round($v['total_nilai_saw'], 4); ?></td>
                        </tr>
                    <?php $rk++;
                    endforeach; ?>
                </tbody> -->
            </table>
        </div>
    </div>



</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->