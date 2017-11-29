<?php

 /*
 
 penulis: Muhammad yusuf
 website: http://www.kodingindonesia.com/
 
 */

	if($_SERVER['REQUEST_METHOD']=='POST'){
		
		//Mendapatkan Nilai Variable
		$nama = $_POST['nama'];
		$kelas = $_POST['kelas'];
		$no_hp = $_POST['no_hp'];
		$alamat = $_POST['alamat'];
		$cita_cita = $_POST['cita_cita'];

		
		//Pembuatan Syntax SQL
		$sql = "INSERT INTO siswa (nama,kelas,no_hp,alamat,cita_cita) VALUES ('$nama','$kelas','$no_hp','$alamat','$cita_cita')";
		
		//Import File Koneksi database
		require_once('koneksi.php');
		
		//Eksekusi Query database
		if(mysqli_query($con,$sql)){
			echo 'Berhasil Menambahkan siswa';
		}else{
			echo 'Gagal Menambahkan siswa';
		}
		
		mysqli_close($con);
	}
?>