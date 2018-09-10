<?php
 include("admin/koneksi.php");
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
	<script type="text/javascript "src="page/js/jquery.js"></script>
	<script type='text/javascript'>$(document).ready(function() {
		//$("#search_results").slideUp();
		$("#button_find").click(function(event) {
			event.preventDefault();
			//search_ajax_way();
			ajax_search();
		});
		$("#search_query").keyup(function(event) {
			event.preventDefault();
			//search_ajax_way();
			ajax_search();
		});
	});
	function ajax_search() {

		var nama_barang = $("#search_query").val();
		$.ajax({
			url : "cari.php",
			data : "nama_barang=" +nama_barang,
			success : function(data) {
				// jika data sukses diambil dari server, tampilkan di <select id=kota>
				$("#display_results").html(data);
			}
		});

	}</script>
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
                <form action="" class="navbar-form" role="search" autocomplete="off">
                    <div class="input-group">
                        <input type="text" name="search_query" id="search_query" class="form-control" placeholder="Cari...">
                        <span class="input-group-btn">
							<button type="submit" class="btn btn-primary" id="button_find"><i class="fa fa-search"></i></button>
						</span>
					</div><br>
					<div class="input-group" style="width:470px;">
						<div id="display_results" style="position:absolute;z-index:1;text-align:left; width:470px; background: #fff;"></div>
                    </div>
                </form>
				
            </div>
        </div>
    </div>
    <div id="all">
        <div id="content">
            <div class="container">
                <div class="col-md-12">
                    <div id="main-slider">
                        <div class="item">
                            <img src="page/img/getinspired3.jpg" alt="" class="img-responsive">
                        </div>
                        <div class="item">
                            <img class="img-responsive" src="page/img/slider1.jpg" alt="">
                        </div>
                        <div class="item">
                            <img class="img-responsive" src="page/img/slider4.jpg" alt="">
                        </div>
                        <div class="item">
                            <img class="img-responsive" src="page/img/getinspired1.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div id="advantages">
                <div class="container">
                    <div class="same-height-row">
                        <div class="col-sm-4">
                            <div class="box same-height clickable">
                                <div class="icon"><i class="fa fa-heart"></i>
                                </div>

                                <h3><a href="#">Kami mencintai pelanggan kami</a></h3>
                                <p>Kami tahu cara memberikan layanan terbaik yang pernah ada! </p>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="box same-height clickable">
                                <div class="icon"><i class="fa fa-tags"></i>
                                </div>

                                <h3><a href="#">Harga Terbaik</a></h3>
                                <p>Kamu bisa mendapatkan barang dengan harga yang murah dan kualitas terjamin</p>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="box same-height clickable">
                                <div class="icon"><i class="fa fa-thumbs-up"></i>
                                </div>

                                <h3><a href="#">Jaminan kepuasan 100%</a></h3>
                                <p>Pengembalian gratis untuk semaunya dalam 3 bulan</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="hot">
                <div class="box">
                    <div class="container">
                        <div class="col-md-12">
                            <h2>Populer minggu ini</h2>
                        </div>
												<div id="display_results"  ></div>
                    </div>
                </div>
                <div class="container">
                    <div class="product-slider">
                        <?php
                                include("koneksi.php");
                                $sql = "SELECT * FROM barang where kategori='terbaru' AND stock_barang > 0";
                                $qry = mysqli_query($koneksi, $sql);   
                                while ($data=mysqli_fetch_array($qry)){
                                ?>
                        <div class="item">
                            <div class="product">
                                <div class="flip-container">
                                    <div class="flipper">
                                        <div class="front">
                                            <a href="page/detail.php?kd=<?php echo $data['id'];?>">
                                                <img src="admin/file/<?php echo $data['gambar'];?>" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                        <div class="back">
                                            <a href="page/detail.php?kd=<?php echo $data['id'];?>">
                                                <img src="admin/file/<?php echo $data['gambar'];?>" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <a href="page/detail.php" class="invisible">
                                   <img src="admin/file/<?php echo $data['gambar'];?>" alt="" class="img-responsive">
                                </a>
                                <div class="text">
                                    <h3><a href="page/detail.php?kd=<?php echo $data['id'];?>"><?php echo $data['nama_barang']; ?></a></h3>
                                    <p class="price">Rp.<?php echo $data['harga_satuan']; ?></p>
                                </div>
                                <div class="ribbon sale">
                                    <div class="theribbon">SALE</div>
                                    <div class="ribbon-background"></div>
                                </div>
                                <div class="ribbon new">
                                    <div class="theribbon">NEW</div>
                                    <div class="ribbon-background"></div>
                                </div>
                                <div class="ribbon gift">
                                    <div class="theribbon">GIFT</div>
                                    <div class="ribbon-background"></div>
                                </div>
                            </div>
                        </div>
                        <?php
                                }
                        ?>
                    </div>
                </div>
            </div>
            <div class="container" data-animate="fadeInUpBig">
                <div class="col-md-12">
                    <div class="box slideshow">
                        <h3>DAPATKAN INSPIRASI</h3>
                        <p class="lead">Dapatkan inspirasi dari disainer kelas dunia</p>
                        <div id="get-inspired" class="owl-carousel owl-theme">
                            <div class="item">
                                <a href="#">
                                    <img src="page/img/getinspired1.jpg" alt="Get inspired" class="img-responsive">
                                </a>
                            </div>
                            <div class="item">
                                <a href="#">
                                    <img src="page/img/getinspired2.jpg" alt="Get inspired" class="img-responsive">
                                </a>
                            </div>
                            <div class="item">
                                <a href="#">
                                    <img src="page/img/getinspired3.jpg" alt="Get inspired" class="img-responsive">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="box text-center" data-animate="fadeInUp">
                <div class="container">
                    <div class="col-md-12">
                        <h3 class="text-uppercase">DARI BLOG KAMI</h3>

                        <p class="lead">Apa yang baru di dunia fashion saat ini? <a href="page/blog.php">Lihat di Blog kami!</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="col-md-12" data-animate="fadeInUp">
                    <div id="blog-homepage" class="row">
                        <div class="col-sm-6">
                            <div class="post">
                                <h4><a href="page/post.php">Fashion Sekarang</a></h4>
                                <p class="author-category">By <a href="#">Risky</a> in <a href="">Fashion and style</a>
                                </p>
                                <hr>
                                <p class="intro">Udpate gaya kamu dengan trench coat di tahun 2018 nanti. Trench coat juga akan membuat penampilanmu lebih fashionable. Kamu bisa padukan trench coat dengan ripped jeans, scarf heels atau pun platform shoes.</p>
                                <p class="read-more"><a href="page/blog.php" class="btn btn-primary">Lanjut Baca</a>
                                </p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="post">
                                <h4><a href="page/post.php">Sejarah Fashion</a></h4>
                                <p class="author-category">By <a href="#">John Slim</a> in <a href="">About Minimal</a>
                                </p>
                                <hr>
                                <p class="intro">Denim memang salah satu fashion yang gak pernah termakan zaman. Denim yang bakalan trend di tahun 2018 lebih cenderung pada dark denim. Lengkapi koleksi jaket, skirt, atau pun pants kamu dengan warna dark denim.</p>
                                <p class="read-more"><a href="page/blog.php" class="btn btn-primary">Lanjut Baca</a>
                                </p>
                            </div>
                        </div>
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
	<style type="text/css">
 </style>
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