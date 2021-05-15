<?php

  $server = 'localhost';
  $user = 'root';
  $password = '';
  $database = 'tomcatsq_register';

  $koneksi = mysqli_connect($server, $user, $password, $database) OR DIE ("Koneksi Gagal");
