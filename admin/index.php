 <?php

  include "../koneksi.php"; 
   include "header.php";
  ?>


<div class="fixed-navbar">
	<div class="pull-left">
		<button type="button" class="menu-mobile-button glyphicon glyphicon-menu-hamburger js__menu_mobile"></button>
		<h1 class="page-title">Home</h1>
		<!-- /.page-title -->
	</div>
	<!-- /.pull-left -->
	<div class="pull-right">
		<div class="ico-item">
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
		<div class="row small-spacing">
					<div class="col-lg-4 col-xs-12">
				<div class="box-content">
					<h4 class="box-title text-info">Total Admin</h4>
					<!-- /.box-title -->
					<!-- /.dropdown js__dropdown -->
					<div class="content widget-stat">
						
						<div class="right-content">
							<h2 class="counter text-info"><?php 
							 $kri=mysqli_query($koneksi,"SELECT  * FROM `tabel_user` where level='admin'");
                            $ea=mysqli_num_rows($kri);
							$los=$ea;
							echo $los;
							
							?></h2>
							<!-- /.text -->
						</div>
						<!-- .right-content -->
					</div>
					<!-- /.content widget-stat -->
				</div>
				<!-- /.box-content -->
			</div>
			<!-- /.col-lg-4 col-xs-12 -->
				<div class="col-lg-4 col-xs-12">
				<div class="box-content">
					<h4 class="box-title text-info">Total Mahasiswa</h4>
					<!-- /.box-title -->
					<!-- /.dropdown js__dropdown -->
					<div class="content widget-stat">
					
						<div class="right-content">
							<h2 class="counter text-info"><?php 
							 $kri=mysqli_query($koneksi,"SELECT  * FROM `tabel_user` where level='member'");
                            $ea=mysqli_num_rows($kri);
							$los=$ea;
							echo $los;
							
							?></h2>
							<!-- /.text -->
						</div>
						<!-- .right-content -->
					</div>
					<!-- /.content widget-stat -->
				</div>
				<!-- /.box-content -->
			</div>
			<!-- /.col-lg-4 col-xs-12 -->

			<div class="col-lg-4 col-xs-12">
				<div class="box-content">
					<h4 class="box-title text-success">Total Voting</h4>
					<!-- /.box-title -->
					<div class="content widget-stat">
					
						<div class="right-content">
							<h2 class="counter text-success"><?php 
							 $kri=mysqli_query($koneksi,"SELECT  * FROM `tabel_voting`");
                            $ea=mysqli_num_rows($kri);
							$los=$ea;
							echo $los;
							
							?></h2>
							<!-- /.counter -->
							<!-- /.text -->
						</div>
						<!-- .right-content -->
					</div>
					<!-- /.content widget-stat -->
				</div>
				<!-- /.box-content -->
			</div>
			<!-- /.col-lg-4 col-xs-12 -->


		</div>
		<!-- /.row -->

		<div class="row small-spacing">
		
			<!-- /.col-lg-6 col-xs-12 -->
			</div>
		<!-- /.row -->		
		
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

	<!-- Morris Chart -->
	<script src="assets/plugin/chart/morris/morris.min.js"></script>
	<script src="assets/plugin/chart/morris/raphael-min.js"></script>
	<script src="assets/scripts/chart.morris.init.min.js"></script>

	<!-- Flot Chart -->
	<script src="assets/plugin/chart/plot/jquery.flot.min.js"></script>
	<script src="assets/plugin/chart/plot/jquery.flot.tooltip.min.js"></script>
	<script src="assets/plugin/chart/plot/jquery.flot.categories.min.js"></script>
	<script src="assets/plugin/chart/plot/jquery.flot.pie.min.js"></script>
	<script src="assets/plugin/chart/plot/jquery.flot.stack.min.js"></script>
	<script src="assets/scripts/chart.flot.init.min.js"></script>

	<!-- Sparkline Chart -->
	<script src="assets/plugin/chart/sparkline/jquery.sparkline.min.js"></script>
	<script src="assets/scripts/chart.sparkline.init.min.js"></script>

	<!-- FullCalendar -->
	<script src="assets/plugin/moment/moment.js"></script>
	<script src="assets/plugin/fullcalendar/fullcalendar.min.js"></script>
	<script src="assets/scripts/fullcalendar.init.js"></script>

	<script src="assets/scripts/main.min.js"></script>
</body>
</html>

