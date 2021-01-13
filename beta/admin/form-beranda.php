   <?php

  include "../koneksi.php";
   include "header.php";$id_user = $_GET['id'];

   $sql = mysqli_query($koneksi,"select * from tabel_jadwal where id_tabel_jadwal='1'");
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
			<div class="col-lg-12 col-xs-12">
				<div class="box-content card white">
					<h4 class="box-title">Form Tanggal</h4>

	
					<div class="card-content">
		<form method="post" action="aksi-edit-beranda.php?id=1" enctype="multipart/form-data">
							<div class="form-group">
								
								<input type="hidden" class="form-control" name="id_jadwal" value="1" required= "required">
							</div>

							<div class="form-group">
								<label for="exampleInputEmail1">Tanggal Awal</label>
								<input type="date" class="form-control" name="awal" value="<?php echo $data['tanggal_awal']; ?>" required= "required">
							</div>
							<div class="form-group">
								<label for="exampleInputEmail1">Tanggal Akhir</label>
								<input type="date" class="form-control" name="akhir" value="<?php echo $data['tanggal_akhir']; ?>" required= "required">
							</div>
							
		<button type="submit" class="btn btn-primary">SIMPAN<i ></i></button>
          </form>
						</p>
						</div>
	
			<div class="col-xs-12">
				<div class="box-content">
					<h4 class="box-title">Data Tanggal</h4>
					<table id="example" class="table table-striped table-bordered display" style="width:100%">
						<thead>
							<tr>
							<th>Tanggal Awal</th>
							<th>Tanggal Akhir</th>
						
							</tr>

						</thead>

						<tbody>
		
						 <?php
                         $tampil=mysqli_query($koneksi,"SELECT * FROM tabel_jadwal");

                         $no = 1;
                             while($r=mysqli_fetch_array($tampil)){
                                   
                        ?>
							<tr>
                             <td><?php echo $r['tanggal_awal'];?></td>
                               <td><?php echo $r['tanggal_akhir'];?></td>
                              

                            </tr>
                            
                          <?php
                         $no++;	
                                }
                                ?>
							
						</tbody>
					</table>
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
	

		<script src="assets/scripts/jquery.min.js"></script>
	<script src="assets/scripts/modernizr.min.js"></script>
	<script src="assets/plugin/bootstrap/js/bootstrap.min.js"></script>
	<script src="assets/plugin/mCustomScrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
	<script src="assets/plugin/nprogress/nprogress.js"></script>
	<script src="assets/plugin/sweet-alert/sweetalert.min.js"></script>
	<script src="assets/plugin/waves/waves.min.js"></script>

	<script src="assets/plugin/datatables/media/js/jquery.dataTables.min.js"></script>
	<script src="assets/plugin/datatables/media/js/dataTables.bootstrap.min.js"></script>
	<script src="assets/plugin/datatables/extensions/Responsive/js/dataTables.responsive.min.js"></script>
	<script src="assets/scripts/datatables.demo.min.js"></script>
	<script src="assets/scripts/main.min.js"></script>
	
	

	
</body>
</html>