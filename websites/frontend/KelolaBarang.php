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
                        </div>
                        <div class="card-body">
                            <a href="TambahBarang.php" class="btn btn-success mb-3">Tambah Data</a>
                            <div class="table-responsive">
                                <table class="table table-striped text-center" id="table-1">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Barang</th>
                                            <th>Jenis Barang</th>
                                            <th>Jumlah</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i = 1; ?>
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
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<?php include 'templates/footer.php' ?>
<?php include 'templates/footerLink.php' ?>