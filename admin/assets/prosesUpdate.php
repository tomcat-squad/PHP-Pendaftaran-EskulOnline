<?php

    include_once('../../assets/config/koneksi.php');

    $id = $_GET['id'];

    $nama = trim(strip_tags($_POST['Nama']));
    $kelas = trim(strip_tags($_POST['Kelas']));
    $jurusan = trim(strip_tags($_POST['Jurusan']));
    $nomor = trim(strip_tags($_POST['HP']));
    mysqli_query($koneksi, "UPDATE anggota SET  Nama    = '$nama', 
                                                Kelas   = '$kelas', 
                                                Jurusan = '$jurusan', 
                                                HP   = '$nomor' WHERE id ='$id'");

    header("location:../BerhasilLogin/index.php");
        exit();