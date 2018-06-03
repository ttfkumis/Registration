<?php
// koneksi database
include ("../../lib/koneksi.php");

// menangkap data yang di kirim dari form
if (isset($_POST['edit'])) {

  $username = mysqli_real_escape_string($koneksi,$_POST['username']);
  $nik = mysqli_real_escape_string($koneksi,$_POST['nik']);
  $nama = mysqli_real_escape_string($koneksi,$_POST['nama']);
  $instansi = mysqli_real_escape_string($koneksi,$_POST['instansi']);
  $jenis_kelamin = mysqli_real_escape_string($koneksi,$_POST['jenis_kelamin']);
  $ttl = mysqli_real_escape_string($koneksi,$_POST['ttl']);
  $alamat = mysqli_real_escape_string($koneksi,$_POST['alamat']);
  $hp = mysqli_real_escape_string($koneksi,$_POST['hp']);
  $id_line = mysqli_real_escape_string($koneksi,$_POST['id_line']);
  $email = mysqli_real_escape_string($koneksi,$_POST['email']);
  $program_sertifikasi = mysqli_real_escape_string($koneksi,$_POST['program_sertifikasi']);

  // menginput data ke database
  // $daftar 			=	 "INSERT INTO mostentatif ( `nama`, `jurusan`,
  //                         `jenis_kelamin`, `ttl`, `alamat`, `hp`, `id_line`,`email`,`program_sertifikasi`)
  //                   VALUES (NULL, NULL, '$nama', NULL, '$jurusan', '$jenis_kelamin', '$ttl', '$alamat', '$hp', '$id_line', '$email', '$program_sertifikasi') WHERE id" or die(mysqli_error($koneksi)) ;

        // $daftar = mysqli_query($koneksi, "UPDATE mostentatif SET nama='$nama',jurusan='$jurusan',jenis_kelamin='$jenis_kelamin',ttl='$ttl',alamat='$alamat',hp='$hp',id_line='$id_line',email='$email',program_sertifikasi='$program_sertifikasi' WHERE nim=$nim");
        $edit 		=	mysqli_query($koneksi, "UPDATE mosumum_peserta
											SET `nik` = '$nik', `nama` = '$nama', `instansi` = '$instansi', `jenis_kelamin` = '$jenis_kelamin',
												`ttl` = '$ttl', `alamat` = '$alamat', `hp` = '$hp', `id_line` = '$id_line', `email` = '$email',
                        `program_sertifikasi` = '$program_sertifikasi'
											WHERE username = '$username'");
        if($edit) {
                header("location:lihatpeserta.php");
            }

         else {
            echo "Data tidak Terupdate.";
            header("location:edit.php");
        }

}



?>
