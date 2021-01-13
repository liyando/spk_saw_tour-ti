<?php
include "../koneksi.php";

$id_agen_tour = $_GET['id'];
 mysqli_query($koneksi,"DELETE FROM agen_tour WHERE id_agen_tour=$id_agen_tour");

    
        echo "<script>window.alert('Data Berhasil Dihapus.');
                            window.location='form-agen-tour.php'</script>";
                            
?>
