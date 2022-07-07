<?php 
	mysql_connect('localhost','root','') OR DIE ('Koneksi Gagal');
	mysql_select_db('db_pasien') OR DIE('Database Tidak Ada');
 ?>