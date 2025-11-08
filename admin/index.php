<?php
include "../lib/koneksi.php";
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>ADMIN STAI YAPERI</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
body {
  font-family: "Lato", sans-serif;
  background-color: #f4f4f9;
  margin: 0;
}

/* Sidebar */
.sidebar {
  height: 100%;
  width: 70px; /* tipis saat tidak dihover */
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background: linear-gradient(135deg, #11998e, #38ef7d); /* gradasi hijau */
  color: #fff;
  overflow-x: hidden;
  transition: width 0.3s ease;
  box-shadow: 2px 0 10px rgba(0,0,0,0.2);
}

/* Saat dihover, sidebar melebar */
.sidebar:hover {
  width: 250px;
}

.sidebar-logo {
  text-align: center;
  padding: 20px 10px;
  border-bottom: 1px solid rgba(255,255,255,0.3);
  transition: all 0.3s;
}

.sidebar-logo img {
  width: 40px;
  height: 40px;
  transition: all 0.3s;
}

.sidebar:hover .sidebar-logo img {
  width: 100px;
  height: 100px;
}

.sidebar-logo div {
  font-size: 0;
  transition: font-size 0.3s;
  color: #fff;
}

.sidebar:hover .sidebar-logo div {
  font-size: 16px;
  margin-top: 10px;
}

/* Link umum */
.sidebar a {
  padding: 12px 20px;
  text-decoration: none;
  font-size: 18px;
  color: #fff;
  display: flex;
  align-items: center;
  gap: 15px;
  white-space: nowrap;
  transition: all 0.3s;
  border-bottom: 1px solid rgba(255,255,255,0.2);
}

/* Hover link */
.sidebar a:hover {
  background-color: rgba(255, 255, 255, 0.15);
  color: #fff;
  border-radius: 5px;
}

/* Menu aktif (Dashboard) */
.sidebar a.active {
  background-color: #fff !important;  /* putih permanen */
  color: #11998e !important;          /* teks hijau */
  font-weight: bold;
  border-radius: 5px;
}

/* Sembunyikan teks saat belum dihover */
.sidebar a span {
  display: none;
  transition: opacity 0.3s;
}

/* Tampilkan teks saat dihover */
.sidebar:hover a span {
  display: inline;
}

/* Layout konten utama */
#main {
  margin-left: 70px;
  padding: 16px;
  transition: margin-left 0.3s;
}

.sidebar:hover ~ #main {
  margin-left: 250px;
}
/* Header Dashboard */
.dashboard-header {
  background: linear-gradient(135deg, #11998e, #38ef7d);
  box-shadow: 0 4px 10px rgba(0,0,0,0.1);
  color: #fff;
  margin-top:-1.6rem;
}
.dashboard-header .breadcrumb-item + .breadcrumb-item::before {
  color: rgba(255,255,255,0.6);
}
.dashboard-header .breadcrumb a:hover {
  text-decoration: underline;
}

  </style>
</head>
<body>

<div class="sidebar">
  <div class="sidebar-logo">
    <img src="../img/Logo1.png">
    <div><strong>STAI YAPERI CIBINONG</strong></div>
  </div>
  <a href="index.php" class="active"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a>
  <a href="?page=berita"><i class="fa fa-newspaper-o"></i> <span>Berita</span></a>
  <a href="?page=ketua"><i class="fa fa-user"></i> <span>Ketua Yaperi</span></a>
  <a href="?page=dosen"><i class="fa fa-graduation-cap"></i> <span>Dosen Yaperi</span></a>
  <a href="?page=dema"><i class="fa fa-university"></i> <span>Dema Yaperi</span></a>
  <a href="?page=akademik"><i class="fa fa-calendar"></i> <span>Kalender Akademik</span></a>
  <a href="?page=jadwal"><i class="fa fa-clock-o"></i> <span>Jadwal Kuliah</span></a>
  <a href="?page=pmb"><i class="fa fa-pencil-square-o"></i> <span>PMB Yaperi</span></a>
  <a href="?page=link"><i class="fa fa-credit-card"></i> <span>Link Pendaftaran</span></a>
  <a href="logout.php"><i class="fa fa-sign-out"></i> <span>Logout</span></a>
</div>
<div id="main">

<div class="container-fluid mt-4">

  <!-- Header Dashboard -->
  <div class="dashboard-header p-4 rounded-3 mb-4 shadow-sm text-white">
    <div class="d-flex flex-column flex-md-row justify-content-between align-items-center">
      <div>
        <h3 class="fw-bold mb-1">Dashboard Admin STAI YAPERI</h3>
        <p class="mb-0">Selamat datang di halaman pengelolaan data kampus.</p>
      </div>
      <nav aria-label="breadcrumb" class="mt-3 mt-md-0">
        <ol class="breadcrumb mb-0 bg-transparent">
          <li class="breadcrumb-item"><a href="index.php" class="text-white text-decoration-none">Home</a></li>
          <li class="breadcrumb-item active text-light" aria-current="page">Dashboard</li>
        </ol>
      </nav>
    </div>
  </div>

</div>

    <div class="container mt-5">
        <?php
$page = isset($_GET["page"]) ? $_GET["page"] : "";
        if(isset($page)){
        if ($page=='berita') {
          include"modul/berita.php";
      }
    if ($page=='ketua') {
      include"modul/ketua.php";
  }
if ($page=='dosen') {
  include"modul/dosen.php";
}
if ($page=='dema') {
  include"modul/dema.php";
}
if ($page=='editdema') {
include"modul/editdema.php";
}
if ($page=='hapusdema') {
include"modul/hapusdema.php";
}
if ($page=='akademik') {
  include"modul/akademik.php";
}
if ($page=='jadwal') {
  include"modul/jadwal.php";
}
if ($page=='pmb') {
  include"modul/pmb.php";
}
if ($page=='link') {
  include"modul/link.php";
}

}

        ?>
        
</div>
</body>
</html>
