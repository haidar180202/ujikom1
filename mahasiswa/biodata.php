

  <?php

  $data = "SELECT * from pendaftaran WHERE email='$email'";
  $query= mysqli_query($koneksi,$data);
  $x=mysqli_fetch_assoc($query);
  
  ?>
  <?php
ob_start();
if (isset($_POST['submit'])) {
 
$namaku= $_POST['nama'];
$emailku= $_POST['email'];
$update= "UPDATE pendaftaran SET nama= '$namaku' WHERE email = '$emailku'";
$querydata = mysqli_query($koneksi,$update);
if($querydata){
  
}
else{

}
}
else{

}
?>

      <img src="../poto/<?= $row['gambar'] ?>" class= alt="1" width="300" height="300">
     
     <form action="" method="post">
     <p>Nik</p>
        <div class="input-group mb-3">
          <input type="text" class="form-control" value="<?=$row['nik']?>" disabled>
          <div class="input-group-append">
            <div class="input-group-text">
              
            </div>
          </div>
        </div>
  
        <p>nama :</p>
        <div class="input-group mb-3">
          <input type="text" class="form-control" name="nama"  value="<?=$row['nama']?>" >
          <div class="input-group-append">
            <div class="input-group-text">
              
            </div>
          </div>
        </div>

        <p>email :</p>
        <div class="input-group mb-3">
          <input type="text" class="form-control" value="<?=$row['email']?>" name="email" >
          <div class="input-group-append">
            <div class="input-group-text">
              
            </div>
          </div>
        </div>

        <p>Akses</p>
        <div class="input-group mb-3">
          <input type="text" class="form-control" value="<?=$row['akses']?>" disabled>
          <div class="input-group-append">
            <div class="input-group-text">
              
            </div>
          </div>
        </div>
        <input type="submit" name="submit" value="submit">
      </form>

     
      <!-- Nilai Rapot Semester 1 - 5  -->
      
      <p>Dokument :</p>
      
      <?php 
      
      $selectdata = "SELECT * FROM pendaftaran,datadiri WHERE pendaftaran.email=datadiri.email AND pendaftaran.email='$email' AND datadiri.email='$email'  ";
      $querydata = mysqli_query($koneksi,$selectdata);
      $num = mysqli_num_rows($querydata);
    
      
      if($num){
        echo"<b>Dokument Telah Terupload</b>";
      }
      else{

      ?>
      

      <form action="uploaddokumen.php" method="post" enctype="multipart/form-data" >
      
      <input type="hidden" class="form-control"  name="email" value="<?=$x['email']?>">
      <!-- Transkrip -->
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
      <p>Raport Semester 1 :</p>
      <!-- Nilai Rapot Semester 1 - 5  -->
        <div class="input-group mb-3">
          <input type="file" class="form-control"  name="raport1" required="required">
          <div class="input-group-append">
            <div class="input-group-text">
              
            </div>
          </div>
      </div>
            
      <p>Raport Semester 2 :</p>
          <!-- Semester 2 -->
          <div class="input-group mb-3">
            <input type="file" class="form-control"  name="raport2" required="required">
            <div class="input-group-append">
              <div class="input-group-text">
              </div>
            </div>
        </div>
         
            <!-- /Semester 2 -->
      <p>Raport Semester 3 :</p>
            <!-- Semester 3 -->
            <div class="input-group mb-3">
            <input type="file" class="form-control"  name="raport3" required="required">
            <div class="input-group-append">
              <div class="input-group-text">
              </div>
            </div>
      </div>
        
        <!-- /Semester 3 -->
        <p>Raport Semester 4 :</p>
        <!-- Semester 4 -->
        <div class="input-group mb-3">
          <input type="file" class="form-control"  name="raport4" required="required">
          <div class="input-group-append">
            <div class="input-group-text">
            </div>
          </div>
      </div>

        <!-- /Semester 4 -->
        <p>Raport Semester 5 :</p>
        <!-- Semester 5 -->
        <div class="input-group mb-3">
          <input type="file" class="form-control"  name="raport5" required="required">
          <div class="input-group-append">
            <div class="input-group-text">
            </div>
          </div>
        </div>  
        <!-- /Semester 5 -->
        <p>Raport Semester 6 :</p>
         <!-- Semester 6 -->
         <div class="input-group mb-3">
          <input type="file" class="form-control"  name="raport6" required="required">
          <div class="input-group-append">
            <div class="input-group-text">
            </div>
          </div>
        </div>  
        <!-- /Semester 6 -->

        <p>Nilai Raport Semester 1-6</p>
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Semester 1"  name="nilai1" required="required">
          <input type="text" class="form-control" placeholder="Semester 2"  name="nilai2" required="required">
          <input type="text" class="form-control" placeholder="Semester 3"  name="nilai3" required="required">
          <input type="text" class="form-control" placeholder="Semester 4"  name="nilai4" required="required">
          <input type="text" class="form-control" placeholder="Semester 5"  name="nilai5" required="required">
          <input type="text" class="form-control" placeholder="Semester 6"  name="nilai6" required="required">
          <div class="input-group-append">
            <div class="input-group-text">
            </div>
          </div>
        </div>  
        

        <div class="row">
          <!-- /.col -->
    
            <input type="submit" name="submit" class="btn-primary btn-block">
          
          <!-- /.col -->
        </div>
      </form>
      <?php 
      }
      ?>

    