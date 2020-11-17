<?php

    include_once('../../assets/config/koneksi.php');

    $id = $_GET['id'];
    mysqli_query($koneksi, "DELETE FROM anggota WHERE id = '$id'");

    header("location: ../BerhasilLogin/index.php");