 <?php

  include "../koneksi.php"; 
   include "header.php";
  ?>


<div class="fixed-navbar">
	<div class="pull-left">
		<button type="button" class="menu-mobile-button glyphicon glyphicon-menu-hamburger js__menu_mobile"></button>
		<h1 class="page-title">Beranda</h1>
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
					<h4 class="box-title">Data Pendaftar</h4>
					<table id="example" class="table table-striped table-bordered display" style="width:100%">
						<thead>
							<tr>
							<th>No.</th>
							<th>Nama</th>
							<th>Nim</th>
			
							</tr>

						</thead>

						<tbody>
		<?php
	
		$query = mysqli_query($koneksi,"SELECT * FROM tabel_mahasiswa ORDER BY nama DESC") or die(mysqli_error($koneksi));
		if(mysqli_num_rows($query) == 0){	
		echo '<tr><td colspan="6">Tidak ada data!</td></tr>';
		}else{	
			$no = 1;	
			while($data = mysqli_fetch_assoc($query)){	
				echo '<tr>';
					echo '<td>'.$no.'</td>';	
					echo '<td>'.$data['nama'].'</td>';	
					echo '<td>'.$data['nim'].'</td>';	
				
				echo '</tr>';
				
				$no++;	
				
			}
			
		}
		?>
							
						</tbody>
					</table>
				
				</div>

				<!-- /.box-content -->
			</div>

		<div class="row small-spacing">
			<div class="col-xs-12">
				<div class="box-content">
					<h4 class="box-title">Nama Agen Terdaftar</h4>
					<table id="example" class="table table-striped table-bordered display" style="width:100%">
						<thead>
							<tr>
							<th>No.</th>
						<th>Nama</th>
						
								
							</tr>

						</thead>

						<tbody>
		<?php
	
		$query = mysqli_query($koneksi,"SELECT * FROM tabel_kriteria ORDER BY bobot DESC") or die(mysqli_error($koneksi));
		if(mysqli_num_rows($query) == 0){	
		echo '<tr><td colspan="6">Tidak ada data!</td></tr>';
		}else{	
			$no = 1;	
			while($data = mysqli_fetch_assoc($query)){	
				echo '<tr>';
					echo '<td>'.$no.'</td>';	
					echo '<td>'.$data['nama_kriteria'].'</td>';
						
				echo '</tr>';
				
				$no++;	
				
			}
			
		}
		?>
							
						</tbody>
					</table>
				
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

