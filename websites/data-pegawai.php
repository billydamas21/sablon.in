<?php include 'components/top-link.php'; ?>
<?php include 'components/topbar.php'; ?>
<?php include 'components/sidebar.php'; ?>

<!-- Start Content Wrapper -->
<div class="content-wrapper">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Data Pegawai</h4>
            <div class="row">
                <div class="col-12">
                    <div class="d-flex table-responsive">
                        <div class="btn-group mr-2">
                            <a href="input-pegawai.php">
                                <button type="button" class="btn btn-sm btn-primary">
                                    <i class="mdi mdi-account-plus"></i>Tambah
                                </button>
                            </a>
                        </div>
                    </div>
                    <div class="table-responsive mt-3">
                        <table id="order-listing" class="table">
                            <thead>
                                <tr class="text-center">
                                    <th>Kode</th>
                                    <th>Nama</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Telepon</th>
                                    <th>Jabatan</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>PG001</td>
                                    <td>Farul</td>
                                    <td>Laki-Laki</td>
                                    <td>089682125741</td>
                                    <td>Pemilik</td>
                                    <td class="text-center">
                                        <a href="data-lanjutan.php">
                                            <button type="button" class="btn btn-social-icon btn-outline-info">
                                                <i class="fa fa-id-card"></i>
                                            </button>
                                        </a>
                                        <a href="update-pegawai.php">
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