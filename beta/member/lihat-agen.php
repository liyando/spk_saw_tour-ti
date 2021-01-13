 <?php

  include "../koneksi.php"; 
   include "header.php";
    $kri=mysqli_query($koneksi,"SELECT  * FROM `tabel_kriteria` GROUP by kriteria");
                            $ea=mysqli_num_rows($kri);
							$los=$ea;
							echo $los;
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
			
			<!-- /.searchform -->
		</div>
		<!-- /.ico-item -->
		
<a class="ico-item mdi mdi-logout" href="log-out.php" onclick="return confirm('Apakah anda yakin ingin keluar ?')"></a>
	<!-- /.pull-right -->
</div>
<!-- /.fixed-navbar -->
</div>
<div id="wrapper">
<div class="main-content">
		<div class="row small-spacing">
			

		<div class="row small-spacing">
			<div class="col-xs-12">
				<div class="box-content">
					<h4 class="box-title"> Perhitungan </h4>
					 <table class="table table-striped table-hover table-bordered">
                              <thead>

                              <tr>
                                  <th  rowspan="2" style="vertical-align: middle" class="text-center">Alternatif</th>
                                  <th  rowspan="2" style="vertical-align: middle" class="text-center">Deskripsi</th>
                                  <th colspan="<?php echo $los+1;?>" class="text-center">kriteria</th>
                              </tr>
							     <tr>
								  <?php 
							    $i=1;
                            $kriteria_a=mysqli_query($koneksi,"SELECT * FROM `tabel_kriteria` group by kriteria order by id_kriteria");
                            while($res=mysqli_fetch_array($kriteria_a)){
							   ?>
                                  <th><?php echo $res['kriteria'];?></th>

                                  
							<?php } ?>	
							     </tr>
                              </thead>
                              <tbody>
					   <?php 
							    
                            $tp=mysqli_query($koneksi,"SELECT * FROM `tabel_kriteria` join agen_tour on tabel_kriteria.sub=agen_tour.id_agen_tour group by agen_tour");
                            while($r=mysqli_fetch_array($tp)){
								$krite=$r['kriteria'];
								$id_agen=$r['id_agen_tour'];
							   ?>
                              <tr>
							       <td><?php echo $r['agen_tour']; ?></td>
							       <td><?php echo $r['deskripsi']; ?></td>
							      <?php  $kriteria_a=mysqli_query($koneksi,"SELECT * FROM `tabel_kriteria` where   sub='$id_agen'");
                            while($res=mysqli_fetch_array($kriteria_a)){ ?>
							<td> <?php echo $res['nama_kriteria'];

							}								?></td>
                          
                              </tr>
							<?php }
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

