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
            <h4 class="title-single">Masukkan Data Anda</h4>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ Intro Single End /-->

  <!--/ About Star /-->
  <section class="section-about">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="about-img-box">
            <img src="img/tumbuh.jpg" alt="" class="img-fluid">
          </div>
        </div>
        <div class="col-md-12 section-t8">
          <div class="row">
            <div class="col-md-6 mb-3">
              <div class="form-group">
            </div>
          </div>
            <div class="col-md-6 col-lg-5">
              <div class="form-group">
                <form class="form-horizontal" method="post" action="<?php echo base_url('Cari_pupuk/hitung') ?>" name="number_validate" id="number_validate" novalidate="novalidate">
              <label class="control-label">Jenis Kandungan :</label>
                    <select name="jenpuk" class="form-control form-control-lg form-control-a">
                      <?php foreach ($jenis_kandungan as $value): ?>
                        <option value="<?php echo $value['id_kandungan'] ?>"><?php echo $value['jenis_kandungan'] ?></option>
                      <?php endforeach; ?>
                    </select>
              <label class="control-labe">Umur :</label>
                    <input type="text" name="umur" class="form-control form-control-lg form-control-a" id="min" />
              <label class="control-label">pH Tanah :</label>
                      <input type="text" name="pH" class="form-control form-control-lg form-control-a" id="max" />
              <label class="control-label">Luas Tanam :</label>
                      <input type="text" name="luas" class="form-control form-control-lg form-control-a" id="max" />
              <label class="control-label">Jarak Tanam :</label>
                      <input type="text" name="jarak" class="form-control form-control-lg form-control-a" id="max" />
              <label class="control-label">Tinggi Tanaman :</label>
                      <input type="text" name="tinggi" class="form-control form-control-lg form-control-a" id="max" />

            </div>

            <center>
              <a href="<?= base_url('Cari_pupuk/hitung') ?>">
                <button type="submit" value="Hitung" class="btn btn-info">Hitung</button>
              </a>
          </center>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ About End /-->

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
