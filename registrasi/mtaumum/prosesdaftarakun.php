<?php
// koneksi database
include ("../../lib/koneksi.php");

// menangkap data yang di kirim dari form
if (isset($_POST['daftarakunmtaumum'])) {

  $username =  mysqli_real_escape_string($koneksi,$_POST['username']);
  $password =  mysqli_real_escape_string($koneksi,$_POST['password']);
  $konfirmpassword =  mysqli_real_escape_string($koneksi,$_POST['konfirmpassword']);

  // menginput data ke database
  // $daftar 			=	 "INSERT INTO mtatentatif ( `nama`, `jurusan`,
  //                         `jenis_kelamin`, `ttl`, `alamat`, `hp`, `id_line`,`email`,`program_sertifikasi`)
  //                   VALUES (NULL, NULL, '$nama', NULL, '$jurusan', '$jenis_kelamin', '$ttl', '$alamat', '$hp', '$id_line', '$email', '$program_sertifikasi') WHERE id" or die(mysqli_error($koneksi)) ;

        // $daftar = mysqli_query($koneksi, "UPDATE mtatentatif SET nama='$nama',jurusan='$jurusan',jenis_kelamin='$jenis_kelamin',ttl='$ttl',alamat='$alamat',hp='$hp',id_line='$id_line',email='$email',program_sertifikasi='$program_sertifikasi' WHERE nim=$nim");
        $daftar = mysqli_query($koneksi, "INSERT INTO mtaumum_akun (username,password) VALUES('$username', '$password')");
        if($daftar) {
                header("location:login.php");
            }

         else {
            echo "Data tidak Terinput.";
            header("location:regisakun.php");
        }

}



?>
