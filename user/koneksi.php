<?php

 $host ="localhost";
 $username ="root";
 $password ="";
 $database   ="db_tokoonline";

 $koneksi = new mysqli($host,$username,$password,$database);  //koneksi Database

 //Check koneksi, berhasil atau tidak
 if(mysqli_connect_errno())
 {
  die( 'Oops!! Koneksi Gagal : '. $koneksi->connect_error );
 }
 ?>