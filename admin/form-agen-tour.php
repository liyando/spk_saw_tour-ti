   <?php

  include "../koneksi.php"; 
   include "header.php";
  ?>


<div class="fixed-navbar">
	<div class="pull-left">
		<button type="button" class="menu-mobile-button glyphicon glyphicon-menu-hamburger js__menu_mobile"></button>
		<h1 class="page-title">Agen Tour</h1>
		<!-- /.page-title -->
	</div>
	<!-- /.pull-left -->
	<div class="pull-right">
		<div class="ico-item">
			<a href="#" class="ico-item mdi mdi-magnify js__toggle_open" data-target="#searchform-header"></a>
			<form action="#" id="searchform-header" class="searchform js__toggle"><input type="search" placeholder="Search..." class="input-search"><button class="mdi mdi-magnify button-search" type="submit"></button></form>
			<!-- /.searchform -->
		</div>
		<!-- /.ico-item -->
		
<a class="ico-item mdi mdi-logout" href="log-out.php" ></a>
	</div>
	<!-- /.pull-right -->
</div>
<!-- /.fixed-navbar -->
</div>
<div id="wrapper">
<div class="main-content">
			<div class="col-lg-12 col-xs-12">
				<div class="box-content card white">
					<h4 class="box-title">Tambah Agen Tour</h4>
					<!-- /.box-title -->
					<div class="card-content">
						<form action="aksi-form-agen-tour.php" method="post">
							
							
							<div class="form-group">
								<label for="exampleInputPassword1">Nama</label>
								<input class="form-control" id="nama" name='nama' placeholder="">
							</div>
							<div class="form-group">
								<label for="exampleInputPassword1">Agen Tour</label>
								<input class="form-control" id="agen_tour" name='agen_tour' placeholder="">
							</div>
							<div class="form-group">
								<label for="exampleInputPassword1">alamat</label>
								<input class="form-control" id="alamat" name='alamat' placeholder="">
							</div>
						
													
							<button type="submit" class="btn btn-primary btn-sm waves-effect waves-light">INPUT</button>
						</form>
				</p>
						</div>
	
			<div class="col-xs-12">
				<div class="box-content">
					<h4 class="box-title">Data Agen Tour</h4>
					<table id="example" class="table table-striped table-bordered display" style="width:100%">
			<thead>
		<tr>
			<th>No.</th>
			<th>Nama</th>
			<th>Agen Tour</th>
			<th>Alamat</th>
			<th>Aksi</th>
		
			</tr>
		</thead>
		<tbody>
		<?php
		
		include('../koneksi.php');
		
$query = mysqli_query($koneksi,"SELECT * FROM agen_tour ORDER BY agen_tour DESC") or die(mysqli_error($koneksi));
		if(mysqli_num_rows($query) == 0){	
		echo '<tr><td colspan="7">Tidak ada data!</td></tr>';
		}else{	
			$no = 1;	
			while($data = mysqli_fetch_assoc($query)){	
				echo '<tr>';
					echo '<td>'.$no.'</td>';	
					
					echo '<td>'.$data['nama'].'</td>';	
					echo '<td>'.$data['agen_tour'].'</td>';	
					echo '<td>'.$data['alamat'].'</td>';	
					echo '<td><a href="form-edit-agen-tour.php?id='.$data['id_agen_tour'].'">Edit</a> | <a href="aksi-delete-data-form-agen-tour.php?id='.$data['id_agen_tour'].'" onclick="return confirm(\'Yakin?\')">Hapus</a></td>';	
			
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