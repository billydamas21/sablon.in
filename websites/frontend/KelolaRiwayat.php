 <?php require '../backend/DataTable.php' ?>
 <?php include 'templates/headerLink.php' ?>
 <?php include 'templates/topbar.php' ?>
 <?php include 'templates/sidebar.php' ?>

 <?php


    ?>
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
                                 <table class="table table-striped" id="table-1">
                                     <thead>
                                         <tr>
                                             <th>No</th>
                                             <th>Nama Barang</th>
                                             <th>Jenis Barang</th>
                                             <th>Jumlah</th>
                                             <th>Status</th>
                                             <th>Time</th>
                                         </tr>
                                     </thead>
                                     <tbody>
                                         <?php $i = 1; ?>
                                         <!-- Looping Array -->
                                         <?php foreach ($Riwayat as $row) : ?>
                                             <tr>
                                                 <td><?= $i; ?></td>
                                                 <td><?= $row['Nama_barang']; ?></td>
                                                 <td><?= $row['Jenis_barang']; ?></td>
                                                 <td><?= $row['Jumlah']; ?></td>
                                                 <td><?= $row['Status']; ?></td>
                                                 <td><?= $row['Time']; ?></td>
                                             </tr>
                                             <?php $i++; ?>
                                         <?php endforeach; ?>
                                     </tbody>
                                 </table>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </section>
 </div>
 <?php include 'templates/footer.php' ?>
 <?php include 'templates/footerLink.php' ?>