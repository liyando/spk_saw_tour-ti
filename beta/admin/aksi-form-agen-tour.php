   <?php

  include "../koneksi.php"; ?>

<?php


$nama=$_POST['nama'];
$agen_tour=$_POST['agen_tour'];
$deskripsi=$_POST['deskripsi'];
$alamat=$_POST['alamat'];




	$input = mysqli_query($koneksi,"INSERT INTO agen_tour 
		(nama,agen_tour,deskripsi,alamat) VALUES('$nama','$agen_tour','$deskripsi','$alamat')") or die(mysqli_error($koneksi));

	
	if($input){
		
		echo "<script>alert('Data agen tour berhasil di tambah')
	location.replace('form-agen-tour.php')</script>";

	}else{
		
	echo "<script>alert('Tambah data agen tour gagal')
	location.replace('form-agen-tour.php')</script>";
		
	}
 

?>

