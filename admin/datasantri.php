       <!-- Begin Page Content -->
       <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Data Santri</h1>
        <!-- <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p> -->
        <a href="?halaman=tambahsantri" class="mb-2 btn btn-sm btn-primary shadow-sm"><i class="fas fa-plus fa-sm text-white-50"></i> Tambah Data Santri</a>
        <a href="export_santri.php" class="mb-2 btn btn-sm btn-success shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Download Data Santri</a>
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
<!--           <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
          </div> -->
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th width="10px">No</th>
                    <th>Nama</th>
                    <th>ID Santri</th>
                    <th width="100px">Jenis Kelamin</th>
                    <th width="100px">Tahun Masuk</th>
                    <th width="50px">Status</th>
                    <th width="60px">Tagihan</th>
                    <th width="85px">Aksi</th>
                  </tr>
                </thead>
                <?php
                // $conn = mysqli_connect("localhost", "root", "", "pondok");
                include "koneksi.php";
                if ($conn->connect_errno) {
                  echo die("Gagal Masuk Database: ".$conn->connect_error);
                }
                $mysql="SELECT * FROM santri";
                $query= mysqli_query($conn,$mysql);
                $nomor=1;
                while ($data=mysqli_fetch_array($query)) {

                  ?>
                  <!-- <tbody> -->
                    <tr>
                      <td><?php echo $nomor++; ?></td>
                      <td><?php echo $data['nama_san'];?></td>
                      <td><?php echo $data['id_san'];?></td>
                      <td><?php echo $data['jkel_san'];?></td>
                      <td><?php echo $data['tahun_san'];?></td>
                      <td><?php echo $data['status_san'];?></td>
                      <td><?php echo $data['tagihan_san'];?> Bulan</td>
                      <td>
                        <a href="?halaman=lihatsantri&id_san=<?php echo $data['id_san'];?>" class="mb-2 btn btn-sm btn-primary shadow-sm"><i class="fas fa-eye fa-sm text-white-50"></i></a>
                        <a href="?halaman=editsantri&id_san=<?php echo $data['id_san'];?>" class="mb-2 btn btn-sm btn-warning shadow-sm"><i class="fas fa-pen fa-sm text-white-50"></i></a>
                        <a href="?halaman=hapussantri&id_san=<?php echo $data['id_san'];?>" class="mb-2 btn btn-sm btn-danger shadow-sm"><i class="fas fa-trash-alt fa-sm text-white-50"></i></a>
                      </td>
                    </tr>
                    <?php

                  }
                  ?>
                  <!-- </tbody> -->
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->