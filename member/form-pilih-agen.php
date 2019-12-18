   <?php

  include "../koneksi.php";
   include "header.php";

    $id_user =  $_SESSION['id_user'];
     $tampil=mysqli_query($koneksi,"SELECT * from tabel_user where id_user='$id_user'  ");
     while($r=mysqli_fetch_array($tampil)){
   ?>
  

<div class="fixed-navbar">
	<div class="pull-left">
		<button type="button" class="menu-mobile-button glyphicon glyphicon-menu-hamburger js__menu_mobile"></button>
		<h1 class="page-title">Form Pilih Agen Tour</h1>
		<!-- /.page-title -->
	</div>
	<!-- /.pull-left -->
	<div class="pull-right">
		<div class="ico-item">
			<a href="#" class="ico-item mdi mdi-magnify js__toggle_open" data-target="#searchform-header"></a>
			<form action="#" id="searchform-header" class="searchform js__toggle"><input type="search" placeholder="Search..." class="input-search"><button class="mdi mdi-magnify button-search" type="submit"></button></form>
			<!-- /.searchform -->
		</div>
		<!-- /.ico-item -->
		
<a class="ico-item mdi mdi-logout" href="log-out.php" ></a>	</div>
	<!-- /.pull-right -->
</div>
<!-- /.fixed-navbar -->
</div>
	
</div>
<!-- /#message-popup -->
<div id="wrapper">
	<div class="main-content">
		<div class="row small-spacing">
			<div class="col-lg-6 col-xs-12">
				<div class="box-content card white">
					<h4 class="box-title">Voting Agen</h4>
					<!-- /.box-title -->
					<div class="card-content">
						<form action="aksi-voting.php" method="post">
						<form>
							<div class="card-content">
								<div class="form-group">
								<input type="hidden" class="form-control" name="id_user" value="<?php echo $r['id_user']; ?>" required= "required">
							</div>

						<div class="form-group">
					        <label>Agen Tour</label>
					        <p><select class="form-control" type="text" name="id_agen_tour" required ="required">
					        <option value="">--Pilih Agen Tour--</option>
					         <?php
					         $tampil=mysqli_query($koneksi,"SELECT * FROM agen_tour");
					         while($r=mysqli_fetch_array($tampil)){
					         ?>
					        <option value="<?php echo $r['id_agen_tour'];?>"><?php echo $r['agen_tour'];?></option>
					        <?php } ?>
					        </select>
					        </div>

							<?php
                                }
                                ?>
							
							<button type="submit" class="btn btn-primary btn-sm waves-effect waves-light">VOTING</button>
						</form>
					
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