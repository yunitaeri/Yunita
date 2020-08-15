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
<!--breadcrumbs-->
  <div id="content-header">
    <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Data Acuan</a></div>
    <h1>Masukkan Data Acuan</h1>
  </div>
<div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon icon-th-list"></i> </span>
            <h5>Tambahkan Data Acuan</h5>
          </div>
          <div class="widget-content nopadding">
            <form class="form-horizontal" method="post" action="<?php echo base_url('Data_Acuan/insert') ?>" name="number_validate" id="number_validate" novalidate="novalidate">
              <div class="control-group">
                <label class="control-label">Id_Acuan :</label>
                <div class="controls">
                  <input type="text" name="kode" id="min" />
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Umur :</label>
                <div class="controls">
                  <input type="text" name="umur" id="max" />
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">pH Tanah :</label>
                <div class="controls">
                  <input type="text" name="ph" id="number" />
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Luas Tanam  :</label>
                <div class="controls">
                  <input type="text" name="luas" id="number" />
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Jarak Tanam  :</label>
                <div class="controls">
                  <input type="text" name="jarak" id="number" />
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Tinggi Tanaman :</label>
                <div class="controls">
                  <input type="text" name="tinggi" id="number" />
                </div>
              </div>
              <div class="form-actions">
                <input type="submit" value="Tambah" class="acuan">
              </div>
              </tbody>
            </form>
          </div>
        </div>
      </div>

      <script src="js/jquery.min.js"></script>
      <script src="js/jquery.ui.custom.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <script src="js/jquery.uniform.js"></script>
      <script src="js/select2.min.js"></script>
      <script src="js/jquery.validate.js"></script>
      <script src="js/matrix.js"></script>
      <script src="js/matrix.form_validation.js"></script>
      </body>
      </html>
