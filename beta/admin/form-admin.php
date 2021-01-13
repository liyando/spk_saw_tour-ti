   <?php

  include "../koneksi.php";
   include "header.php";
   ?>

<div class="fixed-navbar">
	<div class="pull-left">
		<button type="button" class="menu-mobile-button glyphicon glyphicon-menu-hamburger js__menu_mobile"></button>
		<h1 class="page-title">Form Admin</h1>
		<!-- /.page-title -->
	</div>
	<!-- /.pull-left -->
	<div class="pull-right">
		<div class="ico-item">
			
			
		</div>
		<!-- /.ico-item -->
		
<a class="ico-item mdi mdi-logout" href="log-out.php" onclick="return confirm('Apakah anda yakin ingin keluar ?')"></a>

	<!-- /.pull-right -->
</div>
<!-- /.fixed-navbar -->
</div>
<!-- /#message-popup -->
<div id="wrapper">
	<div class="main-content">
			<div class="col-lg-12 col-xs-12">
				<div class="box-content card white">
					<h4 class="box-title">Tambah Data admin</h4>
					<!-- /.box-title -->
					<div class="card-content">
						<form action="aksi-daftar-akun-member.php" method="post">
						
							<div class="form-group">
								<label for="exampleInputEmail1">Username</label>
								<input type="text" class="form-control" id="username" name='username' placeholder="username">
							</div>
							<div class="form-group">
								<label for="exampleInputEmail1">Password</label>
								<input type="password" class="form-control" id="password" name='password' placeholder="password">
							</div>

																				
							<button type="submit" class="btn btn-primary btn-sm waves-effect waves-light">DAFTAR</button>

							<a href="form-pendaftaran.php" class="btn btn-primary btn-sm waves-effect waves-light">BATAL</a>
						</form>
						</p>
						</div>
	
			<div class="col-xs-12">
				<div class="box-content">
					<h4 class="box-title">Data Admin</h4>
					<table id="example" class="table table-striped table-bordered display" style="width:100%">
						<thead>
							<tr>

							<th>No.</th>
							<th>username</th>
							<th>password</th>
							<th>Status</th>
							<th>Aksi</th>
					
							</tr>

						</thead>

						<tbody>
		
						 <?php
                         $tampil=mysqli_query($koneksi,"SELECT * FROM tabel_user WHERE level like '%admin%'");

                         $no = 1;
                             while($r=mysqli_fetch_array($tampil)){
                                   
                        ?>
							<tr>
							<td><?php echo $no;?></td>
                             <td><?php echo $r['username'];?></td>
                               <td><?php echo $r['password'];?></td>
                               <td><?php echo $r['status'];?></td>
                              

    				  <td><a href="form-edit-admin.php?id=<?php echo $r['id_user'];?>">Edit</a> |
					  <a href="aksi-delete-admin.php?id=<?=$r['id_user']; ?>" onclick="return confirm('Anda yakin mau menghapus item ini ?')">Hapus</a></td>


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