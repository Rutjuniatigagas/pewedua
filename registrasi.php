<!DOCTYPE html>
<html>
<head>
	<title>Registrasi</title>
</head>
<body>
	<?php $kabupaten=[
		[
			"id"=>"pontianak",
			"nama_kab"=>"pontianak"
		],
		[	
			"id"=>"mempawah",
			"nama_kab"=>"mempawah"
		],
		[	
			"id"=>"sintang",
			"nama_kab"=>"sintang"
		]

	]
	?>
<form method="POST" action="proses.php">
	<table>
	<h1>REGISTRASI</h1>

	<tr>
		<td>Username</td>
		<td>:</td>
		<td><input type="text" name="username"></td>
	</tr>
	<tr>
		<td>Password</td>
		<td>:</td>
		<td><input type="text" name="password"></td>
	</tr>
	<tr>
		<td>Nama</td>
		<td>:</td>
		<td><input type="text" name="nama"></td>
	</tr>
	<tr>
		<td>No.hp</td>
		<td>:</td>
		<td><input type="text" name="no_hp"></td>
	</tr>
	<tr>
		<td>Alamat</td>
		<td>:</td>
		<td><textarea name="alamat"></textarea></td>
	</tr>
	<tr>
		<td>kabupaten</td>
		<td>:</td>
		<td><select Name="kabupaten":</select>
			<?php foreach ($kabupaten as $kab):
			?>	
			<option value="<?php echo $kab['nama_kab']?>"</option>
			<?php echo $kab['nama_kab'];?>
			
		<?php endforeach;?>
		</tr>
	<tr>
		<td>jenis kelamin</td>
		<td>:</td>
		<td><input type="radio" name="jenis_kelamin" value="pria">pria
			<input type="radio" name="jenis_kelamin" value="wanita">wanita</td>
		
	</tr>
	<td>prodi pilihan</td>
	<td>:</td>
	<td>
		<input type="checkbox" name="prodi_pilihan" value="Sistem Informasi">Sistem Informasi<br>
		<input type="checkbox" name="prodi_pilihan" value="Sistem Komputer">Sistem Komputer<br>
		<input type="checkbox" name="prodi_pilihan" value="Sistem Informatika">Sistem Informatika<br>
	</td>
	<tr>
		<td><input type="submit" value="simpan"></td>
	</tr>
</td>
</td>
</select>
</form>
</body>
</table>
</html>