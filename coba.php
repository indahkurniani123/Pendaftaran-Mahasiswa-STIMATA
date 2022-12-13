 <?php
        session_start();
        error_reporting();
       $koneksi = new mysqli ("localhost","root","","pendaftaran");
       
?>
 <!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>STIMATA</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700|Raleway:300,400,400i,500,500i,700,800,900" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/nivo-slider/css/nivo-slider.css" rel="stylesheet">
  <link href="lib/owlcarousel/owl.carousel.css" rel="stylesheet">
  <link href="lib/owlcarousel/owl.transitions.css" rel="stylesheet">
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/venobox/venobox.css" rel="stylesheet">

  <!-- Nivo Slider Theme -->
  <link href="css/nivo-slider-theme.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

  <!-- Responsive Stylesheet File -->
  <link href="css/responsive.css" rel="stylesheet">

</head>

<body data-spy="scroll" data-target="#navbar-example">

  <div id="preloader"></div>

  <header>
    <!-- header-area start -->
    <div id="sticker" class="header-area">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12">

            <!-- Navigation -->
            <nav class="navbar navbar-default">
              <!-- Brand and toggle get grouped for better mobile display -->
              <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".bs-example-navbar-collapse-1" aria-expanded="false">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                <!-- Brand -->
                <a class="navbar-brand page-scroll sticky-logo" href="index.html">
                  <h1><span>STI</span>MATA</h1>
                  <!-- Uncomment below if you prefer to use an image logo -->
                  <!-- <img src="img/logo.png" alt="" title=""> -->
                                </a>
              </div>
              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse main-menu bs-example-navbar-collapse-1" id="navbar-example">
                <ul class="nav navbar-nav navbar-right">
                  <li class="active">
                    <a href="index.html">Home</a>
                  </li>
                  <li>
                    <a class="page-scroll" href="#about">Profile</a>
                  </li>
                  <li>
                    <a class="page-scroll" href="#services">Prodi</a>
                  </li>
                  <li>
                    <a class="page-scroll" href="#team">Prestasi</a>
                  </li>
                  <li>
                    <a class="page-scroll" href="#portfolio">UKM</a>
                  </li>
                  <li>
                    <a href="daftar/form.php">Pendaftaran Mahasiswa Baru</a>
                  </li>
                  <li>
                    <a href="#about">Login</a>
                  </li>
                  
                </ul>
              </div>
              <!-- navbar-collapse -->
            </nav>
            <!-- END: Navigation -->
          </div>
        </div>
      </div>
    </div>
    <!-- header-area end -->
  </header>
  <!-- header end -->


  <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="form contact-form">
              <div id="sendmessage">Your message has been sent. Thank you!</div>
              <div id="errormessage"></div>
              <p>Data Diri</p>
               error_reporting();
              <form action="" method="post" role="form" class="contactForm">
                <div class="form-group">

                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                   <form method="POST">
                                        <div class="form-group">
                                            <label>Kode Buku</label>
                                            <input class="form-control" name="kode" />
                                        </div>

                                         <div class="form-group">
                                            <label>Judul Buku</label>
                                            <input class="form-control" name="judul" />
                                        </div>

                                        <div class="form-group">
                                            <label>Kategori</label>
                                            <select class="form-control" name="kategori">
                                                <option value="Novel">Novel</option>
                                                <option value="Komik">Komik</option>
                                                <option value="Pelajaran">Pelajaran</option>
                                                <option value="Lain-Lain">Lain-Lain</option>
                                            </select>
                                        </div>

                                         <div class="form-group">
                                            <label>Tahun Terbit</label>
                                            <select class="form-control" nama="tahun" type="date">
                                                <?php

                                                    $tahun = date("Y");

                                                    for($i=$tahun-29; $i <= $tahun; $i++ ) {
                                                        echo'
                                                        <option value="'.$i.'">'.$i.'</option>
                                                        ';  
                                                    }

                                                ?>  
                                            </select>
                                        </div>

                                         <div class="form-group">
                                            <label>Pengarang</label>
                                            <input class="form-control" name="pengarang" />
                                        </div>

                                         <div class="form-group">
                                            <label>Penerbit</label>
                                            <input class="form-control" name="penerbit" />
                                        </div>

                                        <div>
                                            <input type="submit" name="simpan" value="Simpan" class="btn btn-primary" >
                                        
                                </div></form></div></div></div> </div>
                             </form>
                             </form>
                            </div>
</div>
</div>
</div>


<?php

    $kode= $_POST['kode'];
    $judul = $_POST['judul'];
    $kategori = $_POST['kategori'];
    $tahun = $_POST['tahun'];
    $pengarang = $_POST['pengarang'];
    $penerbit = $_POST['penerbit'];

    $simpan = $_POST['simpan'];

    if($simpan) {
        $sql = $koneksi->query("insert into tbl_buku (kode , judul_buku , kategori , thn_terbit , pengarang , penerbit)values('$kode' , '$judul' , '$kategori' , '$tahun' , '$pengarang' , '$penerbit' )" );

        if ($sql){
            ?>
            <script type="text/javascript">
                alert ("Data Berhasil Disimpan");
                 window.location.href="?page=buku";
            </script>
            <?php
        }
    }

?>




  <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="form contact-form">
              <div id="sendmessage">Your message has been sent. Thank you!</div>
              <div id="errormessage"></div>
              <p>Data Diri</p>
              <form action="" method="post" role="form" class="contactForm">
                <div class="form-group">

                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                   <form method="POST">
                                        <div class="form-group">
                                            <label>Kode Buku</label>
                                            <input class="form-control" name="kode" />
                                        </div>

                                         <div class="form-group">
                                            <label>Judul Buku</label>
                                            <input class="form-control" name="judul" />
                                        </div>

                                        <div class="form-group">
                                            <label>Kategori</label>
                                            <select class="form-control" name="kategori">
                                                <option value="Novel">Novel</option>
                                                <option value="Komik">Komik</option>
                                                <option value="Pelajaran">Pelajaran</option>
                                                <option value="Lain-Lain">Lain-Lain</option>
                                            </select>
                                        </div>

                                         <div class="form-group">
                                            <label>Tahun Terbit</label>
                                            <select class="form-control" nama="tahun" type="date">
                                                <?php

                                                    $tahun = date("Y");

                                                    for($i=$tahun-29; $i <= $tahun; $i++ ) {
                                                        echo'
                                                        <option value="'.$i.'">'.$i.'</option>
                                                        ';  
                                                    }

                                                ?>  
                                            </select>
                                        </div>

                                         <div class="form-group">
                                            <label>Pengarang</label>
                                            <input class="form-control" name="pengarang" />
                                        </div>

                                         <div class="form-group">
                                            <label>Penerbit</label>
                                            <input class="form-control" name="penerbit" />
                                        </div>

                                        <div>
                                            <input type="submit" name="simpan" value="Simpan" class="btn btn-primary" >
                                        
                                </div></form></div></div></div> </div>
                             </form>
                             </form>
                            </div>
</div>
</div>
</div>


<?php

    $kode= $_POST['kode'];
    $judul = $_POST['judul'];
    $kategori = $_POST['kategori'];
    $tahun = $_POST['tahun'];
    $pengarang = $_POST['pengarang'];
    $penerbit = $_POST['penerbit'];

    $simpan = $_POST['simpan'];

    if($simpan) {
        $sql = $koneksi->query("insert into tbl_buku (kode , judul_buku , kategori , thn_terbit , pengarang , penerbit)values('$kode' , '$judul' , '$kategori' , '$tahun' , '$pengarang' , '$penerbit' )" );

        if ($sql){
            ?>
            <script type="text/javascript">
                alert ("Data Berhasil Disimpan");
                 window.location.href="?page=buku";
            </script>
            <?php
        }
    }

?>

 <!-- Start Footer bottom Area -->
  <footer>
    <div class="footer-area">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="footer-content">
              <div class="footer-head">
                <div class="footer-logo">
                  <h2><span>e</span>Business</h2>
                </div>

                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis.</p>
                <div class="footer-icons">
                  <ul>
                    <li>
                      <a href="#"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-google"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-pinterest"></i></a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <!-- end single footer -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="footer-content">
              <div class="footer-head">
                <h4>information</h4>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.
                </p>
                <div class="footer-contacts">
                  <p><span>Tel:</span> +123 456 789</p>
                  <p><span>Email:</span> contact@example.com</p>
                  <p><span>Working Hours:</span> 9am-5pm</p>
                </div>
              </div>
            </div>
          </div>
          <!-- end single footer -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="footer-content">
              <div class="footer-head">
                <h4>Instagram</h4>
                <div class="flicker-img">
                  <a href="#"><img src="img/portfolio/1.jpg" alt=""></a>
                  <a href="#"><img src="img/portfolio/2.jpg" alt=""></a>
                  <a href="#"><img src="img/portfolio/3.jpg" alt=""></a>
                  <a href="#"><img src="img/portfolio/4.jpg" alt=""></a>
                  <a href="#"><img src="img/portfolio/5.jpg" alt=""></a>
                  <a href="#"><img src="img/portfolio/6.jpg" alt=""></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-area-bottom">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="copyright text-center">
              <p>
                &copy; Copyright <strong>eBusiness</strong>. All Rights Reserved
              </p>
            </div>
            <div class="credits">
              <!--
                All the links in the footer should remain intact.
                You can delete the links only if you purchased the pro version.
                Licensing information: https://bootstrapmade.com/license/
                Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=eBusiness
              -->
             <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/venobox/venobox.min.js"></script>
  <script src="lib/knob/jquery.knob.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/parallax/parallax.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/nivo-slider/js/jquery.nivo.slider.js" type="text/javascript"></script>
  <script src="lib/appear/jquery.appear.js"></script>
  <script src="lib/isotope/isotope.pkgd.min.js"></script>

  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <script src="js/main.js"></script>
</body>

</html>
