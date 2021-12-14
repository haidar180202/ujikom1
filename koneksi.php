<!-- koneksi php -->
<?php
$host="localhost";
$username="root";
$password="";
$db="ujikom";

$koneksi=mysqli_connect($host, $username, $password, $db) or die('koneksi gagal');
?>