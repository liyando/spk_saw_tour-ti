<?php
$host = "localhost";
$user = "root";
$pass = "";
$name = "ti_tour1";


 
$koneksi = mysqli_connect("localhost","root","","ti_tour1");
 
// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}


?>