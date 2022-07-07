<?php 
	session_start();
	include '../koneksi.php';

	$name = $_POST['username'];
	$pass = md5($_POST['password']);

	$sql = "SELECT * FROM user WHERE username = '$name' AND password = '$pass'";
	$eksekusi = mysql_query($sql);
	$jml = mysql_num_rows($eksekusi);

	if ($jml >0) {
		$user = mysql_fetch_assoc($eksekusi);
		$_SESSION['id_user'] = $user['id_user'];
		$_SESSION['username'] = $user['username'];
		$_SESSION['level'] = $user['level'];
		$_SESSION['msg'] = array(
					'status' => 'success',
					'message' => 'Selamat Datang '. ucwords($user['username'])
		);
		header('location:../show_data.php');
	}else{
		$_SESSION['msg'] = array(
					'status' => 'danger',
					'message' => 'Username / Password Salah'
		);
		header('location:../login');
	}
 ?>