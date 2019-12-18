<?php
// Load file koneksi.php
include "../koneksi.php";


$id_user= $_GET['id'];



$id_user = $_POST['id_user'];
$username = $_POST['username'];
$password = $_POST['password'];
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$jurusan = $_POST['jurusan'];
$angkatan = $_POST['angkatan'];
$jenis_kelamin = $_POST['jenis_kelamin'];

mysqli_query($koneksi,"UPDATE tabel_user set username='$username', password='$password' where id_user='$id_user'") or die(mysqli_error($koneksi));

  $mhs=mysqli_query($koneksi,"UPDATE tabel_mahasiswa set nim='$nim', nama='$nama', jurusan='$jurusan', angkatan='$angkatan', jenis_kelamin='$jenis_kelamin' where id_user='$id_user'") or die(mysqli_error($koneksi));

if ($mhs) {

echo "<script>alert('Berhasil mengubah data')
	location.replace('form-pendaftaran.php')</script>";

}else{
  echo "<script>alert('data gagal di update')
  location.replace('form-pendaftaran.php')</script>";
}
?>