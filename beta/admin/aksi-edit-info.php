<?php
include "../koneksi.php";


$id_info = $_POST['id_info'];
$nama_info = $_POST['nama_info'];

   
        $sql = mysqli_query($koneksi,"UPDATE tabel_info set nama_info = '$nama_info' WHERE id_info = '$id_info'");
      
        if($sql) {
            echo "<script>window.alert('Sukses melakukan ubah Informasi.');
                            window.location='form-informasi.php'</script>";
        }else{
            echo "<script>window.alert('Gagal melakukan ubah Informasi.');
                            window.location='form-informasi.php'</script>";
        }


?>