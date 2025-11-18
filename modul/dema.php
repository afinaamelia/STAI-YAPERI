

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
            <h1 class="display-4 text-white animated slideInDown mb-4">Organisasi Kampus</h1>
            <nav aria-label="breadcrumb animated slideInDown">
            </nav>
        </div>
    </div>
    <!-- Page Header End -->
    <!-- Work Process -->
    <div id="about">
  <div class="container-xxl py-6">
    <div class="container">
      <!-- Tambahkan class flex-row-reverse agar gambar di kanan -->
      <div class="row g-5 flex-row-reverse">

        <!-- Gambar di kanan -->
         <div id="logo-workprocess">
        <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s" style="margin-top:-56px;">
          <div class="position-relative overflow-hidden ps-5 pt-5 h-100" style="min-height: 40px;">
            <img src="img/dema.png" alt="Logo DEMA" class="img-fluid" style="max-width:400px; margin-left:10px;">
          </div>
        </div>
        </div>
        <!-- Teks di kiri -->
         <div id="teks-workprocess">
        <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
          <div class="h-100" style="margin-top:-56px;">
            <h6 class="text-primary text-uppercase mb-2">Organisasi DEMA</h6>
            <h1 class="display-6 mb-4" style="font-size: 34px;">Dewan Eksekutif Mahasiswa</h1>
            <p>Dewan Eksekutif Mahasiswa (DEMA) merupakan salah satu organisasi kemahasiswaan internal yang menjadi Lembaga Eksekutif di Perguruan Tinggi atau Universitas.</p>
            <p class="mb-4">Adapun tugas dan fungsinya bertanggung jawab dan bertujuan mengakomodir terhadap semua kegiatan kemahasiswaan di lingkup STAI YAPERI CIBINONG. Sesuai dengan namanya, Dewan Eksekutif Mahasiswa adalah sebagai organisasi kemahasiswaan tinggi yang menaungi seluruh organisasi intra kampus.</p>

            <div id="logo-email">
            <div class="row pt-2">
              <div class="col-sm-6">
                <div class="d-flex align-items-center">
                  <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                    <i class="fa fa-envelope-open text-white"></i>
                  </div>
                  </div>

                  <div id="email-teks">
                  <div class="ms-3">
                    <p class="mb-2">Email</p>
                    <h5 class="mb-0" style="margin-top:-10px;">demastaiyaperi@gmail.com</h5>
                  </div>
                </div>
              </div>

              <div id="instagram-logo">
              <div class="col-sm-6" style="margin-left:3px; margin-top:15px;">
                <div class="d-flex align-items-center">
                  <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                    <i class="fab fa-instagram text-white"></i>
                  </div>
                  </div>

                  <div id="instagram-teks">
                  <div class="ms-3">
                    <p class="mb-2">Instagram</p>
                    <h5 class="mb-0" style="margin-top:-10px;">demastaiyaperi</h5>
                  </div>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>

      </div>
    </div>
  </div>
</div>
</div>
<!-- ./Work Process -->
    <?php
  $sqloutput=$koneksi->query('SELECT*FROM tb_dema');
  $tampil=$sqloutput->fetch_array();

?>
<center>
<img src="img/<?=$tampil['gambar']?>" style= "margin-top:-30rem; width: 800px;">
</center>
    
  <!-- Full width footer -->
<footer class="text-white text-center text-lg-start bg-dark mt-5">
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
      top: -15px;
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
    #instagram-logo{
      position: relative;
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