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

<h3>Data Calon Mahasiswa</h3>
<hr>


<hr>
<b>List File Dokumen</b>
<table width="800" border='1' cellpadding="2" cellspacing="1" bgcolor="#000000">
<tr>
<th bgcolor="#ffffff">Nik</th>
<th bgcolor="#ffffff">Nama</th>
<th bgcolor="#ffffff">Email</th>
 <th bgcolor="#ffffff">Dokumen</th>

</tr>
<?php
$selectdata = "SELECT * FROM pendaftaran,datadiri WHERE pendaftaran.email=datadiri.email ";
$query = mysqli_query($koneksi,$selectdata);
while($data=mysqli_fetch_array($query))
{
?>
<tr>
<td bgcolor="#ffffff"><?= $data['nik'];?></td>
 <td bgcolor="#ffffff"><?= $data['nama'];?></td>
 <td bgcolor="#ffffff"><?= $data['email'];?></td>
 <th bgcolor="#ffffff"><a href="view.php?id=<?php echo $data['id'];?>">Lihat File</a></th>

 <th bgcolor="#ffffff"><a href="delete.php?id=<?php echo $data['id'];?>">Delete</a></th>


</tr>
<?php
}
?>
</table>

</body>
</html>