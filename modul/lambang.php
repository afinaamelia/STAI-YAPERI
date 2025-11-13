
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
    <img src="img/logo1.png" alt="Logo STAI Yaperi" class="logo-img">
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