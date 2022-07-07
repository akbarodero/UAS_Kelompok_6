<?php
	include "../koneksi.php";

	$id = $_POST['id_pasien'];
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

	$sql = "UPDATE daftar_peserta_vaksin SET provinsi = '".$prov."', kabupaten = '".$kab."', kecamatan = '".$kec."', jenis_faskes = '".$jenis_faskes."', dependesi = '".$dependesi."', nik = '".$nik."', nama = '".$nama."', jk = '".$jk."', umur = '".$umur."', no_hp = '".$no_hp."', alamat = '".$alamat."' WHERE id_pasien = '".$id."' ";
	$eksekusi = mysql_query($sql);

	header('location:../show_data.php');
?>