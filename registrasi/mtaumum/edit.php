<?php
  session_start();
  include("koneksi.php");
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
            <li class=""><a href="index.php"><i class="glyphicon glyphicon-backward"></i> KEMBALI KE BERANDA</a></li>
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
          Ubah Data
          <small>Laboratorium ITCC</small>
        </h1>
      </section>

      <!-- Main content -->
      <section class="content">

              <div class="row">

                <div class="col-xs-12">
                  <div class="box box-danger">
                    <div class="box-header">
                        <h3 class="box-title"><b>MTA UNTUK UMUM</b> | Form Ubah Data Peserta</h3>
                    </div>

                    <?php
                    $username = $_SESSION['username'];
                    // Display selected user data based on id
                    // Getting id from url
                    $result = mysqli_query($koneksi, "SELECT * FROM mtaumum_peserta WHERE username='$username'");

                    while($user_data = mysqli_fetch_array($result))
                    {
                      $nik = $user_data['nik'];
                    	$nama = $user_data['nama'];
                      $instansi = $user_data['instansi'];
                      $jenis_kelamin = $user_data['jenis_kelamin'];
                      $ttl  = $user_data['ttl'];
                      $alamat = $user_data['alamat'];
                      $hp = $user_data['hp'];
                      $id_line = $user_data['id_line'];
                      $email = $user_data['email'];
                      $program_sertifikasi = $user_data['program_sertifikasi'];
                    }


                    // Fetech user data based on id

                    ?>


                      <div class="box-body">

                        <script type="text/javascript">
                            function berhasiledit() {
                               alert("Berhasil Edit Data");
                            }
                        </script>

                        <form onsubmit="berhasiledit()" action="prosesedit.php" method="post" enctype="multipart/form-data"
                        class="form-horizontal">

                        <div class="col-md-6">


                          <div class="form-group">
                            <label class="label-control col-md-3">Username</label>
                            <div class="col-md-4">
                                <input type="hidden" name="username" class="form-control" size="50"  value="<?php echo $username; ?>" ><?php echo $username; ?>

                            </div>
                          </div>

                          <div class="form-group">
                            <label class="label-control col-md-3">NIK</label>
                            <div class="col-md-8">
                              <input type="text" name="nik" class="form-control" size="50" value="<?php echo $nik;?>" required>
                            </div>
                          </div>

                          <div class="form-group">
                            <label class="label-control col-md-3">Nama lengkap</label>
                            <div class="col-md-8">
                              <input type="text" name="nama" class="form-control" size="50" value="<?php echo $nama;?>" required>
                            </div>
                          </div>

                          <div class="form-group">
                            <label class="label-control col-md-3">Instansi</label>
                            <div class="col-md-8">
                              <input type="text" name="instansi" class="form-control" size="50" value="<?php echo $instansi;?>" required>
                            </div>
                          </div>

                          <div class="form-group">
                            <label class="label-control col-md-3">Jenis Kelamin</label>
                            <div class="col-md-4">
                              <select class="form-control" name="jenis_kelamin">
                                <option value="<?php echo $jenis_kelamin;?>"><?php echo $jenis_kelamin;?></option>
                                <option value="L">Laki-Laki</option>
                                <option value="P">Perempuan</option>
                              </select>
                            </div>
                          </div>

                          <div class="form-group">
                            <label class="label-control col-md-3">Tempat Tanggal Lahir</label>
                            <div class="col-md-6">
                              <input type="text" name="ttl" class="form-control" size="50" placeholder="ex : Bogor, 17 Mei 1996" value="<?php echo $ttl;?>" required>
                            </div>
                          </div>

                        </div>

                        <div class="col-md-6">


                          <div class="form-group">
                            <label class="label-control col-md-3">Alamat</label>
                            <div class="col-md-8">
                              <input type="text" name="alamat" class="form-control" size="225" placeholder="ex : JL. Lingkar Luar Barat" value="<?php echo $alamat;?>" required>
                            </div>
                          </div>

                          <div class="form-group">
                            <label class="label-control col-md-3">No HP</label>
                            <div class="col-md-5">
                              <input type="text" name="hp" class="form-control" size="50" placeholder="ex : 0813 XXXX XXXX" value="<?php echo $hp;?>" required>
                            </div>
                          </div>

                          <div class="form-group">
                            <label class="label-control col-md-3">ID Line</label>
                            <div class="col-md-5">
                              <input type="text" name="id_line" class="form-control" size="50" placeholder="ex : XvYZi" value="<?php echo $id_line;?>" required>
                            </div>
                          </div>

                          <div class="form-group">
                            <label class="label-control col-md-3">Email STTPLN</label>
                            <div class="col-md-5">
                              <input type="email" name="email" class="form-control" size="50" placeholder="ex : xxx@sttpln.ac.id" value="<?php echo $email;?>" required>
                            </div>
                          </div>

                          <div class="form-group">
                            <label class="label-control col-md-3">Pilih Program Sertifikasi</label>
                            <div class="col-md-4">
                              <select class="form-control" name="program_sertifikasi">
                                <option value="<?php echo $program_sertifikasi;?>"><?php echo $program_sertifikasi;?></option>
                                <option value="MTADB">MICROSOFT TECHNOLOGY ASSOCIATE (MTA) DATABASE FUDAMENTALS</option>
                              </select>
                            </div>
                          </div>

                        </div>


                        <div class="row col-md-12">

                          <div class="form-group">
                            <label class="col-md-2"></label>
                            <div class="col-md-4">
                              <button type="Submit" name="edit" class="btn btn-warning">
                                <span class="fa fa-edit"></span> Edit</button>
                              <a href="lihatpeserta.php?=<?php echo $_SESSION['username']; ?>" class="btn btn-danger"><span class="fa fa-remove"></span> Tutup</a>
                            </div>
                          </div>

                        </div>


                        </form>

                      </div>

                      <div class="box-body">
                        <div class="alert alert-warning alert-dismissible">
                          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                          <p>
                          Harap isikan data dengan Benar & Jelas. Karena nantinya <b>Nama</b> yang anda inputkan akan dijadikan
                          referensi saat mencetak akun <b>CERTIPORT</b>.
                          </p>
                        </div>
                      </div>
                  </div>
                </div>

              </div>

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

      <!-- jQuery 3 -->
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
