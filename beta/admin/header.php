

<!DOCTYPE html>

 
   <?php
session_start();

if($_SESSION['level']!="admin"){
    echo "<script>window.alert('anda keluar otomatis karena ada tindakan di luar akses.');
        window.location='../page-login.php'</script>";


}

  include "../koneksi.php"; 
 if (ISSET($_SESSION['username'])){
$username =  $_SESSION['username'];


}
?>


<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Home - My Admin Template</title>


	<!-- Main Styles -->
	<link rel="stylesheet" href="assets/styles/style.min.css">
	
	<!-- Material Design Icon -->
	<link rel="stylesheet" href="assets/fonts/material-design/css/materialdesignicons.css">

	<!-- mCustomScrollbar -->
	<link rel="stylesheet" href="assets/plugin/mCustomScrollbar/jquery.mCustomScrollbar.min.css">

	<!-- Waves Effect -->
	<link rel="stylesheet" href="assets/plugin/waves/waves.min.css">

	<!-- Sweet Alert -->
	<link rel="stylesheet" href="assets/plugin/sweet-alert/sweetalert.css">
	
	<!-- Data Tables -->
	<link rel="stylesheet" href="assets/plugin/datatables/media/css/dataTables.bootstrap.min.css">
	<link rel="stylesheet" href="assets/plugin/datatables/extensions/Responsive/css/responsive.bootstrap.min.css">

	

	<!-- Main Styles -->
	<link rel="stylesheet" href="assets/styles/style.min.css">
	
	<!-- Material Design Icon -->
	<link rel="stylesheet" href="assets/fonts/material-design/css/materialdesignicons.css">

	<!-- mCustomScrollbar -->
	<link rel="stylesheet" href="assets/plugin/mCustomScrollbar/jquery.mCustomScrollbar.min.css">

	<!-- Waves Effect -->
	<link rel="stylesheet" href="assets/plugin/waves/waves.min.css">

	<!-- Sweet Alert -->
	<link rel="stylesheet" href="assets/plugin/sweet-alert/sweetalert.css">
	
	<!-- Morris Chart -->
	<link rel="stylesheet" href="assets/plugin/chart/morris/morris.css">

	<!-- FullCalendar -->
	<link rel="stylesheet" href="assets/plugin/fullcalendar/fullcalendar.min.css">
	<link rel="stylesheet" href="assets/plugin/fullcalendar/fullcalendar.print.css" media='print'>
	
		<!-- TinyMCE -->
	<link rel="stylesheet" href="assets/plugin/tinymce/skins/lightgray/skin.min.css">
	<!-- Must include this script FIRST -->
	<script src="assets/plugin/tinymce/tinymce.min.js"></script>

</head>

<body>
<div class="main-menu">
	<header class="header">
		<a href="index.php" class="logo"><i class="ico mdi mdi-cube-outline"></i>MyAdmin</a>
		<button type="button" class="button-close fa fa-times js__menu_close"></button>
		<div class="user">
			<a href="#" class="avatar"><img src="assets/images/avatar-sm-5.jpg" alt=""><span class="status online"></span></a>
			<h5 class="name"><a href="profile.html"><b><?php echo $username; ?></b></a></h5>
			<h5 class="position">Administrator</h5>
			<!-- /.name -->
			
		</div>
		<!-- /.user -->
	</header>
	<!-- /.header -->
	<div class="content">

		<div class="navigation">
			<h5 class="title">Navigation</h5>
			<!-- /.title -->
			<ul class="menu js__accordion">
				<li class="current">
					<a class="waves-effect" href="index.php"><i class="menu-icon mdi mdi-view-dashboard"></i><span>Dashboard</span></a>
					</li>
				
				<li>
				<a class="waves-effect" href="form-beranda.php"><i class="menu-icon mdi mdi-desktop-mac"></i><span>Kelola Beranda</span></a>
				</li>
				<li>
				<a class="waves-effect" href="form-pendaftaran.php"><i class="menu-icon mdi mdi-desktop-mac"></i><span>Data Pendaftar</span></a>
				</li>
				<li>
				<a class="waves-effect" href="form-admin.php"><i class="menu-icon mdi mdi-desktop-mac"></i><span>Data Admin</span></a>
				</li>
				<li>
				<a class="waves-effect" href="hasil.php"><i class="menu-icon mdi mdi-cube-outline"></i><span>Hasil</span></a>
				</li>
			
			<li>
			<a class="waves-effect parent-item js__control" href="#"><i class="menu-icon mdi mdi-folder-multiple"></i><span>Data Master</span><span class="menu-arrow fa fa-angle-down"></span></a>
				<ul class="sub-menu js__content">

					<li><a href="form-kriteria.php">Data Kriteria</a></li>
					<li><a href="input-kriteria.php">Nama Kriteria</a></li>
					<li><a href="form-agen-tour.php">Data Agen Tour</a></li>
					<li><a href="input-angkatan.php">Data Tahun Angkatan</a></li>
					<li><a href="form-informasi.php">Data Information</a></li>
					</ul>
				</li>
				<li>
				<a class="waves-effect" href="profile.php"><i class="menu-icon mdi mdi-cube-outline"></i><span>Profile</span></a>
				</li>
			</div>	
		</div>		
	</div>
	<!-- /.content -->
</div>
	</div>
