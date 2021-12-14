<?php
include "../koneksi.php";
?>
<!DOCTYPE html>
<html>
<head>
 <title>Aplikasi Untuk Mengupload File PDF Dengan PHP | belajarwebpedia.com</title>
 <style type="text/css">
 body {
  font-family: verdana;
  font-size: 12px;
 }
 a {
  text-decoration: none;
  color: #3050F3;
 }
 a:hover {
  color: #000F5E;
 } 
</style>
</head>
<body>
<?php
$id    = mysqli_real_escape_string($koneksi,$_GET['id']);
$query = mysqli_query($koneksi,"SELECT * FROM datadiri WHERE id='$id' ");
$data  = mysqli_fetch_array($query);
?>
<h1>Dokumen Calon Mahasiswa</h1>
<hr>
<b>Ijazah</b>  |<a href='index.php?page=detail'> Kembali </a>
<hr>
 <embed src="../mahasiswa/data_gambar/<?php echo $data['ijazah'];?>" type="application/pdf" width="800" height="600" >
<!-- sertifikat -->
<hr>
<b>Sertifikat</b></a>
<hr>
 <embed src="../mahasiswa/data_gambar/<?php echo $data['sertifikat'];?>" type="application/pdf" width="800" height="600" >

 <!-- Raport 1 -->
 <hr>
<b>Raport1</b> </a>
<hr>
 <embed src="../mahasiswa/data_gambar/<?php echo $data['raport1'];?>" type="application/pdf" width="800" height="600" >

 <!-- Raport 2 -->
 <hr>
<b>Raport2</b> </a>
<hr>
 <embed src="../mahasiswa/data_gambar/<?php echo $data['raport2'];?>" type="application/pdf" width="800" height="600" >

 <!-- Raport 3 -->

 <hr>
<b>Raport3</b></a>
<hr>
 <embed src="../mahasiswa/data_gambar/<?php echo $data['raport3'];?>" type="application/pdf" width="800" height="600" >

 <!-- Raport 4 -->
 <hr>
<b>Raport4</b></a>
<hr>
 <embed src="../mahasiswa/data_gambar/<?php echo $data['raport4'];?>" type="application/pdf" width="800" height="600" >

 <!-- Raport 5 -->
 <hr>
<b>Raport5</b> </a>
<hr>
 <embed src="../mahasiswa/data_gambar/<?php echo $data['raport5'];?>" type="application/pdf" width="800" height="600" >

 <!-- Raport 6 -->
 <hr>
<b>Raport6</b> </a>
<hr>
 <embed src="../mahasiswa/data_gambar/<?php echo $data['raport6'];?>" type="application/pdf" width="800" height="600" >
</body>
</html>