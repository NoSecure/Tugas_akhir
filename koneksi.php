<?php

 $url    = 'http://localhost/Tugas_akhir'; //Sesuaikan dengan url project sobat
 $host ="localhost";
 $username ="root";
 $password ="root";
 $database   ="db_tokoonline";

 $koneksi = new mysqli($host,$username,$password,$database);  //koneksi Database

 //Check koneksi, berhasil atau tidak
 if( $koneksi->connect_error )
 {
  die( 'Oops!! Koneksi Gagal : '. $koneksi->connect_error );
 }

 $url = rtrim($url,'/');
 ?>
