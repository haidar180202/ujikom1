<?php
include "../koneksi.php";
if (isset($_POST['submit'])) {
   
$lokasi_file    = $_FILES['ijazah']['tmp_name'];
$nama_file      = $_FILES['ijazah']['name'];
$lokasi_file1    = $_FILES['sertifikat']['tmp_name'];
$nama_file1      = $_FILES['sertifikat']['name'];
$lokasi_file2    = $_FILES['raport1']['tmp_name'];
$nama_file2      = $_FILES['raport1']['name'];
$lokasi_file3    = $_FILES['raport2']['tmp_name'];
$nama_file3      = $_FILES['raport2']['name'];
$lokasi_file4    = $_FILES['raport3']['tmp_name'];
$nama_file4      = $_FILES['raport3']['name'];
$lokasi_file5    = $_FILES['raport4']['tmp_name'];
$nama_file5      = $_FILES['raport4']['name'];
$lokasi_file6    = $_FILES['raport5']['tmp_name'];
$nama_file6      = $_FILES['raport5']['name'];
$lokasi_file7    = $_FILES['raport6']['tmp_name'];
$nama_file7     = $_FILES['raport6']['name'];

$acak           = rand(1,99);
$nama_file_unik = $acak.$nama_file;
$nama_file_unik1 = $acak.$nama_file1;
$nama_file_unik2 = $acak.$nama_file2;
$nama_file_unik3 = $acak.$nama_file3;
$nama_file_unik4 = $acak.$nama_file4;
$nama_file_unik5 = $acak.$nama_file5;
$nama_file_unik6 = $acak.$nama_file6;
$nama_file_unik7 = $acak.$nama_file7;
$vdir_upload = "data_gambar/";

$vfile_upload  = $vdir_upload . $nama_file_unik;
$vfile_upload1 = $vdir_upload . $nama_file_unik1;
$vfile_upload2 = $vdir_upload . $nama_file_unik2;
$vfile_upload3 = $vdir_upload . $nama_file_unik3;
$vfile_upload4 = $vdir_upload . $nama_file_unik4;
$vfile_upload5 = $vdir_upload . $nama_file_unik5;
$vfile_upload6 = $vdir_upload . $nama_file_unik6;
$vfile_upload7 = $vdir_upload . $nama_file_unik7;

move_uploaded_file($lokasi_file, $vfile_upload);
move_uploaded_file($lokasi_file1, $vfile_upload1);
move_uploaded_file($lokasi_file2, $vfile_upload2);
move_uploaded_file($lokasi_file3, $vfile_upload3);
move_uploaded_file($lokasi_file4, $vfile_upload4);
move_uploaded_file($lokasi_file5, $vfile_upload5);
move_uploaded_file($lokasi_file6, $vfile_upload6);
move_uploaded_file($lokasi_file6, $vfile_upload7);

$email1= $_POST['email'];
$nilai1= $_POST['nilai1'];
$nilai2= $_POST['nilai2'];
$nilai3= $_POST['nilai3'];
$nilai4= $_POST['nilai4'];
$nilai5= $_POST['nilai5'];
$nilai6= $_POST['nilai6'];
$dataku="INSERT INTO datadiri (id,ijazah,sertifikat,raport1,raport2,raport3,raport4,raport5,raport6,email,nilai1,nilai2,nilai3,nilai4,nilai5,nilai6) VALUES ('','$nama_file_unik','$nama_file_unik1','$nama_file_unik2','$nama_file_unik3','$nama_file_unik4','$nama_file_unik5','$nama_file_unik6','$nama_file_unik7','$email1','$nilai1','$nilai2','$nilai3','$nilai4','$nilai5','$nilai6' )";
$q= mysqli_query($koneksi,$dataku);

$x = ($nilai1+$nilai2+$nilai3+$nilai4+$nilai5+$nilai6)/6;
if($x >= 85)
{
    $status= "diterima";
    $updatedata = "UPDATE pendaftaran SET status = '$status' WHERE email='$email1' ";
    $proses = mysqli_query($koneksi,$updatedata);
}
else
{
    $status = "ditolak";
    $updatedata = "UPDATE pendaftaran SET status = '$status' WHERE email='$email1' ";
    $proses = mysqli_query($koneksi,$updatedata);
}
if ($q) {

    header("location:index.php?page=biodata");
    exit;
}
else{
    exit;
}
}

    
?>