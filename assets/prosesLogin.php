<?php 
// mengaktifkan session php
session_start();
 
// menghubungkan dengan koneksi
include '../assets/config/koneksi.php';
 
// menangkap data yang dikirim dari form
$nis = addslashes(trim($_POST['nis']));
 
// menyeleksi data nis harus sesuai dengan database
$data = mysqli_query($koneksi,"SELECT * from user WHERE nis='$nis'");
 
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);
 
if($cek > 0){
	$_SESSION['nis'] = $nis;
	$_SESSION['status'] = "login";
	header("location:../BerhasilLogin/");
}else{
	header("location:../index.php?pesan=gagal");
}
?>