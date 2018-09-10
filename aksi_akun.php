<?php
include"admin/koneksi.php";
$id_member = $_POST['id_member'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];
$level = "user";
$gambar = $_FILES['gambar']['name'];
$koneksi->query("ALTER TABLE users DROP id");
$koneksi->query("ALTER TABLE users ADD id INT NOT NULL AUTO_INCREMENT PRIMARY KEY FIRST");
$koneksi->query("INSERT INTO users(id_member,nama,email,username,password,level,gambar) VALUES('$id_member','$nama','$email','$username','$password','$level','$gambar')");
move_uploaded_file($_FILES['gambar']['tmp_name'],'/admin/file/'.$gambar);
header('location:register.php');
?>