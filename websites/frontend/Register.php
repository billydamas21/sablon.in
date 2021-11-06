<?php require '../backend/RegisterProcess.php' ?>
<?php include 'templates/headerLink.php' ?>
<?php include 'templates/topbar.php' ?>
<?php include 'templates/sidebar.php' ?>
<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Data Akun</h1>
        </div>
        <div class="section-body">
            <div class="col-12">
                <div class="card card-info">
                    <div class="card-header">
                        <h4>Kelola Akun</h4>
                    </div>
                    <div class="card-body">
                        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" class=" col-6 mx-auto">
                            <div class="section-title mt-0">Tambah Akun</div>
                            <div class="form-group <?php echo (!empty($nama_err)) ? 'has-error' : ''; ?>">
                                <label>Nama</label>
                                <input type="text" class="form-control" name="nama" placeholder="Nama" value="<?php echo $nama; ?>">
                                <span class=" help-block text-danger"><?php echo $nama_err; ?></span>
                            </div>
                            <div class=" form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                                <label>Username</label>
                                <input type="text" class="form-control" name="username" placeholder="Username" value="<?php echo $username; ?>">
                                <span class=" help-block text-danger"><?php echo $username_err; ?></span>
                            </div>
                            <div class=" form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                                <label>Password</label>
                                <input type="password" class="form-control" name="password" placeholder="Password" value="<?php echo $password; ?>">
                                <span class=" help-block text-danger"><?php echo $password_err; ?></span>
                            </div>
                            <div class=" form-group <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
                                <label>Confirm Password</label>
                                <input type="password" class="form-control" name="password2" placeholder="Confirm Password" value="<?php echo $confirm_password; ?>">
                                <span class="help-block text-danger"><?php echo $confirm_password_err; ?></span>
                            </div>
                            <div class=" text-right">
                                <button class="btn btn-info mr-1" type="submit" value="submit">
                                    Tambah
                                </button>
                                <a href="KelolaAkun.php" class="btn btn-secondary">Back</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
    </section>
</div>
<?php include 'templates/footer.php' ?>
<?php include 'templates/footerLink.php' ?>