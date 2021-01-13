   <?php

  include "koneksi.php"; ?>
  
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Home</title>
	<link rel="stylesheet" href="admin/assets/styles/style.min.css">

	<!-- Waves Effect -->
	<link rel="stylesheet" href="admin/assets/plugin/waves/waves.min.css">

</head>

	
</div>

	
</div>
<!-- /#message-popup -->
<div id="single-wrapper">
	<div class="inside">
	
			<div class="col-lg-11 col-xs-12">
				<div class="box-content card white">
					<h4 class="box-title">DAFTAR AKUN MEMBER</h4>
					<!-- /.box-title -->
					<div class="card-content">
						<form action="aksi-daftar-akun-member.php" method="post">
						
							
							<div class="form-group">
								<label for="exampleInputEmail1">Nama</label>
								<input type="text" class="form-control" id="nama" name='nama' placeholder="Nama">
							</div>
							<div class="form-group">
								<label for="exampleInputEmail1">Nim</label>
								<input type="text" class="form-control" id="nim" name='nim' placeholder="tanpa spasi">
							</div>
							<div class="form-group">
								<label for="exampleInputEmail1">Username</label>
								<input type="text" class="form-control" id="username" name='username' placeholder="username">
							</div>
							<div class="form-group">
								<label for="exampleInputEmail1">Password</label>
								<input type="password" class="form-control" id="password" name='password' placeholder="password">
							</div>

							<div class="form-group">
					        <label>Angkatan</label>
					        <p><select class="form-control" type="text" name="angkatan" required ="required">
					        <option value="">--Pilih Angkatan--</option>
					         <?php
					         $tampil=mysqli_query($koneksi,"SELECT * FROM tabel_angkatan");
					         while($r=mysqli_fetch_array($tampil)){
					         ?>
					        <option value="<?php echo $r['angkatan'];?>"><?php echo $r['angkatan'];?></option>
					        <?php } ?>
					        </select>
					        </div>

					<div class="form-group">
				    <label  class="col-sm-1 control-label">Jenis Kelamin</label>
				                <div class="col-sm-offset-1 col-sm-7">   
				          <input type="radio" name="jenis_kelamin" value="L"> Laki-laki
				          <input type="radio" name="jenis_kelamin" value="P"> Perempuan
				        </div>
				        </div>
							
							<button type="submit" class="btn btn-primary btn-sm waves-effect waves-light">DAFTAR</button>

							<a href="page-login.php" class="btn btn-primary btn-sm waves-effect waves-light">KEMBALI</a>
						</form>
					</div>
					<!-- /.card-content -->
				</div>
				<!-- /.box-content -->
			</div>
			<!-- /.col-lg-6 col-xs-12 -->
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
	<script src="admin/assets/scripts/jquery.min.js"></script>
	<script src="admin/assets/scripts/modernizr.min.js"></script>
	<script src="admin/assets/plugin/bootstrap/js/bootstrap.min.js"></script>
	<script src="admin/assets/plugin/mCustomScrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
	<script src="admin/assets/plugin/nprogress/nprogress.js"></script>
	<script src="admin/assets/plugin/sweet-alert/sweetalert.min.js"></script>
	<script src="admin/assets/plugin/waves/waves.min.js"></script>

	<script src="admin/assets/scripts/main.min.js"></script>
</body>
</html>