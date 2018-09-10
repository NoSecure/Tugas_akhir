<?php
session_start(); //memulai session

//check apakah ada akses post dari halaman login?, jika tidak kembali kehalaman depan
if( !isset($_POST['username']) ) { header('location:index.php'); }
$error = ''; //set nilai default dari error,

require ( 'koneksi.php' );
$username = trim( $_POST['username'] );
$password = trim( $_POST['password'] );

if( strlen($username) < 2 )
{
 //validasi username tidak bpleh kosong
   $error = '<div class="alert alert-danger" role="alert">Username dan Password Tidak boleh kosong </div>';
}else if( strlen($password) < 2 )
{
 //validasi password tidak boleh kosong
 $error = 'Password Tidak boleh kosong';
}else{
 //mengubah semua karakter ke bentuk string
 $username = $koneksi->escape_string($username);
 $password = $koneksi->escape_string($password);

 //SQL command untuk memilih data berdasarkan parameter $username dan $password yang diinputkan
 $sql = "SELECT id_member,nama,level FROM users
   WHERE BINARY username='$username'
   AND password='$password' LIMIT 1";

 //melakukan perintah
 $query = $koneksi->query($sql);

 //check query
 if( !$query )
 {
  die( 'Oops!! Sepertinya ada kesalahan database '. $koneksi->error );
 }

 //check hasil perintah
 if( $query->num_rows == 1 )
 {
  //jika data yang dimaksud ada maka akan ditampilkan
  $row =$query->fetch_assoc();

  //data nama disimpan di session browser
  $_SESSION['nama_u'] = $row['nama'];
  $_SESSION['id_member']=$row['id_member'];
  $_SESSION['akses']    = $row['level'];

  if( $row['level'] === 'admin')
  {
   //data hak Admin di set
   $_SESSION['saya_admin']= 'TRUE';
  }

  //menuju halaman sesuai hak akses
  header('location:'.$url.'/'.$_SESSION['akses'].'/');
  exit();

 }else{

  //jika data yang dimaksud tidak ada
  $error = '<div class="alert alert-danger" role="alert">Username dan Password Tidak ditemukan </div>';
 }

}

if( !empty($error) )
{
 //simpan error pada session
 $_SESSION['error'] = $error;
 header('location:index.php');
 exit();
}
?>
