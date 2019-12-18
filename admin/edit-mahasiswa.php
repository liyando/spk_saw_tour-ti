   <?php

  include "../koneksi.php"; 
   include "header.php";

   $id_user = $_GET['id'];
$sql = mysqli_query($koneksi,"SELECT tabel_user.id_user,tabel_user.username, tabel_user.password, tabel_mahasiswa.id_mahasiswa,  tabel_mahasiswa.nim, tabel_mahasiswa.nama, tabel_mahasiswa.jurusan, tabel_mahasiswa.angkatan, tabel_mahasiswa.jenis_kelamin FROM tabel_user INNER JOIN tabel_mahasiswa on tabel_user.id_user =tabel_mahasiswa.id_user where  tabel_user.id_user='$id_user' ");
$data = mysqli_fetch_array($sql);
  ?>
  
<div class="fixed-navbar">
	<div class="pull-left">
		<button type="button" class="menu-mobile-button glyphicon glyphicon-menu-hamburger js__menu_mobile"></button>
		<h1 class="page-title">Form Edit Data Mahasiswa</h1>
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
					<h4 class="box-title">Form Data Mahasiswa</h4>

	
					<div class="card-content">
		<form method="post" action="aksi-edit-mahasiswa.php?id=<?php echo $id_user; ?>" enctype="multipart/form-data">
							<div class="form-group">
								
								<input  type="hidden" class="form-control" name="id_user" value="<?php echo $data['id_user']; ?>" required= "required">
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
								<label for="exampleInputEmail1">Nama mahasiswa</label>
								<input type="text" class="form-control" name="nama" value="<?php echo $data['nama']; ?>" required= "required">
							</div>
							<div class="form-group">
								<label for="exampleInputEmail1">Nim Mahasiswa</label>
								<input type="text" class="form-control" name="nim" value="<?php echo $data['nim']; ?>" required= "required">
							</div>
								<div class="form-group">
								
								<input type="hidden" class="form-control" name="jurusan" value="<?php echo $data['jurusan']; ?>" required= "required">
							</div>
							
							<div class="form-group">
								<label for="exampleInputEmail1">Angkatan</label>
								<input type="text" class="form-control" name="angkatan" value="<?php echo $data['angkatan']; ?>" required= "required">
							</div>	
						
                 <div class="form-group">
                 <label for="exampleInputEmail1">jenis kelamin</label>
                <td>
                
                     <?php
                     if($data['jenis_kelamin'] == "L"){
                       echo "<input type='radio' name='jenis_kelamin' value='L' checked='checked'> Laki-laki";
                       echo "<input type='radio' name='jenis_kelamin' value='P'> Perempuan";
                     }else{
                        echo "<input type='radio' name='jenis_kelamin' value='L'> Laki-laki";
                         echo "<input type='radio' name='jenis_kelamin' value='P' checked='checked'> Perempuan";
                             }
                              ?>
                                </td>
                                </div>

		<button type="submit" class="btn btn-primary">SIMPAN<i ></i></button>
        <a href="form-pendaftaran.php"> <input type="button"  class="btn btn-primary" value="Batal"></a>
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