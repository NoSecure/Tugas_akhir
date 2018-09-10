<?php
include ("koneksi.php");
$id = $_GET ['id'];
$sql ="delete from kotak_pesan where id='$id'";
$query = mysqli_query($koneksi,$sql);
header ('location:index.php');
?>