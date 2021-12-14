<?php
session_start();
if (!isset($_SESSION['email'])){
  header("Location: login.php");
}
else{

$email = $_SESSION['email'];
include "../koneksi.php";
$select = "SELECT * FROM pendaftaran WHERE email = '$email'";
$query=mysqli_query($koneksi,$select);
$row=mysqli_fetch_assoc($query);

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Blank Page</title>

   <!-- Google Font: Source Sans Pro -->
   <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="dist/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css"> 
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    

    <!-- Right navbar links -->
    
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Akses Admin</span>
    </a>
   
    <!-- Sidebar -->
    <div class="sidebar">
      
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../assets/gambar3.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo $row['nama']; ?></a>
        </div>
      </div>

    

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                
              <li class="nav-item">
                <li class="nav-item">
                  <a href="index.php?page=infopendaftar" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Informasi Pendaftaran</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="index.php?page=infopendaftarditerima" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Informasi Pendaftaran Diterima</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="index.php?page=infopendaftarditolak" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Informasi Pendaftaran Ditolak</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="index.php?page=detail" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Detail Data Calon Mahasiswa</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="index.php?page=informasiuser" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Informasi User</p>
                  </a>
                </li>
               
                <li class="nav-item">
                  <a href="logout.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Log Out</p>
                  </a>
                </li>
                
              </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Admin</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <!-- Jam  -->

  <!-- css -->
<style>
	h1,h2,p,a{
		font-family: sans-serif;
		font-weight: normal;
	}
 
	.jam-digital {
		overflow: hidden;
		width: 330px;
		margin: 20px auto;
		border: 5px solid #efefef;
	}
	.kotak{
		float: left;
		width: 106px;
		height: 100px;
		background-color: #189fff;
	}
	.jam-digital p {
		color: #fff;
		font-size: 36px;
		text-align: center;
		margin-top: 30px;
	}
</style>
  <!-- /css -->
  

  <!-- Tampilan -->
<div class="jam-digital">
	<div class="kotak">
		<p id="jam"></p>
	</div>
	<div class="kotak">
		<p id="menit"></p>
	</div>
	<div class="kotak">
		<p id="detik"></p>
	</div>
</div>
  <!-- /Tampilan -->

  <!-- javascript -->
<script>
	window.setTimeout("waktu()", 1000);
 
	function waktu() {
		var waktu = new Date();
		setTimeout("waktu()", 1000);
		document.getElementById("jam").innerHTML = waktu.getHours();
		document.getElementById("menit").innerHTML = waktu.getMinutes();
		document.getElementById("detik").innerHTML = waktu.getSeconds();
	}
</script>
  <!-- /css -->
<!-- /Jam -->

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
       
                <?php 
            if(isset($_GET['page'])){
              $page = $_GET['page'];
          
              switch ($page) {
                case 'infopendaftar':
                  include "infopendaftar.php";
                  break;	
                case 'infopendaftarditerima':
                    include "infopendaftarditerima.php";
                    break;	
                    case 'infopendaftarditolak':
                      include "infopendaftarditolak.php";
                      break;	
                case 'detail':
                  include "detail.php";
                  break;
                case 'informasiuser':
                  include "informasiuser.php";
                  break;
                
               
                default:
                  echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
                  break;
              }
            }else{
              include "infopendaftar.php";
            }
          
            ?>
        </div>
        <!-- /.card-body -->
     
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.1.0
    </div>
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->


<!-- jQuery -->
<script src="dist/js/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="dist/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>

</body>
</html>
