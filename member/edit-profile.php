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
		<div class="ico-item">
			<a href="#" class="ico-item mdi mdi-magnify js__toggle_open" data-target="#searchform-header"></a>
			<form action="#" id="searchform-header" class="searchform js__toggle"><input type="search" placeholder="Search..." class="input-search"><button class="mdi mdi-magnify button-search" type="submit"></button></form>
			<!-- /.searchform -->
		</div>
		<!-- /.ico-item -->
		
		<a href="log-out.php" class="ico-item mdi mdi-logout js__logout"></a>
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
					<h4 class="box-title">Data Agen Terdaftar</h4>
				
<div class="col-md-9">
          <div class="block-web">
            <div class="header">
  <form method="post" action="proses_edit_admin.php?Email=<?php echo $Email; ?>" enctype="multipart/form-data">


					<table id="example" class="table table-striped table-bordered display" style="width:100%">
						<thead>
							<tr>
							<th>No.</th>
						<th>Nama</th>
						<th>Bobot</th>
						<th>Sub</th>
						<th>Kriteria</th>
								
							</tr>

						</thead>

						<tbody>
		<?php
	
		$query = mysql_query("SELECT * FROM tabel_kriteria ORDER BY bobot DESC") or die(mysql_error());
		if(mysql_num_rows($query) == 0){	
		echo '<tr><td colspan="6">Tidak ada data!</td></tr>';
		}else{	
			$no = 1;	
			while($data = mysql_fetch_assoc($query)){	
				echo '<tr>';
					echo '<td>'.$no.'</td>';	
					echo '<td>'.$data['nama_kriteria'].'</td>';
					echo '<td>'.$data['bobot'].'</td>';	
					echo '<td>'.$data['sub'].'</td>';	
					echo '<td>'.$data['kriteria'].'</td>';	
				
			
				echo '</tr>';
				
				$no++;	
				
			}
			
		}
		?>
							
						</tbody>
					</table>
				
				</div>
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

