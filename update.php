<?php 


	if($_SERVER['REQUEST_METHOD']=='POST'){
		//MEndapatkan Nilai Dari Variable 
		$id = $_POST['id'];
		$nama = $_POST['nama'];
		$kelas = $_POST['kelas'];
		$no_hp = $_POST['no_hp'];
		$alamat = $_POST['alamat'];
		$cita_cita = $_POST['cita_cita'];
		
		//import file koneksi database 
		require_once('koneksi.php');
		
		//Membuat SQL Query
		$sql = "UPDATE siswa SET nama = '$nama', kelas = '$kelas', no_hp = '$no_hp', alamat = '$alamat', cita_cita = '$cita_cita' WHERE id = $id;";
		
		//Meng-update Database 
		if(mysqli_query($con,$sql)){
			echo 'Berhasil Update Data siswa';
		}else{
			echo 'Gagal Update Data siswa';
		}
		
		mysqli_close($con);
	}
?>