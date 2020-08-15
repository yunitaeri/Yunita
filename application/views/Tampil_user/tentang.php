<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>EstateAgency Bootstrap Template</title>
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

  <!--/ Intro Single star /-->
  <section class="intro-single">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-lg-8">
          <div class="title-single-box">
            <h7 class="title-single">Tentang E-Tani</h7>
            <br>
            <span class="color-text-a">E-Tani Pemilihan Pupuk Merupakan Sistem yang dapat memudahkan petani dalam memilih pupuk tanaman cabai berdasarkan kriteria Umur, pH Tanah, Luas Tanam, Jarak Tanam dan Tinggi Tanaman. </span> </br>
          </div>
        </div>
          <div class="col-sm-12 col-md-12">
            <div class="testimonials-content">
              <p class="testimonial-text">
                <br> Sistem pendukung keputusan pemilihan pupuk tanaman cabai ini betujuan untuk membantu petani dalam pemmilihan pupuk yang tepat dengan perhitungan TOPSIS yang menghasilkan rangking pupuk dan metode fuzzy untuk menampilkan tingkat kandungan pupuk .
                </br>
                <br> Dalam SPK E-Tani pupuk ini menyediakan alternatif pupuk yang sering digunakan petani berdasarkan kandungan pupuknya yaitu :
                </br>
                <br> 1. Nitrogen (N) adapun nama pupuk yang dapat dipilih yaitu Urea, NPK, NaNO3, NH4Cl dan Za
                </br>
                <br> 2. Fosfor (P) adapun nama pupuk yang dapat dipilih yaitu TSP, SP-36, DS, ES dan NPK
                </br>
                <br> 3. Kalium (K) adapun nama pupuk yang dapat dipilih yaitu KCL, ZK dan NPK
                </br>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ Intro Single End /-->

  <!--/ News Grid Star /-->

  <!--/ News Grid End /-->

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
  <script src="<?php echo base_url();?>/js/main.js"></script>

</body>
</html>
