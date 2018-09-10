<?php
include"koneksi.php";
$kd_barang = $_POST['kd_barang'];
$nama_barang = $_POST['nama_barang'];
$pemilik="Obaju";
$stock_barang = $_POST['stock_barang'];
$harga_satuan = $_POST['harga_satuan'];
$keterangan = $_POST['keterangan'];
$kategori = $_POST['kategori'];
$gambar = $_FILES['gambar']['name'];
$koneksi->query("ALTER TABLE barang DROP id");
$koneksi->query("ALTER TABLE barang ADD id INT NOT NULL AUTO_INCREMENT PRIMARY KEY FIRST");
$koneksi->query("INSERT INTO barang(kd_barang,nama_barang,pemilik,stock_barang,harga_satuan,keterangan,kategori,gambar) VALUES('$kd_barang','$nama_barang','$pemilik','$stock_barang','$harga_satuan','$keterangan','$kategori','$gambar')");
move_uploaded_file($_FILES['gambar']['tmp_name'],'file/'.$gambar);
header('location:daftar_barang.php');
?>