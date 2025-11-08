<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>STAI YAPERI</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="../img/favicon.ico" rel="icon">

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
    <link href="../lib/animate/animate.min.css" rel="stylesheet">
    <link href="../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link rel="stylesheet" href="../css/bootstrap.min.css" >

    <!-- Template Stylesheet -->
    <link href="../css/style.css" rel="stylesheet">
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
    <img src="../img/logo1.png" width="78" alt="Logo" class="me-2">
    <span class="fs-2 fw-bold m-0" style="display:inline-block; transform: translateY(5px);">STAI YAPERI</span>
</a>
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>

   <!-- Navbar Menu -->
<div class="collapse navbar-collapse" id="navbarCollapse">
    <div class="navbar-nav ms-auto p-4 p-lg-0" style="font-size:0.95rem;  font-family: 'Roboto' font-weight:400;">
        <a href="../index.php" class="nav-item nav-link">Beranda</a>
        <a href="about.php" class="nav-item nav-link">Tentang kami</a>
        <a href="pmb.php" class="nav-item nav-link">PMB online</a>
        <a href="kerjasama.php" class="nav-item nav-link">Kerja sama</a>
        <a href="kontak.php" class="nav-item nav-link">Kontak</a>
    </div>
</div>

</nav>
<!-- Navbar End -->
    <!-- Page Header Start -->
<style>
    .page-header {
    background: linear-gradient(rgba(0, 0, 0, .75), rgba(0, 0, 0, .75)), url(../img/ft4.jpg) center center no-repeat;
    background-size: cover;
}
/* Responsif untuk HP, tablet, iPad */
@media (max-width: 992px) { /* ≤991px = tablet & iPad */
    .page-header {
        padding: 5rem 1rem; /* sesuaikan padding */
    }
    .page-header h1 {
        font-size: clamp(1.5rem, 5vw, 2.2rem); /* font menyesuaikan layar */
        margin-left:-3.4rem ;
    }
}

    </style>
    <div class="container-fluid page-header py-6 my-6 mt-0 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center">
            <h1 class="display-4 text-white animated slideInDown mb-4">Kerja Sama</h1>
            <nav aria-label="breadcrumb animated slideInDown">
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

<!-- About Start -->
 <section id="about" class="about">
  <div class="container-xxl py-8">
    <div class="container">
      <div class="row align-items-center justify-content-between">

        <!-- Gambar -->
        <div class="col-lg-6 col-md-12 wow fadeInUp mb-4 mb-lg-0" data-wow-delay="0.5s">
          <img src="../img/bg1.png" alt="Logo STAI YAPERI" class="img-about">
        </div>

        <!-- Teks -->
        <div class="col-lg-6 col-md-12 wow fadeInUp konten" data-wow-delay="0.5s">
          <h6 class="text-primary text-uppercase mb-2">Bekerja Sama dengan</h6>
          <h1 class="display-6 mb-4">PEMERINTAH DAERAH BOGOR</h1>
         <p>STAI Yaperi Cibinong menjalin kerja sama dengan Pemerintah Daerah Kabupaten Bogor sebagai upaya memperkuat peran perguruan tinggi dalam pembangunan daerah. Kolaborasi ini meliputi bidang pendidikan, penelitian, serta pengabdian kepada masyarakat.</p>
        <p class="mb-4">Melalui kemitraan ini, STAI Yaperi Cibinong berperan aktif dalam mendukung program pemerintah daerah, khususnya di bidang pengembangan pendidikan Islam dan pemberdayaan masyarakat. Diharapkan kerja sama ini dapat menjadi langkah nyata dalam membangun generasi yang berilmu, berakhlak, dan berkontribusi bagi kemajuan Kabupaten Bogor.</p>
          <div class="courses-overlay">
          <a class="btn btn-outline-primary border-2" href="https://bogorkab.go.id/">Read More</a>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- About End -->

<style>
/* ====== BAGIAN UTAMA #ABOUT ====== */

/* Layout utama */
#about .konten{
    margin-left:-2rem;
}
#about .row {
  display: flex;
  flex-wrap: nowrap;
  align-items: center;
  gap: 2rem;
  margin-left: -4rem;
}

/* Gambar */
.img-about {
  width: 50%;
  max-height: 50vh;
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
/* Paragraf umum */
#about p {
  font-size: clamp(0.9rem, 2.5vw, 1rem);
  line-height: 1.6rem; /* tambahin biar teks lega dan gak kepotong */
  margin: 0 auto 0.8rem auto;
  padding: 0 1rem;
  max-width: 90%;
  text-align: justify;
  word-break: break-word;
  overflow-wrap: break-word;
  margin-left:-1rem;
}

/* ====== RESPONSIVE UNTUK TABLET ====== */
@media (max-width: 992px) {
  #about .row {
    flex-direction: column;
    flex-wrap: wrap;
    align-items: center; /* Biar elemen dalam row sejajar di tengah */
    justify-content: center;
    text-align: center; /* Biar teksnya rata tengah */
  }

  #about h1,
  #about h2,
  #about h3,
  #about p {
    font-size: 0.9rem;
    text-align: center; /* Semua teks di tengah */
    margin-left: auto;
    margin-right: auto;
  }

  .img-about {
    max-height: 40vh;
    margin-bottom: 1rem;
    display: block;
    margin-left: auto;
    margin-right: auto; /* Gambar di tengah juga */
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
  #about p {
    font-size: clamp(0.85rem, 2.5vw, 1rem);
    line-height: 1.4;
    margin: 0 auto 0.6rem auto;
    padding: 0 0.75rem; /* dikurangin sedikit */
    text-align: justify;
    word-break: break-word;
    overflow-wrap: break-word;
    box-sizing: border-box;
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
  #about p {
    font-size: clamp(0.85rem, 2.5vw, 1rem);
    line-height: 1.4;
    margin: 0 auto 0.6rem auto;
    padding: 0 0.75rem; /* dikurangin sedikit */
    text-align: justify;
    word-break: break-word;
    overflow-wrap: break-word;
    box-sizing: border-box;
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


<!-- Full width footer -->
<footer class="text-white text-center text-lg-start bg-dark" style="margin-top: 4rem;">
  <!-- Grid container -->
  <div class="container-fluid p-3">
    <div class="row mt-3">
      
      <!-- col 1 -->
      <div class="col-lg-4 col-md-12 mb-md-0 d-flex">
        <img src="../img/f1.png" alt="Logo" class="img-fluid logo-footer">
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
    <script src="../lib/wow/wow.min.js"></script>
    <script src="../lib/easing/easing.min.js"></script>
    <script src="../lib/waypoints/waypoints.min.js"></script>
    <script src="../lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="../js/main.js"></script>
</body>
</html>