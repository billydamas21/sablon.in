<?php require '../backend/BarangUpdate.php' ?>
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
                <div class="card card-warning">
                    <div class="card-header">
                        <h4>Kelola Barang</h4>
                    </div>
                    <div class="card-body">
                        <form action="<?php echo htmlspecialchars(basename($_SERVER['REQUEST_URI'])); ?>" method="post" class=" col-6 mx-auto">
                            <div class="section-title mt-0">Update Barang</div>
                            <div class="form-group" <?php echo (!empty($Nama_barang_alert)) ? 'has-error' : ''; ?>>
                                <label>Nama Barang</label>
                                <input type="text" class="form-control" placeholder="Nama Barang" name="Nama_barang" value="<?php echo $Nama_barang; ?>" required>
                                <span class=" help-block text-danger"><?php echo $Nama_barang_alert; ?></span>
                            </div>
                            <div class="form-group" <?php echo (!empty($Jenis_barang_alert)) ? 'has-error' : ''; ?>>
                                <label>Jenis Barang</label>
                                <input type="text" class="form-control" placeholder="Jenis Barang" name="Jenis_barang" value="<?php echo $Jenis_barang; ?>" required>
                                <span class=" help-block text-danger"><?php echo $Jenis_barang_alert; ?></span>
                            </div>
                            <div class="form-group" <?php echo (!empty($Jumlah_alert)) ? 'has-error' : ''; ?>>
                                <label>Jumlah Barang</label>
                                <input type="number" class="form-control" placeholder="Jumlah Barang" name="Jumlah" value="<?php echo $Jumlah; ?>" required>
                                <span class=" help-block text-danger"><?php echo $Jumlah_alert; ?></span>
                            </div>
                            <div>
                                <input type="hidden" name="id" value="<?php echo $id; ?>" />
                            </div>
                            <div class="text-right">
                                <button class="btn btn-warning mr-1" type="submit" value="submit">
                                    Update
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