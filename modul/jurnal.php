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


   
    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0">
        <a href="../index.php" class="navbar-brand d-flex align-items-center border-end px-4 px-lg-5">
            <h2 class="m-0"><img src="../img/logo1.png" width="78" alt style=> STAI YAPERI</h2>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0" style="font-size:15px;">
                <a href="../index.php" class="nav-item nav-link">beranda</a>
                        <a href="about.php" class="nav-item nav-link">Tentang kami</a>
                    <a href="pmb.php" class="nav-item nav-link">pmb online</a>
                    <a href="kerjasama.php" class="nav-item nav-link">Kerja Sama</a>
                    <a href="kontak.php" class="nav-item nav-link">kontak</a>
            </div>
        </div>
    </nav>    <!-- Navbar End -->


    <!-- Page Header Start -->
    <div class="container-fluid page-header py-6 my-6 mt-0 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center">
            <h1 class="display-4 text-white animated slideInDown mb-4">E-Journal Kampus</h1>
            <nav aria-label="breadcrumb animated slideInDown">
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

 <!-- ======= Services Section ======= -->
 <section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header" style="text-align:center;">
          <h2>E-Journal </h2>
        </div>

        <div class="row gy-4" style="margin-top:56px;">

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item  position-relative">
              <div class="icon">
              <i><img src="../img/link.png" style="width:56px; margin-left:-5px; margin-top:5px;"></i>
              </div>
              <h3>Muhamad Zaky Azima, S.Pd, MM</h3>
        <div class="jurnal">
             <li><a href="https://journal.uhamka.ac.id/index.php/utilitas/article/view/10377">Peran keluarga dalam mendukung aktivitas belajar siswa dimasa pandemi COVID-19</a></li>
             <li><a href="#">judul</a></li>
             <li><a href="#">judul</a></li>
             <li><a href="#">judul</a></li>
             <li><a href="#">judul</a></li>
        </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item  position-relative">
              <div class="icon">
              <i><img src="../img/link.png" style="width:56px; margin-left:-5px; margin-top:5px;"></i>
              </div>
              <h3>Muhammad Zaky Azima, S.Pd, MM</h3>
        <div class="jurnal">
             <li><a href="https://journal.uhamka.ac.id/index.php/utilitas/article/view/10377">Peran keluarga dalam mendukung aktivitas belajar siswa dimasa pandemi COVID-19</a></li>
             <li><a href="#">judul</a></li>
             <li><a href="#">judul</a></li>
             <li><a href="#">judul</a></li>
             <li><a href="#">judul</a></li>
        </div>
            </div>
          </div><!-- End Service Item -->
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item  position-relative">
              <div class="icon">
              <i><img src="../img/link.png" style="width:56px; margin-left:-5px; margin-top:5px;"></i>
              </div>
              <h3>Muhammad Zaky Azima, S.Pd, MM</h3>
        <div class="jurnal">
             <li><a href="https://journal.uhamka.ac.id/index.php/utilitas/article/view/10377">Peran keluarga dalam mendukung aktivitas belajar siswa dimasa pandemi COVID-19</a></li>
             <li><a href="#">judul</a></li>
             <li><a href="#">judul</a></li>
             <li><a href="#">judul</a></li>
             <li><a href="#">judul</a></li>
        </div>
            </div>
          </div><!-- End Service Item -->
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item  position-relative">
              <div class="icon">
              <i><img src="../img/link.png" style="width:56px; margin-left:-5px; margin-top:5px;"></i>
              </div>
              <h3>Muhammad Zaky Azima, S.Pd, MM</h3>
        <div class="jurnal">
             <li><a href="https://journal.uhamka.ac.id/index.php/utilitas/article/view/10377">Peran keluarga dalam mendukung aktivitas belajar siswa dimasa pandemi COVID-19</a></li>
             <li><a href="#">judul</a></li>
             <li><a href="#">judul</a></li>
             <li><a href="#">judul</a></li>
             <li><a href="#">judul</a></li>
        </div>
            </div>
          </div><!-- End Service Item -->
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item  position-relative">
              <div class="icon">
              <i><img src="../img/link.png" style="width:56px; margin-left:-5px; margin-top:5px;"></i>
              </div>
              <h3>Muhammad Zaky Azima, S.Pd, MM</h3>
        <div class="jurnal">
             <li><a href="https://journal.uhamka.ac.id/index.php/utilitas/article/view/10377">Peran keluarga dalam mendukung aktivitas belajar siswa dimasa pandemi COVID-19</a></li>
             <li><a href="#">judul</a></li>
             <li><a href="#">judul</a></li>
             <li><a href="#">judul</a></li>
             <li><a href="#">judul</a></li>
        </div>
            </div>
          </div><!-- End Service Item -->
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item  position-relative">
              <div class="icon">
              <i><img src="../img/link.png" style="width:56px; margin-left:-5px; margin-top:5px;"></i>
              </div>
              <h3>Muhammad Zaky Azima, S.Pd, MM</h3>
        <div class="jurnal">
             <li><a href="https://journal.uhamka.ac.id/index.php/utilitas/article/view/10377">Peran keluarga dalam mendukung aktivitas belajar siswa dimasa pandemi COVID-19</a></li>
             <li><a href="#">judul</a></li>
             <li><a href="#">judul</a></li>
             <li><a href="#">judul</a></li>
             <li><a href="#">judul</a></li>
        </div>
            </div>
          </div><!-- End Service Item -->

        </div>

      </div>
    </section><!-- End Services Section -->
    <style>
      .jurnal a{
        color: var(--color-default);
      }
       .jurnal li a:hover {
         color: #ffc107;
         text-decoration: underline;
          }
    .services .service-item {
  padding: 40px;
  background: 	#F8F8FF;
  height: 100%;
}

.services .service-item .icon {
  width: 48px;
  height: 48px;
  position: relative;
  margin-bottom: 50px;
}

.services .service-item .icon i {
  color: var(--color-secondary);
  font-size: 40px;
  transition: ease-in-out 0.3s;
  z-index: 2;
  position: relative;
  line-height: 1.8;
}

.services .service-item .icon:before {
  position: absolute;
  content: "";
  height: 100%;
  width: 100%;
  background: #ffc107;
  border-radius: 50px;
  z-index: 1;
  top: 10px;
  right: -15px;
  transition: 0.3s;
}

.services .service-item h3 {
  color: var(--color-default);
  font-weight: 700;
  margin: 0 0 20px 0;
  padding-bottom: 8px;
  font-size: 22px;
  position: relative;
  display: inline-block;
  border-bottom: 4px solid #ebebed;
  transition: 0.3s;
}

.services .service-item p {
  line-height: 24px;
  font-size: 14px;
  margin-bottom: 0;
}

.services .service-item .readmore {
  margin-top: 15px;
  display: inline-block;
  color: var(--color-primary);
}

.services .service-item:hover .icon:before {
  background: var(--color-primary);
}

.services .service-item:hover h3 {
  border-color: var(--color-primary);
}

</style>

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
                     

                     #container {
                       margin: 20px auto;
                       width: 125px;
                       margin-left: -5px;
                     }
                     
                     /* Base Style */
                     a.s3d  {
                       clear: both;
                       opacity: .8;
                       
                       border-radius:3px;
                       
                       box-shadow:0 4px 5px rgba(0,0,0,.3);
                       
                       display: inline-block !important;
                       font: 700 13px/36px 'Arial', Helvetica, Clean, sans-serif;
                       height: 34px;
                       margin: 0 0 10px;
                       padding: 0 10px 11px;
                       position: relative;
                       text-decoration: none;
                       text-shadow: 0 1px 1px rgba(255,255,255,.35);
                       width: 125px;
                       
                       transition: width 0.1s ease-in-out, opacity 0.1s ease-in-out, margin-left 0.1s ease-in-out, transform .3s ease-out;
                     }
                     
                     a.s3d:hover {
                       opacity: 1;
                       width: 160px;
                       margin-left: -10px;
                     }
                     
                     a.s3d:active { transform: translateX(200px); }
                     
                     /* Dribbble */
                     a.dribbble {
                        background:#9aff3f;
                       background: linear-gradient(#9aff3f,  #ffc107);
                       border-top: 1px solid  #ffc107;
                       color: rgba(74,36,49,.9);
                     }
                     
                     a.dribbble:active {
                        background: #9aff3f;
                       background: linear-gradient(#9aff3f, #ffc107);
                     }
                     
                     /* Facebook */
                     a.facebook {
                        background:#9aff3f;
                       background: linear-gradient(#9aff3f,  #ffc107);
                       border-top: 1px solid  #ffc107;
                       color: rgba(21,31,53,1);
                       text-shadow: 0 1px 1px rgba(255,255,255,.35);
                     }
                     
                     a.facebook:active {
                      background: #9aff3f;
                       background: linear-gradient(#9aff3f, #ffc107);
                     }
                     
                     /* Forrst */
                     a.forrst {
                        background:#9aff3f;
                       background: linear-gradient(#9aff3f,  #ffc107);
                       border-top: 1px solid  #ffc107;
                       color: rgba(22,33,16,1);
                     }
                     
                     a.forrst:active {
                        background: #9aff3f;
                       background: linear-gradient(#9aff3f, #ffc107);
                     }
                     
                     /* Designmoo */
                     a.designmoo {
                        background:#9aff3f;
                       background: linear-gradient(#9aff3f,  #ffc107);
                       border-top: 1px solid  #ffc107;
                       color: rgba(69,22,24,1);
                     }
                     
                     a.designmoo:active {
                       background: #9aff3f;
                       background: linear-gradient(#9aff3f, #ffc107);
                     }
                     
                     /* Flickr */
                     a.flickr {
                        background:#9aff3f;
                       background: linear-gradient(#9aff3f,  #ffc107);
                       border-top: 1px solid  #ffc107;
                       color: rgba(74,4,32,1);
                     }
                     
                     a.flickr:active {
                        background: #9aff3f;
                       background: linear-gradient(#9aff3f, #ffc107);
                     }
                     /* Using Sprites */
                     
                     .icons.dribbble { background-position: 0 0 }
                     
                     .icons.twitter { background-position: -25px 0 }
                     
                     .icons.facebook { background-position: -50px 0 }
                     
                     .icons.forrst { background-position: -75px 0 }
                     
                     .icons.designmoo { background-position: -100px 0 }
                     
                     .icons.flickr { background-position: -125px 0 }
                     </style>
                </div>
            </div>
        </div>
    </div>
</div>
    <!-- Footer End -->


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

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="../lib/easing/easing.min.js"></script>
    <script src="../lib/waypoints/waypoints.min.js"></script>
    <script src="../lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="../js/main.js"></script>
</body>

</html>