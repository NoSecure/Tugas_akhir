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

    <title>
        Obaju : e-commerce template
    </title>

    <meta name="keywords" content="">

    <link href='http://fonts.googleapis.com/css?family=Roboto:400,500,700,300,100' rel='stylesheet' type='text/css'>

    <!-- styles -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/owl.theme.css" rel="stylesheet">

    <!-- theme stylesheet -->
    <link href="css/style.default.css" rel="stylesheet" id="theme-stylesheet">

    <!-- your stylesheet with modifications -->
    <link href="css/custom.css" rel="stylesheet">

    <script src="js/respond.min.js"></script>

    <link rel="shortcut icon" href="favicon.png">



</head>

<body>
    <!-- *** TOPBAR ***
 _________________________________________________________ -->
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
                        <h4 class="modal-title" id="Login">Login pelanggan</h4>
                    </div>
                    <div class="modal-body">
                        <form action="../proses_login.php" method="post" role="form">
                            <div class="form-group">
                                <input type="text" class="form-control" id="email-modal" name="username" placeholder="Username">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" id="password-modal" name="password" placeholder="Password">
                            </div>

                            <p class="text-center">
                                <button type="submit" class="btn btn-primary"><i class="fa fa-sign-in"></i>Login</button>
                            </p>

                        </form>

                        <p class="text-center text-muted">Lupa Password ?</p>
                        <p class="text-center text-muted"><a href="../register.php"><strong>Daftar Sekarang</strong></a>! sangat mudah cuma 1 menit &nbsp;dan kamu akan mendapatkan diskon spesial dari kami !</p>

                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- *** TOP BAR END *** -->

    <!-- *** NAVBAR ***
 _________________________________________________________ -->

    <div class="navbar navbar-default yamm" role="navigation" id="navbar">
        <div class="container">
            <div class="navbar-header">

                <a class="navbar-brand home" href="../index.php" data-animate-hover="bounce">
                    <img src="img/logo.png" alt="Obaju logo" class="hidden-xs">
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
            <!--/.navbar-header -->

            <div class="navbar-collapse collapse" id="navigation">

                <ul class="nav navbar-nav navbar-left">
                    <li class="active"><a href="../index.php">Beranda</a>
                    </li>
                    <li class="dropdown yamm-fw">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="200">Fashion Pria<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <div class="yamm-content">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h5>Baju</h5>
                                           <ul>
                                                <li><a href="category-full.php">Kaos</a>
                                                </li>
                                                <li><a href="category-full.php">Jaket</a>
                                                </li>
                                                <li><a href="category-full.php">Jas</a>
                                                </li>
                                                <li><a href="category-full.php">Celana</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-3">
                                            <h5>Sepatu</h5>
                                            <ul>
                                                <li><a href="category-full.php">Sepatu Olaraga</a>
                                                </li>
                                                <li><a href="category-full.php">Sepatu Santai</a>
                                                </li>
                                                <li><a href="category-full.php">Sepatu Kulit</a>
                                                </li>
                                                <li><a href="category-full.php">Sepatu Boot</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-3">
                                            <h5>Aksesoris</h5>
                                            <ul>
                                                <li><a href="category-full.php">Dompet</a>
                                                </li>
                                                <li><a href="category-full.php">Tas</a>
                                                </li>
                                                <li><a href="category-full.php">Topi</a>
                                                </li>
                                                <li><a href="category-full.php">Ikat ppinggang</a>
                                                </li>
                                                <li><a href="category-full.php">Pakaian dalam</a>
                                            </ul>
                                        </div>
                                        <div class="col-sm-3">
                                            <h5>Yang lagi Trands</h5>
                                            <ul>
                                                <li><a href="category-full.php">Baju</a>
                                                </li>
                                                <li><a href="category-full.php">Sepatu</a>
                                                </li>
                                                <li><a href="category-full.php">Tas</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.yamm-content -->
                            </li>
                        </ul>
                    </li>

                    <li class="dropdown yamm-fw">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="200">Fashion Wanita<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <div class="yamm-content">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h5>Baju</h5>
                                            <ul>
                                                <li><a href="category-full.php">Kaos</a>
                                                </li>
                                                <li><a href="category-full.php">Jubah</a>
                                                </li>
                                                <li><a href="category-full.php">Dress</a>
                                                </li>
                                                <li><a href="category-full.php">Jaket</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-3">
                                            <h5>Sepatu</h5>
                                            <ul>
                                                <li><a href="category-full.php">Sepatu Olaraga</a>
                                                </li>
                                                <li><a href="category-full.php">Sepatu slip</a>
                                                </li>
                                                <li><a href="category-full.php">Sepatu Heels</a>
                                                </li>
                                                <li><a href="category-full.php">Sneakers</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-3">
                                            <h5>Aksesoris</h5>
                                            <ul>
                                                <li><a href="category-full.php">Ikat Pinggang</a>
                                                </li>
                                                <li><a href="category-full.php">Topi</a>
                                                </li>
                                                <li><a href="category-full.php">Aksesoris Rambut</a>
                                                </li>
                                                <li><a href="category-full.php">Sarung Tangan</a>
                                                </li>
                                                <li><a href="category-full.php">Syal</a>
                                            </ul>
                                            <h5>Yang lagi Trands</h5>
                                            <ul>
                                                <li><a href="category-full.php">Baju</a>
                                                </li>
                                                <li><a href="category-full.php">Sepatu</a>
                                                </li>
                                                <li><a href="category-full.php">Tas</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="banner">
                                                <a href="#">
                                                    <img src="img/banner.jpg" class="img img-responsive" alt="">
                                                </a>
                                            </div>
                                            <div class="banner">
                                                <a href="#">
                                                    <img src="img/banner2.jpg" class="img img-responsive" alt="">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.yamm-content -->
                            </li>
                            
                        </ul>
                    </li>
                    <li class="dropdown yamm-fw">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="200">Fashion Anak<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <div class="yamm-content">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h5>Baju</h5>
                                            <ul>
                                                <li><a href="category-full.php">Kaos</a>
                                                </li>
                                                <li><a href="category-full.php">Jaket</a>
                                                </li>
                                                <li><a href="category-full.php">Celana</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-3">
                                            <h5>Sepatu</h5>
                                            <ul>
                                                <li><a href="category-full.php">Sepatu Kets</a>
                                                </li>
                                                <li><a href="category-full.php">Sepatu AQUA</a>
                                                </li>
                                                <li><a href="category-full.php">Sepatu Santai</a>
                                            </ul>
                                        </div>
                                        <div class="col-sm-3">
                                            <h5>Aksesoris</h5>
                                            <ul>
                                                <li><a href="category-full.php">Tas</a>
                                                </li>
                                                <li><a href="category-full.php">Topi</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-3">
                                            <h5>Yang lagi Trands</h5>
                                            <ul>
                                                <li><a href="category-full.php">Baju</a>
                                                </li>
                                                <li><a href="category-full.php">Sepatu</a>
                                                </li>
                                                <li><a href="category-full.php">Tas</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.yamm-content -->
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown yamm-fw">
                        <a href="#" data-hover="dropdown" data-delay="200">Tentang Fashion</a>
                    </li>
                </ul>

            </div>
            <!--/.nav-collapse -->

            <div class="navbar-buttons">

                <div class="navbar-collapse collapse right" id="basket-overview">
                    <a href="basket.php" class="btn btn-primary navbar-btn"><i class="fa fa-shopping-cart"></i><span class="hidden-sm"></span></a>
                </div>
                <!--/.nav-collapse -->

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
            <!--/.nav-collapse -->

        </div>
        <!-- /.container -->
    </div>
    <!-- /#navbar -->

    <!-- *** NAVBAR END *** -->

    <div id="all">

        <div id="content">
            <div class="container">

                <div class="col-md-12">
                    <ul class="breadcrumb">
                        <li><a href="#">Home</a>
                        </li>
                        <li>Text page</li>
                    </ul>
                </div>

                <div class="col-md-3">
                    <!-- *** PAGES MENU ***
 _________________________________________________________ -->
                    <div class="panel panel-default sidebar-menu">

                        <div class="panel-heading">
                            <h3 class="panel-title">Pages</h3>
                        </div>

                        <div class="panel-body">
                            <ul class="nav nav-pills nav-stacked">
                                <li>
                                    <a href="text.html">Text page</a>
                                </li>
                                <li>
                                    <a href="contact.html">Contact page</a>
                                </li>
                                <li>
                                    <a href="faq.html">FAQ</a>
                                </li>

                            </ul>

                        </div>
                    </div>

                    <!-- *** PAGES MENU END *** -->


                    <div class="banner">
                        <a href="#">
                            <img src="img/banner.jpg" alt="sales 2014" class="img-responsive">
                        </a>
                    </div>
                </div>

                <div class="col-md-9">

                    <div class="box" id="text-page">
                        <h1>Text formatting - Header level 1</h1>

                        <p class="lead">This page aim is to show you the most common HTML elements appearance on the website. For further reference please visit official <a href="http://getbootstrap.com/css/" class="external">Bootstrap website</a>.</p>

                        <p><strong>Pellentesque habitant morbi tristique</strong> senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. <em>Aenean ultricies mi vitae est.</em> Mauris
                            placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, <code>commodo vitae</code>, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum
                            rutrum orci, sagittis tempus lacus enim ac dui. <a href="#">Donec non enim</a> in turpis pulvinar facilisis. Ut felis.</p>

                        <h2>Header Level 2</h2>

                        <ol>
                            <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
                            <li>Aliquam tincidunt mauris eu risus.</li>
                        </ol>

                        <blockquote>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus magna. Cras in mi at felis aliquet congue. Ut a est eget ligula molestie gravida. Curabitur massa. Donec eleifend, libero at sagittis mollis, tellus est malesuada
                                tellus, at luctus turpis elit sit amet quam. Vivamus pretium ornare est.</p>
                        </blockquote>

                        <h3>Header Level 3</h3>

                        <ul>
                            <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
                            <li>Aliquam tincidunt mauris eu risus.</li>
                        </ul>

                        <hr>

                        <h2>Images</h2>

                        <div class="row">
                            <div class="col-md-4">
                                <p class="text-center">
                                    <img src="img/detailsquare.jpg" class="img-circle img-responsive" alt="">
                                </p>
                                <p class="text-center">circle</p>
                            </div>
                            <div class="col-md-4">
                                <p class="text-center">
                                    <img src="img/detailsquare.jpg" class="img-thumbnail  img-responsive" alt="">
                                </p>
                                <p class="text-center">thumbnail</p>
                            </div>
                            <div class="col-md-4">
                                <p class="text-center">
                                    <img src="img/detailsquare.jpg" class="img-rounded img-responsive" alt="">
                                </p>
                                <p class="text-center">rounded</p>
                            </div>
                        </div>

                    </div>


                </div>
                <!-- /.col-md-9 -->
            </div>
            <!-- /.container -->
        </div>
        <!-- /#content -->


        <!-- *** FOOTER ***
 _________________________________________________________ -->
        <div id="footer" data-animate="fadeInUp">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <h4>HALAMAN</h4>

                        <ul>
                            <li><a href="text.php">Tentang Kami</a>
                            </li>
                            <li><a href="text.php">Kebijakan Privasi</a>
                            </li>
                            <li><a href="faq.php">FAQ</a>
                            </li>
                            <li><a href="contact.php">Hubungi Kami</a>
                            </li>
                            <li><a href="template.php">Tempalate</a>
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
                    <!-- /.col-md-3 -->

                    <div class="col-md-3 col-sm-6">

                        <h4>KATEGORI</h4>

                        <h5>Fashion Pria</h5>

                        <ul>
                            <li><a href="category-full.php">Baju</a>
                            </li>
                            <li><a href="category-full.php">Sepatu</a>
                            </li>
                            <li><a href="category-full.php">Aksesoris</a>
                            </li>
                        </ul>

                        <h5>Fashion Wanita</h5>
                        <ul>
                            <li><a href="category-full.php">Baju</a>
                            </li>
                            <li><a href="category-full.php">Sepatu</a>
                            </li>
                            <li><a href="category-full.php">Aksesoris</a>
                            </li>
                        </ul>

                        <hr class="hidden-md hidden-lg">

                    </div>
                    <!-- /.col-md-3 -->

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
                    <!-- /.col-md-3 -->



                    <div class="col-md-3 col-sm-6">

                        <h4>Dapatkan Berita</h4>
                        <form>
                            <div class="input-group">

                                <input type="text" class="form-control">

                                <span class="input-group-btn">

			    <button class="btn btn-default" type="button">Subscribe!</button>

			</span>

                            </div>
                            <!-- /input-group -->
                        </form>

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
                    <!-- /.col-md-3 -->

                </div>
                <!-- /.row -->

            </div>
            <!-- /.container -->
        </div>
        <!-- /#footer -->

        <!-- *** FOOTER END *** -->




        <!-- *** COPYRIGHT ***
 _________________________________________________________ -->
        <div id="copyright">
            <div class="container">
                <div class="col-md-6">
                    <p class="pull-left">© 2018 Ramadhan.</p>

                </div>
                <div class="col-md-6">
                    <p class="pull-right">Designer<a href="../index.php">&nbsp;&nbsp;Bootstrap</a> & Rams<a href="../index.php"></a>
                         <!-- Not removing these links is part of the license conditions of the template. Thanks for understanding :) If you want to use the template without the attribution links, you can do so after supporting further themes development at https://bootstrapious.com/donate  -->
                    </p>
                </div>
            </div>
        </div>
        <!-- *** COPYRIGHT END *** -->



    </div>
    <!-- /#all -->


    

    <!-- *** SCRIPTS TO INCLUDE ***
 _________________________________________________________ -->
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