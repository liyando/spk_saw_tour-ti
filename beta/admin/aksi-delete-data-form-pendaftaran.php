<?php
include "../koneksi.php";

$id_user = $_GET['id'];
 mysqli_query($koneksi,"DELETE FROM tabel_mahasiswa WHERE id_user=$id_user");
     mysqli_query($koneksi,"DELETE FROM tabel_user WHERE id_user=$id_user");
     mysqli_query($koneksi,"DELETE FROM tabel_voting WHERE id_user=$id_user");
    
        echo "<script>window.alert('Data Berhasil Dihapus.');
                            window.location='form-pendaftaran.php'</script>";
                            
?>
