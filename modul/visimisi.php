
    </style>
    <div class="container-fluid page-header py-6 my-6 mt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center">
            <h1 class="display-4 text-white animated slideInDown mb-4">Visi - Misi Kampus</h1>
            <nav aria-label="breadcrumb animated slideInDown">
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

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