 <?php

  include "../koneksi.php"; 
   include "header.php";
  ?>


<div class="fixed-navbar">
	<div class="pull-left">
		<button type="button" class="menu-mobile-button glyphicon glyphicon-menu-hamburger js__menu_mobile"></button>
		<h1 class="page-title">Invoice</h1>
		<!-- /.page-title -->
	</div>
	<!-- /.pull-left -->
	<div class="pull-right">
	
		<!-- /.ico-item -->
		
		<a class="ico-item mdi mdi-logout" href="log-out.php" ></a>
	</div>
	<!-- /.pull-right -->
</div>
<!-- /.fixed-navbar -->
</div>

<div id="wrapper">
<div class="main-content">
		<div class="row small-spacing">
			<div class="col-xs-12">
				<div class="box-content">
				<?php
echo "<p align='right'><br/></p>";
echo "<p align='left'>Palangka Raya, ".date( 'd-m-Y' )."</p>";

?>
     <tr>
    <td><br/> </td>
 
    <td> </td>
  </tr>


<h4 class="box-title">------------------------------------------------------------------------------------------------------------------------</h4>
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


      <tr>
    <td><h5>AGEN VOTING</h5></td>
    <td></td>
    <td> </td>
  </tr>

</table>
	


<table border="1" width="100%">
<tr>


    <th>Nama</th>
    <th>Alamat</th>

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
   
        echo "</tr>";
    }
}else{ 
    echo "<tr><td colspan='4'>Data tidak ada</td></tr>";
}
?>
</table>
 
 <tr>
    <td><br/> </td>
    <td> </td>
  </tr>
<a href="print.php" class="btn btn-primary btn-sm waves-effect waves-light">CETAK</a>

				</div>

				<!-- /.box-content -->
			</div>


				<!-- /.box-content -->
			</div>
		<!-- /.row small-spacing -->		
	

		<footer class="footer">
			<ul class="list-inline">
				<li>2016 © NinjaAdmin.</li>
				<li><a href="#">Privacy</a></li>
				<li><a href="#">Terms</a></li>
				<li><a href="#">Help</a></li>
			</ul>
		</footer>
	</div>

	<!-- /.main-content -->
</div><!--/#wrapper -->
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
		<script src="assets/script/html5shiv.min.js"></script>
		<script src="assets/script/respond.min.js"></script>
	<![endif]-->
	<!-- 
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->

		<script src="assets/scripts/jquery.min.js"></script>
	<script src="assets/scripts/modernizr.min.js"></script>
	<script src="assets/plugin/bootstrap/js/bootstrap.min.js"></script>
	<script src="assets/plugin/mCustomScrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
	<script src="assets/plugin/nprogress/nprogress.js"></script>
	<script src="assets/plugin/sweet-alert/sweetalert.min.js"></script>
	<script src="assets/plugin/waves/waves.min.js"></script>

	<!-- Data Tables -->
	<script src="assets/plugin/datatables/media/js/jquery.dataTables.min.js"></script>
	<script src="assets/plugin/datatables/media/js/dataTables.bootstrap.min.js"></script>
	<script src="assets/plugin/datatables/extensions/Responsive/js/dataTables.responsive.min.js"></script>
	
	<script src="assets/scripts/datatables.demo.min.js"></script>

	<script src="assets/scripts/main.min.js"></script>

	
</body>
</html>

