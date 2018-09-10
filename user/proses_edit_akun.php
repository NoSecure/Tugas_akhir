<?php
session_start(); //memulai session
if( !isset($_SESSION['nama_u']) ) //jika session nama tidak ada
{
 header('location:../'.$_SESSION['akses']); //alihkan halaman
 exit();
}else{ //jika ada session
 $nama = $_SESSION['nama_u']; //menyimpan session nama ke variabel $nama
}
include("koneksi.php");

    //proses ganti password
    if (isset($_POST['simpan'])) {
    $password_lama    = $_POST['password_lama'];
    $password_baru    = $_POST['password_baru'];
    $konfirmasi_password    = $_POST['konfirmasi_password'];
    //cek old password
    $query = "SELECT * FROM users WHERE nama='$nama' AND password='$password_lama'";
    $sql = mysqli_query ($koneksi,$query);
    $hasil = mysqli_num_rows ($sql);
    if (! $hasil > 1) {
        ?>
            <script language="JavaScript">
            alert('Password lama tidak sesuai!, silahkan ulang kembali!');
            document.location='edit_akun.php';
            </script>
        <?php

    }
    //validasi data data kosong
    else if (empty($_POST['password_baru']) || empty($_POST['konfirmasi_password'])) {
            echo "<h3><font color=red>Ganti Password Gagal! Data Tidak Boleh Kosong.</font></h3>";    
    }
    //validasi input konfirm password
    else if (($_POST['password_baru']) != ($_POST['konfirmasi_password'])) {
            echo "<h3><font color=red><center>Ganti Password Gagal! Password dan Konfirm Password Harus Sama.</center></font></h3>";    
    }
    else {
    //update data
    $query = "UPDATE users SET password='$password_baru' WHERE nama='$nama'";
    $sql = mysqli_query ($koneksi,$query);
    //setelah berhasil update
    if ($sql) {
        header('location:index.php');
    } else {
        echo "<h3><font color=red><center>Ganti Password Gagal!</center></font></h3>";    
    }
    }
    }
?>