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

<body class="badan">
 	<div class = "container" style="margin-top: 100px">
 			<div class="col-md6 col-md-offset-4">
 				<div class="panel panel-default">
 				<h4><b>Register Akun <br>MOS UNTUK UMUM</b></h4><br>
 					<div class="panel-body">
						<script type="text/javascript">
								function berhasildaftarakun() {
									 alert("Berhasil Daftar Akun");
								}
						</script>
 						<form onsubmit="berhasildaftarakun()" action="prosesdaftarakun.php" method="POST">
 							<div class="form-group">
 								<input type="text" name="username" class="form-control" placeholder="masukan username anda">
 							</div><!--form-group-->
 							<div class="form-group">
 								<input type="password" name="password" class="form-control" placeholder="masukan password anda">
 							</div><!--form-group-->
              <div class="form-group">
 								<input type="password" name="konfirmasipassword" class="form-control" placeholder="masukan konfirmasi password anda">
 							</div><!--form-group-->
 							<div class="form-group">
 								<input type="submit" name="daftarakunmosumum" class="btn btn-success btn-lg" value="Daftar">
								<a href="login.php" class="btn btn-danger btn-lg" role="button" aria-pressed="true">Home</a><br><br>
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
