<?php
session_start(); //memulai session
if( !isset($_SESSION['nama_u']) ) //jika session nama tidak ada
{
 header('location:../'.$_SESSION['akses']); //alihkan halaman
 exit();
}else{ //jika ada session
 $nama = $_SESSION['nama_u']; //menyimpan session nama ke variabel $nama
 $id_member=$_SESSION['id_member'];
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Member</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="../bower_components/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="../bower_components/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="../bower_components/Ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="../bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css">
  <link rel="stylesheet"href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
  <header class="main-header">
    <a href="index.php" class="logo">
      <span class="logo-mini">Obaju</span>
      <span class="logo-lg"><b>Member</b>&nbsp;Obaju</span>
    </a>
    <nav class="navbar navbar-static-top">
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="file/<?php echo $_SESSION['gambar'];?>" class="user-image" alt="User Image">
            </a>
            <ul class="dropdown-menu">
              <li class="user-header">
                <img src="file/<?php echo $_SESSION['gambar'];?>" class="img-circle" alt="User Image">
                <p>
                  <?php echo $nama;?>
                </p>
              </li>
              <li class="user-footer">
                <div class="pull-left">
                  <a href="edit_akun.php" class="btn btn-default btn-flat">Edit Akun</a>
                </div>
                <div class="pull-right">
                  <a href="../logout.php" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <aside class="main-sidebar">
    <section class="sidebar">
      <div class="user-panel">
	   <?php
            include("koneksi.php");
            $sql ="SELECT * FROM users WHERE id_member='$id_member'";
            $qry = mysqli_query($koneksi, $sql);   
            while ($data=mysqli_fetch_array($qry)){
			$_SESSION['gambar']=$data['gambar'];
        ?>
        <div class="pull-left image">
          <img src="file/<?php echo $_SESSION['gambar'];?>" class="img-circle" alt="User Image">
		</div><br><?php }?>
      </div>
		<ul class="sidebar-menu" data-widget="tree">
			<li class="header">MAIN NAVIGATION</li>
			<li><a href="index.php"><i class="fa fa-home"></i> <span>Dasboard</span></a></li>
			<li><a href="daftar_barang.php"><i class="fa fa-shopping-cart"></i> <span>Daftar Barang</span></a></li>
			<li><a href="input_barang.php"><i class="fa fa-plus"></i> <span>Tambah Barang</span></a></li>
			<li><a href="pesanan.php"><i class="fa fa-building-o"></i> <span>Pesanan</span></a></li>
			<li><a href="pemasukan.php"><i class="ion ion-pie-graph"></i> <span>Data Penjualan</span></a></li>
		</ul>
    </section>
  </aside>
  <div class="content-wrapper">
    <section class="content">
      <div class="row">
			<div class="col-md-12">
				<div class="box">
					<div class="box-body">
					<?php 
                        include"koneksi.php";
                        $edit=$koneksi->query("select*from barang where kd_barang='$_GET[kd]'");
                        $e=mysqli_fetch_array($edit);
                    ?>
						<div class="col-md-6">
						<div class="form-group">
							<label>Kode Barang</label>
							<input type="text" name="kd_barang" id="kd_barang" readonly value="<?php echo $e['kd_barang'];?>" class="form-control">
						</div>
 						<div class="form-group">
							<label>Nama Barang</label>
							<input type="text" name="nama_barang" id="nama_barang" readonly value="<?php echo $e['nama_barang'];?>" class="form-control">
						</div>
						<div class="form-group">
							<label>Harga</label>
							<input type="text" name="harga_satuan" id="harga_satuan" readonly value="<?php echo $e['harga_satuan'];?>" class="form-control">
						</div>
						<div class="form-group">
							<label>Stock</label>
							<input type="text" name="stock_barang" id="stock_barang" readonly value="<?php if($e['stock_barang']<1){echo "Habis";} else{echo $e['stock_barang']; } ?>" class="form-control">
						</div>
						<div class="form-group">
							<label>Kategori</label>
							<input type="text" name="kategori" id="kategori" readonly value="<?php echo $e['kategori'];?>" class="form-control">
						</div>
						<div class="form-group">
							<label>Keterangan</label>
							<textarea class="form-control" name="keterangan" readonly id="keterangan" rows="5"><?php echo $e['keterangan'];?></textarea>
						</div>
						<a href="edit_barang.php?kd=<?php echo $e['kd_barang'];?>"><button type="button" name="simpan" class="btn btn-primary">Edit</button></a>
                        <a href="delete_barang.php?kd=<?php echo $e['kd_barang'];?>"><button type="button" class="btn btn-success">Hapus</button></a>
						<a href="daftar_barang.php"><button type="button" class="btn btn-warning">Keluar</button></a>
						</div>
						<div class="col-md-6"><br>
							<img src="file/<?php echo $e['gambar']; ?>" class="img-responsive">
						</div>
					</div>
                </div>
            </div>
          </div>
    </section>
  </div>
</div>
</body>
<script src="../bower_components/jquery/dist/jquery.min.js"></script>
<script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="../bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="../bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script src="..bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<script src="../bower_components/fastclick/lib/fastclick.js"></script>
<script src="../dist/js/adminlte.min.js"></script>
<script src="../dist/js/demo.js"></script>
<script type="text/javascript" src="../jquery.js"></script>
</html>