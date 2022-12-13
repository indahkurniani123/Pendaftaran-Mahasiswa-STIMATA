<?php
        session_start();
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
 <!-- Start  contact -->
          <br><br><br><br><br>
          <h5><p align="center"><b> Hallo Mahasiswa Baru ... Pastikan Datamu Benar dan Sesuai yaaa..... <br> See You :)</b></p></h5>
          <br>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="form contact-form">
              <div id="sendmessage">Your message has been sent. Thank you!</div>
              <div id="errormessage"></div>
              <p><h4><b>Data Admin</b></h4></p><hr><br>
              <form method="POST" role="form" class="contactForm">
                <div class="form-group">
                  <label>Id</label>
                  <input name="nisn" class="form-control" id="id" placeholder="Id" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <label>Nama</label>
                  <input class="form-control" name="nama" id="nama" placeholder="Nama" data-rule="minlen:4"  />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <label>Tanggal Lahir</label>
                  <input class="form-control" name="tgl_lahir" id="tgl_lahir" placeholder="Tanggal Lahir" data-rule="minlen:4"  />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <label>Tempat Lahir</label>
                  <input name="tempat_lahir" class="form-control" id="tempat_lahir" placeholder="Tempat Lahir"  />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <label>Alamat</label>
                  <input class="form-control" name="alamat" id="alamat" placeholder="Alamat" data-rule="minlen:4"  />
                  <div class="validation"></div>
                </div>
                 <div class="form-group">
                  <label>Agama</label>
                  <input class="form-control" name="agama" id="agama" placeholder="agama"  />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <label>Jenis Kelamin</label><br>
                   <select class="form-control" name="jenkel">
                                                <option value="Laki-laki">Laki-laki</option>
                                                <option value="Perempuan">Perempuan</option>
                  </select>
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <label>Jabatan</label>
                  <input class="form-control" name="sekolah" id="sekolah" placeholder="Asal Sekolah" data-rule="minlen:4" />
                  <div class="validation"></div>
                </div>
                <div class="text-center"><input type="submit" name="simpan" value="Simpan" class="btn btn-primary" ></div>
              </form>
            </div>
          </div>
          <!-- End Left contact -->
        </div>
      </div>
    </div>
  </div>
 <?php
    if(isset($_POST['submit'])){
       $id = $_POST['id'];
        $nama = $_POST['nama'];
        $tgl_lahir = $_POST['tgl_lahir'];
        $tempat_lahir = $_POST['tempat_lahir'];
        $alamat = $_POST['alamat'];
        $agama = $_POST['agama'];
        $jenkel = $_POST['jenkel'];
        $sekolah = $_POST['sekolah'];
        $nilai = $_POST['nilai'];
      

      $cek = mysqli_query($koneksi, "SELECT * FROM admin WHERE Id='$id'") or die(mysqli_error($koneksi));

      if(mysqli_num_rows($cek) == 0){
        $sql = mysqli_query($koneksi, "INSERT INTO mahasiswa(Id, Nama, Tgl_lahir, Tempat_lahir, Alamat, Agama, Jenkel, Jabatan) VALUES('$id', '$nama', '$tgl_lahir', '$tempat_lahir', '$alamat', '$agama', '$jenkel', '$jabatan')") or die(mysqli_error($koneksi));

        if($sql){
          echo '<script>alert("Berhasil menambahkan data."); document.location="index.html";</script>';
        }else{
          echo '<div class="alert alert-warning">Gagal melakukan proses tambah data.</div>';
        }
      }else{
        echo '<div class="alert alert-warning">Gagal, NIM sudah terdaftar.</div>';
      }
    }
    ?>
  <!-- End Contact Area -->
 <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
  <!-- End Contact Area -->
 
  <!-- Start Footer bottom Area -->
  <!-- Start contact Area -->
  <div id="contact" class="contact-area">
    <div class="contact-inner area-padding">
      <div class="contact-overly"></div>
      <div class="container ">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="section-headline text-center">
              <h2>Contact us</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <!-- Start contact icon column -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="contact-icon text-center">
              <div class="single-icon">
                <i class="fa fa-mobile"></i>
                <p>
                  Tlpn: (0341) 412699<br>
                  <span>Senin - Jumat (8am-9pm)</span>
                </p>
              </div>
            </div>
          </div>
          <!-- Start contact icon column -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="contact-icon text-center">
              <div class="single-icon">
                <i class="fa fa-envelope-o"></i>
                <p>
                  Email: stimata.ac.id<br>
                  <span>Web: bit.ly</span>
                </p>
              </div>
            </div>
          </div>
          <!-- Start contact icon column -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="contact-icon text-center">
              <div class="single-icon">
                <i class="fa fa-map-marker"></i>
                <p>
                  Jl. Laksda Adi Sucipto No.249a, Pandanwangi, Kec. Blimbing, Kota Malang,<br>
                  <span> Jawa Timur 65126</span>
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="row">

         
    <div class="footer-area-bottom">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="copyright text-center">
              <p>
                &copy; Copyright <strong>Kelompik 1</strong>. Enjoy with my website
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
