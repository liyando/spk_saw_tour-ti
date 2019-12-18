<?php
// Load file koneksi.php
include "../koneksi.php";


$id_user= $_GET['id'];




$username = $_POST['username'];
$password = $_POST['password'];
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$jurusan = $_POST['jurusan'];
$angkatan = $_POST['angkatan'];
$jenis_kelamin = $_POST['jenis_kelamin'];

mysqli_query($koneksi,"UPDATE tabel_user set username='$username', password='$password' where id_user='$id_user'");

  $mhs=mysqli_query($koneksi,"UPDATE tabel_mahasiswa set nim='$nim', nama='$nama', jurusan='$jurusan', angkatan='$angkatan', jenis_kelamin='$jenis_kelamin' where id_user='$id_user'");

if ($mhs) {

echo "<script>alert('Berhasil mengubah data')
	location.replace('profile.php')</script>";

}else{
  echo "<script>alert('data gagal di update')
  location.replace('profile.php')</script>";
}
?>