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
		 ],
	   ];

	echo $prodi[0] ['id'];
	echo "<br>";
	echo $prodi[1] ['id'];
	echo "<br>";
	echo $prodi[2] ['id'];
	echo "<br>";
	echo $prodi[3] ['id'];
	echo "<br>";
	echo true;
	echo "<pre>";
	echo var_dump($prodi);
	echo "</pre>";
?>