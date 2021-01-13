<?php
session_start();

include 'koneksi.php';
 
$username = $_POST['username'];
$password = $_POST['password'];
$status = $_POST['status'];
 
$login = mysqli_query($koneksi,"select * from tabel_user where username='$username' and password='$password' and status='1' ");
$cek = mysqli_num_rows($login);
 
if($cek > 0){
     $data = mysqli_fetch_assoc($login);
 
    if($data['level']=="admin"){
      $_SESSION['username'] = $username;
      $_SESSION['status'] =1;
      $_SESSION['level'] = "admin";
      $_SESSION['id_user'] = $data['id_user'];
        header("location:admin/index.php");
 
    }else if($data['level']=="member"){
      $_SESSION['username'] = $username;
        $_SESSION['level'] = "member";
        $_SESSION['id_user'] = $data['id_user'];
        header("location:member/index.php");
  
    }
}else{
    header("location:page-login.php?pesan=gagal");
}
 
?>