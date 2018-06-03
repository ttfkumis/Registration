<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	  <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../../assets/css/custom.css">
    <link rel="stylesheet" type="text/css" href="../../assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../../assets/css/style.css">

	<title>Login Akun Anda</title>
</head>

<div class = "container" style="margin-top: 5px">
    <div class="col-md6">
<?php
if(isset($_GET['pesan'])){
  if($_GET['pesan'] == "gagal"){?>
    <div class="box-body">
      <div class="alert alert-danger alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <?php
          echo "Login gagal! Periksa nim dan password salah!";
         ?>
      </div>
    </div>
    <?php
  }else if($_GET['pesan'] == "logout"){?>
    <div class="box-body">
      <div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <?php
          echo "Anda telah berhasil logout";
         ?>
      </div>
    </div>
      <?php
  }else if($_GET['pesan'] == "belum_login"){?>
    <div class="box-body">
      <div class="alert alert-warning alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
          <?php
            echo "Anda harus login untuk mengakses halaman selanjutnya";
           ?>
      </div>
    </div>
    <?php
		}
}
?>
    </div>
  </div>

<body class="badan">
 	<div class = "container" style="margin-top: 100px">
 			<div class="col-md6 col-md-offset-4">
 				<div class="panel panel-default">
 				<h4><b>Silahkan Login <br>MOS Mahasiswa Baru STT-PLN</b></h4><br>
 					<div class="panel-body">
 						<form action="proseslogin.php" method="POST">
 							<div class="form-group">
 								<input type="text" name="nim" class="form-control" placeholder="masukan nim anda">
 							</div><!--form-group-->
 								<div class="form-group">
 								<input type="password" name="password" class="form-control" placeholder="masukan password anda">
 							</div><!--form-group-->
 								<div class="form-group">
 								<input type="submit" name="loginmos2017" class="btn btn-success btn-lg" value="Login">
								<a href="../../index.php" class="btn btn-danger btn-lg" role="button" aria-pressed="true">Home</a>
 							</div><!--form-group-->
 						</form><!--form-->
 					</div><!--panel-body-->
 					<div class="lock">
 						<i class="fa fa-lock fa-3x"></i>
 					</div>
 				</div><!--panel-default-->
 			</div><!--col-->
 		</div><!--container-->
 	</div>
</body>
</html>
