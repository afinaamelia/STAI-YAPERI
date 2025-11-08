<?php
    include "lib/koneksi.php";
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title> STAI YAPERI </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500;600;700&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link rel="stylesheet" href="css/bootstrap.min.css" >

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

</head>
<body>
<style>
/* Hilangkan scroll horizontal */
html, body {
  overflow-x: hidden;
}
/* Carousel biar proporsional */
#header-carousel img {
  height: 100vh;         /* tinggi layar penuh */
  object-fit: cover;     /* gambar menyesuaikan tanpa distorsi */
}

/* Logo di section About */
#about img {
  max-width: 100%;       /* supaya tidak melebar keluar */
  height: auto;
}

/* Gambar berita biar rapi */
.courses-item img {
  width: 100%;
  height: 230px;
  object-fit: cover;
}
@media (max-width: 991px) {
  .container-fluid.bg-dark {
    display: none !important;
  }
}
/* container topbar */
.container-fluid.bg-dark {
  font-size: 0.875rem;
}

/* kiri & kanan biar rapi */
.container-fluid.bg-dark .row > div {
  display: flex;
  align-items: center;
  flex-wrap: wrap;
  gap: 15px;
}

/* spacing item kiri */
.container-fluid.bg-dark .row > div:first-child > div {
  margin-right: 1.5rem;
}

.social {
  display: flex;
  align-items: center;  /* vertikal tengah */
  gap: 0rem;          /* jarak antar ikon */
}

.social a {
  display: flex;
  align-items: center;
  justify-content: center;
  width: 2.5rem;        /* kotak ikon */
  height: 2.5rem;       /* kotak ikon */
  text-decoration: none;
  color: #ffc107;
  border-right: 1px solid rgba(255, 255, 255, 0.4);
}

.social a:last-child {
  border-right: none;
}

.social a i {
  font-size: 1.2rem;
}
/* Hover effect: warna putih */
.social a:hover {
  color: #ffffff;
}
.navbar.sticky-top {
    background-color: #fff !important;  /* paksa putih */
    box-shadow: 0 2px 4px rgba(0,0,0,0.1); /* shadow tipis */
    transition: background-color 0.3s ease;
}

</style>

<!-- Topbar Start -->
<div class="container-fluid bg-dark text-light p-0">
  <div class="row align-items-center gx-0 px-4 py-2">

    <!-- kiri -->
    <div class="col-lg-6 col-md-12 d-flex flex-wrap mb-2 mb-lg-0">
      <div class="me-4">
        <i class="fa fa-map-marker-alt text-primary me-2"></i> 
        Jl. Raya Jakarta Bogor KM. 45
      </div>
      <div>
        <i class="far fa-clock text-primary me-2"></i> 
        Senin - Sabtu : 11.00 WIB - 17.00 WIB
      </div>
    </div>

    <!-- kanan -->
    <div class="col-lg-6 col-md-12 d-flex justify-content-lg-end flex-wrap">
      <div class="me-4">
        <i class="fa fa-phone-alt text-primary me-2"></i> 
        (021) 837-137-49
      </div>
      <div class="social">
    <a href="https://web.facebook.com/staiyaperi"><i class="fab fa-facebook-f"></i></a>
    <a href="https://staiyaperi.ac.id"><i class="fab fa-chrome"></i></a>
    <a href="https://instagram.com/staiyaperi?igshid=MzRlODBiNWFlZA=="><i class="fab fa-instagram"></i></a>
    <a href="https://www.tiktok.com/@staiyaperi?_t=zs-909avqm0t1j&_r=1"><i class="fab fa-tiktok"></i></a>
</div>
    </div>

  </div>
</div>
<!-- Topbar End -->


<style>
    /* =============================
   Responsive Navbar HP kecil
============================= */
@media (max-width: 576px) {
  .navbar {
    padding: 0.3rem 0.8rem; /* agak rapet biar muat */
  }

  /* Logo + teks STAI YAPERI */
  .navbar-brand {
    display: flex;
    align-items: center;
    gap: 0.4rem;
  }

  .navbar-brand img {
    width: 45px;   /* kecilin logo */
    height: auto;
  }

  .navbar-brand span {
    font-size: 1rem;  /* kecilin teks */
    transform: translateY(2px);
  }

  /* Tombol toggle (hamburger) geser dikit ke kanan */
  .navbar-toggler {
    margin-left: auto;  /* biar nempel kanan */
    padding: 0.2rem 0.4rem;
  }

  /* Dropdown menu */
  .navbar-collapse {
    width: 100%;
    text-align: center;
    background: #fff;
    border-top: 1px solid #ddd;
  }

  .navbar-nav .nav-link {
    padding: 0.6rem 0;
    font-size: 0.95rem;
  }
}
  /* =============================
   Responsive Navbar
============================= */

/* Tablet & HP */
@media (max-width: 991.98px) {
  /* Navbar jadi satu baris: logo + nama + tombol toggle */
  .navbar {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 0.4rem 1rem;
  }

  /* Logo dan teks STAI YAPERI sejajar */
  .navbar-brand {
    display: flex;
    align-items: center;
    gap: 0.5rem;
    padding: 0;
    border: none !important;
  }

  /* Ukuran logo disesuaikan agar pas di HP */
  .navbar-brand img {
    width: 60px;
    height: auto;
  }

  /* Teks STAI YAPERI */
  .navbar-brand span {
    font-size: 1.2rem;
    transform: translateY(3px);
    font-weight: 700;
  }

  /* Tombol hamburger sejajar kanan */
  .navbar-toggler {
    border: none;
    background: transparent;
    margin-right: 0.3rem;
  }

  /* Posisi dropdown menu */
  .navbar-collapse {
    background: #fff;
    border-top: 1px solid #ddd;
    position: static; /* ⬅️ bukan absolute lagi */
    top: 100%; /* pas di bawah navbar */
    left: 0;
    width: 100%;
    z-index: 999;
  }

  /* Isi menu di HP biar rapi tengah */
  .navbar-nav {
    text-align: center;
    padding: 0.8rem 0;
  }

  .navbar-nav .nav-link {
    padding: 0.7rem 0;
    display: block;
    border-bottom: 1px solid #e0e0e0; /* garis pemisah antar menu */
    color: #333; /* warna teks */
    transition: all 0.3s ease;
  }
    /* Hover effect biar lebih interaktif */
  .navbar-nav .nav-link:hover {
    color: #ffc107;
    background-color: rgba(255, 193, 7, 0.05); /* sedikit kuning transparan */
  }
}

</style>
    <!-- Navbar Start -->
<nav class="navbar navbar-expand-lg navbar-light sticky-top bg-white p-0 shadow-sm">
<a href="index.php" class="navbar-brand d-flex align-items-center border-end px-4 px-lg-5">
    <img src="img/logo1.png" width="78" alt="Logo" class="me-2">
    <span class="fs-2 fw-bold m-0" style="display:inline-block; transform: translateY(5px);">STAI YAPERI</span>
</a>
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>

   <!-- Navbar Menu -->
<div class="collapse navbar-collapse" id="navbarCollapse">
    <div class="navbar-nav ms-auto p-4 p-lg-0" style="font-size:0.95rem;  font-family: 'Roboto' font-weight:400;">
        <a href="index.php" class="nav-item nav-link">Beranda</a>
        <a href="modul/about.php" class="nav-item nav-link">Tentang kami</a>
        <a href="modul/pmb.php" class="nav-item nav-link">PMB online</a>
        <a href="modul/kerjasama.php" class="nav-item nav-link">Kerja sama</a>
        <a href="modul/kontak.php" class="nav-item nav-link">Kontak</a>
    </div>
</div>

</nav>
<!-- Navbar End -->

    <!-- Carousel Start -->

    <style>
      /* Header carousel umum */
.carousel-caption {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  display: flex;
  align-items: center;
  justify-content: center;
  text-align: center;
  background: rgba(0, 0, 0, 0.75);
  z-index: 1;
}

/* Biar img dan caption tetap sinkron tingginya */
#header-carousel .carousel-item {
  position: relative;
}

#header-carousel .carousel-item img {
  width: 100%;
  height: 80vh; /* desktop height */
  object-fit: cover;
}

@media (max-width: 768px) {
  #header-carousel .carousel-item {
    position: relative;
    height: auto; /* biar ngikut tinggi gambar */
    overflow: hidden;
  }

  #header-carousel .carousel-item img {
    width: 100%;
    height: auto; /* proporsional, tidak ketarik */
    object-fit: cover;
    display: block;
  }

  #header-carousel .carousel-caption {
    position: absolute;
    inset: 0; /* nutup penuh area gambar */
    background: rgba(0, 0, 0, 0.65); /* sedikit lebih transparan di HP */
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
    padding: 1rem;
  }

  /* ukuran teks disesuaikan biar tidak terlalu besar */
  #header-carousel .carousel-caption h1 {
    font-size: clamp(1.1rem, 4vw, 1.8rem) !important;
    line-height: 1.3;
  }
    .carousel-control-prev,
  .carousel-control-next {
    width: 15%; /* area klik tetap lebar biar gampang disentuh */
  }

  .carousel-control-prev-icon,
  .carousel-control-next-icon {
    width: 1.8rem;   /* kecilin ukuran tombol */
    height: 1.8rem;
    border: 2px solid var(--primary);
    background-color: var(--primary);
    background-size: 60%; /* biar icon panahnya pas */
  }

  /* geser posisi tombol biar gak nempel ke pinggir */
  .carousel-control-prev {
    left: 0.5rem;
  }

  .carousel-control-next {
    right: 0.5rem;
  }
}
</style>
    <div class="container-fluid p-0 wow fadeIn" data-wow-delay="0.1s">
    <div id="header-carousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="4000">
        <div class="carousel-inner">

            <!-- Slide 1 -->
            <div class="carousel-item active">
                <img class="w-100" src="img/gradu.jpg" alt="Image" style="height:80vh; width:100%; object-fit: cover;">
                <div class="carousel-caption d-flex flex-column justify-content-center align-items-center h-100">
                    <h1 class="text-light animated slideInDown text-center" 
                        style="font-size: clamp(1.5rem, 3vw, 2.5rem); font-family: Montserrat; line-height: 1.3;">
                        <div>YAYASAN PENDIDIKAN AR-RIDHO</div>
                        <div>STAI YAPERI CIBINONG</div>
                    </h1>
                </div>
            </div>

           <!-- Slide 2 -->
<div class="carousel-item">
    <img class="w-100" src="img/wisuda1.jpg" alt="Image" style="height:80vh; width:100%; object-fit:cover;">
    <div class="carousel-caption d-flex flex-column justify-content-center align-items-center h-100">
        <h1 class="text-light animated slideInDown text-center" 
            style="font-size:clamp(1.5rem, 3vw, 2.5rem); font-family:Bebas Neue; line-height: 1.3;">
            <div>BERGABUNGLAH MENJADI KELUARGA</div>
            <div>STAI YAPERI CIBINONG</div>
        </h1>
    </div>
</div>
        </div>

        <!-- Control button -->
        <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>
    </div>
</div>


    <!-- Facts Start -->
<style>
/* =============================
   Link style + Hover Effect
============================= */
.list a {
  color: var(--color-default);
  position: relative;
  text-decoration: none;      /* Hilangkan underline default */
  transition: color 0.3s ease;
  padding-bottom: 0.125rem;   /* 2px */
}

.list a::after {
  content: "";
  position: absolute;
  left: 0;
  bottom: 0;
  width: 0;
  height: 0.125rem;           /* 2px */
  background-color: #ffc107;
  transition: width 0.3s ease;
}

/* Hover effect */
.list a:hover {
  color: #ffc107;
}

.list a:hover::after {
  width: 100%;
}

/* Warna link kuning di HP, tablet, dan iPad */
@media (max-width: 74.9375rem) { /* 1199px = batas bawah desktop besar */
  .list a {
    color: #ffc107 !important;
  }
   .facts .col-lg-3 {
    margin-bottom: 2.4rem !important; /* kasih jarak antar box */
  }
  /* Box putih utama */
 .bg-white.shadow {
  width: 80% !important;
  min-height: 7rem !important;
  font-size: 0.78rem;
  padding: 0.6rem 0.7rem;
  margin-bottom: 1.2rem !important; /* tambahkan jarak antar box */
}
  /* Area fakta utama */
  .facts {
    margin-top: -1.25rem !important; /* -20px */
    padding-top: 2rem !important;
  }
}
/* =============================
   Responsive Layout (HP)
============================= */
@media (max-width: 36rem) { /* 576px */
    .facts .col-lg-3 {
    margin-bottom: 2.4rem !important; /* kasih jarak antar box */
  }
  /* Box putih utama */
 .bg-white.shadow {
  width: 80% !important;
  min-height: 7rem !important;
  font-size: 0.78rem;
  padding: 0.6rem 0.7rem;
  margin-bottom: 1.2rem !important; /* tambahkan jarak antar box */
}

  /* Judul biru di tiap box */
  .flex-shrink-0.bg-primary {
    display: flex;
    align-items: center;
    justify-content: center;
    width: auto !important;
    min-width: 6rem;
    max-width: 34%;
    height: 2.3rem !important;
    border-radius: 0.5rem;
    font-size: 0.9rem !important;
    white-space: nowrap;
    flex-shrink: 0;
  }

  /* Teks isi dalam box */
  .facts ul {
    font-size: clamp(0.9rem, 2.6vw, 1rem) !important;
    line-height: 1.6 !important;
    word-wrap: break-word;
  }

  /* Spasi antar elemen di dalam box */
  .facts .ps-3 {
    margin-top: 0.8rem !important;
  }

  /* Pastikan elemen di dalam box tidak nabrak */
  .facts .d-flex.align-items-start {
    flex-wrap: wrap;
  }

  /* Area fakta utama */
  .facts {
    margin-top: -1.25rem !important; /* -20px */
    padding-top: 2rem !important;
  }

  /* Container dalam facts */
  .facts .container {
    padding-top: 1rem !important;
    padding-bottom: 2rem !important;
  }

  /* Ukuran font dalam paragraf kecil */
  .bg-white.shadow p {
    font-size: 0.75rem;
    margin-bottom: 0;
  }

  /* Ukuran box biru kecil */
  .bg-primary {
    min-width: 4rem !important;
    height: 1.5rem !important;
    font-size: 0.85rem !important;
    padding: 0 0.5rem !important;
  }
}
</style>


    <div class="container-fluid facts py-5 pt-lg-0" style="margin-top:30px;">
    <div class="container py-5 pt-lg-0">
        <div class="row gx-0">

            <!-- Tentang -->
            <div class="col-lg-3 wow fadeIn" data-wow-delay="0.1s">
                <div class="bg-white shadow d-flex align-items-start h-100 p-3" style="box-shadow: 0 0.25rem 0.625rem rgba(0,0,0,0.08); border: 0.063rem solid #ddd; min-height: 10rem; font-size:0.85rem; padding: 1rem; ">
                    <div class="d-flex align-items-start">
                    <div class="flex-shrink-0 bg-primary d-flex align-items-center justify-content-center px-3 py-2" 
                            style="height:1.5625rem; border-radius:0.5rem; width:6.25rem; font-size:1rem;  padding: 0 0.75rem;">
                        <i class="fa fa-file-alt text-white me-2"></i>
                        <span class="text-white">Tentang</span>
                        </div>
                        <div class="ps-3" style="margin-top:1rem;">
                    <ul class="list p-0 m-0" style="list-style:none; font-size:0.95rem; line-height: 1.6;">
                        <li>- <a href="modul/about.php">Sejarah STAI YAPERI</a></li>
                        <li>- <a href="modul/visimisi.php">Visi, Misi & Tujuan</a></li>
                        <li>- <a href="modul/mars.php">Mars & Hymne STAI YAPERI</a></li>
                        <li>- <a href="modul/lambang.php">Logo STAI YAPERI</a></li>
                    </ul>
                    </div>
                    </div>
                </div>
            </div>

            <!-- Lembaga -->
            <div class="col-lg-3 wow fadeIn" data-wow-delay="0.1s">
                <div class="bg-white shadow d-flex align-items-start h-100 p-3"  style="min-height: 9.375rem; font-size:0.8125rem; box-shadow: 0 0.25rem 0.625rem rgba(0,0,0,0.08); border: 0.063rem solid #ddd;">
                    <div class="d-flex align-items-start">
                    <div class="flex-shrink-0 bg-primary d-flex align-items-center justify-content-center px-3 py-2" 
                    style="height:1.5625rem; border-radius:4px; width:100px; font-size:17px; white-space:nowrap;">
                    <i class="fa fa-file-alt text-white me-2"></i>
                    <span class="text-white">Lembaga</span>
                        </div>
                        <div class="ps-3" style="margin-top:15px;">
                    <ul class="list p-0 m-0" style="list-style:none; font-size:15px; line-height:1.7;">
                                <li>- <a href="modul/ketua.php">Ketua STAI YAPERI</a></li>
                                <li>- <a href="modul/dosen.php">Struktural STAI YAPERI</a></li>
                                <li>- <a href="modul/dema.php">Organisasi Kampus</a></li>
                                </ul>
                    </div>
                    </div>
                </div>
            </div>

            <!-- Akademik -->
            <div class="col-lg-3 wow fadeIn" data-wow-delay="0.1s">
                <div class="bg-white shadow d-flex align-items-start h-100 p-3" style="min-height: 9.375rem; font-size:0.8125rem; box-shadow: 0 0.25rem 0.625rem rgba(0,0,0,0.08); border: 0.063rem solid #ddd;">
                    <div class="d-flex align-items-start">
                    <div class="flex-shrink-0 bg-primary d-flex align-items-center justify-content-center px-3 py-2" 
                    style="height:1.5625rem; border-radius:4px; width:100px; font-size:17px; white-space:nowrap;">
                    <i class="fa fa-file-alt text-white me-2"></i>
                    <span class="text-white">Akademik</span>
                        </div>
                        <div class="ps-3" style="margin-top:15px;">
                    <ul class="list p-0 m-0" style="list-style:none; font-size:15px; line-height:1.7;">
                                <li>- <a href="modul/kalender.php">Kalender Akademik</a></li>
                                <li>- <a href="modul/matkul.php">Jadwal Kuliah</a></li>
                                <li>- <a href="modul/pmb.php">Penerima Mahasiswa Baru (S1)</a></li>
                                <li>- <a href="modul/jurnal.php">E-Journal</a></li>
                                <li>- <a href="https://sister.kemdikbud.go.id/beranda">Sistem Terintegrasi</a></li>
                                </ul>
                    </div>
                    </div>
                </div>
            </div>
            <!-- Fasilitas -->
            <div class="col-lg-3 wow fadeIn" data-wow-delay="0.1s">
                <div class="bg-white shadow d-flex align-items-start h-100 p-3" style="min-height: 9.375rem; font-size:0.8125rem; box-shadow: 0 0.25rem 0.625rem rgba(0,0,0,0.08); border: 0.063rem solid #ddd;">
                    <div class="d-flex align-items-start">
                    <div class="flex-shrink-0 bg-primary d-flex align-items-center justify-content-center px-3 py-2" 
                    style="height:1.5625rem; border-radius:4px; width:100px; font-size:17px; white-space:nowrap;">
                    <i class="fa fa-file-alt text-white me-2"></i>
                    <span class="text-white">Fasilitas</span>
                        </div>
                        <div class="ps-3" style="margin-top:15px;">
                    <ul class="list p-0 m-0" style="list-style:none; font-size:15px; line-height:1.7;">
                                <li>- <a href="modul/beasiswa.php">Beasiswa</a></li>
                                <li>- <a href="modul/kontak.php">Webmail</a></li>
                                </ul>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    <!-- Facts End -->

<!-- About Start -->
<div id="about">
  <div class="container-xxl py-6">
    <div class="container">
      <div class="row align-items-center justify-content-between">

        <!-- Gambar -->
        <div class="col-lg-6 col-md-12 wow fadeInUp mb-4 mb-lg-0" data-wow-delay="0.5s">
          <img src="img/logo1.png" alt="Logo STAI YAPERI" class="img-about">
        </div>

        <!-- Teks -->
        <div class="col-lg-6 col-md-12 wow fadeInUp" data-wow-delay="0.5s">
          <h6 class="text-primary text-uppercase mb-2">TENTANG KAMI</h6>
          <h1 class="display-6 mb-4">Sejarah Singkat STAI YAPERI</h1>
          <p class="rapat me-1">
        STAI YAPERI berdiri pada <strong>22 Maret 2002</strong>.
        </p>
        <p class="rapat me-3">
        Pendirinya adalah <strong>Drs. H. Ahmad Nuryani, HS, M.Pd.I (Alm)</strong>.
        </p>
          <!-- Program Studi -->
          <ul class="program-list">
            <li>
              <i class="fa fa-book-open text-primary me-2 align-middle"></i>
              <strong  class="align-middle">Pendidikan Agama Islam (S.Pd)</strong>
              <span class="ketua">Ketua Program Studi: Tb. Maulana Setiaki, S.Pd.I, M.SI</span>
            </li>
            <li>
              <i class="fa fa-balance-scale text-primary me-2 align-middle"></i>
              <strong  class="align-middle">Hukum Kekeluargaan Islam (SH)</strong>
              <span class="ketua">Ketua Program Studi: Raden H. Roby Samsi, S.Ag, M.Pd</span>
            </li>
          </ul>

          <!-- Fitur -->
          <h5 class="text-dark fw-bold">Fasilitas & Layanan</h5>
          <div class="about-list">
            <div><i class="fa fa-check text-primary me-2"></i>Penunjang Perkuliahan</div>
            <div><i class="fa fa-check text-primary me-2"></i>Pustaka</div>
            <div><i class="fa fa-check text-primary me-2"></i>Layanan IT</div>
            <div><i class="fa fa-check text-primary me-2"></i>Beasiswa</div>
            <div><i class="fa fa-check text-primary me-2"></i>Webmail</div>
          </div>
        </div>

      </div>
    </div>
  </div>
</div>
<!-- About End -->

<style>
/* ====== BAGIAN UTAMA #ABOUT ====== */

/* Layout utama */
#about h5.text-dark.fw-bold {
  position: relative;
  display: inline-block;
  font-size: 1rem;
  font-weight: 700;
  color: #2c3e50;
  text-transform: uppercase;
  letter-spacing: 0.5px;
  text-align: center;
  margin: 0 auto 1.3rem auto;
}

/* Garis bawah kuning */
#about h5.text-dark.fw-bold::after {
  content: "";
  position: absolute;
  left: 50%;
  bottom: -6px; /* jarak garis dari teks */
  transform: translateX(-50%);
  width: 70%; /* panjang garis relatif ke teks */
  height: 15%; /* tebal garis */
  background-color: #ffc107; /* warna kuning */
  border-radius: 2px;
}
#about h1.display-6 {
  position: relative;
  display: inline-block;   /* biar garisnya ngikut lebar teks */
  font-size: 1rem;
  font-weight: 700;
  color: #2c3e50;
  text-transform: uppercase;
  letter-spacing: 1px;
  text-align: center;
  margin: 0 auto 2rem auto;
}

/* Garis bawah kuning */
#about h1.display-6::after {
  content: "";
  position: absolute;
  left: 50%;
  bottom: -8px;             /* jarak garis dari teks */
  transform: translateX(-50%);
  width: 80%;               /* panjang garis relatif ke teks */
  height: 15%;              /* tebal garis */
  background-color: #ffc107; /* warna kuning */
  border-radius: 2px;
}
#about .row {
  display: flex;
  flex-wrap: nowrap;
  align-items: center;
  gap: 2rem;
}

/* Gambar */
.img-about {
  width: 78%;
  max-height: 60vh;
  object-fit: contain;
  display: block;
  margin: 0 auto;
}

/* ====== TEKS ====== */
#about h6 {
  font-weight: 700;
  letter-spacing: 1px;
}

#about h1 {
  font-size: clamp(1.5rem, 2.5vw, 2.2rem);
  font-weight: 600;
  margin-bottom: 1rem;
}
/* Paragraf umum */
#about p.rapat {
  font-size: clamp(0.9rem, 2.5vw, 1rem);
  line-height: 1.3;
  margin: 0 auto 0.4rem auto;
  padding: 0 1rem;
  max-width: 100%;
  text-align: justify;
  word-break: break-word;
  overflow-wrap: break-word;
}

/* ====== LIST PROGRAM STUDI ====== */
.program-list {
  max-width: 100%;
  padding: 0 1rem;
  font-size: 0.9rem;
  list-style: none;
  text-align: left;
}

.program-list li {
  margin-bottom: 0.8rem;
  word-break: break-word;
  overflow-wrap: break-word;
}

/* Judul Prodi */
.program-list strong {
  font-weight: 670;
  line-height: 1.1;
  display: inline-block;
  vertical-align: middle;
}

/* Teks ketua di bawah */
.program-list .ketua {
  display: block;
  margin-left: 1.8rem; /* disesuaikan agar sejajar dengan teks atas */
  font-size: 0.85rem;
  color: #555;
  line-height: 1.4;
}


/* ====== FASILITAS & LAYANAN ====== */
.about-list {
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  gap: 0.4rem 1rem;
  margin-bottom: 1rem;
}

.about-list div {
  display: flex;
  align-items: center;
  font-size: 0.95rem;
}

/* ====== RESPONSIVE UNTUK TABLET ====== */
@media (max-width: 992px) {
    #about .row {
    flex-direction: column;
    flex-wrap: wrap;
    text-align: center;
  }

  #about p.rapat {
    font-size: 0.9rem;
    text-align: center;
  }

  .img-about {
    max-height: 40vh;
    margin-bottom: 1rem;
  }

  .program-list {
    text-align: left;
    margin: 0 auto 1rem auto;
    max-width: 400px;
  }

  .about-list {
    grid-template-columns: 1fr;
    max-width: 350px;
    margin: 0 auto;
    text-align: left;
  }
  }

/* ====== RESPONSIVE UNTUK HP ====== */
@media (max-width: 768px) {
  #about .col-lg-6, 
  #about .col-md-12 {
    width: 100%;
    padding: 0 0.5rem;
    box-sizing: border-box;
  }

  #about h1.display-6 {
    font-size: 1.2rem;
    line-height: 1.3;
  }

  #about h6 {
    font-size: 1rem;
  }

  /* Paragraf rapat */
  #about p.rapat {
    font-size: clamp(0.85rem, 2.5vw, 1rem);
    line-height: 1.4;
    margin: 0 auto 0.6rem auto;
    padding: 0 0.75rem; /* dikurangin sedikit */
    text-align: justify;
    word-break: break-word;
    overflow-wrap: break-word;
    box-sizing: border-box;
  }

  /* ====== LIST PROGRAM STUDI ====== */
  .program-list {
    font-size: 1rem;
    padding: 0 0.8rem;
    margin: 0;
    width: 100%;
    box-sizing: border-box; /* biar padding nggak bikin overflow */
  }

  /* Biar ikon & teks nggak bikin lebar ekstra */
  .program-list i,
  .program-list strong,
  .program-list .ketua {
    flex-shrink: 1;
    max-width: 100%;
  }

  /* Biar gak keluar layar */
  #about,
  .container,
  .container-xxl {
    width: 100%;
    overflow-x: hidden;
  }
}

/* ====== RESPONSIVE UNTUK LAYAR KECIL (HP KECIL) ====== */
@media (max-width: 576px) {
  /* ====== JUDUL ====== */
  #about h1.display-6 {
    font-size: 1rem;
    line-height: 1.3;
    padding: 0 0.8rem;
    word-break: break-word;
  }

  /* ====== PARAGRAF ====== */
  /* Cegah kontainer melebar */
  #about,
  #about .container,
  #about .row,
  #about .col-lg-6,
  #about .col-md-12 {
    width: 100%;
    max-width: 100%;
    margin: 0;
    padding: 0;
    overflow-x: hidden;
    box-sizing: border-box;
  }

  /* Paragraf rapat */
  #about p.rapat {
    font-size: clamp(0.85rem, 2.5vw, 1rem);
    line-height: 1.4;
    margin: 0 auto 0.6rem auto;
    padding: 0 0.75rem; /* dikurangin sedikit */
    text-align: justify;
    word-break: break-word;
    overflow-wrap: break-word;
    box-sizing: border-box;
  }

  /* ====== LIST PROGRAM STUDI ====== */
  .program-list {
    font-size: 0.8rem;
    padding: 0 0.8rem;
    margin: 0;
    width: 100%;
    box-sizing: border-box; /* biar padding nggak bikin overflow */
  }

  .program-list li {
    word-break: break-word;
    overflow-wrap: break-word;
  }

  /* Biar ikon & teks nggak bikin lebar ekstra */
  .program-list i,
  .program-list strong,
  .program-list .ketua {
    flex-shrink: 1;
    max-width: 100%;
  }

  /* Biar gak keluar layar */
  #about,
  .container,
  .container-xxl {
    width: 100%;
    overflow-x: hidden;
  }
}

</style>


<!-- berita Start -->
 <section id="berita">
    <div class="container-xxl courses my-6 py-6 pb-0">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h6 class="text-primary text-uppercase mb-2">Trending headlines</h6>
                <h1 class="display-6 mb-4">Berita Utama</h1>
            </div>
            <p class="scroll-hint text-center text-muted mb-3 d-md-none">
  <i class="fa fa-hand-point-right me-2 text-primary"></i>
  Geser ke samping untuk lihat berita lainnya
</p>

            <div class="row g-4 justify-content-center news-row">
<?php
    $sqloutput=$koneksi->query('SELECT * FROM tb_berita');
    while ($tampil=$sqloutput->fetch_array()) {
?>
    <div class="news-item wow fadeInUp" data-wow-delay="0.1s">
        <div class="courses-item d-flex flex-column bg-white overflow-hidden h-100">
            <div class="text-center p-4 pt-0">
                <div class="d-inline-block bg-primary text-white fs-5 py-1 px-4 mb-4"><?=$tampil['nomor']?></div>
                <h5 class="mb-3"><?=$tampil['judul']?></h5>
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item small">
                        <i class="fa fa-calendar-alt text-primary me-2"></i><?=$tampil['tanggal']?>
                    </li>
                </ol>
            </div>
            <div class="position-relative mt-auto">
                <img class="img-fluid" src="admin/gbr/<?=$tampil['gambar']?>" alt="" style="height:230px; width:100%; object-fit:cover;">
                <div class="courses-overlay">
                    <a class="btn btn-outline-primary border-2" href="modul/berita.php?id=<?=$tampil['id_berita']?>">Read More</a>
                </div>
            </div>
        </div>
        </div>
<?php } ?>
</div>
        </div>
    </div>
    </section>
     <style>
      /*** Courses ***/
      #berita h1.display-6 {
  position: relative;
  display: inline-block;
  font-size: 1.5rem;
  font-weight: 700;
  color: #2c3e50;
  text-transform: uppercase;
  letter-spacing: 1px;
  text-align: center;
  margin: 0 auto 2rem auto;
}

/* Garis bawah kuning */
#berita h1.display-6::after {
  content: "";
  position: absolute;
  left: 50%;
  bottom: -10px; /* jarak garis dari teks */
  transform: translateX(-50%);
  width: 80%; /* panjang garis relatif ke teks */
  height: 10%; /* tebal garis */
  background-color: #ffc107; /* warna kuning */
  border-radius: 2px;
}
.courses {
    min-height: 75vh; /* sebelumnya 100vh, jadi lebih pendek */
    width: 100%; /* tetap full lebar */
    background: linear-gradient(rgba(255, 255, 255, .9), rgba(255, 255, 255, .9)),
                url(img/ft4.jpg) center center no-repeat;
    background-attachment: fixed;
    background-size: cover;
  }
  
.courses-item .courses-overlay {
    position: absolute;
    width: 100%;
    height: 0;
    top: 0;
    left: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    background: rgba(0, 0, 0, .5);
    overflow: hidden;
    opacity: 0;
    transition: .5s;
}

.courses-item:hover .courses-overlay {
    height: 100%;
    opacity: 1;
}

.news-item .courses-item .d-inline-block {
    display: flex;                  
    justify-content: center;        
    align-items: center;            
    width: 1.6rem;       /* 25px ≈ 1.5625rem */
    height: 1.875rem;    /* 30px ≈ 1.875rem */
    font-size: 0.1rem;   /* biar sama proporsi, sesuaikan jika perlu */
    border-radius: 0.625rem; /* 10px ≈ 0.625rem */
    background-color: #0d6efd;  
    color: #fff;
    margin: 0 auto 0.625rem auto; /* 10px ≈ 0.625rem */
}
.news-row {
    display: flex;
    flex-wrap: nowrap;
    gap: 20px;
    overflow-x: auto;
    scroll-behavior: smooth;
}

.news-row .news-item {
    flex: 0 0 33.333%;
    max-width: 33.333%;
    box-sizing: border-box;
}

.news-item .courses-item {
    display: flex;
    flex-direction: column;
    background: #fff;
    overflow: hidden;
    height: 100%;
}

.news-item .courses-item .text-center {
    padding: 1.25rem; /* 20px ≈ 1.25rem */
    text-align: center;
    display: flex;
    flex-direction: column;
    flex: 1 0 auto;
}

.news-item .courses-item h5 {
    min-height: 3.125rem;   /* 50px ≈ 3.125rem */
    overflow: hidden;
    text-overflow: ellipsis;
}

.news-item .courses-item .breadcrumb {
    font-size: 1.1rem;
    margin-top: auto;   /* push tanggal ke bawah card */
    margin-bottom: 0;
}
.news-item .courses-item img {
    height: 14.375rem;      /* 230px ≈ 14.375rem */
    width: 100%;
    object-fit: cover;  /* crop agar pas */
    flex: 0 0 auto;
}

.news-item .courses-overlay {
    position: absolute;
    bottom: 0.625rem;       /* 10px ≈ 0.625rem */
    width: 100%;
    text-align: center;
}

/* responsive */
/* Base desktop styling tetap seperti sebelumnya */

/* Tablet (≤992px) */
@media (max-width: 992px) {
 /* Pesan geser muncul untuk semua layar ≤992px */
  .scroll-hint {
    display: block;          /* pastikan tampil */
    font-size: 0.9rem;
    text-align: center;
    color: #6c757d;
    margin-bottom: 1rem;
    animation: hintMove 1.5s infinite alternate;
  }

  @keyframes hintMove {
    from {
      transform: translateX(0);
    }
    to {
      transform: translateX(6px);
    }
  }
    .courses {
    min-height: 45vh !important; /* sedang, biar gak terlalu tinggi */
    background-attachment: scroll; /* hindari bug parallax di tablet/iPad */
  }
    .news-row {
        flex-wrap: nowrap;        
        gap: 1rem;               
        overflow-x: auto;
        scroll-behavior: smooth;
        padding: 0 0.5rem;       
    }

    .news-row .news-item {
        flex: 0 0 48%;            /* 2 card per baris */
        max-width: 48%;
    }

    .news-item .courses-item {
        height: 22rem;            /* kunci tinggi total card */
        display: flex;
        flex-direction: column;
        background: #fff;
        overflow: hidden;
        position: relative;
    }

    .news-item .courses-item .text-center {
        padding: 1rem;
        flex: 0 0 auto;           /* teks tidak stretch */
    }

    .news-item .courses-item h5 {
        font-size: 1rem;
        min-height: 2rem;         /* tetap proporsional */
        overflow: hidden;
    }

    .news-item .courses-item .d-inline-block {
        width: 1.4rem;            
        height: 1.6rem;
        font-size: 0.95rem;
        margin-bottom: 0.5rem;
    }

    .news-item .courses-item .breadcrumb {
        font-size: 0.95rem;
        margin-top: auto;         /* push tanggal ke bawah */
    }

    .news-item .courses-item img {
        height: 11rem;            /* kunci tinggi gambar supaya total card proporsional */
        width: 100%;
        object-fit: cover;
        flex: 0 0 auto;
    }

    .news-item .courses-overlay {
        bottom: 0.5rem;
    }
}


/* HP (≤576px) */
@media (max-width: 576px) {
    .scroll-hint {
  margin-left: -3rem;
  font-size: 0.9rem;
  animation: hintMove 1.5s infinite alternate;
}

@keyframes hintMove {
  from {
    transform: translateX(0);
  }
  to {
    transform: translateX(5px);
  }
} 
   .courses {
    min-height: 55vh !important; /* dipendekin biar nggak kepanjangan */
    background-attachment: scroll; /* biar gak ngestuck pas di-scroll di HP */
  }
    .news-row {
        flex-wrap: nowrap;       
        gap: 0.75rem;           
        overflow-x: auto;       
        scroll-behavior: smooth;
        padding: 0 0.5rem;     
    }

    .news-row .news-item {
        flex: 0 0 80%;          
        max-width: 80%;
    }

    .news-item .courses-item .text-center {
        padding: 0.75rem;       
    }

    .news-item .courses-item h5 {
        font-size: 0.95rem;      
        min-height: 2rem;       
        overflow: hidden;
    }

    .news-item .courses-item .d-inline-block {
        width: 1.25rem;         
        height: 1.5rem;         
        font-size: 0.95rem;
    }

    .news-item .courses-item .breadcrumb {
        font-size: 0.9rem;      
        margin-top: auto;
    }

    .news-item .courses-item img {
        height: 10rem;          
        object-fit: cover;
    }

    .news-item .courses-overlay {
        bottom: 0.5rem;
    }
}

</style>
    <!-- berita End -->
     
<!-- ===== VISI & MISI START ===== -->
<section id="visi-misi" class="py-0">
  <div class="container">

    <!-- Judul -->
    <div class="text-center mb-5">
    <h6 class="text-primary text-uppercase mb-2">STAI YAPERI</h6>

      <h2 class="fw-bold text-dark mb-3">Visi & Misi</h2>
    </div>

    <!-- Carousel -->
    <div id="visiMisiCarousel" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner text-center">

        <!-- Visi -->
        <div class="carousel-item active">
          <div class="px-3">
          <i class="fa fa-book-open text-primary fa-3x mb-3"></i>
            <h4 class="fw-bold mb-3">Visi</h4>
            <p class="fs-5 text-muted mx-auto visi-text">
              Terwujudnya sekolah tinggi agama Islam yang unggul, handal, dan terdepan dalam pengkajian, pengembangan, pengintegrasian, serta penerapan ilmu agama Islam yang berlandaskan nilai keislaman, kemanusiaan, dan keindahan.
            </p>
          </div>
        </div>

        <!-- Misi -->
        <div class="carousel-item">
          <div class="px-3">
          <i class="fa fa-book-open text-primary fa-3x mb-2"></i>
            <h4 class="fw-bold mb-3">Misi</h4>
            <ul class="list-unstyled fs-5 text-muted mx-auto visi-misi-list" style="max-width: 700px;">
  <li>Melaksanakan pendidikan dan pengajaran integratif dalam ilmu agama Islam.</li>
  <li>Mengembangkan dan menerapkan ilmu agama Islam berbasis pendidikan, penelitian, dan pengabdian.</li>
  <li>Menyelenggarakan manajemen modern perguruan tinggi berorientasi kualitas, transparansi, akuntabilitas, dan profesionalitas.</li>
  <li>Menjalin kerjasama dengan lembaga pemerintah dan non-pemerintah baik dalam maupun luar negeri.</li>
</ul>
          </div>
        </div>

      </div>

      <!-- Control -->
      <button class="carousel-control-prev" type="button" data-bs-target="#visiMisiCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#visiMisiCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
      </button>

    </div>
  </div>
</section>
<!-- ===== VISI & MISI END ===== -->

<style>
  #visi-misi h2.fw-bold {
  position: relative;
  display: inline-block;
  font-size: 1.8rem;
  font-weight: 700;
  color: #2c3e50;
  text-transform: uppercase;
  letter-spacing: 1px;
  text-align: center;
  margin: 0 auto 2rem auto;
}

/* Garis bawah kuning */
#visi-misi h2.fw-bold::after {
  content: "";
  position: absolute;
  left: 50%;
  bottom: -10px;
  transform: translateX(-50%);
  width: 80%;
  height: 10%;
  background-color: #ffc107;
  border-radius: 2px;
}

    .visi-text {
  max-width: 680px;
  margin-top: 2rem;   /* jarak atas */
  margin-bottom: 5rem;/* jarak bawah */
  line-height: 1.7;   /* jarak antar baris biar enak dibaca */
}

.visi-misi-list {
  max-width: 700px;     /* biar nggak kepanjangan */
  margin: 0 auto;       /* posisikan ke tengah */
}

.visi-misi-list li {
  position: relative;
  padding-left: 2rem;   /* jarak untuk icon */
  margin-bottom: 0.4rem;
  text-align: justify;  /* teks rata kanan kiri */
  line-height: 1.5;
}

.visi-misi-list li::before {
  content: "\f058"; /* fa-check-circle unicode */
  font-family: "Font Awesome 5 Free";
  font-weight: 900;
  position: absolute;
  left: 0;
  top: 0.15rem;
  color: #28a745;
  font-size: 1rem;
}

#visi-misi i {
  transition: transform .3s;
}
#visi-misi i:hover {
  transform: scale(1.2);
}

/* Tombol prev/next */
#visiMisiCarousel .carousel-control-prev,
#visiMisiCarousel .carousel-control-next {
  width: 2.5rem;   /* sekitar 40px */
  height: 2.5rem;
  top: 50%;
  transform: translateY(-50%);
}
#visiMisiCarousel .carousel-control-prev-icon,
#visiMisiCarousel .carousel-control-next-icon {
  width: 1.25rem;   /* sekitar 20px */
  height: 1.25rem;   
}

/* Tinggi area carousel */
#visiMisiCarousel .carousel-inner {
  min-height: 22rem; /* sekitar 352px */
  display: flex;
  align-items: center;
}
#visiMisiCarousel .carousel-item {
  min-height: 25rem; /* sekitar 400px */
  margin-bottom: 3rem; /* lebih besar untuk layar kecil */
}

/* ===================== */
/* RESPONSIVE UNTUK HP   */
/* ===================== */
@media (max-width: 768px) {
    .carousel-item {
    margin-bottom: 4rem; /* lebih besar untuk layar kecil */
  }
    .visi-misi-list {
    max-width: 100%;   /* lebar mengikuti layar HP */
    padding-left: 0.5rem;
    padding-right: 0.5rem;
    font-size: 0.9rem; /* sedikit lebih kecil supaya muat */
  }
  #visi-misi h2 {
    font-size: 1.5rem; /* judul lebih kecil */
  }
  #visi-misi h4 {
    font-size: 1.2rem; /* subjudul */
  }
  #visi-misi p, 
  #visi-misi li {
    font-size: 0.9rem; /* isi teks kecil */
  }
  #visi-misi i {
    font-size: 1.8rem; /* icon lebih kecil */
      }

  /* Control lebih kecil */
  #visiMisiCarousel .carousel-control-prev,
  #visiMisiCarousel .carousel-control-next {
    width: 2rem;
    height: 2rem;
    display: none !important;

  }
  #visiMisiCarousel .carousel-control-prev-icon,
  #visiMisiCarousel .carousel-control-next-icon {
    width: 1rem;
    height: 1rem;
  }

  /* Tinggi area lebih pendek */
  #visiMisiCarousel .carousel-inner {
    min-height: 16rem; 
  }
  #visiMisiCarousel .carousel-item {
    min-height: 18rem; 
  }
}
</style>

<!-- Full width footer -->
<footer class="text-white text-center text-lg-start bg-dark" style="margin-top: 4rem;">
  <!-- Grid container -->
  <div class="container-fluid p-3">
    <div class="row mt-3">
      
      <!-- col 1 -->
      <div class="col-lg-4 col-md-12 mb-md-0 d-flex">
        <img src="img/f1.png" alt="Logo" class="img-fluid logo-footer">
      </div>

          <!-- col 2 -->
      <div class="col-lg-3 col-md-6 mb-4 mb-md-0 kontak">
        <h5 class="text-uppercase mb-4 pb-1 text-primary">Kontak</h5>
        <ul class="fa-ul" style="margin-left: 1.65em;">
          <li class="mb-3"><span class="fa-li"><i class="fa fa-map-marker-alt"></i></span><span class="ms-2">STAI YAPERI CIBINONG</span></li>
          <li class="mb-3"><span class="fa-li"><i class="fas fa-envelope"></i></span><span class="ms-2">stai.yaperi.cbg@gmail.com</span></li>
          <li class="mb-3"><span class="fa-li"><i class="fab fa-whatsapp fa-lg"></i></span><span class="ms-2">+62 8515-697-697-4</span></li>
          <li class="mb-3"><span class="fa-li"><i class="fas fa-phone"></i></span><span class="ms-2">(021) 837-137-49</span></li>
        </ul>
      </div>

      <!-- col 3 -->
      <div class="col-lg-3 col-md-6 mb-4 mb-md-0 jam">
        <h5 class="text-uppercase mb-4 text-primary">Jam Operasional</h5>
        <table class="table text-center text-white mb-0">
          <tbody class="font-weight-normal">
            <tr><td>Senin - Selasa</td><td>12.00 s/d 17.00 WIB</td></tr>
            <tr><td>Rabu - Sabtu</td><td>10.00 s/d 18.00 WIB</td></tr>
            <tr><td>Minggu</td><td>Tutup</td></tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <!-- Copyright -->
  <div class="footer-bottom p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    <div class="footer-wrapper">
      <!-- Copyright kiri -->
      <div class="footer-left">
        © Copyright 2025 
        <a class="text-primary" href="#">STAI YAPERI Cibinong</a> All Rights Reserved.
      </div>
      <!-- Sosmed kanan -->
      <div class="footer-right">
        <a href="https://instagram.com/staiyaperi" class="social-f"><i class="fab fa-instagram"></i></a>
        <a href="https://web.facebook.com/staiyaperi" class="social-f"><i class="fab fa-facebook-f"></i></a>
        <a href="https://staiyaperi.ac.id" class="social-f"><i class="fas fa-globe"></i></a>
        <a href="https://www.tiktok.com/@staiyaperi" class="social-f"><i class="fab fa-tiktok"></i></a>
      </div>
    </div>
  </div>
</footer>

<style>
/* Default desktop */
.logo-footer {
  width: 26.25rem;
  height: auto;
  margin-top: -2.7rem;
}

.footer-wrapper {
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.footer-right {
  display: flex;
  justify-content: flex-end;
  padding-right: 1.25rem;
}
 .social-f {
  width: 2.25rem;           /* sebelumnya 36px */
  height: 2rem;             /* sebelumnya 32px */
  display: inline-flex;
  align-items: center;
  justify-content: center;
  border-radius: 25%;
  background: #ffc107;
  color: #000;  
  text-decoration: none;
  font-size: 0.875rem;      /* sebelumnya 14px */
  margin-left: 0.625rem;    /* sebelumnya 10px */
  transition: 0.3s;
}

.social-f:hover {
  background: #fff;
  color: #000;
}
/* Bagian kontak footer */
.col-lg-3.col-md-6.mb-4.mb-md-0 {
  text-align: left; /* Pastikan semua isi rata kiri */
  }

.kontak h5 {
  margin-left: 1.5rem; /* Pastikan judul kontak mepet kiri */
  margin-top:1rem;
}
.jam h5 {
  margin-left: 1.5rem; /* Pastikan judul kontak mepet kiri */
  margin-top:1rem;
}


/* List kontak */
.fa-ul {
  margin-left: 0; /* Hilangkan indent bawaan */
  padding-left: 0;
  list-style: none;
}

.fa-ul li {
  display: flex;
  align-items: center; /* Sejajarkan icon & teks secara vertikal */
  gap: 8px; /* Jarak kecil antara icon dan teks */
  text-align: left;
}

.fa-ul .fa-li {
  position: static; /* Hilangkan posisi absolut bawaan Font Awesome */
  width: auto;
  margin-right: 6px; /* Kasih jarak kecil biar icon gak nempel */
}

.fa-ul li span.ms-2 {
  margin-left: 0 !important; /* Hapus margin ekstra dari Bootstrap */
}
/* Mobile & Tablet */
@media (max-width: 992px) {
    .col-lg-3.col-md-6.mb-4.mb-md-0 {
  text-align: left; /* Pastikan semua isi rata kiri */
  margin-top:-2rem;
  }
  .kontak h5 {
  margin-left: 1.5rem; /* Pastikan judul kontak mepet kiri */
  margin-top:1rem;
}
.jam h5 {
  margin-left: 1.5rem; /* Pastikan judul kontak mepet kiri */
  margin-top:3rem;
}

  footer {
    text-align: left;
    width: 100%;
      }

  .footer-wrapper {
    flex-direction: column;
    align-items: flex-start; /* semua item ke kiri */
    justify-content: flex-start;
    text-align: left;
    gap: 0.75rem;
    width: 100%;
  }

  .footer-left,
  .footer-center,
  .footer-right {
    text-align: left;
    width: 100%;
  }

  .footer-right {
    justify-content: flex-start;
    margin-top: 0.625rem;
  }

  .footer-bottom {
    text-align: left;
    font-size: 0.8rem;
    margin-top: 0.5rem;
    width: 100%;
  }

  footer img.logo-footer {
    max-width: 100%;
    height: auto;
    margin: 0 0 0.5rem 0; /* nempel kiri */
    display: block;
  }
}

@media (max-width: 768px) {
  /* Semua kolom rata kiri */
  footer .col-lg-4,
  footer .col-lg-3,
  footer .col-md-6,
  footer .col-md-12 {
    text-align: left !important;
    margin-left: 1.2em !important;
    padding-left: 0 !important;
  }

  /* Logo mengecil dan ke kiri */
  footer img.logo-footer {
    max-width: 86%;
    height: auto;
    margin-left: 0;
    margin-top: 0;
  }
footer table {
    width: 100%;             /* table mengikuti lebar container */
    margin-left: 0;          /* rapat kiri */
    table-layout: auto;      /* kolom menyesuaikan isi */
    border-collapse: collapse; 
  }

  footer table td, footer table th {
    text-align: left;        /* rata kiri */
    padding: 0.25rem 0.5rem; /* kecilkan padding supaya muat */
    font-size: 0.85rem;      /* teks sedikit lebih kecil */
    white-space: normal;     /* biar teks bisa wrap */
  }
  /* List info rata kiri */
  footer ul.fa-ul {
    margin-left: 2em !important;
  }
  .footer-left {
    font-size: 0.60rem;   /* lebih kecil dari desktop */
  }
}
</style>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>