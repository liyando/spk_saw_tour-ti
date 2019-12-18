   <?php

  include "../koneksi.php"; ?>

<?php


$nama_kriteria=$_POST['nama_kriteria'];
$bobot=$_POST['bobot'];
$sub=$_POST['sub'];
$kriteria=$_POST['kriteria'];



	$input = mysqli_query($koneksi,"INSERT INTO tabel_kriteria 
		(nama_kriteria,bobot,sub,kriteria) VALUES('$nama_kriteria','$bobot','$sub','$kriteria')") or die(mysqli_error($koneksi));

	
	if($input){
		
		echo "<script>alert('kriteria berhasil di tambah')
	location.replace('form-kriteria.php')</script>";

	}else{
		
	echo "<script>alert('Tambah data kriteria gagal')
	location.replace('form-kriteria.php')</script>";
		
	}
 

?>

