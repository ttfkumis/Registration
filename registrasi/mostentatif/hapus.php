<?php
  session_start();
  include("koneksi.php");

  $nim = $_SESSION['nim'];

  $delete 	=	mysqli_query($koneksi, "DELETE FROM mostentatif_peserta WHERE nim = $nim");
  if ($delete) {
    echo "DATA SUDAH TERHAPUS";
    header("location: lihatpeserta.php");
  }


 ?>
