<?php include("../koneksi.php");
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
    <link href="css/font-awesome.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/owl.theme.css" rel="stylesheet">
    <link href="css/style.default.css" rel="stylesheet" id="theme-stylesheet">
    <link href="css/custom.css" rel="stylesheet">
    <script src="js/respond.min.js"></script>
    <link rel="shortcut icon" href="favicon.png">
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
                    <li><a href="../register.php">Daftar</a>
                    </li>
                    <li><a href="contact.php">Hubungi</a>
                    </li>
                    <li><a href="Terakhir_dilihat.php">Terakhir dilihat</a>
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
                        <form action="../check-login.php" method="post" role="form">
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

                <a class="navbar-brand home" href="../index.php" data-animate-hover="bounce">
                    <img src="img/logo.png" alt="Obaju" class="hidden-xs">
                    <img src="img/logo-small.png" alt="Obaju logo" class="visible-xs"><span class="sr-only">Obaju - go to homepage</span>
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
                    <a class="btn btn-default navbar-toggle" href="basket.php"></a>
                </div>
            </div>
            <div class="navbar-collapse collapse" id="navigation">
               <ul class="nav navbar-nav navbar-left">
                    <li class="active"><a href="page/index.php">Beranda</a>
                    </li>
                    <li class="dropdown yamm-fw">
                        <a href="../kategori/pria.php" data-hover="dropdown" data-delay="200">Fashion Pria</a>
                    </li>
                    <li class="dropdown yamm-fw">
                        <a href="../kategori/wanita.php" data-hover="dropdown" data-delay="200">Fashion Wanita</a>
                    </li>
                    <li class="dropdown yamm-fw">
                        <a href="../kategori/anak.php" data-hover="dropdown" data-delay="200">Fashion Anak</a>
                    </li>
                    <li class="dropdown yamm-fw">
                        <a href="../kategori/tentang_fashion.php" data-hover="dropdown" data-delay="200">Tentang Fashion</a>
                    </li>
                </ul>
            </div>
            <div class="navbar-buttons">
                <div class="navbar-collapse collapse right" id="basket-overview">
                    <a href="basket.php" class="btn btn-primary navbar-btn"><i class="fa fa-shopping-cart"></i><span class="hidden-sm"></span></a>
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
                <div class="col-sm-12">
                    <ul class="breadcrumb">
                        <li><a href="../index.php">Home</a>
                        </li>
                        <li>Blog listing</li>
                    </ul>
                </div>
                <div class="col-sm-12" id="blog-listing">
                    <div class="box">
                        <h1>Fashion Sekarang</h1>
                        <p>Sadar gak kalau trend fashion selalu berputar mengikuti perkembangan zaman. Trend beberapa tahun lalu bisa saja menjadi trend tahun depan. Lalu apa aja sih fashion yang bakalan menjadi trend di tahun 2018?</p>
                    </div>
                    <div class="post">
                        <h2><a href="post.php">1. Pastel Color</a></h2>
                        <p class="author-category">By <a href="#">John Slim</a> in <a href="">Fashion and style</a>
                        </p>
                        <hr>
                        <p class="date-comments">
                            <a href="post.php"><i class="fa fa-calendar-o"></i> June 20, 2013</a>
                            <a href="post.php"><i class="fa fa-comment-o"></i> 8 Comments</a>
                        </p>
                        <div class="image">
                            <a href="post.php">
                                <img src="img/blog2.jpg" class="img-responsive" alt="Example blog post alt">
                            </a>
                        </div>
                        <p class="intro">Pakaian dengan warna pastel kembali memecah tahun 2018. Pastel bisa membuat penampilan seseorang terlihat manis dan anggun. Jika kamu ingin mencoba warna-warna yang menawan ini, padukan dengan jeans favoritmu, tas dengan warna senada atau kombinasikan dua warna pastel sekaligus.</p>
                    </div>
                    <div class="post">
                        <h2><a href="post.php">2. Dark Demin</a></h2>
                        <p class="author-category">By <a href="#">John Slim</a> in <a href="">About Minimal</a>
                        </p>
                        <hr>
                        <p class="date-comments">
                            <a href="post.php"><i class="fa fa-calendar-o"></i> June 20, 2013</a>
                            <a href="post.php"><i class="fa fa-comment-o"></i> 8 Comments</a>
                        </p>
                        <div class="image">
                            <a href="post.php">
                                <img src="img/blog.jpg" class="img-responsive" alt="Example blog post alt">
                            </a>
                        </div>
                        <p class="intro">Denim memang salah satu fashion yang gak pernah termakan zaman. Denim yang bakalan trend di tahun 2018 lebih cenderung pada dark denim. Lengkapi koleksi jaket, skirt, atau pun pants kamu dengan warna dark denim.</p>
                    </div>
                    <div class="post">
                        <h2><a href="post.php">3. Trench Coat</a></h2>
                        <p class="author-category">By <a href="#">John Slim</a> in <a href="">About Minimal</a>
                        </p>
                        <hr>
                        <p class="date-comments">
                            <a href="post.php"><i class="fa fa-calendar-o"></i> June 20, 2013</a>
                            <a href="post.php"><i class="fa fa-comment-o"></i> 8 Comments</a>
                        </p>
                        <div class="image">
                            <a href="post.php">
                                <img src="img/blog2.jpg" class="img-responsive" alt="Example blog post alt">
                            </a>
                        </div>
                        <p class="intro">Udpate gaya kamu dengan trench coat di tahun 2018 nanti. Trench coat juga akan membuat penampilanmu lebih fashionable. Kamu bisa padukan trench coat dengan ripped jeans, scarf heels atau pun platform shoes.</p>
                    </div>
                    <div class="post">
                        <h2><a href="post.php">4. Pencil Skirt</a></h2>
                        <p class="author-category">By <a href="#">John Slim</a> in <a href="">About Minimal</a>
                        </p>
                        <hr>
                        <p class="date-comments">
                            <a href="post.php"><i class="fa fa-calendar-o"></i> June 20, 2013</a>
                            <a href="post.php"><i class="fa fa-comment-o"></i> 8 Comments</a>
                        </p>
                        <div class="image">
                            <a href="post.php">
                                <img src="img/blog.jpg" class="img-responsive" alt="Example blog post alt">
                            </a>
                        </div>
                        <p class="intro">Pencil skirt kembali menjadi trend tahun 2018. Kamu bisa menggunakan pencil skirt saat acara formal. Padukan dengan blazer agar penampilanmu semakin terlihat profesional. Kamu bisa pilih pencil skirt berwarna netral agar lebih mudah untuk mix and match.</p>
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
                            <li><a href="#">Tentang Kami</a>
                            </li>
                            <li><a href="#">Kebijakan Privasi</a>
                            </li>
                            <li><a href="#">FAQ</a>
                            </li>
                            <li><a href="#">Hubungi Kami</a>
                            </li>
                            <li><a href="#">Tempalate</a>
                            </li>
                        </ul>
                        <hr>
                        <h4>PENGGUNA</h4>
                        <ul>
                            <li><a href="#" data-toggle="modal" data-target="#login-modal">Login</a>
                            </li>
                            <li><a href="../register.php">Daftar</a>
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
                        <a href="contact.php">Pergi temui kami!</a>
                        <hr class="hidden-md hidden-lg">
                    </div>
                    <div class="col-md-3 col-sm-6">
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
                    <p class="pull-right">Designer<a href="../index.php">&nbsp;&nbsp;Bootstrap</a> & Rams<a href="../index.php"></a>
                    </p>
                </div>
            </div>
        </div>
    <script src="js/jquery-1.11.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.cookie.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/modernizr.js"></script>
    <script src="js/bootstrap-hover-dropdown.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/front.js"></script>
</body>
</html>