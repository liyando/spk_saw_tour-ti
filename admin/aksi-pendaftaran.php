   <?php

  include "../koneksi.php"; ?>

<?php

$id_user=$_POST['id_user'];
$nim=$_POST['nim'];
$nama=$_POST['nama'];
$jurusan=$_POST['jurusan'];
$angkatan=$_POST['angkatan'];
$jenis_kelamin=$_POST['jenis_kelamin'];

	$input = mysql_query("INSERT INTO tabel_mahasiswa 
		(id_user,nim,nama,jurusan,angkatan,jenis_kelamin) VALUES( '$id_user','$nim','$nama','$jurusan','$angkatan','$jenis_kelamin')") or die(mysql_error());
	
	
	if($input){
		
		echo "<script>alert('Pendaftaran berhasil')
	location.replace('form-pendaftaran.php')</script>";

	}else{
		
	echo "<script>alert('pendaftaran gagal')
	location.replace('form-pendaftaran.php')</script>";
		
	}
 

?>

