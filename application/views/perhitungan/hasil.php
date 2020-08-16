<!DOCTYPE html>
<html lang="en">
<head>
<title>Admin E-Tani Pupuk Cabai</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="<?php echo base_url();?>/aset/css/bootstrap.min.css" />
<link rel="stylesheet" href="<?php echo base_url();?>/aset/css/bootstrap-responsive.min.css" />
<link rel="stylesheet" href="<?php echo base_url();?>/aset/css/fullcalendar.css" />
<link rel="stylesheet" href="<?php echo base_url();?>/aset/css/matrix-style.css" />
<link rel="stylesheet" href="<?php echo base_url();?>/aset/css/matrix-media.css" />
<link href="<?php echo base_url();?>/aset/font-awesome/css/font-awesome.css" rel="stylesheet" />
<link rel="stylesheet" href="<?php echo base_url();?>/aset/css/jquery.gritter.css" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
</head>
<body>

  <!--Header-part-->
  <div id="header">
    <h1>Halaman Admin</h1>
  </div>
<div id="user-nav" class="navbar navbar-inverse">
  <ul class="nav">
    <li  id="profile-messages" ><a title="" href="#" data-target="#profile-messages"> <span class="text">Welcome SPK Pupuk Cabai</span></a>
    <li class=""><a title="" href="<?= base_url('login/logout') ?>"><i class="icon icon-share-alt"></i> <span class="text">Logout</span></a></li>
  </ul>
</div>


<!--sidebar-menu-->

<?php
$this->load->view('menu')
?>

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Hasil Perhitungan TOPSIS</a></a> </div>
    <h1>Hasil perhitungan</h1>
  </div>
  <div class="row-fluid">
    <div class="widget-box">
      <div class="widget-title bg_lg"><span class="icon"><i class="icon icon-th-list"></i></span>
        <h5> </h5>
      </div>
  <div class="span11">
  <div class="widget-box">
    <div class="widget-title"> <span class="icon"><i class="icon icon-th-list"></i></span>
      <h5></h5>
    </div>

    <div class="widget-content nopadding">
      <table class="table table-striped table-bordered">
        <thead>
          <tr>
            <th rowspan="1"> <h6>Nama Pupuk</h6> </th>
            <th rowspan="1"> <h6>Nilai</h6> </th>
            <th rowspan="1"> <h6>Rangking</h6> </th>
          </tr>
        </thead>
        <tbody>
          <?php
          foreach ($hasil as $value) {
            ?>
            <tr>
              <td><?= $value["jenis_pupuk"] ?></td>
              <td><?= $value["RC+"]?></td>
              <td><?= $value["rank"]?></td>
              </tr>

          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
    <center><!--
      <form class="span4" action="<?= base_url("Perhitungan/fuzzy") ?>" method="POST">
            <input type="hidden" name="kandungan" value="<?= $kandungan ?>">
              <button type="submit" value="Kandungan" class="btn btn-info">Kandungan</button>
            </form>
          -->
      <a href="<?= base_url('Perhitungan') ?>">
        <button type="submit" value="Kembali" class="btn btn-info">Kembali</button>
      </a>
  </center>
  
  <li class="clearfix">
    <div class="widget-content nopadding">
      <form class="form-horizontal" action="<?= base_url("Perhitungan/fuzzy") ?>" method="POST">
      <input type="hidden" name="kandungan" value="<?= $kandungan ?>">
        <label class="control-label">Jenis Pupuk :</label>
          <div class="controls">
            <input type="text" name="nama" id="nama" />
          </div>
        <label class="control-label">Kandungan :</label>
          <div class="controls">
            <input type="text" name="kandunganmu" id="kandunganmu" />
          </div>
    <center>
      <a href="<?= base_url("Perhitungan/fuzzy") ?>">
        <button type="submit" value="Hitung" class="btn btn-info">Hitung</button>
      </a>
    </center>
  </div>
<!--Footer-part-->

<!--end-Footer-part-->
<script src="js/jquery.min.js"></script>
<script src="js/jquery.ui.custom.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.uniform.js"></script>
<script src="js/select2.min.js"></script>
<script src="js/jquery.dataTables.min.js"></script>
<script src="js/matrix.js"></script>
<script src="js/matrix.tables.js"></script>
</body>
</html>
