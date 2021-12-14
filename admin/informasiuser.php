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

       
