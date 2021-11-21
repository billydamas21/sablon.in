<?php include 'components/top-link.php'; ?>
<?php include 'components/topbar.php'; ?>
<?php include 'components/sidebar.php'; ?>

<!-- Start Content Wrapper -->
<div class="content-wrapper">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Data Barang</h4>
            <div class="row">
                <div class="col-12">
                    <div class="d-flex table-responsive">
                        <div class="btn-group mr-2">
                            <a href="input-barang.php">
                                <button type="button" class="btn btn-sm btn-primary">
                                    <i class="mdi mdi-library-plus"></i>Tambah
                                </button>
                            </a>
                        </div>
                    </div>
                    <div class="table-responsive mt-2">
                        <table id="order-listing" class="table">
                            <thead>
                                <tr class="text-center">
                                    <th>Kode</th>
                                    <th>Barang</th>
                                    <th>Kategori</th>
                                    <th>Stok</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>BG001</td>
                                    <td>Stiker Sablon</td>
                                    <td>Sablon</td>
                                    <td>12</td>
                                    <td class="text-center">
                                        <a href="update-barang.php">
                                            <button type="button" class="btn btn-social-icon btn-outline-warning"><i class="fa fa-pencil"></i>
                                            </button>
                                        </a>
                                        <a href="#">
                                            <button type="button" class="btn btn-social-icon btn-outline-danger btn-sm"><i class="fa fa-trash"></i>
                                            </button>
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- End Content Wrapper -->

<?php include 'components/footer.php'; ?>
<?php include 'components/bottom-link.php'; ?>