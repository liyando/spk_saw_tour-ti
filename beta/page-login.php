<?php
 include "koneksi.php"; 
session_start();

?>

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

<body>

<div id="single-wrapper">
	
	<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan']=="gagal"){
			echo "<div class='alert'>Username dan Password tidak sesuai atau user belum terdaftar !</div>";
		}
	}
	?>
	<form  action="aksi-login.php?op=in" method="POST" class="frm-single">
		<div class="inside">
			<div class="title"><strong>Study</strong> Tour</div>
			
			<div class="frm-title">Login</div>
		
			    <?php
			 
			  $query = "SELECT * FROM tabel_info ";
			  $sql = mysqli_query($koneksi, $query); 
			  $data = mysqli_fetch_array($sql); 
			  ?>

			   <center><H4 class="frm-footer"><?php echo $data['nama_info'];?></H4></center>
			   <br/>
			   <br/>
			   

			<div class="frm-input"><input type="text" name="username" placeholder="Username" class="frm-inp"><i class="fa fa-user frm-ico"></i></div>
	
			<div class="frm-input"><input type="password" name="password" placeholder="Password" class="frm-inp"><i class="fa fa-lock frm-ico"></i></div>
		
			<div class="clearfix margin-bottom-20">
				<div class="pull-left">
					
				</div>
				
			</div>
			
			<button type="submit" class="frm-submit">Login<i class="fa fa-arrow-circle-right"></i></button>
			<a href="daftar-akun-member.php" >DAFTAR MAHASISWA</a> <br/><br/>
			<a href="daftar-akun-admin.php" >DAFTAR ADMIN</a> <br/><br/>
			<div class="frm-footer">Teknik Informatika.</div>



						
		</div>
		
	</form>
	
</div>
	
	<script src="admin/assets/scripts/jquery.min.js"></script>
	<script src="admin/assets/scripts/modernizr.min.js"></script>
	<script src="admin/assets/plugin/bootstrap/js/bootstrap.min.js"></script>
	<script src="admin/assets/plugin/nprogress/nprogress.js"></script>
	<script src="admin/assets/plugin/waves/waves.min.js"></script>
	<script src="admin/assets/scripts/main.min.js"></script>
</body>
</html>