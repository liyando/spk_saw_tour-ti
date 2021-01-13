<?php

include "../koneksi.php";


$id_jadwal= $_GET['id'];

$awal = $_POST['awal'];
$akhir = $_POST['akhir'];

 $mhs=mysqli_query($koneksi,"UPDATE tabel_jadwal set tanggal_awal='$awal', tanggal_akhir='$akhir' where id_tabel_jadwal='$id_jadwal'");
  

if ($mhs) {

echo "<script>alert('Berhasil mengubah data')
	location.replace('form-beranda.php')</script>";

}else{
  echo "<script>alert('data gagal di update')
  location.replace('form-beranda.php')</script>";
}
?>