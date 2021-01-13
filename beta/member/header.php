<!DOCTYPE html>

 
   <?php
session_start();

if($_SESSION['level']!="member")
 {
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

	<title>Home - Member</title>


	<!-- Main Styles -->
	<link rel="stylesheet" href="../admin/assets/styles/style.min.css">
	
	<!-- Material Design Icon -->
	<link rel="stylesheet" href="../admin/assets/fonts/material-design/css/materialdesignicons.css">

	<!-- mCustomScrollbar -->
	<link rel="stylesheet" href="../admin/assets/plugin/mCustomScrollbar/jquery.mCustomScrollbar.min.css">

	<!-- Waves Effect -->
	<link rel="stylesheet" href="../admin/assets/plugin/waves/waves.min.css">

	<!-- Sweet Alert -->
	<link rel="stylesheet" href="../admin/assets/plugin/sweet-alert/sweetalert.css">
	
	<!-- Data Tables -->
	<link rel="stylesheet" href="../admin/assets/plugin/datatables/media/css/dataTables.bootstrap.min.css">
	<link rel="stylesheet" href="../admin/assets/plugin/datatables/extensions/Responsive/css/responsive.bootstrap.min.css">

	

	<!-- Main Styles -->
	<link rel="stylesheet" href="../admin/assets/styles/style.min.css">
	
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

</head>

<body>
<div class="main-menu">
	<header class="header">
		<a href="index.php" class="logo"><i class="ico mdi mdi-cube-outline"></i>MyAdmin</a>
		<button type="button" class="button-close fa fa-times js__menu_close"></button>
		<div class="user">
			<a href="#" class="avatar"><img src="#" alt=""><span class="status online"></span></a>
			<h5 class="name"><a href="profile.php"><b><?php echo $username; ?></b></a></h5>
			<h5 class="position">Mahasiswa</h5>
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
				<a class="waves-effect" href="lihat-agen.php"><i class="menu-icon mdi mdi-cube-outline"></i><span>Lihat Agen</span></a>
				<li>
				<a class="waves-effect" href="form-pilih-agen.php"><i class="menu-icon mdi mdi-cube-outline"></i><span>Pilih Agen</span></a>
				<li>	
				<a class="waves-effect" href="Laporan.php"><i class="menu-icon mdi mdi-desktop-mac"></i><span>Cetak Laporan</span></a>
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
