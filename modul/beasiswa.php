<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>STAI YAPERI</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="keywords" content="">
  <meta name="description" content="">

  <!-- Favicon -->
  <link href="../img/favicon.ico" rel="icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">

  <!-- Icons -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

  <!-- Libraries -->
  <link href="../lib/animate/animate.min.css" rel="stylesheet">
  <link href="../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- Bootstrap -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">


  <!-- Template -->
  <!-- <link href="../css/style.css" rel="stylesheet"> -->

  <style>
    /* --- Global --- */
    html, body {
      overflow-x: hidden;
    }

    /* Carousel */
    #header-carousel img {
      height: 100vh;
      object-fit: cover;
    }

    /* About Section */
    #about img {
      max-width: 100%;
      height: auto;
    }

    /* Gambar berita */
    .courses-item img {
      width: 100%;
      height: 230px;
      object-fit: cover;
    }

    /* Topbar */
    .container-fluid.bg-dark {
      font-size: 0.875rem;
    }

    .container-fluid.bg-dark .row > div {
      display: flex;
      align-items: center;
      flex-wrap: wrap;
      gap: 15px;
    }

    .container-fluid.bg-dark .row > div:first-child > div {
      margin-right: 1.5rem;
    }

    .social {
      display: flex;
      align-items: center;
      gap: 0;
    }

    .social a {
      display: flex;
      align-items: center;
      justify-content: center;
      width: 2.5rem;
      height: 2.5rem;
      color: #ffc107;
      text-decoration: none;
      border-right: 1px solid rgba(255, 255, 255, 0.4);
    }

    .social a:last-child {
      border-right: none;
    }

    .social a:hover {
      color: #fff;
    }

    @media (max-width: 991px) {
      .container-fluid.bg-dark {
        display: none !important;
      }
    }

    /* Navbar */
    .navbar.sticky-top {
      background-color: #fff !important;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
      transition: background-color 0.3s ease;
    }

    /* Service Section */
    .service-item {
      box-shadow: 0 0 40px rgba(0, 0, 0, .06);
      transition: all 0.3s ease;
      border-radius: 10px;
      background: #fff;
      height: 380px;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      text-align: center;
    }

    .service-item:hover {
      transform: translateY(-5px);
      box-shadow: 0 8px 20px rgba(0, 0, 0, .15);
    }

    .service-item img {
      width: 100%;
      height: 200px;
      object-fit: contain;
      margin-bottom: 15px;
    }

    .service-item h4 {
      white-space: nowrap;
      overflow: hidden;
      text-overflow: ellipsis;
    }

    @media (max-width: 991px) {
      .service-item {
        height: auto;
      }

      .service-item img {
        width: 180px;
        height: 180px;
      }
    }

    /* Footer */
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
      width: 2.25rem;
      height: 2rem;
      display: inline-flex;
      align-items: center;
      justify-content: center;
      border-radius: 25%;
      background: #ffc107;
      color: #000;
      text-decoration: none;
      font-size: 0.875rem;
      margin-left: 0.625rem;
      transition: 0.3s;
    }

    .social-f:hover {
      background: #fff;
      color: #000;
    }

    .kontak h5,
    .jam h5 {
      margin-left: 1.5rem;
      margin-top: 1rem;
    }

    .fa-ul {
      list-style: none;
      margin: 0;
      padding: 0;
    }

    .fa-ul li {
      display: flex;
      align-items: center;
      gap: 8px;
      text-align: left;
    }

    .fa-ul .fa-li {
      position: static;
      margin-right: 6px;
    }

    @media (max-width: 992px) {
      footer {
        text-align: left;
      }

      .footer-wrapper {
        flex-direction: column;
        align-items: flex-start;
        gap: 0.75rem;
      }

      .footer-right {
        justify-content: flex-start;
        margin-top: 0.625rem;
      }

      .footer-bottom {
        text-align: left;
        font-size: 0.8rem;
      }

      footer img.logo-footer {
        max-width: 100%;
        height: auto;
      }
    }

    @media (max-width: 768px) {
      footer .col-lg-4,
      footer .col-lg-3,
      footer .col-md-6 {
        text-align: left !important;
        margin-left: 1.2em !important;
      }

      footer img.logo-footer {
        max-width: 86%;
        height: auto;
      }

      footer table {
        width: 100%;
        table-layout: auto;
        border-collapse: collapse;
      }

      footer table td {
        text-align: left;
        padding: 0.25rem 0.5rem;
        font-size: 0.85rem;
        white-space: normal;
      }

      .footer-left {
        font-size: 0.6rem;
      }
    }
  </style>
</head>

<body>
  <!-- Topbar Start -->
  <div class="container-fluid bg-dark text-light p-0">
    <div class="row align-items-center gx-0 px-4 py-2">
      <div class="col-lg-6 col-md-12 d-flex flex-wrap mb-2 mb-lg-0">
        <div class="me-4">
          <i class="fa fa-map-marker-alt text-primary me-2"></i>Jl. Raya Jakarta Bogor KM. 45
        </div>
        <div>
          <i class="far fa-clock text-primary me-2"></i>Senin - Sabtu : 11.00 WIB - 17.00 WIB
        </div>
      </div>

      <div class="col-lg-6 col-md-12 d-flex justify-content-lg-end flex-wrap">
        <div class="me-4">
          <i class="fa fa-phone-alt text-primary me-2"></i>(021) 837-137-49
        </div>
        <div class="social">
          <a href="https://web.facebook.com/staiyaperi"><i class="fab fa-facebook-f"></i></a>
          <a href="https://staiyaperi.ac.id"><i class="fab fa-chrome"></i></a>
          <a href="https://instagram.com/staiyaperi"><i class="fab fa-instagram"></i></a>
          <a href="https://www.tiktok.com/@staiyaperi"><i class="fab fa-tiktok"></i></a>
        </div>
      </div>
    </div>
  </div>
  <!-- Topbar End -->

  <!-- Navbar Start -->
  <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0">
    <a href="../index.php" class="navbar-brand d-flex align-items-center border-end px-4 px-lg-5">
      <h2 class="m-0"><img src="../img/logo1.png" width="78" alt=""> STAI YAPERI</h2>
    </a>
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarCollapse">
      <div class="navbar-nav ms-auto p-4 p-lg-0" style="font-size:15px;">
        <a href="../index.php" class="nav-item nav-link">Beranda</a>
        <a href="about.php" class="nav-item nav-link">Tentang Kami</a>
        <a href="pmb.php" class="nav-item nav-link">PMB Online</a>
        <a href="kerjasama.php" class="nav-item nav-link">Kerja Sama</a>
        <a href="kontak.php" class="nav-item nav-link">Kontak</a>
      </div>
    </div>
  </nav>
  <!-- Navbar End -->

  <!-- Page Header Start -->
  <div class="container-fluid page-header py-6 my-6 mt-0 wow fadeIn" data-wow-delay="0.1s">
    <div class="container text-center">
      <h1 class="display-4 text-white animated slideInDown mb-4">Beasiswa Kampus</h1>
    </div>
  </div>
  <!-- Page Header End -->

  <!-- Service Section Start -->
  <section id="beasiswa" class="services section-bg py-5">
    <div class="container">
      <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s">
        <h1 class="display-6 mb-5">Program Beasiswa</h1>
      </div>
      <div class="row">

        <div class="col-md-4 wow fadeInUp" data-wow-delay="0.1s">
          <div class="service-item">
            <img src="../img/medali.png" alt="Beasiswa Prestasi" class="img-fluid">
            <h4 class="mb-3">Beasiswa Prestasi</h4>
          </div>
        </div>

        <div class="col-md-4 wow fadeInUp" data-wow-delay="0.3s">
          <div class="service-item">
            <img src="../img/kip.png" alt="KIP Kuliah" class="img-fluid">
            <h4 class="mb-3">KIP Kuliah</h4>
          </div>
        </div>

        <div class="col-md-4 wow fadeInUp" data-wow-delay="0.5s">
          <div class="service-item">
            <img src="../img/rmh.png" alt="Beasiswa Yayasan" class="img-fluid">
            <h4 class="mb-3">Beasiswa Yayasan</h4>
          </div>
        </div>

      </div>
    </div>
  </section>
  <!-- Service Section End -->

  <!-- Footer Start -->
  <footer class="text-white text-center text-lg-start bg-dark mt-5">
    <div class="container-fluid p-3">
      <div class="row mt-3">
        <div class="col-lg-4 col-md-12 mb-md-0 d-flex">
          <img src="../img/f1.png" alt="Logo" class="img-fluid logo-footer">
        </div>

        <div class="col-lg-3 col-md-6 mb-4 mb-md-0 kontak">
          <h5 class="text-uppercase mb-4 pb-1 text-primary">Kontak</h5>
          <ul class="fa-ul">
            <li><span class="fa-li"><i class="fa fa-map-marker-alt"></i></span>STAI YAPERI CIBINONG</li>
            <li><span class="fa-li"><i class="fas fa-envelope"></i></span>stai.yaperi.cbg@gmail.com</li>
            <li><span class="fa-li"><i class="fab fa-whatsapp fa-lg"></i></span>+62 8515-697-697-4</li>
            <li><span class="fa-li"><i class="fas fa-phone"></i></span>(021) 837-137-49</li>
          </ul>
        </div>

        <div class="col-lg-3 col-md-6 mb-4 mb-md-0 jam">
          <h5 class="text-uppercase mb-4 text-primary">Jam Operasional</h5>
          <table class="table text-center text-white mb-0">
            <tbody>
              <tr><td>Senin - Selasa</td><td>12.00 s/d 17.00 WIB</td></tr>
              <tr><td>Rabu - Sabtu</td><td>10.00 s/d 18.00 WIB</td></tr>
              <tr><td>Minggu</td><td>Tutup</td></tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>

    <div class="footer-bottom p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      <div class="footer-wrapper">
        <div class="footer-left">
          © 2025 <a class="text-primary" href="#">STAI YAPERI Cibinong</a> All Rights Reserved.
        </div>
        <div class="footer-right">
          <a href="https://instagram.com/staiyaperi" class="social-f"><i class="fab fa-instagram"></i></a>
          <a href="https://web.facebook.com/staiyaperi" class="social-f"><i class="fab fa-facebook-f"></i></a>
          <a href="https://staiyaperi.ac.id" class="social-f"><i class="fas fa-globe"></i></a>
          <a href="https://www.tiktok.com/@staiyaperi" class="social-f"><i class="fab fa-tiktok"></i></a>
        </div>
      </div>
    </div>
  </footer>
  <!-- Footer End -->

  <!-- Back to Top -->
  <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top">
    <i class="bi bi-arrow-up"></i>
  </a>*

  <!-- JS Libraries -->
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../lib/wow/wow.min.js"></script>
  <script src="../lib/easing/easing.min.js"></script>
  <script src="../lib/waypoints/waypoints.min.js"></script>
  <script src="../lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="../js/main.js"></script>
</body>
</html>