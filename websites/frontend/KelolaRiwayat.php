<!-- <?php require '../backend/DataTable.php' ?> -->
<?php include 'templates/headerLink.php' ?>
<?php include 'templates/topbar.php' ?>
<?php include 'templates/sidebar.php' ?>

<?php


?>
<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Data Riwayat</h1>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h4>Tabel Riwayat</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-md text-center">
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Barang</th>
                                        <th>Jenis Barang</th>
                                        <th>Jumlah</th>
                                        <th>Status</th>
                                        <th>Time</th>
                                    </tr>
                                    <?php $i = $AwalDataRiwayat + 1; ?>
                                    <!-- Looping Array -->
                                    <?php foreach ($Riwayat as $row) : ?>
                                        <tr>
                                            <td><?= $i; ?></td>
                                            <td><?= $row['Nama_barang']; ?></td>
                                            <td><?= $row['Jenis_barang']; ?></td>
                                            <td><?= $row['Jumlah']; ?></td>
                                            <td><?= $row['Status']; ?></td>
                                            <td><?= $row['Time']; ?></td>
                                        </tr>
                                        <?php $i++; ?>
                                    <?php endforeach; ?>
                                </table>
                            </div>
                        </div>

                        <!-- Pagination -->
                        <div class="card-footer text-right">
                            <nav class="d-inline-block">
                                <ul class="pagination mb-0">
                                    <?php if ($HalamanAktifRiwayat > 1) : ?>
                                        <li class="page-item ">
                                            <a class="page-link" href="?halaman=<?= $HalamanAktifRiwayat - 1; ?>" tabindex="-1"><i class="fas fa-chevron-left"></i></a>
                                        </li>
                                    <?php endif; ?>
                                    <?php for ($i = 1; $i <= $JumlahHalamanRiwayat; $i++) : ?>
                                        <?php if ($i == $HalamanAktifRiwayat) : ?>
                                            <li class="page-item active"><a class="page-link" href="?halaman=<?= $i; ?>"><span class="sr-only">(current)</span><?= $i; ?></a></li>
                                        <?php else : ?>
                                            <li class="page-item">
                                                <a class="page-link" href="?halaman=<?= $i; ?>"><?= $i; ?></a>
                                            </li>
                                        <?php endif; ?>
                                    <?php endfor; ?>
                                    <?php if ($HalamanAktifRiwayat < $JumlahHalamanRiwayat) : ?>
                                        <li class="page-item">
                                            <a class="page-link" href="?halaman=<?= $HalamanAktifRiwayat + 1; ?>"><i class="fas fa-chevron-right"></i></a>
                                        </li>
                                    <?php endif; ?>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?php include 'templates/footer.php' ?>
<?php include 'templates/footerLink.php' ?>