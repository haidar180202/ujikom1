<?php 
include "../koneksi.php";
                                      $status1=$_GET['status1'];
                                      $email1=$_GET['email1'];

                                      $update = "UPDATE pendaftaran set status='$status1' WHERE email='$email1'";
                                      $hasil=mysqli_query($koneksi, $update);
                                      if($hasil) {
                                        header("location:index.php?page=infopendaftar");
                                       }
                                       else {
                                        echo "Maaf gagal edit";
                                       }



                                      
?>