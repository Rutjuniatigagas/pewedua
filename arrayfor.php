<!DOCTYPE html>
	<html>
	<head>
		<title>latihan table</title>
	</head>
	<body>
	<?php
	$prodi=[
        [
         'id'=>1,
         'nama'=>'kimia',
         'kuota'=>12,
         'kaprodi'=>'Andi'
		 ],
		[
		 'id'=>2,
         'nama'=>'fisika',
         'kuota'=>14,
         'kaprodi'=>'Nurhasanah'
		 ],
		[
         'id'=>3,
         'nama'=>'biologi',
         'kuota'=>12,
         'kaprodi'=>'Rizalinda'
		 ],
		[
         'id'=>4,
         'nama'=>'sisfo',
         'kuota'=>32,
         'kaprodi'=>'Ilhamsyah'
		 ],
		[
         'id'=>5,
         'nama'=>'statistika',
         'kuota'=>15,
         'kaprodi'=>'Naomi'
		 ],
		[
         'id'=>6,
         'nama'=>'matematika',
         'kuota'=>12,
         'kaprodi'=>'Mariatul'
		 ]
	   ];
	   ?>
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


