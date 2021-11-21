<?php include 'components/top-link.php'; ?>
<?php include 'components/topbar.php'; ?>
<?php include 'components/sidebar.php'; ?>

<!-- Start Content Wrapper -->
<div class="content-wrapper">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Data Akun</h4>
            <div class="row">
                <div class="col-12">
                    <div class="table-responsive mt-2">
                        <table id="order-listing" class="table">
                            <thead>
                                <tr class="text-center">
                                    <th>Kode</th>
                                    <th>Nama</th>
                                    <th>Username</th>
                                    <th>Password</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>LG001</td>
                                    <td>Farul</td>
                                    <td>admin</td>
                                    <td>admin</td>
                                    <td class="text-center">
                                        <a href="#">
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