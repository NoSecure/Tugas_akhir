<?php

 $host ="localhost";
 $username ="root";
 $password ="root";
 $database   ="db_tokoonline";

 $koneksi = new mysqli($host,$username,$password,$database);  //koneksi Database

 //Check koneksi, berhasil atau tidak
 if(mysqli_connect_error())
 {
  die( 'Oops!! Koneksi Gagal : '. $koneksi->connect_error );
 }
 ?>
