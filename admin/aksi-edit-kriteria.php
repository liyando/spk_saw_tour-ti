<?php

include "../koneksi.php";


$id_kriteria= $_GET['id'];

$nama_kriteria = $_POST['nama_kriteria'];
$bobot = $_POST['bobot'];
$sub = $_POST['sub'];
$kriteria = $_POST['kriteria'];


 $mhs=mysqli_query($koneksi,"UPDATE tabel_kriteria set nama_kriteria='$nama_kriteria', bobot='$bobot', sub='$sub', kriteria='$kriteria' where id_kriteria='$id_kriteria'");

  

if ($mhs) {

echo "<script>alert('Berhasil mengubah data')
	location.replace('form-kriteria.php')</script>";

}else{
  echo "<script>alert('data gagal di update')
  location.replace('form-kriteria.php')</script>";
}
?>