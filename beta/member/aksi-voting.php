   <?php

  include "../koneksi.php"; ?>

<?php

$id_user=$_POST['id_user'];
$id_agen_tour=$_POST['id_agen_tour'];
$hari_ini=date('Y-m-d H:i:s');

$cek_tanggal = mysqli_query($koneksi,"select * from tabel_jadwal where id_tabel_jadwal='1' and  '$hari_ini' between tanggal_awal  and tanggal_akhir  ");
$a=mysqli_num_rows($cek_tanggal);
if(0 == $a) {
     echo "<script>window.alert('Jadwal sudah dilewati');
        window.location='form-pilih-agen.php'</script>";
} else {
$cek = mysqli_query($koneksi,"select id_user from tabel_voting where id_user = '$id_user'");
if(mysqli_num_rows($cek) > 0) {
    echo "<script>window.alert('voting hanya dapat dilakukan 1 kali.');
        window.location='form-pilih-agen.php'</script>";
} else {
    //bagian query Insert
    $sql = "INSERT INTO tabel_voting (id_user,id_agen_tour,hari_ini) VALUES ('$id_user','$id_agen_tour','$hari_ini')";
    $oke =mysqli_query($koneksi,$sql);
    if($oke) {
        echo "<script>window.alert('Sukses melakukan Voting.');
                window.location='form-pilih-agen.php'</script>";
    } else {
        echo "<script>window.alert('Gagal melakukan Voting.');
                window.location='form-pilih-agen.php'</script>";
    }
}
}
?>

