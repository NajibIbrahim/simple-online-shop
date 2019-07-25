<?php
session_start();
include "koneksi.php";

// var_dump($_SESSION['user']);
// if ($_SESSION['user']['level'] == "Admin") {
//   echo "halo Admin";
// } elseif ($_SESSION['user']['level'] == "User") {
//     echo "halo Member";
// } 
if (!$_SESSION['user']['level'] == "Admin" AND !$_SESSION['user']['level'] == "User") {
  echo "<script>alert('Anda harus Login'); </script>";
  header('location:../login/index.php');
  // exit();
}


?>
<!DOCTYPE html> 
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Admin B-mon Shop</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
  <!-- Custom styles for this page -->
  <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

  <!--Favicon-->
  <link rel="icon" href="img/logo-png.png" type="image/x-icon">
</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
        <div class="sidebar-brand-icon">
          <!-- <div class="sidebar-brand-icon rotate-n-15"> -->
            <!-- <i class="fas fa-laugh-wink"></i> -->
            <i class="fas fa-user-cog"></i>
          </div>
          <div class="sidebar-brand-text mx-3">Admin</div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">
        <?php 
        if ($_SESSION['user']['level'] == "Admin") {
         // echo "halo Admin";
         ?>
         <!-- Nav Item - Dashboard -->
         <li class="nav-item active">
          <a class="nav-link" href="?halaman=homeadmin">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
          </a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
          Informasi
        </div>

        <!-- Nav Item - Charts -->
        <li class="nav-item">
          <a class="nav-link" href="?halaman=dataproduk">
            <i class="fas fa-list fa-chart-area"></i>
            <span>Data Produk</span>
          </a>
        </li>
        <!-- Nav Item - Charts -->
        <li class="nav-item">
          <a class="nav-link" href="?halaman=dataorder">
            <i class="fas fa-list fa-chart-area"></i>
            <span>Pemesanan</span>
          </a>
        </li>
        <!-- Nav Item - Charts -->
        <li class="nav-item">
          <a class="nav-link" href="?halaman=datapesan">
            <i class="far fa-sticky-note"></i>
            <span>Kontak</span>
          </a>
        </li>


        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
          <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

        <?php
      } elseif ($_SESSION['user']['level'] == "User") {
     // echo "halo User";
       ?>
       <!-- Nav Item - Dashboard -->
       <li class="nav-item active">
        <a class="nav-link" href="?halaman=homeuser">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span>
        </a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Informasi
      </div>
      <?php
      include 'koneksi.php';
      if ($conn->connect_errno) {
        echo die("Gagal Masuk Database: ".$conn->connect_error);
      }
      $mysql="SELECT * FROM login";
      $query= mysqli_query($conn,$mysql);
      if ($data=mysqli_fetch_array($query)) {

        ?>
        <!-- Nav Item - Charts -->
        <li class="nav-item">
          <a class="nav-link" href="?halaman=datakeuangan&username=<?php echo $data['username'];?>">
            <i class="fas fa-money fa-chart-area"></i>
            <span>Keuangan</span>
          </a>
        </li>
        <?php

      }
      ?>
      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>
      <?php
    } 
    ?>
    <!-- penutup -->
  </ul>
  <!-- End of Sidebar -->

  <!-- Content Wrapper -->
  <div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">

      <!-- Topbar -->
      <!-- <nav class="navbar navbar-expand navbar-light bg-gray-200 topbar mb-4 static-top shadow"> -->
        <nav class="navbar navbar-expand navbar-light bg-gray-200 topbar mb-4 static-top">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Search -->
<!--             <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
              <div class="input-group">
                <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                <div class="input-group-append">
                  <button class="btn btn-primary" type="button">
                    <i class="fas fa-search fa-sm"></i>
                  </button>
                </div>
              </div>
            </form> -->
            <h1 class="h3 mb-0 text-gray-900">B-mon Shop</h1>


            <!-- Topbar Navbar -->
            <ul class="navbar-nav ml-auto">

              <!-- Nav Item - Search Dropdown (Visible Only XS) -->
              <li class="nav-item dropdown no-arrow d-sm-none">
                <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="fas fa-search fa-fw"></i>
                </a>
                <!-- Dropdown - Messages -->
                <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                  <form class="form-inline mr-auto w-100 navbar-search">
                    <div class="input-group">
                      <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                      <div class="input-group-append">
                        <button class="btn btn-primary" type="button">
                          <i class="fas fa-search fa-sm"></i>
                        </button>
                      </div>
                    </div>
                  </form>
                </div>
              </li>

              <!-- Nav Item - Alerts -->
              <!-- kosong -->
              <!-- Nav Item - Messages -->
              <!-- kosong -->

              <div class="topbar-divider d-none d-sm-block"></div>


              <!-- Nav Item - User Information -->
              <li class="nav-item dropdown no-arrow">
                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <span class="mr-2 d-none d-lg-inline text-gray-600">

                    <?php 
                    if ($_SESSION['user']['level'] == "Admin") {
                      echo $_SESSION['user']['username'];
                    }
                    elseif ($_SESSION['user']['level'] == "User") {
                      echo $_SESSION['user']['username'];
                    }
                // echo "halo Admin";
                    ?>

                  </span>          
                  <i class="fas fa-fw fa-user"></i>
                  <!-- <img class="img-profile rounded-circle" src=""> -->
                </a>
                <!-- Dropdown - User Information -->
                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
<!--                   <a class="dropdown-item" href="#">
                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                    Profile
                  </a>
                  <a class="dropdown-item" href="#">
                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                    Settings
                  </a> -->
<!--                   <a class="dropdown-item" href="#">
                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                    Activity Log
                  </a> -->
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="../index.php" data-toggle="modal" data-target="#logoutModal">
                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                    Logout
                  </a>
                </div>
              </li>

            </ul>

          </nav>
          <!-- End of Topbar -->

          <!-- disini -->
          <?php
          error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));

          switch ($_GET['halaman']) {
            case 'homeadmin':
            include 'homeadmin.php';
            break;

            case 'homeuser':
            include 'homeuser.php';
            break;

            case 'datasantri':
            include 'datasantri.php';
            break;

            case 'dataorder':
            include 'dataorder.php';
            break;

            case 'lihatorder':
            include 'lihatorder.php';
            break;

            case 'hapusorder':
            include 'hapusorder.php';
            break;

            case 'dataproduk':
            include 'dataproduk.php';
            break;

            case 'tambahproduk':
            include 'tambahproduk.php';
            break;

            case 'lihatproduk':
            include 'lihatproduk.php';
            break;

            case 'editproduk':
            include 'editproduk.php';
            break;

            case 'hapusproduk':
            include 'hapusproduk.php';
            break;

            case 'datapesan':
            include 'datapesan.php';
            break;

            case 'lihatpesan':
            include 'lihatpesan.php';
            break;

            case 'hapuspesan':
            include 'hapuspesan.php';
            break;

            case 'export_pdf':
            include 'export_pdf.php';
            break;
            
            default:
            // echo "Selamat Datang";
            include 'home.php';
            break;
          }
          ?>
        </div>
        <!-- End of Main Content -->

        <!-- Footer -->
        <footer class="sticky-footer bg-white">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright &copy; B-mon Shop 2019</span>
            </div>
          </div>
        </footer>
        <!-- End of Footer -->

      </div>
      <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Anda Yakin Ingin Keluar?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Klik "Logout" untuk keluar dari halaman ini.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="../index.php">Logout</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>
    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>
    <script type="text/javascript">

      function readURL(input) {
        if (input.files && input.files[0]) {
          var reader = new FileReader();

          reader.onload = function (e) {
            $('#showgambar').attr('src', e.target.result);
          }

          reader.readAsDataURL(input.files[0]);
        }
      }

      $("#inputgambar").change(function () {
        readURL(this);
      });

    </script>

  </body>

  </html>
