<?php
  session_start();
  include("../../lib/koneksi.php");


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
          Lihat Data
          <small>Laboratorium ITCC</small>
        </h1>
      </section>

      <!-- Main content -->
      <section class="content">



              <div class="row">
                <div class="col-xs-12">
                  <div class="box box-danger">
                    <div class="box-header">
                        <h3 class="box-title"><b>MOS UNTUK UMUM</b> | Data Peserta</h3>
                    </div>
                  <table id="dataTables1" class="table table-hover display" cellspacing="0" width="100%">
                  					<thead>
                  						<tr>
                  							<th width="3%" align="center">No</th>
                  							<th>Username</th>
                  							<th>NIK</th>
                                <th>Nama</th>
                  							<th>Instansi</th>
                  							<th>Jenis kelamin</th>
                  							<th>TTL</th>
                  							<th>Alamat</th>
                  							<th>No. HP</th>
                                <th>Id Line</th>
                                <th>Email</th>
                                <th>Program Sertifikasi</th>
                  							<th width="20%"><center>Action</center></th>
                  						</tr>
                  					</thead>
                  					<tbody>
                              <?php
                                // Display selected user data based on id
                                // Getting id from url
                                $username = $_SESSION['username'];
                                $no=1;

                                // Fetech user data based on id
                                $result = mysqli_query($koneksi, "SELECT * FROM  mosumum_peserta WHERE username='$username' ORDER BY id ASC ");

                                while($data = mysqli_fetch_array($result))
                                {
                                	$username= $data['username'];
                        					$nik = $data['nik'];
                                  $nama = $data['nama'];
                        					$instansi = $data['instansi'];
                                  $jenis_kelamin = $data['jenis_kelamin'];
                    							$ttl = $data['ttl'];
                    							$alamat = $data['alamat'];
                    							$hp = $data['hp'];
                    							$id_line = $data['id_line'];
                                  $email = $data['email'];
                                  $program_sertifikasi = $data['program_sertifikasi'];
                                }
                                ?>
                  						<tr>
                  							<td width="3%"><center><?php echo $no; ?></center></td>
                  							<td><?php echo $username; ?></td>
                  							<td><?php echo $nik; ?></td>
                  							<td><?php echo $nama; ?></td>
                                <td><?php echo $instansi; ?></td>
                                <td><?php echo $jenis_kelamin; ?></td>
                  							<td><?php echo $ttl; ?></td>
                  							<td><?php echo $alamat; ?></td>
                  							<td><?php echo $hp; ?></td>
                  							<td><?php echo $id_line; ?></td>
                                <td><?php echo $email; ?></td>
                                <td><?php echo $program_sertifikasi; ?></td>
                  							<td width="20%">
                                <center>
                  									<a href="edit.php?=<?php echo $_SESSION['username'];?>" class="btn btn-warning"><span class="fa fa-edit"></span> Edit</a>
                  									<!-- <a href="hapus.php=<?php echo $_SESSION['nim'];?>" class="btn btn-danger" value="hapus" ><span class="fa fa-trash-o"></span> Delete</a> -->
                                </center>
                  							</td>
                  						</tr>
                  						<?php
                  							$no++;
                  						?>
                  					</tbody>
                  				</table>

                          <table id="dataTables1" class="table table-hover display" cellspacing="0" width="100%">
                            <thead>
                              <tr>
                                <th width="3%" align="center"></th>
                                <th>BUKTI BAYAR</th>
                                <th>NAMA KELOMPOK</th>
                                <th>JADWAL TRAINING</th>
                                <th>JADWAL UJIAN</th>
                                <th>ID CERTIPORT</th>
                                <th>PASS CERTIPORT</th>
                                <th>SKOR</th>
                                <th width="20%"><center></center></th>
                              </tr>
                            </thead>
                            <tbody>
                              <?php

                              $username = $_SESSION['username'];
                              $no=1;

                              // Fetech user data based on id
                              $result = mysqli_query($koneksi, "SELECT * FROM  mosumum_peserta WHERE username='$username' ORDER BY id ASC ");

                              while($data = mysqli_fetch_array($result))
                              {
                                $bukti_bayar = $data['bukti_bayar'];
                                $nama_kelompok = $data['nama_kelompok'];
                                $jadwal_training = $data['jadwal_training'];
                                $jadwal_ujian = $data['jadwal_ujian'];
                                $akun_certiport = $data['akun_certiport'];
                                $password_certiport = $data['password_certiport'];
                                $skor = $data['skor'];
                              }

                               ?>
                              <tr>
                                <td width="3%"></td>
                                <td> <img src="img/uploadbayar/<?php echo $bukti_bayar; ?>" width='100' height='100'> </td>
                                <td> <?php echo $nama_kelompok; ?> </td>
                                <td> <?php echo $jadwal_training; ?> </td>
                                <td> <?php echo $jadwal_ujian; ?> </td>
                                <td> <?php echo $akun_certiport; ?> </td>
                                <td> <?php echo $password_certiport; ?> </td>
                                <td> <?php echo $skor; ?> </td>
                                <td width="20%">
                                <center>
                                    <!-- <a href="edit.php?=<?php echo $_SESSION['nim'];?>" class="btn btn-warning"><span class="fa fa-edit"></span> Edit</a>
                                    <!-- <a href="hapus.php=<?php echo $_SESSION['nim'];?>" class="btn btn-danger" value="hapus" ><span class="fa fa-trash-o"></span> Delete</a> -->
                                </center>
                                </td>
                              </tr>
                            </tbody>
                          </table>

                          <table>
                            <tr>
                              <marquee><strong style="color:red;">UNTUK JADWAL DAN ID CERTIPORT AKAN SEGERA DIBAGIKAN, BILA TIDAK ADA PADA SAAT PENJADWALAN DIBAGIKAN, DAPAT MENGHUBUNGI SEKRETARIAT ITCC LANTAI 5 GEDUNG A STT-PLN</strong></marquee>
                            </tr>
                          </table>


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
