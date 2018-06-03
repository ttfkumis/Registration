<?php
// koneksi database
include ("../../lib/koneksi.php");


// menangkap data yang di kirim dari form
if(isset($_POST['uploadbuktibayar'])) {
        $username       = mysqli_real_escape_string($koneksi,$_POST['username']);
        $foto           = $_FILES['gambar']['name'];
        $tmp            = $_FILES['gambar']['tmp_name'];


        $path = "img/uploadbayar/$foto";

        if(move_uploaded_file($tmp, $path)){ // Cek apakah gambar berhasil diupload atau tidak
        // Proses simpan ke Database
        $sql = mysqli_query($koneksi, " UPDATE mtaumum_peserta
                            SET  bukti_bayar='$foto'
                            WHERE username='$username' ")or die (mysqli_error()); // Eksekusi/ Jalankan query dari variabel $query
        if($sql){ // Cek jika proses simpan ke database sukses atau tidak
          // Jika Sukses, Lakukan :
          header("location: buktibayar.php"); // Redirect ke halaman index.php
        }else{
          // Jika Gagal, Lakukan :
          echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
          header("location: uploadbuktibayar.php");
        }
      }
      else{
        // Jika gambar gagal diupload, Lakukan :
        echo "Maaf, Gambar gagal untuk diupload.";
        header("location: uploadbuktibayar.php");
      }
}
?>
