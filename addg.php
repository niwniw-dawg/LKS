<?php
include("koneksi.php");
	
	$id_user = $_GET['id_user'];
	$nama = $_GET['nama'];
	$mapel = $_GET['mapel'];
	$gender = $_GET['gender'];

	$result = mysqli_query($koneksi, "INSERT INTO guru(id_user,nama,mapel,gender) VALUES('$id_user','$nama','$mapel','$gender')");

	header("location:index.php?success=1");
	//trsdfdfdg
	?>