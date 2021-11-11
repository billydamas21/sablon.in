<?php require '../backend/DataTable.php' ?>
<?php include 'templates/headerLink.php' ?>
<?php include 'templates/topbar.php' ?>
<?php include 'templates/sidebar.php' ?>
<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Data Barang</h1>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h4>Tabel Barang</h4>
                            <div class="card-header-form">
                                <form>
                                    <input type="text" name="searchBarang" class="form-control" placeholder="Search">
                                </form>
                            </div>
                        </div>
                        <div class="card-body">
                            <a href="TambahBarang.php" class="btn btn-success mb-3">Tambah Data</a>
                            <div class="table-responsive">
                                <table class="table table-bordered table-md text-center">
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Barang</th>
                                        <th>Jenis Barang</th>
                                        <th>Jumlah</th>
                                        <th>Action</th>
                                    </tr>
                                    <?php $i = $AwalDataBarang + 1; ?>
                                    <!-- Looping Array -->
                                    <?php foreach ($Barang as $row) : ?>
                                        <tr>
                                            <td><?= $i; ?></td>
                                            <td><?= $row['Nama_barang']; ?></td>
                                            <td><?= $row['Jenis_barang']; ?></td>
                                            <td><?= $row['Jumlah']; ?></td>
                                            <td>
                                                <a href="UpdateBarang.php?id=<?= $row['id']; ?>" class="btn btn-warning">Update</a>
                                                <button class="btn btn-danger" data-confirm="Realy?|Do you want to continue?" data-confirm-yes="window.location.replace('../backend/delete.php?id=<?= $row["id"]; ?>');">Delete</button>
                                            </td>
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
                                    <?php if ($HalamanAktifBarang > 1) : ?>
                                        <li class="page-item ">
                                            <a class="page-link" href="?halaman=<?= $HalamanAktifBarang - 1; ?>" tabindex="-1"><i class="fas fa-chevron-left"></i></a>
                                        </li>
                                    <?php endif; ?>
                                    <?php for ($i = 1; $i <= $JumlahHalamanBarang; $i++) : ?>
                                        <?php if ($i == $HalamanAktifBarang) : ?>
                                            <li class="page-item active"><a class="page-link" href="?halaman=<?= $i; ?>"><span class="sr-only">(current)</span><?= $i; ?></a></li>
                                        <?php else : ?>
                                            <li class="page-item">
                                                <a class="page-link" href="?halaman=<?= $i; ?>"><?= $i; ?></a>
                                            </li>
                                        <?php endif; ?>
                                    <?php endfor; ?>
                                    <?php if ($HalamanAktifBarang < $JumlahHalamanBarang) : ?>
                                        <li class="page-item">
                                            <a class="page-link" href="?halaman=<?= $HalamanAktifBarang + 1; ?>"><i class="fas fa-chevron-right"></i></a>
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