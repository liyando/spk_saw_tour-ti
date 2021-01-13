   <?php

  include "../koneksi.php"; ?>

<?php


$angkatan=$_POST['angkatan'];



	$input = mysqli_query($koneksi,"INSERT INTO tabel_angkatan 
		(angkatan) VALUES( '$angkatan')") or die(mysqli_error($koneksi));
	
	if($input){
		
		echo "<script>alert('Tahun angkatan berhasil di tambah')
	location.replace('input-angkatan.php')</script>";

	}else{
		
	echo "<script>alert('Tambah data tahun angkatan gagal')
	location.replace('input-angkatan.php')</script>";
		
	}
 

?>

