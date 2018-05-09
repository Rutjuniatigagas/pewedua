<!DOCTYPE html>
	<!DOCTYPE html>
	<html>
	<head>
		<title>latihan table</title>
	</head>
	<body>
	<h1> Ini Latihan Table</h1>
	<table border="1">
	<tr>
		<td>Id</td>
		<td>Nama Prodi</td>
		<td>Kuota</td>
		<td>Kaprodi</td>
	</tr>

<?php
	for ($i=1; $i<=100 ; $i++) { 
		?>	
	<tr>
		<td><?php echo $i ?></td>
		<td>sisfo</td>
		<td><?php echo $i *3?></td>

		<?php if ($i %2 ==0) :?>
			<td>Ilhamsyah</td>
			<?php else:?>
			<td>Renny</td>
			<?php endif;?>
			
	</tr>
	
<?php
}
?>
</table>
</body>
</html>


