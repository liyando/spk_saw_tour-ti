   <?php

  include "../koneksi.php"; ?>

<?php

$nama=$_POST['nama'];
$agen_tour=$_POST['agen_tour'];
$alamat=$_POST['alamat']:
$nama_kriteria=$_POST['nama_kriteria'];



mysql_query("INSERT INTO agen_tour 
		(id_kriteria,nama,agen_tour,alamat) VALUES( '$id_kriteria','$nama','$agen_tour','alamat')") or die(mysql_error());

$query = mysql_query("SELECT * FROM agen_tour ORDER BY id_agen_tour DESC limit 1") or die(mysql_error());
	while($datass = mysql_fetch_assoc($query)){	
				
					$fr=$datass['id_kriteria'];
				};
	$input = mysql_query("INSERT INTO tabel_kriteria 
		(id_kriteria,nama_kriteria) VALUES( '$fr','nama_kriteria')") or die(mysql_error());
	
	
	
	if($input){
		
		echo "<script>alert('Pendaftaran berhasil')
	location.replace('form-agen-tour.php')</script>";

	}else{
		
	echo "<script>alert('pendaftaran gagal')
	location.replace('form-agen-tour.php')</script>";
		
	}
 

?>

