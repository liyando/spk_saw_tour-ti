<?php
include "../koneksi.php";

$id_angkatan = $_GET['id'];

     mysqli_query($koneksi,"DELETE FROM tabel_angkatan WHERE id_angkatan=$id_angkatan");
    
        echo "<script>window.alert('Data Berhasil Dihapus.');
                            window.location='input-angkatan.php'</script>";
                            
?>

