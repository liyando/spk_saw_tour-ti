   <?php

  include "../koneksi.php";
   include "header.php";
   ?>

<div class="fixed-navbar">
	<div class="pull-left">
		<button type="button" class="menu-mobile-button glyphicon glyphicon-menu-hamburger js__menu_mobile"></button>
		<h1 class="page-title">Form Pendaftar</h1>
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
	<h4 class="box-title">Tambah Data Pendaftar</h4>
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
					         $tampil=mysqli_query($koneksi,"SELECT * FROM tabel_angkatan") or die(mysqli_error($koneksi));
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

							<a href="form-pendaftaran.php" class="btn btn-primary btn-sm waves-effect waves-light">BATAL</a>
						</form>
</p>
</div>
	
			<div class="col-xs-12">
				<div class="box-content">
					<h4 class="box-title">Data Pendaftar</h4>
					<table id="example" class="table table-striped table-bordered display" style="width:100%">
						<thead>
							<tr>

							<th>No.</th>
							
							<th>username</th>
							<th>password</th>
							<th>Nama</th>
							<th>Nim</th>
							<th>Jenis Kelamin</th>
							<th>Jurusan</th>
							<th>Angkatan</th>
							<th>Aksi</th>
					
							</tr>

						</thead>

						<tbody>
		
						 <?php
                         $tampil=mysqli_query($koneksi,"SELECT tabel_user.id_user,tabel_user.username, tabel_user.password, tabel_mahasiswa.id_mahasiswa,  tabel_mahasiswa.nim, tabel_mahasiswa.nama, tabel_mahasiswa.jurusan, tabel_mahasiswa.angkatan, tabel_mahasiswa.jenis_kelamin FROM tabel_user INNER JOIN tabel_mahasiswa on tabel_user.id_user =tabel_mahasiswa.id_user ");

                                $no = 1;
                                while($r=mysqli_fetch_array($tampil)){
                                   
                                ?>
										 <tr>
							<td><?php echo $no;?></td>
                            
                              <td><?php echo $r['username'];?></td>
                               <td><?php echo $r['password'];?></td>
                               <td><?php echo $r['nama'];?></td>
                               <td><?php echo $r['nim'];?></td>
                               <td><?php echo $r['jenis_kelamin'];?></td>
                                <td><?php echo $r['jurusan'];?></td>
                                 <td><?php echo $r['angkatan'];?></td>

      <td><a href="edit-mahasiswa.php?id=<?php echo $r['id_user'];?>">Edit</a> |
	
	  <a href="aksi-delete-data-form-pendaftaran.php?id=<?=$r['id_user']; ?>" onclick="return confirm('Yakin ?')">Hapus</a></td>

                               </tr>
                            
                          <?php
                         $no++;	
                                }
                                ?>
							
						</tbody>
					</table>
				</div>

				
			</div>
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

	<!-- Data Tables -->
	<script src="assets/plugin/datatables/media/js/jquery.dataTables.min.js"></script>
	<script src="assets/plugin/datatables/media/js/dataTables.bootstrap.min.js"></script>
	<script src="assets/plugin/datatables/extensions/Responsive/js/dataTables.responsive.min.js"></script>
	
	<script src="assets/scripts/datatables.demo.min.js"></script>

	<script src="assets/scripts/main.min.js"></script>
	
	

	
</body>
</html>