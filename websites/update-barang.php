<?php include 'components/top-link.php'; ?>
<?php include 'components/topbar.php'; ?>
<?php include 'components/sidebar.php'; ?>

<!-- Start Content Wrapper -->
<div class="content-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Update Barang</h4>
                    <form class=" col-lg-6 mx-auto cmxform" id="commentForm" method="post" action="">
                        <fieldset>
                            <div class="form-group">
                                <label for="IDBarang">Kode Barang</label>
                                <input id="IDBarang" class="form-control" type="text" name="IDBarang" readonly>
                            </div>
                            <div class="form-group">
                                <label for="Barang">Barang</label>
                                <input id="Barang" class="form-control" type="text" name="Barang" readonly>
                            </div>
                            <div class="form-group">
                                <label for="Kategori">Kategori</label>
                                <input name="Kategori" class="form-control" id="Kategori" readonly></input>
                            </div>
                            <div class="form-group">
                                <label for="Stok">Stok</label>
                                <input id="Stok" class="form-control" type="text" name="Stok" maxlength="4" required></input>
                            </div>
                            <button type="submit" class="btn btn-sm btn-warning">
                                <i class="mdi mdi-update"></i>Update
                            </button>
                            <a href="data-barang.php">
                                <button type="button" class="btn btn-sm btn-outline-secondary">
                                    <i class="mdi mdi-step-backward"></i>Kembali
                                </button>
                            </a>
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