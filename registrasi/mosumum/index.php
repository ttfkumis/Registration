<?php
  session_start();
  include("koneksi.php");

  if($_SESSION['status']!="login"){
    header("location: login.php?pesan=belum_login");
    $result = mysqli_query($koneksi, "SELECT * FROM mosumum_akun WHERE username=$username") or die(mysqli_error());

  }
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>LABORATORIUM ITCC</title>
   <!--<link rel="icon" href="img/icon_dasar.ico" type="image/x-icon">-->
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
<body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper">

  <header class="main-header">
    <nav class="navbar navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <a href="index.php" class="navbar-brand">
            <i class="fa fa-desktop"></i><b> LABORATORIUM ITCC</b> | Sertifikasi </a>
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
            <i class="fa fa-bars"></i>
          </button>
        </div>

        <div class="collapse navbar-collapse pull-right" id="navbar-collapse">
          <ul class="nav navbar-nav">
            <li class=""><a href="daftar.php?=<?php echo $_SESSION['username'];?>"><i class="glyphicon glyphicon-pencil"></i> DAFTAR SERTIFIKASI MOS UMUM</a></li>
            <li class=""><a href="buktibayar.php?=<?php echo $_SESSION['username'];?>"><i class="glyphicon glyphicon-picture"></i> BUKTI BAYAR</a></li>
            <li class=""><a href="lihatpeserta.php?=<?php echo $_SESSION['username'];?>"><i class="glyphicon glyphicon-list-alt"></i> LIHAT DATA PESERTA</a></li>
            <li class=""><a href="#"><i class=""></i> </a></li>
            <li class="" style="margin:3px;">
              <div class="btn-group">
                <button type="button" class="btn btn-secondary btn-lg dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="glyphicon glyphicon-user">  </i><?php echo "&nbsp;&nbsp;". $_SESSION['username']; ?>
                </button>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="editpassword.php?=<?php echo $_SESSION['username'];?>">&nbsp;&nbsp;&nbsp;&nbsp;<i class="glyphicon glyphicon-edit"></i> &nbsp;&nbsp;UBAH PASSWORD</a><br><br>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="logout.php">&nbsp;&nbsp;&nbsp;&nbsp;<i class="glyphicon glyphicon-off"></i> &nbsp;&nbsp;LOGOUT</a><br>
                  <!-- <a class="dropdown-item" href="#">Another action</a>
                  <a class="dropdown-item" href="#">Something else here</a> -->

                  <!-- <a class="dropdown-item" href="#">Separated link</a> -->
                </div>
              </div>
            </li>

              <!-- <a href="#"><i class="glyphicon glyphicon-user"></i> <?php echo $_SESSION['nim']; ?></a></li>
            <li class=""><a href="logout.php"><i class="glyphicon glyphicon-off"></i> LOGOUT</a></li> -->
          </ul>
        </div>

      </div>
    </nav>
  </header>


  <!-- Full Width Column -->
  <div class="content-wrapper">
    <div class="container">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Beranda
          <small>Laboratorium ITCC</small>
        </h1>

      </section>

      <!-- Main content -->
      <section class="content">
        <div class="row">
          <div class="col-xs-12">
            <div class="box box-danger">
              <div class="box-header">
                  <h3 class="box-title" align:"center"><b>TATA CARA PENDAFTARAN MOS UNTUK UMUM</b></h3>

              </div>

              <table>
                <img src="img/MOS_STTPLN_MEKANISME_PEMBAYARAN.PNG" alt="" style="width:99%;margin:5px;">
              </table>


  <!--                                                              -->




  <!--                                                              -->

          </div>
        </div>
      </div>


  <!--                                                              -->




  <!--                                                              -->

</section>
<!-- /.content -->
</div>
<!-- /.container -->
</div>
<!-- /.content-wrapper -->
<footer class="main-footer">
<div class="container">
<!--<div class="pull-right hidden-xs">
  Desain by | <b>Dasar Team</b></a> <i class="fa fa-user-secret"></i>
</div>-->
<strong>Copyright &copy; <a href="https://adminlte.io">ITCC STT-PLN (Bowval Valentino)</a><!--</strong> | <a href="admin_dasarevent/login_admin.php" target="_blank">Lab Komputer Dasar</a>-->
</div>
<!-- /.container -->
</footer>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->camera
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>
</html>
