<?php 


 //Mendapatkan Nilai ID
 $id = $_GET['id'];
 
 //Import File Koneksi Database
 require_once('koneksi.php');
 
 //Membuat SQL Query
 $sql = "DELETE FROM siswa WHERE id=$id;";

 
 //Menghapus Nilai pada Database 
 if(mysqli_query($con,$sql)){
 echo 'Berhasil Menghapus siswa';
 }else{
 echo 'Gagal Menghapus Siswa';
 }
 
 mysqli_close($con);
 ?>