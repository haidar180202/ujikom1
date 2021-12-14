<?php
session_start();
include "koneksi.php";
 $email     = $_POST['email'];
 $password   = $_POST['password'];
 $akses      = $_POST['akses'];
  
 $select = "SELECT * FROM pendaftaran WHERE (email ='$email')";

 $nilai=mysqli_query($koneksi,$select);


    if (mysqli_num_rows($nilai) === 1) 
    {
        // var_dump(mysqli_num_rows($nilai));
        //cek password
        $row = mysqli_fetch_assoc($nilai);
          if($password == $row['password'])
          {
            if ($akses == $row['akses']) 
            {
              if($akses == 'Admin')
                {
                  $_SESSION['email'] = $email;
	                $_SESSION['akses'] = "admin";
                  header("location:admin/index.php");
                }
                
                else
                {
                  $_SESSION['email'] = $email;
	                $_SESSION['akses'] = "mahasiswa";
                  header("location:mahasiswa/index.php");
                }            
            }
            else
            {
              header("location:login.php");
              
              exit;
            }
           
          }
          else
          {
            header("location:login.php");
            exit;
          }
  }
  else
  {
    header("location:login.php");
    exit;
  }
    ?>