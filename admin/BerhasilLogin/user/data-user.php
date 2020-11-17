<!-- 
POWERED BY MCHEVRO
INSTAGRAM : m.chevr0
GITHUB : https://github.com/mchevro
-->
<?php
    include_once('../../../assets/config/koneksi.php')
?>
<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../../../assets/css/bootstrap.css">
    <link rel="stylesheet" href="../../../assets/css/style.css">
    <link rel="shortcut icon" href="../../../img/favicon.ico">
    <title>Tomcat Squad</title>
</head>

<body style="background-image: url(../../../img/bg.png); background-size: 130%; position: center;">
    <?php 
    session_start();
    if($_SESSION['status']!="admin"){
        header("location:../../index.php?pesan=belum_login");
            exit();
    }
    ?>
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="https://daftar.tomcatsquad.com">
            <img src="../../../img/tomcatlogo.png" width="40" height="40" alt="Tomcat">
            Tomcat Squad
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a href="daftar-user.php" class="btn btn-outline-light bg-success text-light">Tambah User</a>
                    <a href="../index.php" class="btn btn-outline-light bg-primary text-light">Data Anggota</a>
                </li>
            </ul>
            <span class="navbar-text mr-3 text-light"> Dashboard Admin </span>
            <a href="../logout.php" class="btn btn-outline-light bg-danger text-light ">Keluar</a>
        </div>
    </nav>
    <div class="container"  style="background-color: #2D2D44">
        <div class="alert alert-primary text-center alert-dismissible fade show">
            <strong>Hallo Admin</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <!-- TABLE -->
        <center>
            <div class="table-responsive table">
                <h1>USER LOGIN</h1>
                <table class="table table-bordered table-striped table-hover">
                    <tr>
                        <th>No</th>
                        <th>Nomor Induk Siswa</th>
                        <th>Nama</th>
                        <th>Action</th>
                    </tr>
                    <?php
                $query = mysqli_query($koneksi, 'SELECT * FROM user');
                $no = 1;
                while($row=mysqli_fetch_array($query)){
                    echo "<tr>";
                    echo "<td>$no</td>";
                    echo "<td>$row[nis]</td>";
                    echo "<td>$row[nama]</td>";
                    echo "<td><a href='../../assets/prosesDeleteNis.php?id=$row[id]'>Delete</a></td>";
                    $no++;
                }
                ?>
                </table>
        </center>
        <script src="../../../assets/js/jquery.js"></script>
        <script src="../../../assets/js/popper.js"></script>
        <script src="../../../assets/js/bootstrap.js"></script>
        <!-- FOOTER -->
        <footer class="container">
            <p style="text-align: center;">&copy; 2020 TOMCAT SQUAD </p>
        </footer>

</body>

</html>