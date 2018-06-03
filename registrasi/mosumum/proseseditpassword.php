<?php
session_start();

// koneksi database
include ("../../lib/koneksi.php");
$username = $_SESSION['username'];
// menangkap data yang di kirim dari form
if (isset($_POST['editpassword'])) {

  $passwordbaru = mysqli_real_escape_string($koneksi,$_POST['passwordbaru']);

  // menginput data ke database
  // $daftar 			=	 "INSERT INTO mostentatif ( `nama`, `jurusan`,
  //                         `jenis_kelamin`, `ttl`, `alamat`, `hp`, `id_line`,`email`,`program_sertifikasi`)
  //                   VALUES (NULL, NULL, '$nama', NULL, '$jurusan', '$jenis_kelamin', '$ttl', '$alamat', '$hp', '$id_line', '$email', '$program_sertifikasi') WHERE id" or die(mysqli_error($koneksi)) ;

        // $daftar = mysqli_query($koneksi, "UPDATE mostentatif SET nama='$nama',jurusan='$jurusan',jenis_kelamin='$jenis_kelamin',ttl='$ttl',alamat='$alamat',hp='$hp',id_line='$id_line',email='$email',program_sertifikasi='$program_sertifikasi' WHERE nim=$nim");
        $edit 		=	mysqli_query($koneksi, "UPDATE mosumum_akun
											SET `password` = '$passwordbaru'
											WHERE username = '$username'");
        if($edit) {
                header("location:index.php");
            }

         else {
            echo "Data tidak Terupdate.";
            header("location:editpassword.php");
        }

}



?>
