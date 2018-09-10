<?php
 session_start(); //memulai session
 $error = '';
 if( isset($_SESSION['error']) ) { //menangani error
      $error = $_SESSION['error'];
      unset($_SESSION['error']);
 } ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="robots" content="all,follow">
    <meta name="googlebot" content="index,follow,snippet,archive">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Obaju e-commerce template">
    <meta name="author" content="Ondrej Svestka | ondrejsvestka.cz">
    <meta name="keywords" content="">
    <title>Obaju</title>
    <meta name="keywords" content="">
    <link href="page/css/font-awesome.css" rel="stylesheet">
    <link href="page/css/bootstrap.min.css" rel="stylesheet">
    <link href="page/css/animate.min.css" rel="stylesheet">
    <link href="page/css/owl.carousel.css" rel="stylesheet">
    <link href="page/css/owl.theme.css" rel="stylesheet">
    <link href="page/css/style.default.css" rel="stylesheet" id="theme-stylesheet">
    <link href="page/css/custom.css" rel="stylesheet">
    <script src="page/js/respond.min.js"></script>
    <link rel="shortcut icon" href="page/favicon.png">
</head>
<body>
     <div id="top">
        <div class="container">
            <div class="col-md-6 offer" data-animate="fadeInDown">
                <a href="#" class="btn btn-success btn-sm" data-animate-hover="shake">Diskon hari ini</a>  <a href="#">Dapatkan diskon 30%</a>
            </div>
            <div class="col-md-6" data-animate="fadeInDown">
                <ul class="menu">
                    <li><a href="#" data-toggle="modal" data-target="#login-modal">Login</a>
                    </li>
                    <li><a href="register.php">Daftar</a>
                    </li>
                    <li><a href="page/contact.php">Hubungi</a>
                    </li>
                    <li><a href="page/Terakhir_dilihat.php">Terakhir dilihat</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true">
            <div class="modal-dialog modal-sm">

                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="Login">Silahkan Login</h4>
                    </div>
                    <div class="modal-body">
                        <form action="check-login.php" method="post" role="form">
                            <div class="form-group">
                                <input type="text" autocomplete="new-password" class="form-control" id="email-modal" name="username" placeholder="Username">
                            </div>
                            <div class="form-group">
                                <input type="password" autocomplete="new-password" class="form-control" id="password-modal" name="password" placeholder="Password">
                            </div>

                            <p class="text-center">
                                <button type="submit" class="btn btn-primary"><i class="fa fa-sign-in"></i>Login</button>
                            </p>
							<?php echo $error;?>
                        </form>

                        <p class="text-center text-muted">Lupa Password ?</p>
                        <p class="text-center text-muted"><a href="register.php"><strong>Daftar Sekarang</strong></a>! sangat mudah cuma 1 menit &nbsp; dan kamu anda bisa menjual produk di sini!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="navbar navbar-default yamm" role="navigation" id="navbar">
        <div class="container">
            <div class="navbar-header">

                <a class="navbar-brand home" href="index.php" data-animate-hover="bounce">
                    <img src="page/img/logo.png" alt="Obaju logo" class="hidden-xs">
                    <img src="page/img/logo-small.png" alt="Obaju logo" class="visible-xs"><span class="sr-only">Obaju - go to homepage</span>
                </a>
                <div class="navbar-buttons">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
                        <span class="sr-only">Toggle navigation</span>
                        <i class="fa fa-align-justify"></i>
                    </button>
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#search">
                        <span class="sr-only">Toggle search</span>
                        <i class="fa fa-search"></i>
                    </button>
                    <a class="btn btn-default navbar-toggle" href="page/basket.php"></a>
                </div>
            </div>
            <div class="navbar-collapse collapse" id="navigation">
                <ul class="nav navbar-nav navbar-left">
                    <li class="active"><a href="index.php">Beranda</a>
                    </li>
                    <li class="dropdown yamm-fw">
                        <a href="kategori/pria.php"  data-hover="dropdown" data-delay="200">Fashion Pria</a>
                    </li>

                    <li class="dropdown yamm-fw">
                        <a href="kategori/wanita.php" data-hover="dropdown" data-delay="200">Fashion Wanita</a>
                    </li>
                    <li class="dropdown yamm-fw">
                        <a href="kategori/anak.php" data-hover="dropdown" data-delay="200">Fashion Anak</a>
                    </li>
                    <li class="dropdown yamm-fw">
                        <a href="kategori/tentang_fashion.php" data-hover="dropdown" data-delay="200">Tentang Fashion</a>
                    </li>
                </ul>
            </div>
            <div class="navbar-buttons">
                <div class="navbar-collapse collapse right" id="basket-overview">
                    <a href="page/basket.php" class="btn btn-primary navbar-btn"><i class="fa fa-shopping-cart"></i><span class="hidden-sm"></span></a>
                </div>
                <div class="navbar-collapse collapse right" id="search-not-mobile">
                    <button type="button" class="btn navbar-btn btn-primary" data-toggle="collapse" data-target="#search">
                        <span class="sr-only">Toggle search</span>
                        <i class="fa fa-search"></i>
                    </button>
                </div>
            </div>
            <div class="collapse clearfix" id="search">
                <form class="navbar-form" role="search">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Cari...">
                        <span class="input-group-btn">
							<button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
						</span>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div id="all">
        <div id="content">
            <div class="container">
                <div class="col-md-12">
                    <ul class="breadcrumb">
                        <li><a href="#">Beranda</a>
                        </li>
                        <li>Daftar</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <div class="box">
                        <h1>Akun Baru</h1>
                        <p class="lead">Belum menjadi pelanggan terdaftar kami?</p>
                        <p>Dengan Mendaftar, Anda bisa menjual produk anda di sini dengan gratis</p>
                        <p class="text-muted">Jika Anda memiliki pertanyaan, silakan<a href="page/contact.html">Hubungi kami</a>, 
                            pusat layanan pelanggan kami bekerja untuk Anda .</p>
                        <hr>
                        <form action="aksi_akun.php" method="post" enctype="multipart/form-data">
						<?php
                                include("admin/koneksi.php");
                                $query = mysqli_query($koneksi, "SELECT max(id_member) as maxKode FROM users");
                                $data = mysqli_fetch_array($query);
                                $kodeBarang = $data['maxKode'];
                                $noUrut = (int) substr($kodeBarang, 3, 3);
                                $noUrut++;
                                $char = "MEM";
                                $id_member = $char . sprintf("%03s", $noUrut);
                            ?>
							<div class="form-group">
                                <label for="name">Id Member</label>
                                <input type="text" class="form-control" readonly id="id_member" name="id_member" value="<?php echo $id_member;?>">
                            </div>
                            <div class="form-group">
                                <label for="name">Nama</label>
                                <input type="text" class="form-control" id="nama" name="nama">
                            </div>
                            <div class="form-group">
                                <label for="name">Email</label>
                                <input type="text" class="form-control" autocomplete="new-password" id="email" name="email">
                            </div>
                            <div class="form-group">
                                <label for="email">Username</label>
                                <input type="text" class="form-control" autocomplete="new-password" id="username" name="username">
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" autocomplete="new-password" class="form-control" id="password" name="password">
                            </div>
                            <div class="form-group">
                                <input type="hidden" class="form-control" id="level" name="level" value="user">
                            </div>
                            <div class="form-group">
                                    <input type="file" id="gambar" name="gambar">
                                </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary"><i class="fa fa-user-md"></i> Daftar</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="box">
                        <h1>Login</h1>
                        <p class="lead">Sudah Terdaftar?</p>
                        <hr>
                        <form action="check-login.php" method="post">
                            <div class="form-group">
                                <label for="email">Username</label>
                                <input type="text" class="form-control" autocomplete="new-password" id="username" name="username">
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" autocomplete="new-password" class="form-control" id="password" name="password">
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary"><i class="fa fa-sign-in"></i> Log in</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
     <div id="footer" data-animate="fadeInUp">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <h4>HALAMAN</h4>
                        <ul>
                            <li><a href="page/text.php">Tentang Kami</a>
                            </li>
                            <li><a href="page/text.php">Kebijakan Privasi</a>
                            </li>
                            <li><a href="page/faq.php">FAQ</a>
                            </li>
                            <li><a href="page/contact.php">Hubungi Kami</a>
                            </li>
                            <li><a href="page/template.php">Tempalate</a>
                            </li>
                        </ul>
                        <hr>
                        <h4>PENGGUNA</h4>
                        <ul>
                            <li><a href="#" data-toggle="modal" data-target="#login-modal">Login</a>
                            </li>
                            <li><a href="page/register.php">Daftar</a>
                            </li>
                        </ul>
                        <hr class="hidden-md hidden-lg hidden-sm">
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <h4>KATEGORI</h4>
                        <h5><a href="kategori/pria.php">Fashion Pria</a></h5>
                        <h5><a href="kategori/wanita.php">Fashion Wanita</a></h5>
                        <h5><a href="kategori/anak.php">Fashion Anak</a></h5>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <h4>ALAMAT KAMI</h4>
                        <p><strong>OFashion.</strong>
                            <br>Jl.mangga no.163
                            <br>Purutrejo
                            <br>Pasuruan
                            <br>
                            <strong>Indonesia</strong>
                        </p>
                        <a href="page/contact.php">Pergi temui kami!</a>
                        <hr class="hidden-md hidden-lg">
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <hr>
                        <h4>Follow kami</h4>
                        <p class="social">
                            <a href="#" class="facebook external" data-animate-hover="shake"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="twitter external" data-animate-hover="shake"><i class="fa fa-twitter"></i></a>
                            <a href="#" class="instagram external" data-animate-hover="shake"><i class="fa fa-instagram"></i></a>
                            <a href="#" class="gplus external" data-animate-hover="shake"><i class="fa fa-google-plus"></i></a>
                            <a href="#" class="email external" data-animate-hover="shake"><i class="fa fa-envelope"></i></a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div id="copyright">
            <div class="container">
                <div class="col-md-6">
                    <p class="pull-left">© 2018 Ramadhan.</p>

                </div>
                <div class="col-md-6">
                    <p class="pull-right">Designer<a href="index.php">&nbsp;&nbsp;Bootstrap</a> & Rams<a href="page/index.php"></a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <script src="page/js/jquery-1.11.0.min.js"></script>
    <script src="page/js/bootstrap.min.js"></script>
    <script src="page/js/jquery.cookie.js"></script>
    <script src="page/js/waypoints.min.js"></script>
    <script src="page/js/modernizr.js"></script>
    <script src="page/js/bootstrap-hover-dropdown.js"></script>
    <script src="page/js/owl.carousel.min.js"></script>
    <script src="page/js/front.js"></script>
</body>
</html>