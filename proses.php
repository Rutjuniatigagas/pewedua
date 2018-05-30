<!DOCTYPE html>
<html>
<head>
	<title>proses</title>
</head>
<body>
	<table>
		<h1> Selamat Anda Terdaftar</h1>

		<tr>
			<td>nama</td>
			<td>:</td>
			<td><?php echo $_POST['nama'];?></td>
		</tr>
		<tr>
			<td>username</td>
			<td>:</td>
			<td><?php echo $_POST['username'];?></td>
		</tr>
		tr>
			<td>kabupaten</td>
			<td>:</td>
			<td><?php echo $_POST['kabupaten'];?></td>
		</tr>
		<tr>
			<td>jenis_kelamin</td>
			<td>:</td>
			<td><?php echo $_POST['jenis_kelamin'];?></td>
		</tr>
		<tr>
			<td>prodi_pilihan</td>
			<td>:</td>
			<td><?php echo $_POST['prodi_pilihan'];?></td>
		</tr>
</body>
</html>
