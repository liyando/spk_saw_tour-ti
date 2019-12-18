   <?php

  include "../koneksi.php"; 
   include "header.php";

  
   $id_kriteria = $_GET['id'];

   $sql = mysqli_query($koneksi,"select * from tabel_kriteria join agen_tour on tabel_kriteria.sub=agen_tour.id_agen_tour where id_kriteria='$id_kriteria'");
	$data = mysqli_fetch_array($sql);

  ?>



<div class="fixed-navbar">
	<div class="pull-left">
		<button type="button" class="menu-mobile-button glyphicon glyphicon-menu-hamburger js__menu_mobile"></button>
		<h1 class="page-title">Form Edit Data Kriteria</h1>

	</div>

	<div class="pull-right">
		
		<a href="#" class="ico-item mdi mdi-logout js__logout"></a>
	</div>

</div>


<div id="wrapper">
	<div class="main-content">
		<div class="row small-spacing">
			<div class="col-lg-6 col-xs-12">
				<div class="box-content card white">
					<h4 class="box-title">Form Data Kriteria</h4>

	
					<div class="card-content">
		<form method="post" action="aksi-edit-kriteria.php?id=<?php echo $id_kriteria; ?>" enctype="multipart/form-data">
							<div class="form-group">
								
								<input type="hidden" class="form-control" name="id_kriteria" value="<?php echo $data['id_kriteria']; ?>" required= "required">
							</div>

							<div class="form-group">
								<label for="exampleInputEmail1">Nama Kriteria</label>
								<input type="text" class="form-control" name="nama_kriteria" value="<?php echo $data['nama_kriteria']; ?>" required= "required">
							</div>
							<div class="form-group">
								<label for="exampleInputEmail1">Bobot</label>
								<input type="text" class="form-control" name="bobot" value="<?php echo $data['bobot']; ?>" required= "required">
							</div>
							<div class="form-group">
								<label for="exampleInputEmail1">Sub</label>
								  <select class="form-control" id="sub" name="sub">
											<?php
												$tp=mysqli_query($koneksi,"SELECT * FROM  agen_tour");
												while($r=mysqli_fetch_array($tp)){
												?>
												  <option value="<?php echo $r['id_agen_tour']; ?>" <?php if($data['sub'] == $r['id_agen_tour'])
								  { echo 'selected'; } ?>><?php echo $r['agen_tour']; ?></option>
												<?php } ?>
								  </select>
								</div>
								<div class="form-group">
								<label for="exampleInputEmail1">Kriteria</label>
								
								<input type="text" class="form-control" name="kriteria" value="<?php echo $data['kriteria']; ?>" required= "required">
							</div>
							
							

		<button type="submit" class="btn btn-primary">SIMPAN<i ></i></button>
        <a href="form-kriteria.php"> <input type="button"  class="btn btn-primary" value="Batal"></a>
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