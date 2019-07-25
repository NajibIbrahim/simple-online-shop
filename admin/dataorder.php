       <!-- Begin Page Content -->
       <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Data Pemesanan</h1>
        <!-- <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p> -->
        <!-- <a href="?halaman=tambahakun" class="mb-2 btn btn-sm btn-primary shadow-sm"><i class="fas fa-plus fa-sm text-white-50"></i> Tambah Akun</a> -->
        <!-- <a href="#" class="mb-2 btn btn-sm btn-success shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Download Data Akun</a> -->

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
                    <th width="20px">No</th>
                    <th>Email Pemesan</th>
                    <th>Nama Barang</th>
                    <th width="90px">Jumlah Pesan</th>
                    <th width="90px">Keterangan Lain</th>
                    <th width="90px">Aksi</th>
                  </tr>
                </thead>
                <?php
                // $conn = mysqli_connect("localhost", "root", "", "pondok");
                include 'koneksi.php';
                if ($conn->connect_errno) {
                  echo die("Gagal Masuk Database: ".$conn->connect_error);
                }
                $mysql="SELECT * FROM pemesanan";
                $query= mysqli_query($conn,$mysql);
                $nomor=1;
                while ($data=mysqli_fetch_array($query)) {

                  ?>
                  <!-- <tbody> -->
                    <tr>
                      <td><?php echo $nomor++; ?></td>
                      <td><?php echo $data['email'];?></td>
                      <td><?php echo $data['nama_p'];?></td>
                      <td><?php echo $data['jumlah_p'];?></td>
                      <td><?php echo $data['ket'];?></td>
                      <td>
                        <a href="?halaman=lihatorder&email=<?php echo $data['email'];?>" class="mb-2 btn btn-sm btn-primary shadow-sm"><i class="fas fa-eye fa-sm text-white-50"></i></a>
                        <!-- <a href="?halaman=editakun&name=<?php echo $data['name'];?>" class="mb-2 btn btn-sm btn-warning shadow-sm"><i class="fas fa-pen fa-sm text-white-50"></i></a> -->
                        <a href="?halaman=hapusorder&email=<?php echo $data['email'];?>" class="mb-2 btn btn-sm btn-danger shadow-sm"><i class="fas fa-trash-alt fa-sm text-white-50"></i></a>
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