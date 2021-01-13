<?php

include "../koneksi.php";


$id_user= $_GET['id'];

$username = $_POST['username'];
$password = $_POST['password'];
$status = $_POST['status'];

 $mhs=mysqli_query($koneksi,"UPDATE tabel_user set username='$username', password='$password', status='$status' where id_user='$id_user'");
  

if ($mhs) {

echo "<script>alert('Berhasil mengubah data')
	location.replace('form-admin.php')</script>";

}else{
  echo "<script>alert('data gagal di update')
  location.replace('form-admin.php')</script>";
}
?>