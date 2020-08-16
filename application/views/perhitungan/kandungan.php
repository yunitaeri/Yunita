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
    <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Perhitungan </a></div>
    <h1>Perhitungan Fuzzy Kandungan</h1>
  </div>
<!--End-breadcrumbs-->
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-ok"></i></span>
            <h5>Rekomendasi</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-striped table-bordered">
              <thead>
                <tr>
                  <th rowspan="1"> <h6>Nama Pupuk</h6> </th>
                  <th rowspan="1"> <h6>Rendah</h6> </th>
                  <th rowspan="1"> <h6>Normal</h6> </th>
                  <th rowspan="1"> <h6>Tinggi</h6> </th>
                  <th rowspan="1"> <h6>Tingkat</h6> </th>
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
        <table class="table table-striped table-bordered">
              <thead>
                <tr>
                  <th rowspan="1"> <h6>Nama Pupuk</h6> </th>
                  <th rowspan="1"> <h6>Rendah</h6> </th>
                  <th rowspan="1"> <h6>Normal</h6> </th>
                  <th rowspan="1"> <h6>Tinggi</h6> </th>
                  <th rowspan="1"> <h6>Tingkat</h6> </th>
                </tr>
              </thead>
              <tbody>
                  <tr>
                    <td><?= $kandungan["nama"] ?></td>
                    <td><?= $kandungan["rendah"]?></td>
                    <td><?= $kandungan["normal"]?></td>
                    <td><?= $kandungan["tinggi"]?></td>
                    <td><?= $kandungan["tingkat"]?></td>
                    </tr>
              </tbody>
            </table>
            <a>     *).Jika terdapat nilai fuzzy yang sama antara dua tingkat, maka dapat digolongkan kedalam dua tingkat</a>
          <center>
            <a href="<?= base_url('Perhitungan') ?>">
              <button type="submit" value="Kembali" class="btn btn-info">Kembali</button>
            </a>
        </center>
        </div>
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
