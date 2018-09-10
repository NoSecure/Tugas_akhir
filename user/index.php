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
						<div class="row">
							<div class="col-lg-3 col-xs-6">
								<div class="small-box bg-aqua" style="height:130px;">
									<div class="inner">
										<h3><?php echo $nama;?></h3>
									</div>
									<div class="icon">
										<i class="ion ion-person"></i>
									</div>
									<a href="#" class="small-box-footer"  style="margin-top:33px;">More info <i class="fa fa-arrow-circle-right"></i></a>
								</div>
							</div>
							<div class="col-lg-3 col-xs-6">
								<div class="small-box bg-green" style="height:130px;">
									<?php
										include("koneksi.php");
										$pemilik=$_SESSION['id_member'];
										$koneksi->query("ALTER TABLE barang DROP id");
										$koneksi->query("ALTER TABLE barang ADD id INT NOT NULL AUTO_INCREMENT PRIMARY KEY FIRST");
										$mysqli=$koneksi->query("SELECT COUNT(pemilik) as maksimal FROM barang WHERE pemilik='$pemilik'");  
										while ($data=mysqli_fetch_array($mysqli)){
									?>
									<div class="inner">
										<h3><?php echo $data['maksimal'];?></h3>
										<p>Daftar Barang</p>
									</div><?php }?>
									<div class="icon">
										<i class="ion ion-stats-bars"></i>
									</div>
									<a href="daftar_barang.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
								</div>
							</div>
							<div class="col-lg-3 col-xs-6">
								<div class="small-box bg-yellow" style="height:130px;">
									<?php
										include("koneksi.php");
										$pemilik=$_SESSION['id_member'];
										$koneksi->query("ALTER TABLE pemesanan DROP id");
										$koneksi->query("ALTER TABLE pemesanan ADD id INT NOT NULL AUTO_INCREMENT PRIMARY KEY FIRST");
										$mysqli=$koneksi->query("SELECT COUNT(pemilik) as maksimal FROM pemesanan WHERE pemilik='$pemilik'");  
										while ($data=mysqli_fetch_array($mysqli)){
									?>
									<div class="inner">
										<h3><?php echo $data['maksimal'];?></h3>

										<p>Pesanan</p>
									</div><?php }?>
									<div class="icon">
										<i class="fa fa-shopping-cart"></i>
									</div>
									<a href="pesanan.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
								</div>
							</div>
							<div class="col-lg-3 col-xs-6">
								<div class="small-box bg-red" style="height:130px;">
									<?php
										include("koneksi.php");
										$pemilik = $_SESSION['id_member'];
										$mysqli=$koneksi->query("SELECT SUM(total) as total FROM pemesanan  where pemilik='$pemilik'");
										while ($m=mysqli_fetch_array($mysqli)){
										$total=$m['total'];
									?>
									<div class="inner" style="height:102px;">
										<h3 style="font-size:26px;">Rp.<?php echo number_format($total,3,",",","); ?></h3>

										<p style="margin-top:20px;">Pemasukan</p>
									</div><?php }?>
									<div class="icon">
										<i class="ion ion-pie-graph"></i>
									</div>
									<a href="pemasukan.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
								</div>
							</div>
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