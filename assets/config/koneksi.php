<?php

  $server = 'localhost';
  $user = 'mchevro';
  $password = 'mchevro123';
  $database = 'tomcat_daftar';

  $koneksi = mysqli_connect($server, $user, $password, $database) OR DIE ("Koneksi Gagal");
