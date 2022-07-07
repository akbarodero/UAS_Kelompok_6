<?php
	include "../koneksi.php";

	$prov = $_POST['provinsi'];
	$kab = $_POST['kabupaten'];
	$kec = $_POST['kecamatan'];
	$jenis_faskes = $_POST['jenis_faskes'];
	$dependesi = $_POST['dependesi'];
	$nik = $_POST['nik'];
	$nama = $_POST['nama'];
	$jk = $_POST['jk'];
	$umur = $_POST['umur'];
	$tgl_lahir = $_POST['tgl_lahir'];
	$no_hp = $_POST['no_hp'];
	$alamat = $_POST['alamat'];

	$sql = "INSERT INTO daftar_peserta_vaksin VALUES (NULL, '$prov', '$kab', '$kec', '$jenis_faskes', '$dependesi', '$nik', '$nama', '$jk', '$umur', '$tgl_lahir', '$no_hp', '$alamat')" ;

	$eksekusi = mysql_query($sql);
	header('location:../index.php');
?>