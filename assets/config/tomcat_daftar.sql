-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Jan 2021 pada 09.19
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tomcat_daftar`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'tomcat', 'tomcat123');

-- --------------------------------------------------------

--
-- Struktur dari tabel `anggota`
--

CREATE TABLE `anggota` (
  `id` int(11) NOT NULL,
  `Nama` varchar(40) NOT NULL,
  `Jurusan` varchar(30) NOT NULL,
  `Angkatan` varchar(4) NOT NULL,
  `HP` varchar(20) NOT NULL,
  `Kelas` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nis` int(10) NOT NULL,
  `nama` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nis`, `nama`) VALUES
(1, 30303030, 'TOMCAT SQUAD'),
(2, 202110001, 'ADITYA DWI SETIAWAN '),
(3, 202110002, 'AFFAN RILLA DAFFA PRATAMA'),
(4, 202110003, 'ALDI PRAYOGA'),
(5, 202110004, 'ALFIN ARDIANSYAH'),
(6, 202110005, 'AZKA NABILAH ARDAN '),
(7, 202110180, 'BINTANG MALIK S.'),
(8, 202110007, 'DWIKI ALIRIZA DEWA'),
(9, 202110008, 'FAIZ ZAYN FADILAH'),
(10, 202110009, 'FITO SATRIO'),
(11, 202110010, 'GHAISAN DAFFA AL FAYADH'),
(12, 202110011, 'GIFFARI APRILIANTO RIFALDI'),
(13, 202110013, 'ILHAM RASYID'),
(14, 202110014, 'ITSNA ABIGAIL KUSMAWAN'),
(15, 202110015, 'M. RAFKA HADYAN SUDRAJAT'),
(16, 202110016, 'M.RAFI HABIBIE'),
(17, 202110017, 'MUCHAMAD FACHRUL ROZZI'),
(18, 202110018, 'MUHAMMAD  FAIZ MAULANA'),
(19, 202110019, 'MUHAMMAD IRFAN ELVANO'),
(20, 202110020, 'MUHAMMAD IRGAN CHAIRUL MAHFIDZ'),
(21, 202110021, 'MUHAMMAD NAUFAL AHSAN'),
(22, 202110022, 'QUEENA MELLYSHINE AURORA'),
(23, 202110023, 'RIZKY HAFIZH AFRIANSYAH'),
(24, 202110024, 'SEPTIAWAN HADI PRASETYO '),
(25, 202110025, 'SITI NOOR FADILAH'),
(26, 202110026, 'ZAHRA APRISA KURNIA'),
(27, 202110027, 'ABIAN ANGGANA PUTRA'),
(28, 202110028, 'AKBAR BAYU DWI RAMDANI '),
(29, 202110029, 'ALIF WAHYUDIN MUFID'),
(30, 202110030, 'ALVINO ZAKI'),
(31, 202110031, 'AULIA RISKI APRINA'),
(32, 202110032, 'AYYASY ESA GUNAWAN '),
(33, 202110033, 'DEWI NUR AMALIA'),
(34, 202110034, 'EGGY FAWAS IHSAN'),
(35, 202110035, 'FARHAN PURNOMO'),
(36, 202110257, 'FAUZAN ARRAFI'),
(37, 202110036, 'HABIBAH FITRIA RAMADHANI'),
(38, 202110037, 'HAJJID RAFI MUMTAZ'),
(39, 202110038, 'HANIF ALAUDDINOVA RAMANA'),
(40, 202110039, 'IDA BAGUS RIZKY ALKINDY'),
(41, 202110040, 'KHAIRIEL AHMAD'),
(42, 202110041, 'M.RAFFI AL HAFIIDH'),
(43, 202110042, 'MUHAMMAD HASHFISYAHMI NAFIISA FARIZI'),
(44, 202110043, 'MUHAMMAD KEVIN MAULANA FAUZI'),
(45, 202110044, 'MUHAMMAD ZAKY RYAN ARDHIANSYAH'),
(46, 202110045, 'NURDY AGUS RUSMANA'),
(47, 202110046, 'RAFIE MAULANA EFENDI'),
(48, 202110047, 'RAFLI AULIA ALIF '),
(49, 202110049, 'RATNADUHITA SHADRINA .K.A '),
(50, 202110050, 'RIFKI TAUFIKURROHMAN '),
(51, 202110051, 'SALSABIL MAHESWARI '),
(52, 202110052, 'VIANOLA SEKAR RIFANI '),
(53, 202110053, 'ALDO RIYANTO '),
(54, 202110054, 'ANISYA SEPTIANUR SUSANTO '),
(55, 202110055, 'BRIZAN MAULANA'),
(56, 202110056, 'DEVITA APRILIIA'),
(57, 202110057, 'DHIKA INDRA SYAHPUTRA'),
(58, 202110058, 'FAHRY YAHYA QOIRAWAN'),
(59, 202110059, 'GABRIEL SET CHRISTOPEL'),
(60, 202110060, 'GHIFARY MUHAMMAD RAMADHAN'),
(61, 202110061, 'M. AL RIFKI'),
(62, 202110062, 'M. ANDRICO BIMO R.S P '),
(63, 202110063, 'M. DHIMAS HAFIZH FATHUROHMAN '),
(64, 202110064, 'MICHO DHANI FIRMANSYAH'),
(65, 202110065, 'MUHAMAD IRVAN EKA SUDRAJAT '),
(66, 202110066, 'MUHAMMAD  RIFQY SAPUTRA'),
(67, 202110067, 'MUHAMMAD AZMI AGIL '),
(68, 202110068, 'MUHAMMAD FIKRI RAHMADANI'),
(69, 202110069, 'MUHAMMAD HILMY AL DZAKWAN'),
(70, 202110070, 'MUHAMMAD IKHSAN SAEFUL ANAM '),
(71, 202110071, 'MUHAMMAD IKHSAN SUBAGYO'),
(72, 202110072, 'MUHAMMAD NUR ROCHMAN'),
(73, 202110073, 'MUHAMMAD RAIHAN'),
(74, 202110074, 'MUHAMMAD ZAKI FAUZAN'),
(75, 202110075, 'NAUFAL RAFLI SUNARWIYONO '),
(76, 202110076, 'RAIHAN RIFQI RIZQULLOH '),
(77, 202110077, 'RIZAL BISMIMUBAROK'),
(78, 202110078, 'RIZKY DARMAWAN'),
(79, 202110262, 'SALSABIL FAUZIYYAH'),
(80, 202110079, 'WAHYU AFRIANSYAH '),
(81, 202110080, 'WIDYA INDAH LARASATI'),
(82, 202110081, 'ABIL ABBAS SYIHABUDIN'),
(83, 202110082, 'ACHMAD RAIHAN AFIF'),
(84, 202110083, 'ADITYA DWI PUTRA'),
(85, 202110084, 'BAGAS FAJAR PRATAMA'),
(86, 202110085, 'DAMAR NUGRAHA'),
(87, 202110086, 'DESTIA ANANDA PUTRA'),
(88, 202110087, 'DIMAS PUTRA NUGROHO'),
(89, 202110088, 'DZAKY IGO TRIDANI'),
(90, 202110089, 'FAISHAL TAUFIK ALWAN'),
(91, 202110090, 'FIRDI AHMAD FAUZI'),
(92, 202110091, 'HAGA DALPINTO GINTING'),
(93, 202110092, 'IRFAN HILMI NUR HAKIM'),
(94, 202110093, 'M. RIFKY RAMDHANI'),
(95, 202110094, 'M.SYAHRUL INSAN FAUZI'),
(96, 202110095, 'MAUDY APRILIA SAHARI'),
(97, 202110096, 'MIFTAHUL FALAH SURYAWAN'),
(98, 202110097, 'MUHAMMAD RAKHA'),
(99, 202110098, 'MUHAMMAD SYAEFULLOH '),
(100, 202110099, 'MUHAMMAD ZAHRAN'),
(101, 202110100, 'NAUFAL RIZKI RAMADHAN'),
(102, 202110101, 'NUR AINI RIANDHINY'),
(103, 202110102, 'NUR ALFIYYAH SALSABILA'),
(104, 202110103, 'RADITYATAMA ZUHRY ARFATH'),
(105, 202110104, 'RAFFI INDRA SUSANTO '),
(106, 202110105, 'RAFIF RIFQIANSYAH'),
(107, 202110106, 'REFI FAUZAN'),
(108, 202110108, 'SATRIOKU GADI MAHESWORO'),
(109, 202110109, 'ACHMAD RYAN FADILAH'),
(110, 202110110, 'AHMAD FAUZI ZAIN'),
(111, 202110111, 'AHMAD KHANAFI IKHBAL'),
(112, 202110112, 'ARBY ANRA DELVAN IRYADI '),
(113, 202110113, 'ATTALA NAUFAL'),
(114, 202110114, 'BAYU ADHI PERMANA '),
(115, 202110115, 'DHISVA PUTRI DIEN HANDOYO '),
(116, 202110006, 'DINI SHOFY AULIA'),
(117, 202110116, 'FAIZAL RAMADHAN'),
(118, 202110117, 'FATHUR RAHMAN'),
(119, 202110118, 'FEBRIAN FALIH ALWAFY'),
(120, 202110119, 'GILANG WYRATAMA'),
(121, 202110120, 'HAFIZH NAUFAL ALY'),
(122, 202110121, 'IKRAM IRIANSYAH'),
(123, 202110122, 'JONATHAN KANTOHE '),
(124, 202110123, 'KHURY PASSAI'),
(125, 202110125, 'MAMUN SYACHFAR RANDY'),
(126, 202110127, 'MUHAMAD RAFI ZHAFRAN'),
(127, 202110126, 'MUHAMMAD RAFAEL KURRI SANJIA'),
(128, 202110124, 'MUHAMMAD SHABRIAN FADLY'),
(129, 202110128, 'MUHAMMAD ZIDAN'),
(130, 202110129, 'NADIATUL ADHA'),
(131, 202110130, 'NAJWA AULIA SAYYIDINA'),
(132, 202110131, 'NAUFHAL KURNIAWAN'),
(133, 202110132, 'NICO FEBRIAN '),
(134, 202110133, 'RAIHAN '),
(135, 202110134, 'RIDWAN HAFIZ'),
(136, 202110135, 'RIFKI RAMADHAN'),
(137, 202110136, 'SYARIEF MAULANA PUTRA'),
(138, 202110137, 'ABDAN SYAKUR SINAGA'),
(139, 202110138, 'ADINDA RAHMA PUTRI BALQIS CHANIAGO'),
(140, 202110139, 'ANNISA RAMADHANI PUTRI'),
(141, 202110140, 'ARLYANOV SUTAN FADHLA RAHARJO'),
(142, 202110141, 'ARYA AFRIZZIDDAN'),
(143, 202110142, 'ARYAGUSTAMA DARMAWAN '),
(144, 202110143, 'ATHA MAULANA SHIDDIQ'),
(145, 202110144, 'AUDYA CAHYA GRITAMI '),
(146, 202110145, 'AULIA NURFADILAH '),
(147, 202110146, 'DAVA FADZLE MAULANA'),
(148, 202110147, 'DYANDIRA PRAMITHA KUNDERA'),
(149, 202110148, 'DYLAN FADHLY FERNANTO'),
(150, 202110149, 'FADILAH QORIATUS'),
(151, 202110150, 'FIRDA DAMAYANTI'),
(152, 202110151, 'GHAZANIA ARSY BASITHUTALA'),
(153, 202110152, 'GIOVANNI SEANDRO NUR WIDYADHANA'),
(154, 202110153, 'HAFSHAH RADHIYA YARDHA'),
(155, 202110154, 'IMELDA PUSPITA SARI '),
(156, 202110155, 'JALU AGENG SAJIWO'),
(157, 202110156, 'JAUZAA NOER FADLULLAH '),
(158, 202110157, 'LARASATI PASHA WIBOWO'),
(159, 202110158, 'M.ILHAM ZAENUDDIN'),
(160, 202110159, 'MUHAMMAD DZIKHRA HAMMAN LAKSAMANA'),
(161, 202110160, 'NAUFAL ADDRIAN '),
(162, 202110161, 'NAUFAL MUHAMMAD AFRIZAL '),
(163, 202110162, 'NOVIA ANIS WARDATI'),
(164, 202110163, 'PUTRI MAISAROH '),
(165, 202110164, 'RAFA FADHILAH AULIA'),
(166, 202110165, 'RAVAYLAN RIZA PANGESTU'),
(167, 202110166, 'RIO GABRIEL SIDABUTAR'),
(168, 202110167, 'ROMI SISWO FADHLULLAH'),
(169, 202110168, 'SABRINA ALVINA RIYANNI'),
(170, 202110169, 'SANDY MUHAMMAD RIFQI '),
(171, 202110170, 'SASKY MULIA DEWI'),
(172, 202110171, 'SHAINA ANJANI'),
(173, 202110172, 'VICKY EMAWAN'),
(174, 202110173, 'ACHMAD RAZKA BERLIANA R.'),
(175, 202110174, 'AFIFAH DINI ARISTONINGRUM'),
(176, 202110175, 'AHMAD ZULFIQOR'),
(177, 202110176, 'ALFI ARIFUZAKI '),
(178, 202110177, 'ALFIANSYAH PASARIBU '),
(179, 202110178, 'ANDIKA DWI PUTRA POERWADI'),
(180, 202110179, 'AZRIEL ATALLAH'),
(181, 202110012, 'IKHSAN MAULANA '),
(182, 202110181, 'FATHUR IBNU FAHREZI'),
(183, 202110182, 'FAUZIAN RANGGA CATUR SUSANTO'),
(184, 202110183, 'FAYYADH FAUZAN '),
(185, 202110184, 'FEBYANA ISNAENI'),
(186, 202110185, 'GALLAS DWI ARYA SENO'),
(187, 202110186, 'GIRIANNA CAHYO SAKA KUSUMA '),
(188, 202110187, 'HABIBIE ALFAREL RIVALDO SARAGIH'),
(189, 202110188, 'HANAFIAH TRI AGUSTIN '),
(190, 202110189, 'KANAYA DIZA MAHARANI '),
(191, 202110190, 'KHOIRUNNISA LAILATUL HIDAYAH'),
(192, 202110191, 'MAULANA YUSUF WAHYU  FADELI PUTRA'),
(193, 202110192, 'MUHAMMAD ABDUL MUYASSIR'),
(194, 202110193, 'MUHAMMAD ARIF WAHYUNANDRA '),
(195, 202110194, 'MUHAMMAD NURFAZA '),
(196, 202110195, 'NAILAH ZAHRA ARDHANI'),
(197, 202110196, 'NATANAEL  DEVEN SATRIA WIJAYA'),
(198, 202110197, 'NAZWA RATU NARISYAH'),
(199, 202110198, 'NINA KARLINA'),
(200, 202110199, 'NOSAL RASYID HARITS'),
(201, 202110200, 'NURUL HIKMAH '),
(202, 202110201, 'RAHMAD FAIZ SAPUTRA '),
(203, 202110202, 'RHAFI PUTRA FELANI'),
(204, 202110203, 'RINDIANTI JASMINE AZZAHRA '),
(205, 202110204, 'SASI KIRANA AZALIA RAHMADHANI'),
(206, 202110205, 'SHAlMA EGRIA SANJAYA'),
(207, 202110206, 'SYAFIRA AULIA DESWITA'),
(208, 202110207, 'TAUFIQ YUSTIAN NUGRAHA '),
(209, 202110208, 'TIA LAILA MAALI'),
(210, 202110209, 'ABDUL AZIZ MUSTHAFA'),
(211, 202110210, 'ADITYA DWI KURNIAWAN '),
(212, 202110211, 'AISYAH JUNIARTI'),
(213, 202110212, 'ANANDA REZA IRAWAN'),
(214, 202110213, 'AULIA NATASYA'),
(215, 202110214, 'AXEL FEBRIAN SAINU '),
(216, 202110215, 'DJANUAR RIZKY PUTRA PERDANA'),
(217, 202110216, 'DONI WICAKSONO'),
(218, 202110217, 'FAUZIAH ZULFI RAMADHANI '),
(219, 202110218, 'FERDINO ARIEF ADITYA'),
(220, 202110219, 'FIRZA FEBRIANO'),
(221, 202110220, 'HELMI ZAIM PRASETYO'),
(222, 202110221, 'INDAH PUSPITA SARI'),
(223, 202110222, 'JELITA PUTRI MAHADEWI'),
(224, 202110223, 'LINTANG TRIANDINI JULIA P.'),
(225, 202110224, 'MANDA SHILVIA KHOERUNNISA '),
(226, 202110225, 'MUHAMMAD ASHHIDDIQI'),
(227, 202110226, 'MUHAMMAD RAFII AKBAR '),
(228, 202110227, 'MUHAMMAD SATRIO PUTRA'),
(229, 202110228, 'MUHAMMAD SYAKIR RIZQI '),
(230, 202110229, 'NAJWA AISYAH'),
(231, 202110231, 'NATZWAH AULYA'),
(232, 202110232, 'NAUFAL AQILAH MAHIRA'),
(233, 202110233, 'PRITA AGUSTIN M'),
(234, 202110263, 'RAFIF EMRE RAMADHAN'),
(235, 202110234, 'RAGHDAD AZZAHRA'),
(236, 202110235, 'RAVI FATTURRAHMAN '),
(237, 202110236, 'RENANDA INDRIYANI'),
(238, 202110237, 'REYNA  NUR ALFIAH '),
(239, 202110238, 'SABRINA AVRILLYA PUTRI S.'),
(240, 202110239, 'SYAHRANI ALIFA RAHMA '),
(241, 202110240, 'SYIFA RIDHA FADIYA'),
(242, 202110241, 'TIO EDIRA MAULANA'),
(243, 202110242, 'VIRLY NURIL HAMKA'),
(244, 202110244, 'ZAHRA PUTRI PRISKA'),
(245, 202110258, 'AHMAD JUNAEDI'),
(246, 202110245, 'AHYAR BUDIANA'),
(247, 202110246, 'AIDIL AJI NUR ILHAM '),
(248, 202110247, 'BENAYA NICOLAS MAYORE'),
(249, 202110248, 'BINTANG ARYASATYA'),
(250, 202110249, 'FAUZAN NUR FIRMANSYAH'),
(251, 202110259, 'GUSTI PANGESTU DWI PAMUNGKAS'),
(252, 202110264, 'HAMDANY YAHYA'),
(253, 202110250, 'JORDY APRILIANO PURBA '),
(254, 202110260, 'M.ZIDAN'),
(255, 202110251, 'MARTINO BIJELOYS SIAGIAN'),
(256, 202110252, 'R.IKHWAN RAHISA RAMADHAN'),
(257, 202110253, 'RAHENDRA NARENDS HENDRATA'),
(258, 202110254, 'REXY AXEL NATHANAEL KOROMPIS'),
(259, 202110261, 'RIO TRI HERLAMBANG'),
(260, 202110255, 'SULTAN DAVI IRAWAN '),
(261, 202110256, 'YUDHA IKA WIRATAMA');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `anggota`
--
ALTER TABLE `anggota`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=262;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
