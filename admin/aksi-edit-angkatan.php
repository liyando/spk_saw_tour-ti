<?php
include "../koneksi.php";


$id_angkatan = $_POST['id_angkatan'];
$angkatan = $_POST['angkatan'];

   
        $sql = mysqli_query($koneksi,"UPDATE tabel_angkatan set angkatan = '$angkatan' WHERE id_angkatan = '$id_angkatan'");
      
        if($sql) {
            echo "<script>window.alert('Sukses melakukan ubah tahun angkatan.');
                            window.location='input-angkatan.php'</script>";
        }else{
            echo "<script>window.alert('Gagal melakukan ubahtahun angkatan.');
                            window.location='input-angkatan.php'</script>";
        }


?>