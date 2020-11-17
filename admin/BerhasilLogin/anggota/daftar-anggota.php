<!-- 
POWERED BY MCHEVRO
INSTAGRAM : m.chevr0
GITHUB : https://github.com/mchevro
-->
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../../../assets/css/bootstrap.css">
    <link rel="shortcut icon" href="../../../img/favicon.ico">
    <title>Tomcat Squad</title>
</head>

<body style="background-image: url(../../../img/bg.png); background-size: 250%; position: center;">
    <?php
    session_start();
    if($_SESSION['status']!="admin"){
        header("location:../../index.php?pesan=belum_login");
            exit();
    } else{
        include '../../../BerhasilLogin/token/csrf.php';
        $csrf = new csrf();
        // Generate Token Id and Valid
        $token_id = $csrf->get_token_id();
        $token_value = $csrf->get_token($token_id);
    }
    ?>
    
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="https://daftar.tomcatsquad.com">
            <img src="../../../img/tomcatlogo.png" width="40" height="40" alt="Tomcat">Tomcat Squad</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#"><span class="sr-only">(current)</span></a>
                </li>
            </ul>
            <span class="navbar-text mr-3 text-light"> Register Member </span>
            <a href="../logout.php" class="btn btn-outline-light bg-danger text-light">Keluar</a>
        </div>
    </nav>

    <!-- KONTEN -->
    <div class="container">
        <div class="jumbotron bg-gray">
            <center>
                <h2> Form Pendaftaran Tomcat Squad 2020 </h2>
                <br>
            </center>
            
    <!-- FORM TAMBAH DATA -->
            <form action="submit.php" method="post">
                <div class="form-group row">
                    <input type="hidden" name="<?= $token_id; ?>" value="<?= $token_value; ?>" />
                    <label for="Nama" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                        <input type="text" maxlength="30" class="form-control" name="Nama" placeholder="Nama Lengkap" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="Kelas" class="col-sm-2 col-form-label">Kelas</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="Kelas">
                            <option>Pilih Kelas</option>
                            <option>X</option>
                            <option>XI</option>
                            <option>XII</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="Jurusan" class="col-sm-2 col-form-label">Jurusan</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="Jurusan">
                            <option>Pilih Jurusan</option>
                            <option>TKJ</option>
                            <option>RPL</option>
                            <option>MM</option>
                            <option>TELCO</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="HP" class="col-sm-2 col-form-label">Nomor HP</label>
                    <div class="col-sm-10">
                        <input type="number" maxlength="14" class="form-control" name="HP" placeholder="WhatsApp" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Angkatan</label>
                    <div class="col-sm-10">
                        <input type="date" min="2010-12-31" class="form-control" name="Angkatan" required>
                    </div>
                </div>

                <center>
                    <button type="submit" value="Login" name="create" class="btn btn-primary">SUBMIT</button>
                </center>
                <button onclick="window.location.href='../index.php';" type="submit" name="cancel"class="btn btn-danger">CANCEL</button>
            </form>
            <!--JQUERY-->
            <script src="../../../assets/js/jquery.js"></script>
            <script src="../../../assets/js/popper.js"></script>
            <script src="../../../assets/js/bootstrap.js"></script>

            <!-- FOOTER -->
            <footer class="container">
                <p style="text-align: right;">&copy; 2020 TOMCAT SQUAD </p>
            </footer>
</body>

</html>