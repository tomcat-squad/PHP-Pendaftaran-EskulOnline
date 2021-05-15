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
    <link rel="stylesheet" href="../assets/css/bootstrap.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="shortcut icon" href="../assets/img/favicon.ico">
    <title>Tomcat Squad
    </title>
</head>

<body style="background-image: url(../assets/img/bg.png); background-size: 150%; position: center;">
    <?php
session_start();
if($_SESSION['status']!="login"){
header("location:../index.php?pesan=belum_login");
exit();
} else{
include 'token/csrf.php';
$csrf = new csrf();
// Generate Token Id and Valid
$token_id = $csrf->get_token_id();
$token_value = $csrf->get_token($token_id);
}
?>
    <!-- NAVBAR -->
    <nav class="navbar navbar-dark" style="background-color: #2D2D44">
  <a class="navbar-brand" href="#">
    <img src="../assets/img/tomcatlogo.png" width="40" height="40" class="d-inline-block align-top" alt="tomcatlogo">
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
            <div class="alert alert-primary text-center alert-dismissible fade show alert">
                <strong>Selamat Datang</strong>
            </div>
            <div class="table">
            <center>
                <h3> Form Pendaftaran Tomcat Squad 2020</h3>
                <br>
            </center>
            </div>

            <!-- FORM DAFTAR -->
            <form action="submit.php" method="post">
                <div class="form-group row table">
                    <input type="hidden" name="<?= $token_id; ?>" value="<?= $token_value; ?>" />
                    <label for="Nama" class="col-sm-2 col-form-label">Nama
                    </label>
                    <div class="col-sm-10">
                        <input type="text" maxlength="30" class="form-control" name="Nama" placeholder="Nama Lengkap" required>
                    </div>
                </div>
                <div class="form-group row table">
                    <label for="Kelas" class="col-sm-2 col-form-label">Kelas
                    </label>
                    <div class="col-sm-10">
                        <select class="form-control" name="Kelas">
                            <option>Pilih Kelas
                            </option>
                            <option>X
                            </option>
                            <option>XI
                            </option>
                            <option>XII
                            </option>
                        </select>
                    </div>
                </div>
                <div class="form-group row table">
                    <label for="Jurusan" class="col-sm-2 col-form-label">Jurusan
                    </label>
                    <div class="col-sm-10">
                        <select class="form-control" name="Jurusan">
                            <option>Pilih Jurusan
                            </option>
                            <option>TKJ
                            </option>
                            <option>RPL
                            </option>
                            <option>MM
                            </option>
                            <option>TELCO
                            </option>
                        </select>
                    </div>
                </div>
                <div class="form-group row table">
                    <label for="HP" class="col-sm-2 col-form-label">Nomor HP
                    </label>
                    <div class="col-sm-10">
                        <input type="text" maxlength="14" class="form-control" name="HP" placeholder="WhatsApp" required>
                    </div>
                </div>
                <div class="form-group row table">
                    <label class="col-sm-2 col-form-label">Angkatan
                    </label>
                    <div class="col-sm-10">
                    <select class="form-control" name="Angkatan" required>
                            <option>Pilih Angkatan
                            </option>
                            <option>2017
                            </option>
                            <option>2018
                            </option>
                            <option>2019
                            </option>
                            <option>2020
                            </option>
                        </select>
                    </div>
                </div>
                <center>
                    <button type="submit" value="Login" name="create" class="btn button">SUBMIT
                    </button>
                </center>
            </form>

            <!--JQUERY-->
            <script src="../assets/js/jquery.js">
            </script>
            <script src="../assets/js/popper.js">
            </script>
            <script src="../assets/js/bootstrap.js">
            </script>
            <!-- FOOTER -->
            <footer class="container footer">
                <p style="text-align: center;">&copy; 2020 TOMCAT SQUAD</p>
            </footer>
</body>

</html>