<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Pengguna E-Tani Pupuk Cabai</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="<?php echo base_url();?>img/favicon.png" rel="icon">
  <link href="<?php echo base_url();?>img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="<?php echo base_url();?>lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="<?php echo base_url();?>lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="<?php echo base_url();?>lib/animate/animate.min.css" rel="stylesheet">
  <link href="<?php echo base_url();?>lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="<?php echo base_url();?>lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="<?php echo base_url();?>css/style.css" rel="stylesheet">

  <!-- =======================================================
    Theme Name: EstateAgency
    Theme URL: https://bootstrapmade.com/real-estate-agency-bootstrap-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body>

  <div class="click-closed"></div>
  <!--/ Form Search Star /-->
  <!--/ Form Search End /-->

  <!--/ Nav Star /-->
  <nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top">
    <div class="container">
      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault"
        aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <div class="testimonial-author-box">
        <img src="img/logo1.jpg" alt="" class="testimonial-avatar">
        <a class="testimonial-author"><?php echo $this->session->userdata("nama_lengkap"); ?></a>
      </div>
      <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" href="<?= base_url('Tampilan') ?>">Beranda</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="<?= base_url('Cari_pupuk') ?>">Cari pupuk</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('Tentang') ?>">Tentang</a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('login/logout') ?>">
              <button type="submit" value="logout" class="btn">Logout</button>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!--/ Nav End /-->

  <!--/ Carousel Star /-->
  <div class="intro intro-carousel">
    <div id="carousel" class="owl-carousel owl-theme">
      <div class="carousel-item-a intro-item bg-image" style="background-image: url(img/gambar2.jpg)">
        <div class="overlay overlay-a"></div>
        <div class="intro-content display-table">
          <div class="table-cell">
            <div class="container">
              <div class="row">
                <div class="col-lg-8">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item-a intro-item bg-image" style="background-image: url(img/gambar3.jpg)">
        <div class="overlay overlay-a"></div>
        <div class="intro-content display-table">
          <div class="table-cell">
            <div class="container">
              <div class="row">
                <div class="col-lg-8">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item-a intro-item bg-image" style="background-image: url(img/gambar1.jpg)">
        <div class="overlay overlay-a"></div>
        <div class="intro-content display-table">
          <div class="table-cell">
            <div class="container">
              <div class="row">
                <div class="col-lg-8">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--/ Carousel end /-->

  <!--/ Services Star /-->
  <section class="section-services section-t8">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="title-wrap d-flex justify-content-between">
            <div class="title-box">
              <h2 class="title-a">Tentang SPK</h2>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div id="testimonial-carousel" class="owl-carousel owl-arrow">
          <div class="carousel-item-a">
            <div class="testimonials-box">
              <div class="row">
                <div class="col-sm-12 col-md-6">
                  <div class="testimonial-img">
                    <img src="img/cabe.jpg" alt="" class="img-fluid">
                  </div>
                </div>
                <div class="col-sm-12 col-md-6">
                  <div class="testimonials-content">
                    <p class="testimonial-text">
                      Sistem pendukung keputusan adalah sebuah pendekatan atau metodologi yang digunakan untuk membantu dalam pengambilan keputusan guna mendukung pemberian solusi bagi suatu manajemen. Perkembangan teknologi informasi dapat dikembangkan dalam bidang pertanian untuk mendukung pengetahuan petani dalam menentukan keputusan terhadap suatu permasalahan yang terjadi. Sehingga, dapat diterapkan Sistem Pendukung Keputusan Penentuan Pupuk Tanaman Cabai.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </div>
    </div>
  </section>
  <!--/ Services End /-->
  <!--/ Testimonials End /-->
  <section class="section-footer">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-6">
            <div class="widget-a">
              <div class="w-header-a">
                <h5 class="w-title-a text-brand">Manfaat SPK</h5>
              </div>
              <div class="w-body-a">
                <p class="w-text-a color-text-a">
                  <br> Beberapa manfaat dari sistem pendukung keputusan antara lain : </br>
                  <br> a.	Dapat membantu dalam memilih sebuah solusi atau keputusan terhadap suatu permasalah yang kompleks dan data semi terstruktur. </br>
                  <br> b.	Dapat menghasilkan solusi dengan lebih cepat dan efisien </br>
                  <br> c.	SPK menyajikan rekomendasi alternatif penyelesaian masalah yang akan memperluas pengetahuan pengguna </br>

                </p>
              </div>
            </div>
          </div>
          <div class="col-sm-12 col-md-6 section-md-t3">
            <div class="widget-a">
              <div class="w-header-a">
                <h5 class="w-title-a text-brand">Tahapan SPK</h5>
              </div>
              <div class="w-body-a">
                <div class="w-body-a">
                  <ul class="list-unstyled">
                    <li class="item-list-a">
                      Ada beberapa tahapan dalam SPK pemilihan pupuk tanaman cabai :</a>
                    </li>
                    <li class="item-list-a">
                      <i class="fa fa-angle-right"></i> <a href="#">Memasukkan data kriteria</a>
                    </li>
                    <li class="item-list-a">
                      <i class="fa fa-angle-right"></i> <a href="#">Perhitungan TOPSIS</a>
                    </li>
                    <li class="item-list-a">
                      <i class="fa fa-angle-right"></i> <a href="#">Kandungan Pupuk</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
      </div>
    </section>
  <!--/ footer Star /-->

  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="copyright-footer">
            <p class="copyright color-text-a">
              SPK
              <span class="color-a">Pemilihan</span> pupuk tanaman cabai
            </p>
          </div>
          <div class="credits">
            E-Tani <a>pupuk</a>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!--/ Footer End /-->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <div id="preloader"></div>

  <!-- JavaScript Libraries -->
  <script src="<?php echo base_url();?>/lib/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url();?>/lib/jquery/jquery-migrate.min.js"></script>
  <script src="<?php echo base_url();?>/lib/popper/popper.min.js"></script>
  <script src="<?php echo base_url();?>/lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="<?php echo base_url();?>/lib/easing/easing.min.js"></script>
  <script src="<?php echo base_url();?>/lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="<?php echo base_url();?>/lib/scrollreveal/scrollreveal.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="<?php echo base_url();?>/contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="<?php echo base_url();?>js/main.js"></script>

</body>
</html>
