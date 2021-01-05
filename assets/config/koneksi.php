<?php

  $server = 'localhost';
  $user = 'root';
  $password = '';
  $database = 'tomcat_daftar';

  $koneksi = mysqli_connect($server, $user, $password, $database) OR DIE ("Koneksi Gagal");
