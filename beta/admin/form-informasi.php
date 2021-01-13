   <?php

  include "../koneksi.php"; 
   include "header.php";
  ?>


<div class="fixed-navbar">
	<div class="pull-left">
		<button type="button" class="menu-mobile-button glyphicon glyphicon-menu-hamburger js__menu_mobile"></button>
		<h1 class="page-title">Kriteria</h1>
		<!-- /.page-title -->
	</div>
	<!-- /.pull-left -->
	<div class="pull-right">
		<div class="ico-item">
			
		</div>
		<!-- /.ico-item -->
		
<a class="ico-item mdi mdi-logout" href="log-out.php" onclick="return confirm('Apakah anda yakin ingin keluar ?')"></a>

	</div>
	<!-- /.pull-right -->
</div>
<!-- /.fixed-navbar -->
</div>
<div id="wrapper">
	<div class="main-content">
			<div class="col-lg-12 col-xs-12">
				<div class="box-content card white">
					<h4 class="box-title">Ubah Informasi</h4>
					<!-- /.box-title -->
		
	
			<div class="col-xs-12">
				<div class="box-content">
					<h4 class="box-title">INFORMASI</h4>
					<table id="example" class="table table-striped table-bordered display" style="width:100%">
			<thead>
		<tr>
			<th>No.</th>
			<th>Informasi</th>
			<th>Aksi</th>
		
			</tr>
		</thead>
		<tbody>

		
		<?php
		
		$query = mysqli_query($koneksi,"SELECT * FROM tabel_info ") or die(mysqli_error($koneks));
		if(mysqli_num_rows($query) == 0){	
		echo '<tr><td colspan="3">Tidak ada data!</td></tr>';
		}else{	
			$no = 1;	
			while($data = mysqli_fetch_assoc($query)){	
				echo '<tr>';
					echo '<td>'.$no.'</td>';	
					echo '<td>'.$data['nama_info'].'</td>';
					echo '<td><a href="form-edit-info.php?id='.$data['id_info'].'" onclick="return confirm(\'Yakin untuk mengubah data?\')">Edit</a></td>';
			
				echo '</tr>';
				
				$no++;	
				
			}
			
		}
		?>
	</table>

           
			


						</div>
					</div>
				</div>
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