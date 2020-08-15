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

<!--main-container-part-->
<div id="content">
<!--breadcrumbs-->
  <div id="content-header">
    <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Data Pupuk</a></div>
    <h1>Data Pupuk</h1>
  </div>
<!--End-breadcrumbs-->

<!--Chart-box-->
    <div class="row-fluid">
      <div class="widget-box">
        <div class="widget-title bg_lg"><span class="icon"><i class="icon icon-th-list"></i></span>
          <h5> Masukkan Data Pupuk Tanaman Cabai</h5>
        </div>
        <div class="span11">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon icon-th-list"></i></span>
            <h5>List Jenis Pupuk</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-striped table-bordered">
              <thead>
                <tr>
                  <th> <h6>Id Acuan</h6> </th>
                  <th> <h6>Umur</h6> </th>
                  <th> <h6>pH Tanah</h6> </th>
                  <th> <h6>Luas Tanam</h6> </th>
                  <th> <h6>Jarak Tanam</h6> </th>
                  <th> <h6>Tinggi Tanaman</h6> </th>
                  <th> <h6>Aksi</h6> </th>
                </tr>
              </thead>
              <tbody>
                <?php $no=1; foreach ($acuan as $value): ?>
                  <tr>
                    <td><?php echo $value->id_acuan ?></td>
                    <td><?php echo $value->umur ?></td>
                    <td><?php echo $value->pH ?></td>
                    <td><?php echo $value->luas ?></td>
                    <td><?php echo $value->jarak ?></td>
                    <td><?php echo $value->tinggi ?></td>
                    <td>
                      <div class="fr">
                        <a href="<?php echo base_url('Data_acuan/edit/').$value->id_jenis ?>" class="btn btn-warning btn-mini">Edit</a>
                        <a href="<?php echo base_url('Data_acuan/hapus/').$value->id_jenis ?>" class="btn btn-danger btn-mini">Delete</a>
                      </div>
                    </td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>
        </div>

  <div> <a href="<?php echo base_url();?>Data_Acuan/input" class="btn btn-primary btn-mini">Tambahkan</a></div>
<!--End-Chart-box-->


<script src="js/excanvas.min.js"></script>
<script src="js/jquery.min.js"></script>
<script src="js/jquery.ui.custom.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.flot.min.js"></script>
<script src="js/jquery.flot.resize.min.js"></script>
<script src="js/jquery.peity.min.js"></script>
<script src="js/fullcalendar.min.js"></script>
<script src="js/matrix.js"></script>
<script src="js/matrix.dashboard.js"></script>
<script src="js/jquery.gritter.min.js"></script>
<script src="js/matrix.interface.js"></script>
<script src="js/matrix.chat.js"></script>
<script src="js/jquery.validate.js"></script>
<script src="js/matrix.form_validation.js"></script>
<script src="js/jquery.wizard.js"></script>
<script src="js/jquery.uniform.js"></script>
<script src="js/select2.min.js"></script>
<script src="js/matrix.popover.js"></script>
<script src="js/jquery.dataTables.min.js"></script>
<script src="js/matrix.tables.js"></script>

<script type="text/javascript">
  // This function is called from the pop-up menus to transfer to
  // a different page. Ignore if the value returned is a null string:
  function goPage (newURL) {

      // if url is empty, skip the menu dividers and reset the menu selection to default
      if (newURL != "") {

          // if url is "-", it is this page -- reset the menu:
          if (newURL == "-" ) {
              resetMenu();
          }
          // else, send page to designated URL
          else {
            document.location.href = newURL;
          }
      }
  }

// resets the menu selection upon entry to this page:
function resetMenu() {
   document.gomenu.selector.selectedIndex = 2;
}
</script>
</body>
</html>
