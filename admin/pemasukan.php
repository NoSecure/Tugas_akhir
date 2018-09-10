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
    <link rel="icon" href="../../favicon.ico" type="image/x-icon">
	<link href="../web/icon/icon2.css" rel="stylesheet" type="text/css">
    <link href="../web/icon/icon.css" rel="stylesheet" type="text/css">
    <link href="../web/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="../web/plugins/node-waves/waves.css" rel="stylesheet" />
    <link href="../web/plugins/animate-css/animate.css" rel="stylesheet" />
    <link href="../web/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">
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
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="body">
                            <div class="table-responsive" style="overflow-x:hidden;">
                                <table class="table table-bordered table-striped table-hover dataTable">
                                    <thead>
                                        <tr>
                                            <th>No</th>
											<th>Id Pesanan</th>
                                            <th>Nama Pemesan</th>
                                            <th>Tanggal</th>
											<th>Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            include("koneksi.php");
                                            $sql = "SELECT * FROM pemesanan";
                                            $qry = mysqli_query($koneksi, $sql);
											$no=1;
                                            while ($data=mysqli_fetch_array($qry)){
											$total=$data['total'];
                                        ?>	
                                        <tr>
                                            <td><?php echo $no++?></td>
											<td><?php echo $data['id_pesanan'];?></td>
                                            <td><?php echo $data['nama_pemesan']; ?></td>
                                            <td><?php echo $data['tanggal']; ?></td>
                                            <td>Rp.<?php echo number_format($total,3,",",","); ?></td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
									<tfoot>
										<tr>
										<?php
											include("koneksi.php");
											$pemilik = $_SESSION['id_member'];
											$mysqli=$koneksi->query("SELECT SUM(total) as total FROM pemesanan");
											while ($m=mysqli_fetch_array($mysqli)){
											$total=$m['total'];
										?>	
										<td colspan="4">Total</td>
										<td>Rp.<?php echo number_format($total,3,",",","); ?></td><?php } ?>
										</tr>
									</tfoot>
                                </table>
                            </div>
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
    <script src="../web/plugins/jquery-datatable/jquery.dataTables.js"></script>
    <script src="../web/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
    <script src="../web/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
    <script src="../web/plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
    <script src="../web/plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
    <script src="../web/plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
    <script src="../web/plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
    <script src="../web/plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
    <script src="../web/plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>
    <script src="../web/js/admin.js"></script>
    <script src="../web/js/pages/tables/jquery-datatable.js"></script>
    <script src="../web/js/demo.js"></script>
</body>
</html>