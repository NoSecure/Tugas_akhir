<?php
include ("koneksi.php");
$kd = $_GET ['kd'];
$sql ='delete from pemesanan where id="'.$kd.'"';
$query = mysqli_query($koneksi,$sql);
header ('location: pemesanan.php');
?>