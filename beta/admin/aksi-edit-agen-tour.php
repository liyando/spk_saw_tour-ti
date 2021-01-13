<?php

include "../koneksi.php";


$id_agen_tour= $_GET['id'];

$nama = $_POST['nama'];
$agen_tour = $_POST['agen_tour'];
$deskripsi = $_POST['deskripsi'];
$alamat = $_POST['alamat'];

 $mhs=mysqli_query($koneksi,"UPDATE agen_tour set nama='$nama', agen_tour='$agen_tour', deskripsi='$deskripsi', alamat='$alamat' where id_agen_tour='$id_agen_tour'");

  

if ($mhs) {

echo "<script>alert('Berhasil mengubah data')
	location.replace('form-agen-tour.php')</script>";

}else{
  echo "<script>alert('data gagal di update')
  location.replace('form-agen-tour.php')</script>";
}
?>