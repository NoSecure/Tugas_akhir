<?php
    include"koneksi.php";
	$kd_barang = $_POST['kd_barang'];
    $kd_barang = $_POST['kd_barang'];
    $nama_barang = $_POST['nama_barang'];
    $stock_barang = $_POST['stock_barang'];
    $harga_satuan = $_POST['harga_satuan'];
    $keterangan = $_POST['keterangan'];
    $kategori = $_POST['kategori'];
    $gambar = $_FILES['gambar']['name'];
  if (empty($gambar)){
      $koneksi->query("UPDATE barang SET 
                        nama_barang    ='$nama_barang',
                        stock_barang ='$stock_barang',
                        harga_satuan ='$harga_satuan',
                        keterangan ='$keterangan',
                        kategori='$kategori'
                        WHERE kd_barang ='$kd_barang'");
  }else{

    $hapus= $koneksi->query("select*from barang where kd_barang='$_POST[kd_barang]'");
    // menghapus gambar yang lama
    $nama_gambar=mysqli_fetch_array($hapus);
    // nama field gambar
    $lokasi=$nama_gambar['gambar'];
    // alamat tempat foto
    $hapus_gambar="file/$lokasi";
    // script untuk menghapus gambar dari folder
    unlink($hapus_gambar);
    move_uploaded_file($_FILES['gambar']['tmp_name'],'file/'.$gambar);
    $koneksi->query("UPDATE barang SET 
                        nama_barang    ='$nama_barang',
                        stock_barang ='$stock_barang',
                        harga_satuan ='$harga_satuan',
                        keterangan ='$keterangan',
                        kategori='$kategori',
                        gambar='$gambar'
                        WHERE kd_barang ='$kd_barang'");
  }
  header('location:daftar_barang.php');
?>