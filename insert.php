<?php 
 require_once 'koneksi.php';

 if($_SERVER['REQUEST_METHOD'] == 'POST')
 {	
 	$nama = $_POST['nama'];
 	$usia = $_POST['email'];
 	$domisili = $_POST['password'];

 	$query = "INSERT INTO tb_biodata (nama, email, password) VALUES ($nama','$email','$password')";

 	$exeQuery = mysqli_query($konek, $query); 

 	echo ($exeQuery) ? json_encode(array('kode' =>1, 'pesan' => 'berhasil menambahkan data')) :  json_encode(array('kode' =>2, 'pesan' => 'data gagal ditambahkan'));
 }
 else
 {
 	 echo json_encode(array('kode' =>101, 'pesan' => 'request tidak valid'));
 }

 ?>