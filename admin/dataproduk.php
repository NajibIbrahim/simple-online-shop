       <!-- Begin Page Content -->
       <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Produk - Produk</h1>
        <!-- <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p> -->
        <a href="?halaman=tambahproduk" class="mb-2 btn btn-sm btn-primary shadow-sm"><i class="fas fa-plus fa-sm text-white-50"></i> Tambah Produk</a>
        <!-- <a href="?halaman=export_produk.php" class="mb-2 btn btn-sm btn-success shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Download Data Produk</a> -->
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
                    <th width="180px">Nama Produk</th>
                    <th width="70px">Harga</th>
                    <th width="40px">Stok</th>
                    <th>Spesifikasi</th>
                    <th width="80px">Gambar</th>
                    <th width="90px">Aksi</th>
                  </tr>
                </thead>
                <?php
                // $conn = mysqli_connect("localhost", "root", "", "pondok");
                include 'koneksi.php';
                if ($conn->connect_errno) {
                  echo die("Gagal Masuk Database: ".$conn->connect_error);
                }
                $mysql="SELECT * FROM produk";
                $query= mysqli_query($conn,$mysql);
                $nomor=1;
                while ($data=mysqli_fetch_array($query)) {

                  ?>
                  <!-- <tbody> -->
                    <tr>
                      <td><?php echo $nomor++; ?></td>
                      <td><?php echo $data['nama_p'];?></td>
                      <td><?php echo $data['harga_p'];?></td>
                      <td><?php echo $data['stok_p'];?></td>
                      <td><?= substr($data['spesifikasi_p'], 0,100); ?> ....</td>
                      <td><img width="50% px" src="img/produk/<?php echo $data['gambar_p'];?>"></td>
                      <td>
                        <a href="?halaman=lihatproduk&nama_p=<?php echo $data['nama_p'];?>" class="mb-2 btn btn-sm btn-primary shadow-sm"><i class="fas fa-eye fa-sm text-white-50"></i></a>
<!--                         <a href="?halaman=editproduk&nama_p=<?php echo $data['nama_p'];?>" class="mb-2 btn btn-sm btn-warning shadow-sm"><i class="fas fa-pen fa-sm text-white-50"></i></a> -->
                        <a href="?halaman=hapusproduk&nama_p=<?php echo $data['nama_p'];?>" class="mb-2 btn btn-sm btn-danger shadow-sm"><i class="fas fa-trash-alt fa-sm text-white-50"></i></a>
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