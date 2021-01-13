<?php
include "../koneksi.php";

$id_kriteria = $_GET['id'];
 mysqli_query($koneksi,"DELETE FROM tabel_kriteria WHERE id_kriteria=$id_kriteria");

    
        echo "<script>window.alert('Data Berhasil Dihapus.');
                            window.location='form-kriteria.php'</script>";
                            
?>
