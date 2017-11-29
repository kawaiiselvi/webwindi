<?php 
	
	//Mendapatkan Nilai Dari Variable ID siswa yang ingin ditampilkan
	$id = $_GET['id'];
	
	//Importing database
	require_once('koneksi.php');
	
	//Membuat SQL Query dengan siswa yang ditentukan secara spesifik sesuai ID
	$sql = "SELECT * FROM siswa WHERE id=$id";
	
	//Mendapatkan Hasil 
	$r = mysqli_query($con,$sql);
	
	//Memasukkan Hasil Kedalam Array
	$result = array();
	$row = mysqli_fetch_array($r);
	array_push($result,array(
			"id"=>$row['id'],
			"name"=>$row['nama'],
			"kelas"=>$row['kelas'],
			"no_hp"=>$row['no_hp'],
			"alamat"=>$row['alamat'],
			"cita_cita"=>$row['cita_cita']

		));

	//Menampilkan dalam format JSON
	echo json_encode(array('result'=>$result));
	
	mysqli_close($con);
?>