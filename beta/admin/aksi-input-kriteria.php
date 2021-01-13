   <?php

  include "../koneksi.php"; ?>

<?php


$nama_kriteria=$_POST['nama_kriteria'];



	$input = mysqli_query($koneksi,"INSERT INTO tabel_master_kriteria 
		(nama_kriteria) VALUES( '$nama_kriteria')") or die(mysqli_error($koneksi));
	
	if($input){
		
		echo "<script>alert('nama kriteria berhasil di tambah')
	location.replace('input-kriteria.php')</script>";

	}else{
		
	echo "<script>alert('Tambah nama Kriteria gagal')
	location.replace('input-kriteria.php')</script>";
		
	}
 

?>

