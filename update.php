<!DOCTYPE html>
<html>
<head>
	<title>UAS Kelompok 6</title>
</head>
<body>
<?php 
	include 'koneksi.php'; 
	$id = $_GET['id'];
	$sql_peserta = "SELECT * FROM daftar_peserta_vaksin WHERE id_peserta = '$id' ";
	$peserta = mysql_fetch_assoc(mysql_query($sql_peserta));
?>
	<form method="POST" name="" action="proses/proses_input.php">
		<table align="center" border="1" cellpadding="0" cellspacing="0">
			<tr align="center">
				<td><h2><b>Update Data</b></h2></td>
			</tr>
			<tr>
				<td>
					<table width="500" border="0" cellpadding="0" cellspacing="10" align="center">
						<tr>
							<td>Provinsi</td>
							<td>:</td>
							<td>
								<select name="provinsi">
									<option value="" disabled selected>Silakan Pilih Provinsi</option>
									<option value="Jawa Barat">Jawa Barat</option>
									<option value="Jawa Timur">Jawa Timur</option>
									<option value="Banten">Banten</option>
									<option value="Jawa Tengah">Jawa Tengah</option>
								</select>
							</td>
						</tr>
						<tr>
							<td>Kabupaten / Kota</td>
							<td>:</td>
							<td>
								<select name="kabupaten">
									<option value="" disabled selected>Silakan Pilih Kabupaten / Kota</option>
									<option value="Bogor">Bogor</option>
									<option value="Semarang">Semarang</option>
									<option value="Tangerang">Tangerang</option>
									<option value="Tegal">Tegal</option>
								</select>
							</td>
						</tr>
						<tr>
							<td>Kecamatan</td>
							<td>:</td>
							<td>
								<select name="kecamatan">
									<option value="" disabled selected>Silakan Pilih Kecamatan</option>
									<option value="Ciomas">Ciomas</option>
									<option value="Kendiri">Kendiri</option>
									<option value="Serpong">Serpong</option>
									<option value="Dukuh Waru">Dukuh Waru</option>
								</select>
							</td>
						</tr>
						<tr>
							<td>Jenis Faskes</td>
							<td>:</td>
							<td>
								<select name="jenis_fakes">
									<option value="" disabled selected>Silakan Pilih Faskes</option>
									<option value="RUSD Jagakarsa">RUSD Jagakarsa</option>
									<option value="RUSD Pasar Minggu">RUSD Pasar Minggu</option>
									<option value="RUSD Tangerang Selatan">RUSD Tangerang Selatan</option>
									<option value="RSUD Pamulang">RSUD Pamulang</option>
								</select>
							</td>
						</tr>
						<tr>
							<td>Nama Faskes</td>
							<td>:</td>
							<td>
								<select name="nm_faskes">
									<option value="" disabled selected>Silakan Pilih  Nama Faskes</option>
									<option value="Yuki">Yuki</option>
									<option value="Kiki">Kiki</option>
									<option value="Anton">Anton</option>
									<option value="Dewi">Dewi</option>
								</select>
							</td>
						</tr>
						<tr>
							<td>Dependesi </td>
							<td>:</td>
							<td><input type="text" name="dependesi" size="40" ></td>
						</tr>
						<tr>
							<td>Nama Pasien</td>
							<td>:</td>
							<td><input type="text" name="nama" size="40" ></td>
						</tr>
						<tr>
							<td>NIK</td>
							<td>:</td>
							<td><input type="text" name="nik" size="40" ></td>
						</tr>
						<tr>
							<td>Jenis Kelamin </td>
							<td>:</td>
							<td><input type="text" name="jk" size="40" ></td>
						</tr>
						<tr>
							<td>Umur</td>
							<td>:</td>
							<td><input type="text" name="umur" size="40" ></td>
						</tr>
						<tr>
							<td>Tanggal Lahir</td>
							<td>:</td>
							<td><input type="date" name="tgl_lahir" size="40" ></td>
						</tr>
						<tr>
							<td>No Hp</td>
							<td>:</td>
							<td><input type="text" name="no_hp" size="40" ></td>
						</tr>
						<tr>
							<td>Alamat</td>
							<td>:</td>
							<td><input type="text" name="alamat" size="40" ></td>
						</tr>
						<tr>
							<td colspan="4" align="center">
								<input type="submit" name="submit" value="Simpan">
							</td>
							
						</tr>
						<tr>
							<td><button><a href="index.php">Kembali</a></button></td>
						</tr>
					</table>	
				</td>
			</tr>
		</table>
	</form>
</body>
</html>
