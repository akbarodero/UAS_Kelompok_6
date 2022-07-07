<!DOCTYPE html>
<html lang="en">
<head>
	<title>Document</title>
</head>
<body>
	<?php
			echo "<center>";
			echo "Data Pemantaun Covid19 Wilayah DKI Jakarta";
			echo "<br>";
			date_default_timezone_set('Asia/Jakarta');
			echo "Per-". date("d F Y h:i:s");
			echo "<br>";
			echo "</center>";
	?>
	<h3><a href="input_data.php">Input Data</a></h3>
	<h3><a href="proses/logout.php">logout</a></h3>
	<table border="1px">
		<thead>
			<th>No</th>
			<th>Provinsi</th>
			<th>Kabupaten</th>
			<th>Kecamatan</th>
			<th>Jenis Faskes</th>
			<th>Nama Faskes</th>
			<th>Dependesi</th>
			<th>NIK</th>
			<th>Nama</th>
			<th>Jenis Kelamin</th>
			<th>Umur</th>
			<th>Tanggal Lahir</th>
			<th>No Hp</th>
			<th>Alamat</th>
			<th>Aksi</th>
		</thead>
		<tbody>
			<?php 
			include 'koneksi.php';
			$no       = 1;
			$sql      = "SELECT * FROM daftar_peserta_vaksin";
			$eksekusi = mysql_query($sql);
			while ($data = mysql_fetch_array($eksekusi)) {
				?>
				<tr>
					<td><?php echo $no; ?></td>
					<td><?php echo $data['provinsi']; ?></td>
					<td><?php echo $data['kabupaten']; ?></td>
					<td><?php echo $data['kecamatan']; ?></td>
					<td><?php echo $data['jenis_faskes']; ?></td>
					<td><?php echo $data['nama_faskes']; ?></td>
					<td><?php echo $data['dependesi']; ?></td>
					<td><?php echo $data['nama']; ?></td>
					<td><?php echo $data['jk']; ?></td>
					<td><?php echo $data['nik']; ?></td>
					<td><?php echo $data['umur']; ?></td>
					<td><?php echo $data['tgl_lahir']; ?></td>
					<td><?php echo $data['no_hp']; ?></td>
					<td><?php echo $data['alamat']; ?></td>
					<td>
						<a href="update.php?id=<?php echo $data['id_pasien']; ?>">Update</a>
						<a href="proses/proses_delete.php?id=<?php echo $data['id_peserta']; ?>" onclick = "return confirm('Apa Anda Yakin ingin hapus ?');" >Hapus</a>
					</td>
				</tr>
				<?php  
				$no++;
			}
			?>
		</tbody>
	</table>
</body>
</html>
