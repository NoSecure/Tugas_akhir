<?php
include"../admin/koneksi.php";
session_start();
$id_pesanan =$_POST['id_pesanan'];
$nama_pemesan = $_POST['nama_pemesan'];
$pemilik=$_POST['pemilik'];
$kd_barang=$_POST['kd_barang'];
$nama_barang=$_POST['nama_barang'];
$quantity=$_POST['quantity'];
$total=$_POST['total'];
$no_tlpn = $_POST['no_tlpn'];
$alamat = $_POST['alamat'];
$metode_pembayaran = $_POST['metode_pembayaran'];
$tanggal = $_POST['tanggal'];
$koneksi->query("ALTER TABLE pemesanan DROP id");
$koneksi->query("ALTER TABLE pemesanan ADD id INT NOT NULL AUTO_INCREMENT PRIMARY KEY FIRST");
$koneksi->query("INSERT INTO pemesanan(id_pesanan,nama_pemesan,pemilik,kd_barang,nama_barang,quantity,total,alamat,no_tlpn,tanggal,metode_pembayaran) VALUES('$id_pesanan','$nama_pemesan','$pemilik','$kd_barang','$nama_barang','$quantity','$total','$alamat','$no_tlpn','$tanggal','$metode_pembayaran')");
$koneksi->query("update barang set stock_barang=stock_barang-'$quantity' where nama_barang='$nama_barang'");
$_SESSION['nama_pemesan']=$nama_pemesan;
$_SESSION['alamat']=$alamat;
$_SESSION['no_tlpn']=$no_tlpn;
header('location:view-checkout.php');
?>