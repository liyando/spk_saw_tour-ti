   <?php

  include "../koneksi.php";
   include "header.php";
   ?>

<div class="fixed-navbar">
	<div class="pull-left">
		<button type="button" class="menu-mobile-button glyphicon glyphicon-menu-hamburger js__menu_mobile"></button>
		<h1 class="page-title">Form Kriteria</h1>
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
</div>
<!-- /#message-popup -->
<div id="wrapper">
	<div class="main-content">
			<div class="col-lg-12 col-xs-12">
				<div class="box-content card white">
					<h4 class="box-title">Tambah Data Kriteria</h4>
					<!-- /.box-title -->
					<div class="card-content">
						<form action="aksi-form-kriteria.php" method="post">



								<div class="form-group">
								<label for="exampleInputPassword1">Nama Kriteria</label>
								<select class="form-control" id="nama_kriteria" name='nama_kriteria'>
											<option value='Biasa'>Biasa</option>
											<option value='Standar' selected='selected'>Standar</option>
											<option value='Mewah'>Mewah</option>
						
										  </select>
										  </p>
										  </div>
							
								<div class="form-group">
								<label for="exampleInputEmail1">Bobot</label>
								<input class="form-control" id="bobot" name='bobot' placeholder="">
							</div>

							<div class="form-group">
								<label for="exampleInputPassword1">Sub Agen Tour</label>
								<select class="form-control" id="sub" name='sub'>
											<?php
												$tp=mysqli_query($koneksi,"SELECT * FROM  agen_tour");
												while($r=mysqli_fetch_array($tp)){
												?>
												<option value="<?php echo $r['id_agen_tour']; ?>"><?php echo $r['agen_tour']; ?></option>
												<?php } ?>
											</select>
							</div>


								<div class="form-group">
								<label for="exampleInputPassword1">Kriteria</label>
								<select class="form-control" id="kriteria" name='kriteria'>
											<option value='Harga'>Harga</option>
											<option value='Fasilitas' selected='selected'>Fasilitas</option>
										 </select>
										  </p>
											
							</div>
							
																				
							<button type="submit" class="btn btn-primary btn-sm waves-effect waves-light">TAMBAH</button>

							<a href="form-pendaftaran.php" class="btn btn-primary btn-sm waves-effect waves-light">BATAL</a>
						</form>
						</p>
						</div>
	
			<div class="col-xs-12">
				<div class="box-content">
					<h4 class="box-title">Data Kriteria</h4>
					<table id="example" class="table table-striped table-bordered display" style="width:100%">
		<thead>
		<tr>
			<th>No.</th>
			<th>Nama</th>
			<th>Bobot</th>
			<th>Agen Tour</th>
			<th>Kriteria</th>
			<th>Aksi</th>
		</tr>

		</thead>

		<tbody>
			 <?php
                         $tampil=mysqli_query($koneksi,"SELECT * FROM tabel_kriteria join agen_tour on tabel_kriteria.sub=agen_tour.id_agen_tour ORDER BY kriteria DESC");

                                $no = 1;
                                while($r=mysqli_fetch_array($tampil)){
                                   
                                ?>
							<tr>
							<td><?php echo $no;?></td>
                            <td><?php echo $r['nama_kriteria'];?></td>
                            <td><?php echo $r['bobot'];?></td>
                            <td><?php echo $r['agen_tour'];?></td>
                            <td><?php echo $r['kriteria'];?></td>
		 
	<td><a href="form-edit-kriteria.php?id=<?php echo $r['id_kriteria'];?>">Edit</a> |
	<a href="aksi-delete-data-form-kriteria.php?id=<?=$r['id_kriteria'];?>" onclick="return confirm('Yakin?')">Hapus</a></td>
		
				

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

	<!-- Data Tables -->
	<script src="assets/plugin/datatables/media/js/jquery.dataTables.min.js"></script>
	<script src="assets/plugin/datatables/media/js/dataTables.bootstrap.min.js"></script>
	<script src="assets/plugin/datatables/extensions/Responsive/js/dataTables.responsive.min.js"></script>
	
	<script src="assets/scripts/datatables.demo.min.js"></script>

	<script src="assets/scripts/main.min.js"></script>
	
	

	
</body>
</html>