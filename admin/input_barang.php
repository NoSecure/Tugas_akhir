<?php
session_start(); //memulai session
if( !isset($_SESSION['saya_admin']) ) //jika session login bukan manager
{
 header('location:../'.$_SESSION['akses']); //alihkan berdasarkan hak akses
 exit();
}
$nama = ( isset($_SESSION['nama_u']) ) ? $_SESSION['nama_u'] : '';
$id_member = ( isset($_SESSION['id_member']) ) ? $_SESSION['id_member'] : '';
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Admin</title>
    <link rel="icon" href="../web/favicon.ico" type="image/x-icon">
	<link href="../web/icon/icon2.css" rel="stylesheet" type="text/css">
    <link href="../web/icon/icon.css" rel="stylesheet" type="text/css">
    <link href="../web/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="../web/plugins/node-waves/waves.css" rel="stylesheet" />
	<link href="../web/plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />
    <link href="../web/plugins/animate-css/animate.css" rel="stylesheet" />
    <link href="../web/plugins/sweetalert/sweetalert.css" rel="stylesheet" />
    <link href="../web/css/style.css" rel="stylesheet">
    <link href="../web/css/themes/all-themes.css" rel="stylesheet" />
</head>

<body class="theme-red">
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Please wait...</p>
        </div>
    </div>
    <div class="overlay"></div>
    <div class="search-bar">
        <div class="search-icon">
            <i class="material-icons">search</i>
        </div>
        <input type="text" placeholder="START TYPING...">
        <div class="close-search">
            <i class="material-icons">close</i>
        </div>
    </div>
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="index.html">ADMIN</a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="javascript:void(0);" class="js-search" data-close="true"><i class="material-icons">search</i></a></li>
                </ul>
            </div>
        </div>
    </nav>
    <section>
        <aside id="leftsidebar" class="sidebar">
            <div class="user-info">
                <?php
                    include("koneksi.php");
                    $sql ="SELECT * FROM users WHERE id_member='$id_member'";
                    $qry = mysqli_query($koneksi, $sql);   
                    while ($data=mysqli_fetch_array($qry)){
                    ?>
                <div class="image">
                    <img src="file/<?php echo $data['gambar']; ?>" width="48" height="48" alt="User" />
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $data['nama'];?></div>
                    <div class="email"><?php echo $data['email']; ?></div>
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="javascript:void(0);" data-toggle="modal" data-target="#defaultModal"><i class="material-icons">person</i>Setting akun</a></li>
                            <li><a href="../logout.php"><i class="material-icons">input</i>Keluar</a></li>
                        </ul>
                    </div>
                </div>
                <?php } ?>
            </div>
            <div class="menu">
                <ul class="list">
                    <li class="active">
                        <a href="index.php">
                            <i class="material-icons">home</i>
                            <span>Beranda</span>
                        </a>
                    </li>
                    <li>
                        <a href="daftar_barang.php">
                            <i class="material-icons">assignment</i>
                            <span>Daftar Barang</span>
                        </a>
                    </li>
                    <li>
                        <a href="pemesanan.php">
                            <i class="material-icons">assignment_turned_in</i>
                            <span>Pesanan</span>
                        </a>
                    </li>
					<li>
                        <a href="daftar_member.php">
                            <i class="material-icons">account_box</i>
                            <span>Daftar Member</span>
                        </a>
                    </li>
					<li>
                        <a href="input_barang.php">
                            <i class="material-icons">add_shopping_cart</i>
                            <span>Tambah Barang</span>
                        </a>
                    </li>
					<li>
                        <a href="pemasukan.php">
                            <i class="material-icons">content_paste</i>
                            <span>Pemasukan</span>
                        </a>
                    </li>
					<li>
                        <a href="#" data-toggle="modal" data-target="#tambahakun">
                            <i class="material-icons">person_add</i>
                            <span>Tambah Admin</span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="legal">
				<div class="version">
                    <b>Rekayasa Perangkat Lunak</b>
                </div>
                <div class="copyright">
                    &copy; 2017 - 2018 <a href="javascript:void(0);"></a>.
                </div>
            </div>
        </aside>
    </section>
    <section class="content">
        <div class="container-fluid">
			<div class="block-header">
                <h2>
                    Input Produk
                </h2>
            </div>
            <div class="row clearfix">
                <div class="col-md-12">
                    <div class="card col-md-12">
                        <div class="body">
                            <form action="aksi.php" method="post" enctype="multipart/form-data">
								<?php
                                include("../koneksi.php");
                                $query = mysqli_query($koneksi, "SELECT max(kd_barang) as maxKode FROM barang");
                                $data = mysqli_fetch_array($query);
                                $kodeBarang = $data['maxKode'];
                                $noUrut = (int) substr($kodeBarang, 3, 3);
                                $noUrut++;
                                $char = "BAR";
                                $id_barang = $char . sprintf("%03s", $noUrut);
								?>
								<div class="col-md-6">
									<div class="form-group">
                                        <div class="">
                                            <input type="hidden">
                                        </div>
                                    </div>
                                    <label for="kd_barang">Kode Barang</label>
									<div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="kd_barang" readonly value="<?php echo $id_barang ?>" class="form-control">
                                        </div>
                                    </div>
									<label for="nama_barang">Nama Barang</label>
									<div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="nama_barang" class="form-control">
                                        </div>
                                    </div>
									<label for="tolol">Harga</label>
									<div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="harga_satuan" id="" class="form-control" placeholder="Ex:200.000.00">
                                        </div>
                                    </div>
									<label for="tolol">Stock</label>
									<div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="stock_barang" class="form-control" placeholder="Ex:12">
                                        </div>
                                    </div>
                                    <p>
                                        <b>Kategori</b>
                                    </p>
                                    <select name="kategori" class="form-control show-tick">
                                        <option value="pria">Pria</option>
                                        <option value="wanita">Wanita</option>
                                        <option value="anak">Anak</option>
                                        <option value="terbaru">Terbaru</option>
                                    </select><br><br>
									<label for="keterangan">Keterangan</label>
									<div class="form-group">
                                        <div class="form-line">
                                            <textarea cols="30" rows="5" name="keterangan" class="form-control no-resize"></textarea>
                                        </div>
                                    </div>
									 <div class="form-group">
                                    <input type="file" name="gambar">
									</div>

									<br>
									<button type="submit" name="simpan" class="btn btn-primary m-t-15 waves-effect">Simpan</button>
									<button type="reset" class="btn btn-success m-t-15 waves-effect">Reset</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="modal fade" id="defaultModal" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
				<form action="proses_edit_akun.php" method="post" enctype="multipart/form-data">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="defaultModalLabel">Ganti akun</h4>
                        </div>
                        <div class="modal-body">
                            
								<div class="col-md-12">
									<label for="nama_barang">Username</label>
									<div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="username" value="<?php echo $nama;?>" class="form-control">
                                        </div>
                                    </div>
									<label for="tolol">Password lama</label>
									<div class="form-group">
                                        <div class="form-line">
                                            <input type="password" name="password_lama" autocomplete="new-password" id="password_lama" class="form-control" value="">
                                        </div>
                                    </div>
									<label for="tolol">Password Baru</label>
									<div class="form-group">
                                        <div class="form-line">
                                            <input type="password" name="password_baru" autocomplete="new-password" id="password_baru" class="form-control" value="">
                                        </div>
                                    </div>
									<label for="tolol">Password Verify</label>
									<div class="form-group">
                                        <div class="form-line">
                                            <input type="password" name="konfirmasi_password" autocomplete="new-password" id="konfirmasi_password" class="form-control" value="">
                                        </div>
                                    </div>
                                </div>  
                        </div>
                        <div class="modal-footer">
                            <button type="submit" name="simpan" id="simpan" class="btn btn-link waves-effect">SIMPAN</button>
                            <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">KELUAR</button>
						</div>
                    </div>
					</form>
                </div>
            </div>
			
			
			<div class="modal fade" id="tambahakun" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="defaultModalLabel">Tambah akun</h4>
                        </div>
                        <div class="modal-body">
                            
						<form action="aksi_akun.php" method="post" id="form1" enctype="multipart/form-data">
							<?php
                                include("../koneksi.php");
                                $query = mysqli_query($koneksi, "SELECT max(id_member) as maxKode FROM users");
                                $data = mysqli_fetch_array($query);
                                $kodeBarang = $data['maxKode'];
                                $noUrut = (int) substr($kodeBarang, 3, 3);
                                $noUrut++;
                                $char = "ADM";
                                $id_member = $char . sprintf("%03s", $noUrut);
                            ?>
                            <div class="col-md-12">
								<div class="form-group">
                                    <label for="nama">Id Anda</label>
                                    <input type="text" class="form-control" id="id_member" readonly name="id_member" value="<?php echo $id_member;?>">
                                </div>
                                <div class="form-group">
                                    <label for="nama">Nama</label>
                                    <input type="text" class="form-control" id="nama" placeholder="Masukan Nama " name="nama" value="">
                                </div>
                                 <div class="form-group">
                                    <label for="nama">Email</label>
                                    <input type="text" class="form-control" id="email" placeholder="Masukan email" name="email" value="">
                                </div>
                                <div class="form-group">
                                    <label for="nama">Username</label>
                                    <input type="text" class="form-control"autocomplete="nope" id="username" placeholder="Masukan username" name="username" value="">
                                </div>
							     <div class="form-group">
                                    <label for="nama">Password</label>
                                    <input type="password" class="form-control" id="password" autocomplete="new-password" placeholder="Masukan password" name="password" value="">
                                </div>
                                 <div class="form-group">
                                    <input type="file" name="gambar">
                                </div>
                            </div>
                        </form>	
                        </div>
                        <div class="modal-footer">
                            <button type="submit" name="simpan" id="simpan" class="btn btn-link waves-effect">SIMPAN</button>
                            <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">KELUAR</button>
						</div>
                    </div>
                </div>
            </div>
    </section>
    <script src="../web/plugins/jquery/jquery.min.js"></script>
    <script src="../web/plugins/bootstrap/js/bootstrap.js"></script>
    <script src="../web/plugins/bootstrap-select/js/bootstrap-select.js"></script>
    <script src="../web/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>
    <script src="../web/plugins/node-waves/waves.js"></script>
    <script src="../web/js/admin.js"></script>
    <script src="../web/js/demo.js"></script>
</body>

</html>