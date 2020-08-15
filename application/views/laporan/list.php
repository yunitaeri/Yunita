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
<!--sidebar-menu-->

<!--main-container-part-->
<div id="content">
<!--breadcrumbs-->
  <div id="content-header">
    <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Laporan </a></div>
    <h1>Laporan</h1>
  </div>
<!--End-breadcrumbs-->


<!--Chart-box-->
    <div class="row-fluid">
      <div class="widget-box">
        <div class="widget-title bg_lg"><span class="icon"><i class="icon icon-th-list"></i></span>
          <h5>Laporan Riwayat Pemilihan Pupuk</h5>
        </div>
        <div class="widget-content " >
          <div class="row-fluid">
            <div class="span12">
              <div class="chart">
                <div class="widget-content nopadding">
                  <table class="table table-striped table-bordered data-table">
                    <thead>
                      <tr>
                        <th>ID Riwayat</th>
                        <th>Nama User</th>
                        <th>Jenis_Kandungan</th>
                        <th>Umur</th>
                        <th>pH</th>
                        <th>Luas</th>
                        <th>Jarak</th>
                        <th>Tinggi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      foreach ($data as $baris) { ?>
                        <tr>
                          <td><?= $baris->id_riwayat ?></td>
                          <td><?= $baris->Nama_Lengkap ?></td>
                          <td><?= $baris->jenis_kandungan ?></td>
                          <td><?= $baris->umur ?></td>
                          <td><?= $baris->pH ?></td>
                          <td><?= $baris->luas ?></td>
                          <td><?= $baris->jarak ?></td>
                          <td><?= $baris->tinggi ?></td>
                        </tr>
                      <?php } ?>
                    </tbody>
                </table>
              </div>
            </div>
            </div>

          </div>
        </div>
      </div>
    </div>
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
