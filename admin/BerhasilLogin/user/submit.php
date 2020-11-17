<?php
session_start();
include_once('../../../assets/config/koneksi.php');
include '../../../BerhasilLogin/token/csrf.php';
 
$csrf = new csrf();
 
// Generate Token Id and Valid
$token_id = $csrf->get_token_id();
$token_value = $csrf->get_token($token_id);

if($csrf->check_valid('post')) {
	var_dump($_POST[$token_id]);
    $nis = trim(strip_tags($_POST['nis']));
    $nama = trim(strip_tags($_POST['nama']));

    mysqli_query($koneksi, "INSERT INTO user (nis,nama) VALUES ('$nis','$nama')");
    
    header("location: data-user.php");
        exit();
} else {
	echo 'Token Tidak Valid';
}