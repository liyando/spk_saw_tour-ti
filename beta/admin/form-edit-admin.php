   <?php

  include "../koneksi.php"; 
   include "header.php";

  
   $id_user = $_GET['id'];

   $sql = mysqli_query($koneksi,"select * from tabel_user where id_user='$id_user'");
	$data = mysqli_fetch_array($sql);

  ?>



<div class="fixed-navbar">
	<div class="pull-left">
		<button type="button" class="menu-mobile-button glyphicon glyphicon-menu-hamburger js__menu_mobile"></button>
		<h1 class="page-title">Form Edit Data User</h1>
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
					<h4 class="box-title">Form Data User</h4>

	
					<div class="card-content">
		<form method="post" action="aksi-edit-admin.php?id=<?php echo $id_user; ?>" enctype="multipart/form-data">
							<div class="form-group">
								
								<input type="hidden" class="form-control" name="id_user" value="<?php echo $data['id_user']; ?>" required= "required">
							</div>

							<div class="form-group">
								<label for="exampleInputEmail1">Username</label>
								<input type="text" class="form-control" name="username" value="<?php echo $data['username']; ?>" required= "required">
							</div>
							<div class="form-group">
								<label for="exampleInputEmail1">Password</label>
								<input type="text" class="form-control" name="password" value="<?php echo $data['password']; ?>" required= "required">
							</div>

							
							<div class="form-group">
					        <label>Status</label>
					        <p><select class="form-control" type="text" name="status" required ="required">
					        <option value="">--Pilih Status--</option>
					        <option value="1">Aktif</option>
					        <option value="0">Tidak Aktif</option>
				       
					        </select>
					        </div>
							
		<button type="submit" class="btn btn-primary">SIMPAN<i ></i></button>
        <a href="form-admin.php"> <input type="button"  class="btn btn-primary" value="Batal"></a>
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