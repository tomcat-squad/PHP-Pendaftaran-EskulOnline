<p align="center"> 
  <img alt="Tels Esport" src="https://user-images.githubusercontent.com/67460437/104824202-6b0dee80-5882-11eb-9559-70b6d5e43bfe.JPG" height="200" />
</p>

## Tentang
Pendaftaran eskul online tomcat dibuat pada saat pandemi tahun 2020. disaat itu kami dilarang untuk bertatap muka untuk menghindari hal yang tidak diinginkan. dan salah satu anggota tomcat inisiatif untuk membuat website pendaftaran eskul agar siswa telesandi bisa bergabung di eskul ini..
## Teknologi Yang Digunakan
[![PHP](https://img.shields.io/badge/-php-4479A1?style=flat-square&logo=PHP&logoColor=ffffff)](https://www.php.com/)
[![MySQL](https://img.shields.io/badge/-MySQL-4479A1?style=flat-square&logo=MySQL&logoColor=ffffff)](https://www.mysql.com/)
![HTML5](https://img.shields.io/badge/-HTML5-E34F26?style=flat-square&logo=html5&logoColor=white)
![CSS3](https://img.shields.io/badge/-CSS-254bdd?style=flat-square&logo=css3&logoColor=white)
![Javascript](https://img.shields.io/badge/-Javascript-efd81d?style=flat-square&logo=Javascript&logoColor=black)

## Installation
1. Import database <a href="https://raw.githubusercontent.com/tomcat-squad/PHP-PendaftaranEskul/main/assets/config/tomcat_daftar.sql">tomcat_daftar.sql</a> ke mysql
#### Linux (Mysql)
```sql
#Buat Database
mysql -u root -p 
CREATE DATABASE tomcat_daftar;
quit;

#Import Database
mysql -u root -p < /home/tomcatsq/tomcat_daftar.sql
```
#### Windows (XAMPP)
```
1. Buat database di phpmyadmin
2. Import tomcat_daftar.sql ke database yang dibuat.
3. Selesai
```
2. Sesuaikan konfigurasi koneksi php ke mysql pada file <a href="https://github.com/tomcat-squad/PHP-PendaftaranEskul/blob/main/assets/config/koneksi.php">config.php</a>
```php
<?php
$server = 'localhost';
$user = 'root';
$password = '';
$database = 'tomcat_daftar';

$koneksi = mysqli_connect($server, $user, $password, $database) OR DIE ("Koneksi Gagal");
```
3. Selesai

## Tested
- XAMPP V3.2.4 
- PHP V7.3

## Login Admin & User
- Admin
<br> Username : tomcat
<br> Password : tomcat123
- User
<br> Nomor Induk Siswa : 30303030

## Fitur
Admin
- Tambah User Login
- Tambah Anggota
- Edit Anggota
- Edit User Login
- Hapus User Login
- Hapus Anggota

User
- Daftar Anggota
- Lihat Anggota

## Security
- Sql Injection
- XSS
- CSRF
- No Redirect Login
