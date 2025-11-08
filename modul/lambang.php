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
            <h1 class="display-4 text-white animated slideInDown mb-4">Arti Logo Kampus</h1>
            <nav aria-label="breadcrumb animated slideInDown">
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


   <!-- About Logo Start -->
<section id="about" class="py-6">
  <div class="container">
    <div class="row align-items-center g-5">

     <!-- Logo Image -->
 <div class="col-lg-6 col-md-12 wow fadeInUp mb-4 mb-lg-0" data-wow-delay="0.5s">
    <img src="../img/logo1.png" alt="Logo STAI Yaperi" class="logo-img">
  </div>

      <!-- Arti Logo -->
      <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
        <h6 class="text-primary text-uppercase mb-3">Arti Logo</h6>
        <h2 class="mb-4">STAI YAPERI CIBINONG</h2>

        <div class="logo-meaning-container">

          <div class="logo-meaning-card">
            <span class="bullet">➡️</span>
            <p><strong>Perisai berbentuk segi lima:</strong> Melambangkan Keutuhan dan kesatuan bangsa Indonesia yang ber azaskan Pancasila.</p>
          </div>

          <div class="logo-meaning-card">
            <span class="bullet">➡️</span>
            <p><strong>Butiran padi berjumlah enam berwarna kuning:</strong> Melambangkan rukun iman yang menjadi dasar pokok aqidah umat Islam, warna kuning melambangkan perwujudan masyarakat bangsa indonesia yang sejahtera.</p>
          </div>

          <div class="logo-meaning-card">
            <span class="bullet">➡️</span>
            <p><strong>Kapas berjumlah lima buah berwarna putih:</strong>Melambangkan rukun Islam yang wajib dilaksanakan agama islam, sehingga terwujud kesejahteraan yang adil dan merata.</p>
          </div>

          <div class="logo-meaning-card">
            <span class="bullet">➡️</span>
            <p><strong>Matahari kuning berbentuk lingkaran:</strong> Melambangkan nur yang selamanya dibutuhkan oleh segenap Mahasiswa. Matahari berjumlah satu melambangkan IHSAN.</p>
          </div>

          <div class="logo-meaning-card">
            <span class="bullet">➡️</span>
            <p><strong>Kitab suci berwarna putih tertera diatasnya lima garis hitam:</strong> Melambangkan kitab suci pedoma hidup dan kehidupan islam yang dimulai dengan Wahyu Pertamanya surat Al - Alaq berjumlah lima ayat.</p>
          </div>

          <div class="logo-meaning-card">
            <span class="bullet">➡️</span>
            <p><strong>Selembar bulu ayam sebagai alat menulis pengganti:</strong> Melambangkan kewajiban menuntut ilmu.</p>
          </div>

          <div class="logo-meaning-card">
            <span class="bullet">➡️</span>
            <p><strong>Kubah masjid hitam mengelilingi matahari:</strong> Melambangkan pengabdian yang suci seorang hamba dalam mengamalkan ilmu.</p>
          </div>

        </div>
      </div>

    </div>
  </div>
</section>

<style>
#about .row.align-items-center {
  display: flex;
  flex-wrap: nowrap; /* jangan wrap, biar sejajar */
  align-items: flex-start; /* rata atas */
  gap: 2rem;
  margin-top:-9rem;
}
/* Logo di kanan */
#about .col-lg-6:first-child {
  order: 2; /* logo di kanan */
  display: flex;
  justify-content: center; /* tengah horizontal di kolom */
  align-items: flex-start; /* rata atas */
}

#about .col-lg-6:first-child {
  order: 2; /* logo di kanan */
  display: flex;
  justify-content: center; /* tengah horizontal */
  align-items: flex-start; /* rata atas */
  max-width: 50%; /* batasi lebar kolom */
  flex: 1 1 50%; /* fleksibel untuk mengecil */
  padding: 0 1rem; /* beri sedikit padding agar tidak nempel */
}

.logo-img {
  max-width: 100%; /* sesuaikan dengan kolom */
  height: auto;
  display: block;
  object-fit: contain;
}
.logo-meaning-container {
  display: flex;
  flex-direction: column; /* urutan card tetap vertikal */
  gap: 1rem;
}

.logo-meaning-card {
  display: flex;
  flex-direction: row; /* ikon & teks sejajar samping */
  align-items: flex-start; /* rata atas */
  gap: 0.75rem;
  background: #fdfdfd;
  padding: 0.75rem 1rem;
  border-radius: 10px;
  box-shadow: 0 2px 6px rgba(0,0,0,0.08);
  transition: all 0.3s ease;
}

.logo-meaning-card:hover {
  transform: translateY(-3px);
  box-shadow: 0 4px 12px rgba(0,0,0,0.15);
}

.logo-meaning-card .bullet {
  font-size: 1.5rem;
  flex-shrink: 0; /* ikon tidak mengecil */
  margin-top: 0.2rem;
}

.logo-meaning-card p {
  margin: 0;
  font-size: clamp(0.85rem, 1.2vw, 1rem);
  line-height: 1.4;
  word-break: break-word; /* teks tetap wrap jika panjang */
}
/* Judul kecil (h6) */
#about h6 {
  font-size: clamp(1rem, 1.5vw, 1.2rem);
  font-weight: 600;
  color: #0d6efd;
  margin-bottom: 0.2rem; /* dikurangi dari 0.5rem ke 0.2rem */
  text-transform: uppercase;
}

/* Judul besar (h2) */
#about h2 {
  font-size: 2rem;
  font-weight: 700;
  color: #333;
  margin-top: 0;      /* hilangkan jarak atas default */
  margin-bottom: 1rem;
  position: relative;
  display: inline-block;
}
/* Garis bawah kuning di tengah h2 */
#about h2::after {
  content: "";
  position: absolute;
  left: 50%;
  bottom: -8px; /* jarak dari teks */
  transform: translateX(-50%);
  width: 80%; /* lebar garis */
  height: 8%; /* ketebalan garis */
  background-color: #ffc107; /* kuning */
  border-radius: 20%;
}
/* Tablet / iPad */
@media (max-width: 1200px) {
#about .row.align-items-center {
  flex-direction: column; /* ubah jadi atas-bawah */
  align-items: center; /* seluruh isi di tengah */
  text-align: left; /* teks tetap rata kiri */
}

/* Pastikan logo selalu di atas teks */
#about .col-lg-6:first-child {
  order: 1; /* logo di atas */
  display: flex;
  justify-content: center; /* tengah horizontal */
}

#about .col-lg-6:last-child {
  order: 2; /* teks di bawah */
  width: 90%; /* biar gak terlalu melebar */
  max-width: 700px; /* batasi biar tengah rapi */
}

/* Atur ukuran logo */
#about .logo-img {
  width: 90%;
  max-width: 120%;
  height: auto;
  display: block;
  margin: 0 auto; /* tengah */
}

/* Container card */
.logo-meaning-container {
  display: flex;
  flex-direction: column;
  align-items: center; /* semua card di tengah */
  gap: 0.75rem;
  width: 100%;
}

/* Card */
.logo-meaning-card {
  width: 100%;
  max-width: 700px; /* biar rapi tengah */
  flex-direction: row;
  padding: 0.5rem 0.75rem;
  justify-content: flex-start; /* teks tetap rata kiri */
}

/* Paragraf */
.logo-meaning-card p {
  text-align: left; /* teks tetap kiri */
  font-size: 0.9rem;
}
}
/* ------------------ HP (<768px) ------------------ */
@media (max-width: 768px) {
 #about .row.align-items-center {
  flex-direction: column; /* ubah jadi atas-bawah */
  align-items: center; /* seluruh isi di tengah */
  text-align: left; /* teks tetap rata kiri */
}

/* Pastikan logo selalu di atas teks */
#about .col-lg-6:first-child {
  order: 1;
  display: flex;
  justify-content: center;
  align-items: center;
  width: 85%;
  max-width: none;      /* hilangkan batas kolom Bootstrap */
  overflow: visible;    /* biar gambar boleh keluar area kolom */
}

#about .col-lg-6:last-child {
  order: 2; /* teks di bawah */
  width: 90%; /* biar gak terlalu melebar */
  max-width: 700px; /* batasi biar tengah rapi */
  text-align: center;
}

#about .logo-img {
  width: 80%;      /* bisa digedein seenaknya */
  height: auto;
  display: block;
  margin: 0 auto;
  margin-left:0.8rem;
}
#about .col-lg-6 {
    display: flex;
    flex-direction: column;
    align-items: center;     /* Tengahin semua elemen */
    justify-content: center;
    text-align: left;        /* Teks tetap rata kiri */
  }

  /* Biar semua isi (judul + teks + card) ada batas lebar */
  #about .col-lg-6 > * {
    width: 90%;              /* Biar gak terlalu mepet tepi */
    max-width: 700px;
  }

  /* Judul */
 #about h2 {
    position: relative;
    display: inline-block;    /* biar width-nya ngikut teks aja */
    font-size: 1.25rem;
    font-weight: 700;
    text-align: left;
    margin: 0 auto 1.5rem;
    padding-bottom: 0.4rem;
  }

  /* Garis bawah kuning */
  #about h2::after {
    content: "";
    position: absolute;
    left: 0;
    bottom: 0;
    width: 40%;               /* panjang garis relatif ke lebar teks */
    height: 8%;
    background-color: #ffc107;
    border-radius: 15%;
    margin-left:7rem;
  }
  /* Tapi teks di dalam tetap rata kiri */
  #about h2,
  #about h6 {
    text-align: left;
  }
  /* Container card */
  .logo-meaning-container {
    display: flex;
    flex-direction: column;
    align-items: center;     /* container di tengah */
    gap: 0.75rem;
    width: 100%;
  }

  /* Setiap card */
  .logo-meaning-card {
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: flex-start; /* teks di dalamnya tetap kiri */
    text-align: left;
    background: #fff;
    border-radius: 10px;
    padding: 0.75rem 1rem;
    width: 90%;
    box-shadow: 0 2px 6px rgba(0,0,0,0.08);
  }

  /* Teks card */
  .logo-meaning-card p {
    margin: 0;
    font-size: 0.9rem;
    text-align: left;        /* teks tetap kiri */
  }
    .logo-meaning-container {
    display: flex;
    flex-direction: column;  /* card tetap vertikal */
    gap: 0.5rem;             /* jarak antar card */
    width: 82%;             /* penuh kolom */
    align-items: center;     /* card di tengah */
    margin-left:-1.7rem;
  }
}
</style>
<!-- About Logo End -->



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