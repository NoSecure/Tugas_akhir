<?php require_once'../admin/koneksi.php';
$nama_barang = strip_tags($_GET['nama_barang']);
if($nama_barang=="")
echo "";
else{
$query = "SELECT * FROM barang where nama_barang like '%$nama_barang%'"; 
$result = $koneksi->query($query) or die($koneksi->error.__LINE__);
if($result->num_rows > 0){
while($rows= $result->fetch_assoc()){
extract($rows);
echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="detail.php?kd='.$id.'" style="text-decoration:none">'.$nama_barang.'<hr></a>';}
} else{
 echo '<div style="position:absolute;z-index:1;text-align:center; width:470px; color:black; background: #fff">Pencarian tidak ditemukan<hr></div>';
}}?>