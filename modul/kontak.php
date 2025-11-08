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
            <h1 class="display-4 text-white animated slideInDown mb-4">Kontak Kampus</h1>
            <nav aria-label="breadcrumb animated slideInDown">
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Contact Start -->
<div class="container-xxl py-6">
  <div class="container">
    <div class="row g-5 align-items-center">
      <!-- Kolom Kiri: Maps -->
      <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
        <div class="position-relative h-100">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.3082739537817!2d106.83898187418643!3d-6.482587163379565!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c1c002ec2511%3A0xd88aca59f5ce1eb6!2sSTAI%20YAPERI%20CIBINONG!5e0!3m2!1sid!2sid!4v1698129960292!5m2!1sid!2sid"
            width="100%"
            height="450"
            style="border:0; border-radius:10px;"
            allowfullscreen=""
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade">
          </iframe>
        </div>
      </div>

      <!-- Kolom Kanan: Teks -->
      <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
        <h6 class="text-primary text-uppercase mb-2">Kontak</h6>
        <h1 class="display-6 mb-4">Hubungi kami dibawah ini</h1>
        <p class="mb-4">
          Pihak profesional yang dapat memberikan informasi terpercaya kepada calon mahasiswa/mahasiswi atau pihak lain yang membutuhkan informasi tersebut.
        </p>
        <div class="contact-info">
          <p><i class="fa fa-map-marker-alt me-3"></i>Jl. Raya Jakarta Bogor KM. 45, Pakansari, Cibinong, Bogor 16915</p>
          <p><i class="fab fa-instagram me-3"></i>@staiyaperi</p>  
          <p><i class="fa fa-phone-alt me-3"></i>(021) 837-137-49</p>
          <p><i class="fab fa-whatsapp me-3"></i>0851-5697-6974</p>
          <p><i class="fa fa-envelope me-3"></i>stai.yaperi.cbg@gmail.com</p>
        </div>
      </div>
    </div>
  </div>
</div>
<style>
 /* Pastikan peta dan teks sejajar (sampingan) di desktop/tablet */
h1.display-6 {
  position: relative;
  display: inline-block;
  padding-bottom: 0.5rem; /* jarak antara teks dan garis */
  font-size: 1.7rem;
  text-align: center; /* pastikan teksnya center */
}

h1.display-6::after {
  content: "";
  position: absolute;
  left: 50%;
  bottom: 0;
  transform: translateX(-50%); /* biar garis tepat di tengah */
  width: 80%; /* panjang garis (ubah sesuai selera: 50%, 80%, dst) */
  height: 0.2rem; /* ketebalan garis */
  background-color: #ffc107; /* warna kuning sesuai tema */
  border-radius: 15%;
}

.row.g-5.align-items-center {
  display: flex;
  flex-wrap: nowrap; /* biar nggak turun ke bawah */
  align-items: flex-start;
  gap: 2rem; /* kasih jarak antara peta dan teks */
}

/* Biar kolom teks tidak terlalu lebar dan sejajar rapi */
.col-lg-6.wow.fadeInUp[data-wow-delay="0.5s"] {
  flex: 1; /* biar fleksibel lebar kolom */
  min-width: 0;
}

/* Biar iframe peta responsif dan sejajar */
.position-relative.h-100 iframe {
  width: 100%;
  height: 450px;
  border-radius: 10px;
}

/* Styling teks kontak */
.contact-info p {
  margin-bottom: 8px;
  display: flex;
  align-items: flex-start; /* biar teks mulai dari atas sejajar ikon */
  flex-wrap: nowrap; /* biar ikon & teks di baris yang sama */
  white-space: normal; /* biar teks bisa turun ke bawah */
  word-break: break-word;
  text-align: left;
}

.contact-info i {
  color: #ffc107;
  min-width: 25px; /* ukuran tetap buat ikon */
  margin-top: 2px; /* biar sejajar pas teks tinggi */
  text-align: center;
}

/* Responsif - kalau layar kecil (tablet & HP) baru jadi vertikal */
/* 💻 Layout Tablet & iPad (768px - 1024px) */
@media (min-width: 768px) and (max-width: 1024px) {
     .position-relative.h-100 iframe {
    width: 100%;
    height: 500px; /* lebih pendek dari desktop */
    border-radius: 8px;
  }
  .row.g-5.align-items-center {
    flex-direction: row; /* tetap samping */
    align-items: flex-start;
    gap: 2rem;
  }

  .col-lg-6.wow.fadeInUp[data-wow-delay="0.1s"],
  .col-lg-6.wow.fadeInUp[data-wow-delay="0.5s"] {
    width: 50%;
    max-width: none;
    text-align: left; /* teks tetap rata kiri */
  }

  .position-relative.h-100 iframe {
    width: 100%;
    height: 380px; /* sedikit lebih tinggi */
    border-radius: 10px;
  }

  h1.display-6 {
    font-size: 1.2rem;
    text-align: left;
  }
  p.mb-4 {
    font-size: 0.9rem;
    line-height: 1.4;
    text-align: justify; /* 🔹 biar teks rata kiri-kanan */
  }
  .contact-info p {
    font-size: 0.95rem;
    align-items: center;
    gap: 0.6rem;
  }

  .contact-info i {
    font-size: 1.3rem;
    min-width: 24px;
  }
}
/* ============================= */
/* 📱 RESPONSIVE UNTUK HP */
/* ============================= */
@media (max-width: 768px) {
  .row.g-5.align-items-center {
    flex-direction: column; /* ubah dari samping jadi atas-bawah */
    align-items: center; /* biar peta & teks di tengah */
    gap: 1.5rem; /* jarak antar elemen */
  }

  .col-lg-6.wow.fadeInUp[data-wow-delay="0.1s"],
  .col-lg-6.wow.fadeInUp[data-wow-delay="0.5s"] {
    width: 100%;
    max-width: 80%; /* biar nggak terlalu lebar di HP besar */
    text-align: center; /* biar isi di tengah */
  }

  /* Biar iframe (peta) selalu tengah */
  .position-relative.h-100 {
    width:100%;
    display: flex;
    justify-content: center;
    margin-left:-1.5rem;;
  }

  .position-relative.h-100 iframe {
    width: 100%;
    max-width: 450px; /* batas maksimal biar proporsional */
    height: 300px; /* lebih kecil di HP */
  }
  .col-lg-6.wow.fadeInUp[data-wow-delay="0.5s"] {
    padding-left: 0.8rem; /* geser sedikit ke kiri */
    margin-left:-1.5rem;
  }

  .contact-info {
    margin-left: 0; 
    padding-left: 0.5rem; /* tambah dikit biar sejajar teks lain */
  }

  h1.display-6,
  h6.text-primary,
  p.mb-4 {
    margin-left: 0.5rem; /* geser semua teks utama ke kiri */
  }
  .contact-info {
    text-align: left; /* semua teks kontak rata kiri */
    margin: 0 auto; /* biar tetap posisi tengah secara keseluruhan */
  }

  .contact-info p {
    justify-content: flex-start; /* ikon & teks mulai dari kiri */
    text-align: left; 
    margin-left: 0; /* hapus jarak kiri jika ada */
  }

  .contact-info i {
    font-size: 1.4rem; /* ukuran ikon tetap pas di HP */
    min-width: 28px; /* biar ikon sejajar kiri rapi */
  }

  h1.display-6 {
   font-size:1.3rem;
  }

  p.mb-4 {
    text-align: left; /* paragraf deskripsi ikut kiri */
  }
}

</style>
<!-- Contact End -->



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