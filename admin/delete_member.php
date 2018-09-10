<?php
//perintsh untuk koneksi database
include ("koneksi.php");

//perintah untuk mengambil data yang akan dijelaskan sebagai kunci untuk menghapus
$kd = $_GET ['kd'];

$sql ='ALTER TABLE users DROP id';
$sql ='ALTER TABLE users ADD id INT NOT NULL AUTO_INCREMENT PRIMARY KEY FIRST';
$sql = 'delete from users where id="'.$kd.'"';
$query = mysqli_query($koneksi,$sql);

//untuk langsung mengarahkan tampilan ketabel
header ('location: daftar_member.php');
?>