<?php
include("koneksi.php");
	
	$id_user = $_GET['id_user'];
	$nama = $_GET['nama'];
	$kelas = $_GET['kelas'];
	$gender = $_GET['gender'];
	$angkatan = $_GET['angkatan'];

	$result = mysqli_query($koneksi, "INSERT INTO siswa(id_user,nama,kelas,gender,angkatan) VALUES('$id_user','$nama','$kelas','$gender','$angkatan')");

	header("location:index.php?success=1");
	?>