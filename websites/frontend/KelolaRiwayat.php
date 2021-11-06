<?php include 'templates/headerLink.php' ?>
<?php include 'templates/topbar.php' ?>
<?php include 'templates/sidebar.php' ?>
<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Data Riwayat</h1>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h4>Tabel Riwayat</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-md text-center">
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Barang</th>
                                        <th>Jenis Barang</th>
                                        <th>Jumlah</th>
                                        <th>Status</th>
                                        <th>Time</th>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>Sablon Baju</td>
                                        <td>Sablon</td>
                                        <td>
                                            13
                                        </td>
                                        <td>INSERT</td>
                                        <td>2021-10-21 00:35:58</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Sablon Celana</td>
                                        <td>Sablon</td>
                                        <td>
                                            16
                                        </td>
                                        <td>UPDATE</td>
                                        <td>2021-10-21 00:35:58</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div class="card-footer text-right">
                            <nav class="d-inline-block">
                                <ul class="pagination mb-0">
                                    <li class="page-item disabled">
                                        <a class="page-link" href="#" tabindex="-1"><i class="fas fa-chevron-left"></i></a>
                                    </li>
                                    <li class="page-item active"><a class="page-link" href="#">1 <span class="sr-only">(current)</span></a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">2</a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?php include 'templates/footer.php' ?>
<?php include 'templates/footerLink.php' ?>