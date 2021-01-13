   <?php

  include "../koneksi.php"; 
   include "header.php";
  
  ?>
    
<div class="fixed-navbar">
	<div class="pull-left">
		<button type="button" class="menu-mobile-button glyphicon glyphicon-menu-hamburger js__menu_mobile"></button>
		<h1 class="page-title">Form Edit Informasi</h1>
		<!-- /.page-title -->
	</div>
	<!-- /.pull-left -->
	<div class="pull-right">
		
<a class="ico-item mdi mdi-logout" href="log-out.php" onclick="return confirm('Apakah anda yakin ingin keluar ?')"></a>

	</div>
	<!-- /.pull-right -->
</div>
<!-- /.fixed-navbar -->

<div id="wrapper">
	<div class="main-content">
		<div class="row small-spacing">
			<div class="col-lg-6 col-xs-12">
				<div class="box-content card white">
					<h4 class="box-title">Form Informasi</h4>

	
<?php

  $id_info = $_GET ['id'];
  
$sql = mysqli_query($koneksi,"select * from tabel_info where id_info='$id_info'");
$data = mysqli_fetch_array($sql);

  ?>
					<!-- /.box-title -->
					<div class="card-content">
		<form method="post" action="aksi-edit-info.php?id=<?php echo $id_info; ?>" enctype="multipart/form-data">
							<div class="form-group">
								 <input type="hidden" name="id_info" class="form-control" value="<?php echo $data['id_info'];?>">
                                    <input type="text" name="nama_info" class="form-control" required="" value="<?php echo $data['nama_info']; ?>">

							</div>

					
							<input type="submit" class="btn btn-primary btn-sm waves-effect waves-light" value="Simpan">
        <a href="form-informasi.php"> <input type="button"  class="btn btn-primary" value="Batal"></a>
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