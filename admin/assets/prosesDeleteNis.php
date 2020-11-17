<?php

    include_once('../../assets/config/koneksi.php');

    $id = $_GET['id'];
    mysqli_query($koneksi, "DELETE FROM user WHERE id = '$id'");

    header("location: ../BerhasilLogin/user/data-user.php");