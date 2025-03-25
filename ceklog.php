<?php 
session_start();
include 'koneksi.php';
 
$username = $_POST['username'];
$password = $_POST['password'];
 
 
$login = mysqli_query($koneksi,"select * from user where username='$username' and password='$password'");
$cek = mysqli_num_rows($login);
 
if($cek > 0){
 
	$data = mysqli_fetch_assoc($login);
 
	if($data['level']=="Admin"){
 
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "Admin";
		header("location:index.php");
 
	}else if($data['level']=="Guru"){
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "Guru";
		header("location:index.php");
 
	}else if($data['level']=="Siswa"){
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "Siswa";
		header("location:index.php");

	}
	}else if($username == '' || $password == ''){
		header("location:login.php?error=2");
		
	}else{
		header("location:login.php?error=1");
	}
 
?>