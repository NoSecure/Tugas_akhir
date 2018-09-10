<?php
include"../admin/koneksi.php";
$nama= $_POST['nama'];
$email = $_POST['email'];
$tanggal = $_POST['tanggal'];
$subjek =$_POST['subjek'];
$isi =$_POST['isi'];
$koneksi->query("ALTER TABLE kotak_pesan DROP id");
$koneksi->query("ALTER TABLE kotak_pesan ADD id INT NOT NULL AUTO_INCREMENT PRIMARY KEY FIRST");
$koneksi->query("INSERT INTO kotak_pesan(nama,email,tanggal,subjek,isi) VALUES('$nama','$email','$tanggal','$subjek','$isi')");
header('location:../index.php');
?>