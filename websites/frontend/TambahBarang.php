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
            <div class="col-12">
                <div class="card card-success">
                    <div class="card-header">
                        <h4>Kelola Barang</h4>
                    </div>
                    <div class="card-body">
                        <form action="" class=" col-6 mx-auto">
                            <div class="section-title mt-0">Tambah Barang</div>
                            <div class="form-group">
                                <label>Nama Barang</label>
                                <input type="text" class="form-control" placeholder="Nama Barang" required>
                            </div>
                            <div class="form-group">
                                <label>Jenis Barang</label>
                                <input type="text" class="form-control" placeholder="Jenis Barang" required>
                            </div>
                            <div class="form-group">
                                <label>Jumlah Barang</label>
                                <input type="number" class="form-control" placeholder="Jumlah Barang" required>
                            </div>
                            <div class="text-right">
                                <button class="btn btn-success mr-1" type="submit">
                                    Tambah
                                </button>
                                <a href="KelolaBarang.php" class="btn btn-secondary">Back</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
    </section>
</div>
<?php include 'templates/footer.php' ?>
<?php include 'templates/footerLink.php' ?>