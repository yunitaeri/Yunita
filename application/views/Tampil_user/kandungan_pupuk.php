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
        <img src="<?php echo base_url();?>img/logo1.jpg" alt="" class="testimonial-avatar">
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
            <h4 class="title-single">Hasil Rekomendasi Kandungan</h4>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ Intro Single End /-->
  <section class="section-services section-t8">
    <div class="container">
      <div class="row">
        <div id="testimonial-carousel" class="owl-carousel owl-arrow">
          <div class="carousel-item-a">
            <div class="testimonials-box">
              <div class="row">
                <div class="col-sm-12 col-md-12">
                  <table class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th rowspan="2"> <h6>Nama Pupuk</h6> </th>
                        <th rowspan="1"> <h6>Rendah</h6> </th>
                        <th rowspan="1"> <h6>Normal</h6> </th>
                        <th rowspan="1"> <h6>Tinggi</h6> </th>
                        <th rowspan="2"> <h6>Tingkat</h6> </th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      foreach ($hasil as $value) {
                        ?>
                        <tr>
                          <td><?= $value["jenis_pupuk"] ?></td>
                          <td><?= $value["rendah"]?></td>
                          <td><?= $value["normal"]?></td>
                          <td><?= $value["tinggi"]?></td>
                          <td><?= $value["tingkat"]?></td>
                          </tr>

                      <?php } ?>
                    </tbody>
                  </table>
                </div>
              </div>
              <center>
                <a href="<?= base_url('Cari_pupuk') ?>">
                  <button type="submit" value="Kembali" class="btn btn-info">Kembali</button>
                </a>
            </center>
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
  <script src="<?php echo base_url();?>/js/main.js"></script>

</body>
</html>
