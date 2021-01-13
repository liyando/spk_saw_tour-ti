<?php ob_start(); 
include "../koneksi.php" ;
session_start();
$username = $_SESSION['username'];
  $id_user  = $_SESSION['id_user'];
if(empty($_SESSION)){
  header("Location: login.php?pesan=");
}
?>

<html>
<head>
  <title>Cetak PDF</title>
    
   <style>
   table {border-collapse:collapse; table-layout:fixed;width: 630px;}
   table td {word-wrap:break-word;width: 20%;}
   </style>
</head>
<body>
          <?php
echo "<p align='right'><br/></p>";
echo "<p align='left'>Palangka Raya, ".date( 'l,d-m-Y h:i:s a' )."</p>";

?>
<h3 style="text-align: left;">--------------------------------------------------------------------------------------------------------</h3>

            <?php

   $id_user =  $_SESSION['id_user'];


  $query = "SELECT * FROM tabel_user INNER JOIN tabel_mahasiswa on tabel_user.id_user = tabel_mahasiswa.id_user where tabel_user.id_user = '$id_user' ";
  $sql = mysqli_query($koneksi, $query); 
  $data = mysqli_fetch_array($sql); 
  ?>
        

<table border="0">

   <tr>
    <td><h5 width="150">Bukti Pemilihan Agen</h5></td>
    </tr>

   <tr>
    <td width="150">NAMA Mahasiswa/i</td>
    <td width="250">: <?php echo $data['nama'];?> </td>
  </tr>
  
    <tr>
    <td width="150">NIM</td>
    <td width="250" >: <?php echo $data['nim'];?></td>
  </tr>

    <tr>
    <td width="150">Jenis Kelamin</td>
    <td width="250" >: <?php echo $data['jenis_kelamin'];?></td>
  </tr>
    <tr>
    <td width="150">Jurusan</td>
    <td width="250" >: <?php echo $data['jurusan'];?></td>
  </tr>
    <tr>
    <td width="150">Angkatan</td>
    <td width="250" >: <?php echo $data['angkatan'];?></td>
  </tr>


     <tr>
    <td><br/> </td>
    <td><br/> </td>
    <td> </td>
  </tr>

</table>
  

  <h5>AGEN VOTING</h5>
  
  
     <?php
   $id_user =  $_SESSION['id_user'];

  $query = "SELECT * FROM tabel_voting where id_user='$id_user'";
  $sql = mysqli_query($koneksi, $query); 
  $data = mysqli_fetch_array($sql); 
  ?>

<table border="0">

   <tr>
    <td width="200">tanggal Melakukan Voting</td>
    <td width="150">: <?php echo $data['hari_ini'];?> </td>
  </tr>
  

</table>
     
<br/>



<table border="1" width="1090">
<tr>


    <th>Nama</th>
    <th>Alamat</th>
    <th>Paket Ditawarkan</th>

</tr>
<?php

  include "../koneksi.php"; 
   $id_user =  $_SESSION['id_user'];

 
$query = "SELECT * FROM agen_tour INNER JOIN tabel_voting on agen_tour.id_agen_tour = tabel_voting.id_agen_tour where tabel_voting.id_user= '$id_user' ";
$sql = mysqli_query($koneksi, $query); 
$row = mysqli_num_rows($sql); 
 
if($row > 0){ 
    while($data = mysqli_fetch_array($sql)){ 
        echo "<tr>";
        echo "<td>".$data['agen_tour']."</td>";
        echo "<td>".$data['alamat']."</td>";
        echo "<td>".$data['deskripsi']."</td>";
   
        echo "</tr>";
    }
}else{ 
    echo "<tr><td colspan='4'>Data tidak ada</td></tr>";
}
?>
</table>

<table border="0">
<?php
$query = "SELECT COUNT(*) as jumlah FROM tabel_user WHERE level LIKE '%member%' ";
$sql = mysqli_query($koneksi, $query); 
  while($data = mysqli_fetch_array($sql)){ 
  
$jumlah = $data['jumlah'];

}
$query = "SELECT COUNT(*) as jumlah FROM tabel_voting ";
$sql = mysqli_query($koneksi, $query); 
  while($datax = mysqli_fetch_array($sql)){ 
  
$jumlah1 = $datax['jumlah'];

}
$jumlah2=$jumlah-$jumlah1;
?>
 <tr>
    <td  width="300"><h5>Jumlah User </h5></td>
     <td width="250"><h5>: <?php echo $jumlah;?></h5></td>
    </tr>

   <tr>
    <td width="300">User Sudah Melakukan Voting</td>
    <td width="250">: <?php echo $jumlah1;?> </td>
  </tr>
  
    <tr>
    <td width="300">User Belum Melakukan Voting</td>
    <td width="250" >: <?php echo $jumlah2;?></td>
  </tr>


     <tr>
    <td><br/> </td>
    <td><br/> </td>
    <td> </td>
  </tr>

</table>

</body>
</html>
<?php
$html = ob_get_contents();
ob_end_clean();
        
require_once('html2pdf/html2pdf.class.php');
$pdf = new HTML2PDF('P','A4','en');
$pdf->WriteHTML($html);
$pdf->Output('Cetak_PDF.pdf', 'D');
?>