   <?php

  include "../koneksi.php"; 
   include "header.php";

 $id_agen_tour = $_GET['id'];
   $sql = mysqli_query($koneksi,"select * from agen_tour where id_agen_tour='$id_agen_tour'");
	$data = mysqli_fetch_array($sql);

  ?>


<div class="fixed-navbar">
	<div class="pull-left">
		<button type="button" class="menu-mobile-button glyphicon glyphicon-menu-hamburger js__menu_mobile"></button>
		<h1 class="page-title">Form Edit Data Agen Tour</h1>
		<!-- /.page-title -->
	</div>
	<!-- /.pull-left -->
	<div class="pull-right">
		
		<a href="#" class="ico-item mdi mdi-logout js__logout"></a>
	</div>
	<!-- /.pull-right -->
</div>
<!-- /.fixed-navbar -->

<div id="wrapper">
	<div class="main-content">
		<div class="row small-spacing">
			<div class="col-lg-6 col-xs-12">
				<div class="box-content card white">
					<h4 class="box-title">Form Data Agen Tour</h4>

	
					<div class="card-content">
		<form method="post" action="aksi-edit-agen-tour.php?id=<?php echo $id_agen_tour; ?>" enctype="multipart/form-data">
							<div class="form-group">
								
								<input type="hidden" class="form-control" name="id_user" value="<?php echo $data['id_agen_tour']; ?>" required= "required">
							</div>

							<div class="form-group">
								<label for="exampleInputEmail1">Nama</label>
								<input type="text" class="form-control" name="nama" value="<?php echo $data['nama']; ?>" required= "required">
							</div>
							<div class="form-group">
								<label for="exampleInputEmail1">Agen Tour</label>
								<input type="text" class="form-control" name="agen_tour" value="<?php echo $data['agen_tour']; ?>" required= "required">
							</div>
							<div class="form-group">
								<label for="exampleInputEmail1">Alamat</label>
								<input type="text" class="form-control" name="alamat" value="<?php echo $data['alamat']; ?>" required= "required">
							</div>
					
		<button type="submit" class="btn btn-primary">SIMPAN<i ></i></button>
        <a href="form-agen-tour.php"> <input type="button"  class="btn btn-primary" value="Batal"></a>
          </form>
						
					</div>
					<!-- /.card-content -->
				</div>
				<!-- /.box-content -->
			
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

	<script src="assets/scripts/main.min.js"></script>
</body>
</html>