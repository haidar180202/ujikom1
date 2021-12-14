<?php 
include "koneksi.php";
$nik         = $_POST["nik"];
$ijazah      = $_POST["nama"];
$sertifikat  = $_POST["sertifikat"];
$raport1     = $_POST["raport1"];
$raport2     = $_POST["raport2"];
$raport3     = $_POST["raport3"];
$raport4     = $_POST["raport4"];
$raport5     = $_POST["raport5"];
$email       = $_POST["email"];
$alamat       = $_POST["alamat"];

$update =  "UPDATE * pendaftaran,datadiri set nama='$nama', nik='$nik', alamat='$alm', jurusan='$jurusan' , jenis_kelamin='$jk' where nim ='$nim'";
$query = mysqli_query($koneksi,$update);

if($query){
    header("location:index.php?page=tampil");
}
echo"Update Gagal";
?>

<form action="" method="post" enctype="multipart/form-data" >

      <!-- nik -->
      <p>Nik :</p>
        <div class="input-group mb-3">
          <input type="number" class="form-control"  name="nik">
          <div class="input-group-append">
            <div class="input-group-text">
              
            </div>
          </div>
        </div>  
      <!-- /nik -->
        
      <!-- transkrip -->
      <p>Ijazah/Transkrip Nilai :</p>
        <div class="input-group mb-3">
          <input type="file" class="form-control"  name="ijazah" required="required">
          <div class="input-group-append">
            <div class="input-group-text">
              
            </div>
          </div>
        </div>  
      <!-- /Transkrip -->

      <!-- Sertifikat Keahlian -->
      <p>Sertifikat Keahlian :</p>
        <div class="input-group mb-3">
          <input type="file" class="form-control"  name="sertifikat" required="required">
          <div class="input-group-append">
            <div class="input-group-text">
              
            </div>
          </div>
        </div>  
      <!-- /Sertifikat Keahlian -->

      <!-- Nilai Rapot Semester 1 - 5  -->
      <p>Raport Semester 1 - 5 :</p>
        <div class="input-group mb-3">
          <input type="file" class="form-control"  name="raport1" required="required">
          <div class="input-group-append">
            <div class="input-group-text">
              
            </div>
          </div>
          
          <!-- Semester 2 -->
          
            <input type="file" class="form-control"  name="raport2" required="required">
            <div class="input-group-append">
              <div class="input-group-text">
              </div>
            </div>
         
            <!-- /Semester 2 -->

            <!-- Semester 3 -->
          
            <input type="file" class="form-control"  name="raport3" required="required">
            <div class="input-group-append">
              <div class="input-group-text">
              </div>
            </div>
        
        <!-- /Semester 3 -->

        <!-- Semester 4 -->
        
          <input type="file" class="form-control"  name="raport4" required="required">
          <div class="input-group-append">
            <div class="input-group-text">
            </div>
          </div>

        <!-- /Semester 4 -->

        <!-- Semester 5 -->
        
          <input type="file" class="form-control"  name="raport5" required="required">
          <div class="input-group-append">
            <div class="input-group-text">
            </div>
          </div>
        </div>  
        <!-- /Semester 5 -->


      <!-- /Nilai Rapot Semester 1 - 5 -->

      <!-- email -->
    
      <p>Email :</p>
        <div class="input-group mb-3">
         <input type="text" class="form-control" name="email" value="<?=$row['email']?>" readonly>
          <div class="input-group-append">
            <div class="input-group-text">
            </div>
          </div>
        </div>  
    
      <!-- /email -->

      <!-- nik -->
      <p>Alamat :</p>
        <div class="input-group mb-3">
          <textarea class="form-control"  name="alamat"></textarea>
          <div class="input-group-append">
            <div class="input-group-text">
              
            </div>
          </div>
        </div>  
      <!-- /nik -->


        <div class="row">
          <!-- /.col -->
    
            <input type="submit" name="submit" class="btn-primary btn-block">
          
          <!-- /.col -->
        </div>
      </form>