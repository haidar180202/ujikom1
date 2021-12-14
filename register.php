<?php 
include "koneksi.php";
if(isset($_POST['masuk']))
{

  $nik        = $_POST["nik"];
  $nama        = $_POST["nama"];
  $jk          = $_POST["jenis_kelamin"];
  $jurusan     = $_POST["jurusan"];
  $email       = $_POST["email"];
  $password    = $_POST["password"];
  $alamat    = $_POST["alamat"];
  $akses       = "mahasiswa";
  $status = "proses";
  $error = array();
  $uji= "SELECT * from pendaftaran WHERE nik = $nik ";
  $uji2= "SELECT * from pendaftaran WHERE email = $email ";
  if(isset($uji)){
    $error['nik'] = " Nik Sudah Ada";
  }
  if(isset($uji2)){
    $error['email'] = " Email Sudah Ada";
  }
  
  if($nik <= 0)
  {
    $error['nik'] = " Nik tidak boleh kurang dari 0";
  }
  
    if(empty($nama))
    {
      $error['nama'] = " Nama tidak boleh Kosong";
      // var_dump($error);
    }
        if(empty($email))
        {
          $error['email'] = " Email tidak boleh Kosong";
        }
          if(empty($password))
          {
            $error['password'] = " Password tidak boleh Kosong";
          }
            if(empty($alamat))
              {
                $error['alamat'] = " Alamat tidak boleh Kosong";
              }
              if(empty($error))
                {
                  $lokasi_file    = $_FILES['gambar']['tmp_name'];
                  $nama_file      = $_FILES['gambar']['name'];
                  $acak           = rand(1,99);
                  $nama_file_unik = $acak.$nama_file;
                  $vdir_upload = "poto/";
                  $vfile_upload  = $vdir_upload . $nama_file_unik;

                  move_uploaded_file($lokasi_file, $vfile_upload);
                  $insert="INSERT INTO pendaftaran VALUES ('$nik','$nama','$jk','$jurusan','$email','$password','$alamat','$akses','$status','$nama_file_unik')";
                  $regis = mysqli_query($koneksi,$insert);
                  if($regis){
                    header("location:login.php");
                  }
                  
                }
                
  else
  {
    
  }

  
  
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>POLSRI | Politeknik Negeri Sriwijaya</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="css/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="css/adminlte.min.css">
</head>

<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
    <a href="index.php"><b>FORM PENDAFTARAN </b>MAHASISWA BARU</a>
  </div>

  <div class="card">
    <div class="card-body register-card-body">
      <p class="login-box-msg">Register a new membership</p>

      <form action="" method="post" enctype="multipart/form-data" >
        

           
        <!-- nama -->
        <div class="input-group mb-2">
          <input type="number" class="form-control " placeholder="Nik" name="nik" value="<?php echo isset($nik) ? $nik : '';?>" >
          <div class="input-group-append">
            <div class="input-group-text">
             
            </div>
          </div>
        </div>
        <div style="color:red">
          <?php echo isset($error['nik']) ? $error['nik'] : '';?>
        </div>
        <!-- /nama -->
    

        <!-- nama -->
        <div class="input-group mb-2">
          <input type="text" class="form-control" placeholder="Nama" name="nama" value="<?php echo isset($nama) ? $nama : '';?>"   >
          <div class="input-group-append">
            <div class="input-group-text">
              
            </div>
          </div>
        </div>
        <div style="color:red">
        <?php echo isset($error['nama']) ? $error['nama'] : '';?>
        
        </div>
        
        <!-- /nama -->
       

        <!-- jenis kelamin -->
        
        <div class="input-group mb-2">
        <p>Jenis Kelamin:</p>
          <div class="input-group-append">
            <div class="input-group-text">
             
                  <select class="form-select" aria-label="Default select example" name="jenis_kelamin" >
                      <option selected>Laki-Laki</option>
                      <option>Perempuan</option>
                  </select>
            </div>
          </div>
        </div>
         
        <!-- jenis kelamin -->

        <!-- jurusan -->
        <div class="input-group mb-2">
        <p>Jurusan:</p>
          <div class="input-group-append">
            <div class="input-group-text">
             
                  <select class="form-select" aria-label="Default select example" name="jurusan" >
                      <option selected>D3 Teknik Sipil</option>
                      <option>D3 Teknik Mesin</option>
                      <option>D3 Teknik Elektro Prodi Teknik Listrik</option>
                      <option>D3 Teknik Elektro Prodi Teknik Elektronika</option>
                      <option>D3 Teknik Telekomunikasi</option>
                      <option>D3 Teknik Kimia</option>
                      <option>D3 Akuntansi</option>
                      <option>D3 Teknik Mesin</option>
                      <option>D3 Administrasi Bisnis</option>
                      <option>D3 Teknik Komputer</option>
                      <option>D3 Manajemen Informatika</option>
                      <option>D3 Bahasa Inggris</option>
                  </select>
            </div>
          </div>
        </div>
    <!--akhir jurusan -->
  <!-- email -->
    <div class="input-group mb-2">
         <input type="email" class="form-control" placeholder="email" name="email" value="<?php echo isset($email) ? $email : '';?>" >
          <div class="input-group-append">
            <div class="input-group-text">
              
            </div>
          </div>
      </div>
      <div style="color:red">
      <?php echo isset($error['email']) ? $error['email'] : '';?>
        </div>
      
     <!-- email -->
    
    <!-- Password -->
    <div class="input-group mb-2">
         <input type="password" class="form-control" placeholder="password" name="password" value="<?php echo isset($password) ? $password : '';?>">
          <div class="input-group-append">
            <div class="input-group-text">
              
            </div>
          </div>
        </div>
        <div style="color:red">
        <?php echo isset($error['password']) ? $error['password'] : '';?>
        </div>
      
        
    <!-- Password -->

      <!-- alamat -->
      <div class="input-group mb-2">
         <textarea name="alamat" placeholder="alamat" id="" cols="40" rows="2" value="<?php echo isset($alamat) ? $alamat : '';?>"></textarea>
          <div class="input-group-append">
            <div class="input-group-text">
              
            </div>
          </div>
        </div>
        <div style="color:red">
        <?php echo isset($error['alamat']) ? $error['alamat'] : '';?>
        </div>
       
    <!-- alamat -->

      <!-- poto -->
     
         <div class="input-group mb-2">
         <p>Pasfoto :</p>
         <input type="file" class="form-control"  name="gambar" >
          <div class="input-group-append">
            <div class="input-group-text">
              
            </div>
          </div>
        </div>
        
    <!-- poto -->


    

          <!-- /.col -->
          <div class="col-4">
            <input type="submit" class="btn btn-primary btn-block" value="Register" name="masuk">
            
          </div>
          <!-- /.col -->
      
      </form>

    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
  
</div>
<!-- /.register-box -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
</body>
</html>
