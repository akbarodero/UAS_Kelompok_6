<?php 
	include '../koneksi.php';

	$id = $_GET['id'];
	$sql = "DELETE FROM daftar_peserta_pasien WHERE id_peserta = '$id'";
	$eksekusi = mysql_query($sql);

	header('location:../index.php');
 ?>