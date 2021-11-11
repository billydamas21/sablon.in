<?php require '../backend/BarangInsert.php' ?>
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
                        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" class=" col-6 mx-auto">
                            <div class="section-title mt-0">Tambah Barang</div>
                            <div class="form-group" <?php echo (!empty($Nama_barang_alert)) ? 'has-error' : ''; ?>>
                                <label for="Nama_barang">Nama Barang</label>
                                <input type="text" class="form-control" name="Nama_barang" id="Nama_barang" placeholder="Nama Barang" value="<?php echo $Nama_barang; ?>" required>
                                <span class=" help-block text-danger"><?php echo $Nama_barang_alert; ?></span>
                            </div>
                            <div class="form-group" <?php echo (!empty($Jenis_barang_alert)) ? 'has-error' : ''; ?>>
                                <label for="Jenis_barang">Jenis Barang</label>
                                <input type="text" class="form-control" name="Jenis_barang" id="Jenis_barang" placeholder="Jenis Barang" value="<?php echo $Jenis_barang; ?>" required>
                                <span class=" help-block text-danger"><?php echo $Jenis_barang_alert; ?></span>
                            </div>
                            <div class="form-group" <?php echo (!empty($Jumlah_alert)) ? 'has-error' : ''; ?>>
                                <label for="Jumlah">Jumlah Barang</label>
                                <input type="number" class="form-control" name="Jumlah" id="Jumlah" placeholder="Jumlah Barang" value="<?php echo $Jumlah; ?>" required>
                                <span class=" help-block text-danger"><?php echo $Jumlah_alert; ?></span>
                            </div>
                            <div class="text-right">
                                <button class="btn btn-success mr-1" type="submit" name="TambahBarang" value="submit">
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