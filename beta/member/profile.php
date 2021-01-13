 <?php

  include "../koneksi.php"; 
   include "header.php";

      $id_user =  $_SESSION['id_user'];

	
                                $tampil=mysqli_query($koneksi,"SELECT * FROM tabel_user INNER JOIN tabel_mahasiswa on tabel_user.id_user = tabel_mahasiswa.id_user where tabel_user.id_user = '$id_user' ");
                                while($r=mysqli_fetch_array($tampil)){
                                
                                   
                          ?>      

  <div class="fixed-navbar">
	<div class="pull-left">
		<button type="button" class="menu-mobile-button glyphicon glyphicon-menu-hamburger js__menu_mobile"></button>

		<h1 class="page-title">Profile</h1>
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



<div id="wrapper">


	<div class="main-content">
	<form  method="post" action="aksi-edit-profile.php?id=<?php echo $id_user; ?>">
		 
			
				<div class="row">
					<div class="col-xs-8">
						<div class="box-content card">

				
							<h4 class="box-title"><i class="fa fa-user ico"></i>PROFILE</h4>
							
							<div class="card-content">
								<div class="form-group">
								<label for="exampleInputEmail1">Username</label>
								<input type="text" class="form-control" name="username" value="<?php echo $r['username']; ?>" required= "required">
							</div>
							
								<div class="form-group">
								<label for="exampleInputEmail1">Password</label>
								<input type="text" class="form-control" name="password" value="<?php echo $r['password']; ?>" required= "required">
							</div>
							<div class="form-group">
								<label for="exampleInputEmail1">Nama</label>
								<input type="text" class="form-control" name="nama" value="<?php echo $r['nama']; ?>" required= "required">
							</div>
							<div class="form-group">
								<label for="exampleInputEmail1">Nim</label>
								<input type="text" class="form-control" name="nim" value="<?php echo $r['nim']; ?>" required= "required">
							</div>
							<div class="form-group">
								<label for="exampleInputEmail1">Jenis Kelamin</label>
								<p><select class="form-control" type="text" name="jenis_kelamin" required ="required">
									<option value="<?php echo $r['jenis_kelamin']; ?>"><?php echo $r['jenis_kelamin']; ?></option>
					        <option value="L">L</option>
					        <option value="P">P</option>
					          </select>
								</div>
							<div class="form-group">
								<label for="exampleInputEmail1">Jurusan</label>
								<p><select class="form-control" type="text" name="jurusan" required ="required">
					        <option value="Teknik Informatika">Teknik Informatika</option>
					         
					        </select>
							</div>
							<div class="form-group">
								<label for="exampleInputEmail1">Angkatan</label>
								<p><select class="form-control" type="text" name="angkatan" required ="required">
					        <option value="<?php echo $r['angkatan']; ?>"><?php echo $r['angkatan']; ?></option>
					         <?php
					         $tampil=mysqli_query($koneksi,"SELECT * FROM tabel_angkatan");
					         while($r=mysqli_fetch_array($tampil)){
					         ?>
					        <option value="<?php echo $r['angkatan'];?>"><?php echo $r['angkatan'];?></option>
					        <?php } ?>
					        </select>
							</div>
									
								   <?php
                                }
                                ?>
									
								<!-- /.row -->
								<button type="submit" class="btn btn-primary btn-sm waves-effect waves-light">UBAH</button>
						</form>
							</div>
							</div>


							<!-- /.card-content -->
						</div>
						<!-- /.box-content card -->
					</div>
			
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