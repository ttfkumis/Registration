<?php
// mengaktifkan session php
session_start();

// menghubungkan dengan koneksi
include ('../../lib/koneksi.php');

// menangkap data yang dikirim dari form
$username = mysqli_real_escape_string($koneksi,$_POST['username']);
$password = mysqli_real_escape_string($koneksi,$_POST['password']);

// menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($koneksi,"select * from mosumum_akun where username='$username' and password='$password'");

// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);

if($cek > 0){
 $_SESSION['username'] = $username;
 $_SESSION['status'] = "login";
 header("location:index.php");
}else{
 header("location:login.php?pesan=gagal");
}
?>
