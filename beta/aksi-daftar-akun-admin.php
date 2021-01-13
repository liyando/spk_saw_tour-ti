<?php
  include "koneksi.php";


$username=$_POST['username'];
$password=$_POST['password'];
$level= 'admin';

	$cek = mysqli_query($koneksi, "SELECT * FROM tabel_user WHERE id_user='$id_user'") or die(mysqli_error($koneksi));
			
	if(mysqli_num_rows($cek) == 0){
	$sql = mysqli_query($koneksi, "INSERT INTO tabel_user 
		(id_user,username,password,level) VALUES( '$id_user','$username','$password','admin')") or die(mysqli_error($koneksi));
				
				if($sql){
					echo '<script>alert("Berhasil daftar Akun."); document.location="page-login.php";</script>';
				}else{
					echo '<div class="alert alert-warning">Gagal melakukan proses tambah data.</div>';
				}
			}else{
				echo '<div class="alert alert-warning">Gagal, NIM sudah terdaftar.</div>';
			}


?>
