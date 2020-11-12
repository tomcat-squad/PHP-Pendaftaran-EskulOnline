<!-- 
POWERED BY MCHEVRO
INSTAGRAM : m.chevr0
GITHUB : https://github.com/mchevro
-->
<?php
    include_once('../assets/config/koneksi.php')
?>
<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../assets/css/bootstrap.css">
    <link rel="shortcut icon" href="../img/favicon.ico">
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
    <title>Tomcat Squad</title>
</head>

<body style="background-image: url(../img/bg.png); background-size: cover; position: center;">
    <?php 
  session_start();
  if($_SESSION['status']!="login"){
    header("location:../index.php?pesan=belum_login");
      exit();
  }
  ?>

    <!-- NAVBAR -->
    <nav class="navbar navbar-dark" style="background-color: #2D2D44">
  <a class="navbar-brand" href="#">
    <img src="../img/tomcatlogo.png" width="40" height="40" class="d-inline-block align-top" alt="tomcatlogo">
    Tomcat Squad
  </a>
  <form class="form-inline">
    <a href="logout.php" class="btn btn-outline-light bg-danger text-light logout">KELUAR</a>
  </form>
</nav>

    <!-- KONTEN -->
    <br>
    <br>
    <div class="container" style="background-color: #2D2D44">
    <br>
        <div class="alert alert-success alert-dismissible fade show alert">
            <Center><strong>Selamat Anda Sudah Terdaftar !</strong></Center>
        </div>

        <center>
            <div class="table-responsive table-anggota">
                <h1>ANGGOTA TOMCAT SQUAD 2020</h1>
                <table class="table table-bordered table-striped table-anggota">
                    <tr>
                        <th class="th">No</th>
                        <th class="th">Nama</th>
                        <th class="th">Kelas</th>
                        <th class="th">Jurusan</th>
                    </tr>
                    <?php
        $query = mysqli_query($koneksi, 'SELECT * FROM anggota');
        $no = 1;
        while($row=mysqli_fetch_array($query)){
          echo "<tr>";
          echo "<td>$no</td>";
          echo "<td>$row[Nama]</td>";
          echo "<td>$row[Kelas]</td>";
          echo "<td>$row[Jurusan]</td>";
          $no++;
        }
        ?>
                </table>
        </center>

        <!-- JQUERY -->
        <script src="../assets/js/jquery.js"></script>
        <script src="../assets/js/popper.js"></script>
        <script src="../assets/js/bootstrap.js"></script>

        <!-- FOOTER -->
        <footer class="container footer">
            <p style="text-align: center;">&copy; 2020 TOMCAT SQUAD </p>
        </footer>
</body>

</html>