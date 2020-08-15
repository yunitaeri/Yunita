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
  <div id= 'header'>
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
    <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a></div>
    <h1>SPK Penentuan Pupuk Tanaman Cabai</h1>
  </div>

<!--End-Action boxes-->
<div class="container-fluid">
  <hr>
  <div class="row-fluid">
    <div class="span12">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-list"></i> </span>
          <h5> Pengertian SPK Pupuk Tanaman Cabai </h5>
        </div>
        <div class="widget-content">
            <div class="alert alert-success alert-block">
              <h3 class="alert-heading"> SPK</h3>
              <div> <p style="font-size:16px;"> Sistem pendukung keputusan adalah sebuah pendekatan atau metodologi yang digunakan untuk membantu dalam pengambilan keputusan guna mendukung pemberian solusi bagi suatu manajemen. Perkembangan teknologi informasi dapat dikembangkan dalam bidang pertanian untuk mendukung pengetahuan petani dalam menentukan keputusan terhadap suatu permasalahan yang terjadi. Sehingga, dapat diterapkan Sistem Pendukung Keputusan Penentuan Pupuk Tanaman Cabai. </br>
               <br> Secara Umum, sistem pendukung keputusan adalah Sebuah sistem yang mampu memberikan kemampuan dalam pemecahan masalah maupun kemampuan komunikasi untuk masalah semi terstruktur. Beberapa manfaat dari sistem pendukung keputusan antara lain : </br>
               <br> a.	Dapat membantu dalam memilih sebuah solusi atau keputusan terhadap suatu permasalah yang kompleks dan data semi terstruktur. </br>
               <br> b.	Dapat menghasilkan solusi dengan lebih cepat dan efisien </br>
               <br> c.	SPK menyajikan rekomendasi alternatif penyelesaian masalah yang akan memperluas pengetahuan pengguna </br>
             </p>
            </div>
          </div>
      <div class="alert alert-info alert-block">
              <h3 class="alert-heading"> Tahapan SPK </h3>
              <div> <p style="font-size:16px;"> Ada beberapa tahapan dalam SPK pemilihan pupuk tanaman cabai :
              <br> 1.	Memasukkan data kriteria </br>
              <br> Terdapat 5 (lima) kriteria dalam pemilihan pupuk yaitu Umur, pH Tanah, Luas Tanam, Jarak Tanam, dan Tinggi Tanaman.</br>
              <br> 2.	Perhitungan TOPSIS </br>
              <br> Dalam tahap ini terdapat proses perhitungan dengan metode TOPSIS yang kemudian menghasilkan rangking dari alternatif pupuk. </br>
              <br> 3.	Kandungan Pupuk </br>
              <br> Pada tahap ini memunculkan rekomendasi berdasarkan kandungan pupuk yang dihitung dengan fuzzifikasi dalam metode fuzzy.  </br>
            </p>
          </div>
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
