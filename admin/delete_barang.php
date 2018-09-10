<?php
include ("koneksi.php");
$kd = $_GET ['kd'];
$sql ='delete from barang where id="'.$kd.'"';
$query = mysqli_query($koneksi,$sql);
header ('location: daftar_barang.php');
?>