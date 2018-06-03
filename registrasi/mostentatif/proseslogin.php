 <?php
// mengaktifkan session php
session_start();

// menghubungkan dengan koneksi
include ('../../lib/koneksi.php');

// menangkap data yang dikirim dari form
$nim = mysqli_real_escape_string($koneksi,$_POST['nim']);
$password = mysqli_real_escape_string($koneksi,$_POST['password']);

// menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($koneksi,"select * from mostentatif_akun where nim='$nim' and password='$password'");

// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);

if($cek > 0){
	$_SESSION['nim'] = $nim;
	$_SESSION['status'] = "login";
	header("location:index.php");
}else{
	header("location:login.php?pesan=gagal");
}
?>
