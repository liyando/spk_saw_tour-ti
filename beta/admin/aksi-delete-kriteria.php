<?php
include "../koneksi.php";

$id_master_kriteria = $_GET['id'];

     mysqli_query($koneksi,"DELETE FROM tabel_master_kriteria WHERE id_master_kriteria=$id_master_kriteria");
    
        echo "<script>window.alert('Data Berhasil Dihapus.');
                            window.location='input-kriteria.php'</script>";
                            
?>

