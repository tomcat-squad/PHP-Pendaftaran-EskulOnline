<?php
session_start();
include_once('../assets/config/koneksi.php');
include 'token/csrf.php';
 
$csrf = new csrf();
 
// Generate Token Id and Valid
$token_id = $csrf->get_token_id();
$token_value = $csrf->get_token($token_id);

if($csrf->check_valid('post')) {
	var_dump($_POST[$token_id]);
    $nama = trim(strip_tags($_POST['Nama']));
    $jurusan = trim(strip_tags($_POST['Jurusan']));
    $nomor = trim(strip_tags($_POST['HP']));
    $kelas = trim(strip_tags($_POST['Kelas']));
    $angkatan = trim(strip_tags($_POST['Angkatan']));

    mysqli_query($koneksi, "INSERT INTO anggota (Nama,Jurusan,Angkatan,HP,Kelas) VALUES ('$nama','$jurusan','$angkatan','$nomor','$kelas')");
    
    header("location: ../BerhasilLogin/anggota.php");
} else {
	echo 'Token Tidak Valid';
}