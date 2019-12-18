   <?php

  include "../koneksi.php"; ?>

<?php

$username=$_POST['username'];
$password=$_POST['password'];
$level='member';
$nim=$_POST['nim'];
$nama=$_POST['nama'];
$jurusan='Teknik Informatika';
$angkatan=$_POST['angkatan'];
$jenis_kelamin=$_POST['jenis_kelamin'];

mysqli_query($koneksi,"INSERT INTO tabel_user 
		(id_user,username,password,level) VALUES( '$id_user','$username','$password','member')") or die(mysqli_error($koneksi));

$query = mysqli_query($koneksi,"SELECT * FROM tabel_user ORDER BY id_user DESC limit 1") or die(mysqli_error($koneksi));
	while($datass = mysqli_fetch_assoc($query)){	
				
					$fr=$datass['id_user'];
				};
	$input = mysqli_query($koneksi,"INSERT INTO tabel_mahasiswa 
		(id_user,nim,nama,jurusan,angkatan,jenis_kelamin) VALUES( '$fr','$nim','$nama','Teknik Informatika','$angkatan','$jenis_kelamin')") or die(mysqli_error($koneksi));
	
	
	
	if($input){
		
		echo "<script>alert('Pendaftaran berhasil')
	location.replace('form-pendaftaran.php')</script>";

	}else{
		
	echo "<script>alert('pendaftaran gagal')
	location.replace('form-pendaftaran.php')</script>";
		
	}
 

?>

