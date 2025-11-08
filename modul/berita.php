<?php
    include"../lib/koneksi.php";
session_start();
$id = $_GET['id'];

if (!isset($_SESSION['viewed_'.$id])) {
    $koneksi->query("UPDATE tb_berita SET views = views + 1 WHERE id_berita = '$id'");
    $_SESSION['viewed_'.$id] = true;
}

$query = $koneksi->query("SELECT * FROM tb_berita WHERE id_berita = '$id'");
$tampil = $query->fetch_assoc();
?>
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
            <h1 class="display-4 text-white animated slideInDown mb-4">Berita Kampus</h1>
            <nav aria-label="breadcrumb animated slideInDown">
            </nav>
        </div>
    </div>
    <!-- Page Header End -->
<style>
  .article-wrapper {
    max-width: 90%;
    margin: 3.75rem auto; /* 60px */
    background: #fff;
    border-radius: 1.25rem; /* 20px */
    box-shadow: 0 0.5rem 1.875rem rgba(0, 0, 0, 0.08); /* 8px 30px */
    overflow: hidden;
    padding: 0 0 2.5rem; /* 40px */
    transition: all 0.3s ease;
  }

  .article-wrapper:hover {
    transform: translateY(-0.1875rem); /* 3px */
  }

  .article-header {
    position: relative;
  }

  .article-header img {
    width: 100%;
    height: 28.75rem; /* 460px */
    object-fit: cover;
    border-bottom: 0.25rem solid #007bff; /* 4px */
  }

  .article-title {
    padding: 1.875rem 2.5rem 0.625rem; /* 30px 40px 10px */
  }

  .article-title h1 {
    font-size: 2.2rem;
    font-weight: 700;
    color: #002b5b;
    line-height: 1.3;
  }

  .article-meta {
    color: #777;
    font-size: 0.95rem;
    padding: 0 2.5rem; /* 40px */
    margin-bottom: 1.25rem; /* 20px */
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    gap: 1rem;
  }

  .article-meta i {
    color: #007bff;
    margin-right: 0.375rem; /* 6px */
  }

  .article-meta span {
    display: flex;
    align-items: center;
    gap: 0.25rem; /* 4px */
  }

  .article-content {
    padding: 0 2.5rem;
    color: #444;
    font-size: 1.05rem;
    text-align: justify;
    line-height: 1.8;
    letter-spacing: 0.01rem;
  }

  /* ===== Quote Style ===== */
  .article-content blockquote {
    background: #f0f6ff;
    border-left: 0.3125rem solid #007bff; /* 5px */
    padding: 0.9375rem 1.25rem; /* 15px 20px */
    margin: 1.5625rem 0; /* 25px */
    font-style: italic;
    color: #333;
    border-radius: 0.5rem; /* 8px */
  }

  /* ===== Share Section ===== */
  .share-section {
    margin-top: 3rem;
    text-align: center;
    border-top: 0.0625rem solid #ddd; /* 1px */
    padding-top: 1.8rem;
  }

  .share-section h5 {
    font-size: 1.1rem;
    text-transform: uppercase;
    color: #003366;
    letter-spacing: 0.0625rem; /* 1px */
    margin-bottom: 1rem;
  }

  /* ===== Responsif untuk Tablet ===== */
  @media (max-width: 992px) {
    .article-wrapper {
      margin: 1.5rem auto; /* 24px */
      padding: 0 0 1.5rem;
    }

    .article-header img {
      height: 16.25rem; /* 260px */
    }

    .article-title {
      padding: 1.25rem 1.5rem 0.5rem;
    }

    .article-title h1 {
      font-size: 1.7rem;
      line-height: 1.4;
    }

    .article-meta {
      padding: 0 1.5rem;
      font-size: 0.9rem;
      justify-content: flex-start;
      gap: 0.75rem;
    }

    .article-content {
      padding: 0 1.5rem;
      font-size: 1rem;
      line-height: 1.8;
    }
  }

  /* ===== Responsif untuk HP ===== */
  @media (max-width: 768px) {
    .article-wrapper {
      margin: 1rem;
      padding-bottom: 1.5rem;
    }

    .article-header img {
      height: 14rem; /* ~224px */
    }

    .article-title {
      padding: 1rem 1.25rem 0.25rem;
    }

    .article-title h1 {
      font-size: 1.4rem;
      line-height: 1.4;
    }

.article-meta {
  padding: 0 1rem;
  font-size: 0.85rem;
  display: flex;
  justify-content: space-between;
  align-items: center;
  flex-wrap: wrap; /* biarkan wrap tapi tetap rapi */
  gap: 0.3rem;
  row-gap: 0.4rem;
  text-align: left;
}

.article-meta span {
  display: inline-flex;
  align-items: center;
  gap: 0.25rem;
  white-space: nowrap; /* biar teks di dalam span gak terpotong */
}
    .article-content {
      padding: 0 1.25rem;
      font-size: 0.98rem;
      line-height: 1.9; /* sedikit lebih longgar agar tidak numpuk */
      text-align: left; /* lebih natural di HP */
    }
  }
  </style>


<section class="article-wrapper">
  <div class="article-header">
    <img src="../admin/gbr/<?= htmlspecialchars($tampil['gambar']) ?>" alt="Gambar Berita">
  </div>

  <div class="article-title">
    <h1><?= htmlspecialchars($tampil['judul']) ?></h1>
  </div>

  <div class="article-meta">
    <span><i class="fa-regular fa-calendar-days"></i> <?= htmlspecialchars($tampil['tanggal']) ?></span>
    <span><i class="fa-regular fa-clock"></i> <?= htmlspecialchars($tampil['waktu']) ?></span>
  <span><i class="fa-regular fa-eye"></i> <?= $tampil['views'] ?> Views</span>
  </div>

  <div class="article-content">
    <blockquote>
      <?= nl2br($tampil['deskripsi']) ?>
    </blockquote>
  </div>

  <!-- ====================== -->
<!-- Bagikan Berita Section -->
<!-- ====================== -->
<div class="share-section">
  <h5>Bagikan Berita Ini</h5>
  <div class="social-buttons">
    <a href="#" class="fb" id="share-facebook" title="Bagikan ke Facebook"><i class="fab fa-facebook-f"></i></a>
    <a href="#" class="tw" id="share-twitter" title="Bagikan ke Twitter"><i class="fab fa-twitter"></i></a>
    <a href="#" class="wa" id="share-whatsapp" title="Bagikan ke WhatsApp"><i class="fab fa-whatsapp"></i></a>
    <a href="#" class="tg" id="share-telegram" title="Bagikan ke Telegram"><i class="fab fa-telegram-plane"></i></a>
    <a href="#" class="ig" id="share-instagram" title="Bagikan ke Instagram"><i class="fab fa-instagram"></i></a>
    <a href="#" class="copy" id="copy-link" title="Salin tautan"><i class="fa-solid fa-link"></i></a>
  </div>
  <div id="copy-alert" class="copy-alert">✅ Link berhasil disalin ke clipboard!</div>
</div>
</section>
<!-- ====================== -->
<!-- Styling -->
<!-- ====================== -->
<style>
.share-section {
  margin-top: 2.5rem;
  border-top: 0.0625rem solid #ddd; /* 1px */
  padding-top: 1.5rem;
  text-align: center;
}

.share-section h5 {
  font-size: 1.1rem;
  text-transform: uppercase;
  font-weight: 600;
  color: #003366;
  margin-bottom: 1rem;
  letter-spacing: 0.0625rem; /* 1px */
}

.social-buttons {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  gap: 0.75rem; /* 12px */
}

.social-buttons a {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  width: 2.8125rem;  /* 45px */
  height: 2.8125rem; /* 45px */
  border-radius: 50%;
  background: #f5f5f5;
  color: #333;
  font-size: 1.125rem; /* 18px */
  transition: all 0.3s ease;
}

.social-buttons a:hover {
  transform: translateY(-0.25rem); /* 4px */
  color: #fff;
}

/* Warna ikon */
.social-buttons a.fb:hover { background: #3b5998; }
.social-buttons a.tw:hover { background: #1da1f2; }
.social-buttons a.wa:hover { background: #25D366; }
.social-buttons a.tg:hover { background: #0088cc; }
.social-buttons a.ig:hover { background: #E4405F; }
.social-buttons a.copy:hover { background: #003366; }

.copy-alert {
  display: none;
  margin-top: 1rem;
  background: #EAF8E6;
  color: #2C662D;
  padding: 0.5rem 0.9375rem; /* 8px 15px */
  border-radius: 0.5rem; /* 8px */
  font-size: 0.9rem;
  animation: fadeIn 0.3s ease;
}

@keyframes fadeIn {
  from { opacity: 0; transform: translateY(-0.3125rem); } /* 5px */
  to { opacity: 1; transform: translateY(0); }
}

/* Responsif untuk tablet (maks 48rem ≈ 768px) */
@media (max-width: 48rem) {
  .share-section h5 {
    font-size: 1rem;
  }

  .social-buttons a {
    width: 2.5rem;   /* 40px */
    height: 2.5rem;  /* 40px */
    font-size: 1rem; /* 16px */
  }

  .social-buttons {
    gap: 0.625rem; /* 10px */
  }
}

/* Responsif untuk HP (maks 30rem ≈ 480px) */
@media (max-width: 30rem) {
  .share-section {
    padding-top: 1rem;
  }

  .share-section h5 {
    font-size: 0.95rem;
  }

  .social-buttons {
    gap: 0.5rem; /* 8px */
    flex-wrap: wrap;
  }

  .social-buttons a {
    width: 2.375rem;  /* 38px */
    height: 2.375rem; /* 38px */
    font-size: 0.9375rem; /* 15px */
    margin: 0.1875rem; /* 3px */
  }

  .copy-alert {
    font-size: 0.85rem;
  }
}
</style>


<!-- ====================== -->
<!-- JavaScript -->
<!-- ====================== -->
<script>
document.addEventListener("DOMContentLoaded", function() {
  const pageUrl = encodeURIComponent(window.location.href);
  const pageTitle = encodeURIComponent(document.title);

  // Buat URL share otomatis
  document.getElementById("share-facebook").href = `https://www.facebook.com/sharer/sharer.php?u=${pageUrl}`;
  document.getElementById("share-twitter").href = `https://twitter.com/intent/tweet?url=${pageUrl}&text=${pageTitle}`;
  document.getElementById("share-whatsapp").href = `https://wa.me/?text=${pageTitle}%20${pageUrl}`;
  document.getElementById("share-telegram").href = `https://t.me/share/url?url=${pageUrl}&text=${pageTitle}`;

  // Instagram (copy ke clipboard)
  const igBtn = document.getElementById("share-instagram");
  const copyBtn = document.getElementById("copy-link");
  const alertBox = document.getElementById("copy-alert");

  function copyLink() {
    navigator.clipboard.writeText(window.location.href).then(() => {
      alertBox.style.display = "inline-block";
      setTimeout(() => alertBox.style.display = "none", 3000);
    });
  }

  igBtn.addEventListener("click", function(e) {
    e.preventDefault();
    copyLink();
  });

  copyBtn.addEventListener("click", function(e) {
    e.preventDefault();
    copyLink();
  });
});
</script>


    <!-- Full width footer -->
<footer class="text-white text-center text-lg-start bg-dark mt-5">
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
    /* Workprocess */
    #teks-workprocess{
        position: relative;
        left: 50px;
        top: -400px;
    }
    #logo-workprocess{
        position: relative;
        left: 700px;
        top: -50px;
    }
    #logo-email{
      position: relative;
      top: 50px;
    }
    #email-teks{
      position: relative;
      left: 50px;
      top: -50px;
    }
    #instagram-teks{
      position: relative;
      left: 50px;
      top: -50px;
    }
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


    