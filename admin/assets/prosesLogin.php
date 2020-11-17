<?php 
// mengaktifkan session php
session_start();

// menghubungkan dengan koneksi
include '../../assets/config/koneksi.php';

// menangkap data yang dikirim dari form
$username = addslashes(trim($_POST['username']));
$password = addslashes(trim($_POST['password']));

// menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($koneksi,"SELECT * from admin WHERE username='$username' AND password='$password'");

// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);

if($cek > 0){
	$_SESSION['username'] = $username;
	$_SESSION['status'] = "admin";
	header("location:../BerhasilLogin/index.php");
}else{
	header("location:../index.php?pesan=gagal");
}
?>