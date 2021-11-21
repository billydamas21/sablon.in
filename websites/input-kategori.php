<?php include 'components/top-link.php'; ?>
<?php include 'components/topbar.php'; ?>
<?php include 'components/sidebar.php'; ?>

<!-- Start Content Wrapper -->
<div class="content-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Tambah Kategori</h4>
                    <form class=" col-lg-6 mx-auto cmxform" id="commentForm" method="post" action="">
                        <fieldset>
                            <div class="form-group">
                                <label for="IDKategori">Kode Kategori</label>
                                <input id="IDKategori" class="form-control" type="text" name="IDKategori" minlength="4" maxlength="5" required>
                            </div>
                            <div class="form-group">
                                <label for="Kategori">Kategori</label>
                                <input id="Kategori" class="form-control" type="text" name="Kategori" minlength="4" maxlength="35" required>
                            </div>
                            <button class="btn btn-primary" type="submit" value="submit">Tambah</button>
                            <a href="data-kategori.php" class="btn btn-secondary">Kembali</a>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>


</div>
<!-- End Content Wrapper -->

<?php include 'components/footer.php'; ?>
<?php include 'components/bottom-link.php'; ?>