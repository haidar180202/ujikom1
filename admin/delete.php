<?php
 include "../koneksi.php";
 $id= $_GET['id'];
 $delete= "DELETE  FROM  datadiri WHERE id= '$id'";
 $dlt= mysqli_query($koneksi,$delete);
 $b= mysqli_fetch_array($dlt);
 
    unlink("../mahasiswa/data_gambar/$b[ijazah]");
    unlink("../mahasiswa/data_gambar/$b[sertifikat]"); 
    unlink("../mahasiswa/data_gambar/$b[raport1]"); 
    unlink("../mahasiswa/data_gambar/$b[raport2]"); 
    unlink("../mahasiswa/data_gambar/$b[raport3]"); 
    unlink("../mahasiswa/data_gambar/$b[raport4]"); 
    unlink("../mahasiswa/data_gambar/$b[raport5]");
    header('location:index.php?page=detail');
     
 
?> 

<?php
include('koneksi.php');
$del=$_GET['del'];
$perintah1=sprintf("delete from namasiswa where id=%d",$del); //query untuk delete
$perintah2="SELECT * FROM namasiswa where id='$del'"; //wuery untuk pilih db dulu
$a=@mysql_query($perintah2,$koneksi); //simpan query ke variabel $a
$b=mysql_fetch_array($a); //selanjutnya pecah data dan simpan ke variabel $b
unlink("gambar/$b[foto]"); //sekarang jalankan perintah unlink untuk hapus gambar dari folder, ambil data dan didepannya ditambahkan paramter tempatt dimana folder gambar tersimpan
$del2=@mysql_query($perintah1,$koneksi); //query untuk mendelete data di database
if($del2){
 echo "Gambar berhsil dihapus<br/>
 <a href='tampil_foto.php'>Kembali</a>";
}else{
 
 echo "Gagal koneksi=".mysql_error();
}
?>