<!-- 
POWERED BY MCHEVRO
INSTAGRAM : m.chevr0
GITHUB : https://github.com/mchevro
-->
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Pendaftaran Eskul Tomcat" />
    <title>Tomcat Squad</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="icon" href="assets/img/favicon.ico">
    <link rel="shortcut icon" href="assets/img/favicon.ico">
</head>

<body>
    <?php 
    if(isset($_GET['pesan'])){
        if($_GET['pesan'] == "gagal"){
            echo "<script>alert('NIS Tidak Terdaftar')</script>";
        }else if($_GET['pesan'] == "logout"){
            echo "<script>alert('Anda Berhasil Logout')</script>";
        }else if($_GET['pesan'] == "belum_login"){
            echo "<script>alert('Anda Harus Memasukan NIS')</script>";
        }
    }
    ?>

    <!-- NAVBAR -->
    <nav class="navbar navbar-dark" style="background-color: #2D2D44">
        <a class="navbar-brand" href="https://daftar.tomcatsquad.com">
            <img src="assets/img/tomcatlogo.png" width="40" height="40" class="d-inline-block align-top" alt="tomcatlogo">
            Tomcat Squad
        </a>
        <form class="form-inline">
            <a href="/struktur.php" class="btn btn-outline-light bg-primary text-light">STRUKTUR ORGANISASI</a>
        </form>
        
    </nav>

    <!-- KONTEN -->
    <div class="login-dark">
        <form action="assets/prosesLogin.php" method="post">
            <div class="illustration">
                <img src="assets/img/tomcatlogo.png" width="150" height="150" alt="Tomcat">
            </div>
            <center>
                <h2 class="form-group">Login Siswa</h2>
            </center>
            <div class="form-group">
                <input class="form-control nis" type="number" min="1" max="40000000000" name="nis" placeholder="Nomor Induk Siswa" required>
            </div>
            <div class="form-group">
                <button class="btn  btn-block button" type="submit">MASUK
                </button>
            </div>
            <a href="#" class="forgot footer">&copy;TOMCAT 2020
            </a>
        </form>
    </div>
    
    <!-- JQUERY -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js">
    </script>
</body>

</html>