<?php
include "../koneksi.php";

$id_user = $_GET['id'];

     mysqli_query($koneksi,"DELETE FROM tabel_user WHERE id_user=$id_user");
    
        echo "<script>window.alert('Data Berhasil Dihapus.');
                            window.location='form-admin.php'</script>";
                            
?>

