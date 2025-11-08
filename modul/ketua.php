<div class="container-fluid page-header py-6 my-6 mt-0 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center">
            <h1 class="display-4 text-white animated slideInDown mb-4">Ketua STAI Yaperi</h1>
            <nav aria-label="breadcrumb animated slideInDown">
            </nav>
        </div>
    </div>
    <!-- Page Header End -->
<?php
  $sqloutput=$koneksi->query('SELECT*FROM tb_ketua');
  $tampil=$sqloutput->fetch_array();

?>
   <!-- teachers -->
<section class="section">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12">
        <h2 class="section-title" style="text-align:center;">Ketua STAI YAPERI CIBINONG</h2>
      </div>
      <!-- profil ketua -->
      <div class="col-lg-4 col-sm-8 mb-5 mb-lg-0" style="margin-top:60px;">
        <div class="leader-card">
          <div class="leader-photo">
            <img src="admin/gbr/<?=$tampil['gambar']?>" alt="Ketua STAI">
          </div>
          <div class="leader-info">
            <h3 class="leader-name"><?=$tampil['namaketua']?></h3>
            <p class="leader-position">Ketua STAI Yaperi Cibinong</p>
                    </div>
        </div>
      </div>
    </div>
  </div>
</section>

<style>
/* ====== UMUM ====== */
.section {
  padding: 0 0 80px 0; /* hapus jarak atas, sisakan bawah */
  background: linear-gradient(to bottom right, #ffffff, #f7f7f7);
  background-attachment: fixed;
  min-height: 100vh; /* isi penuh satu layar */
  margin-top: 0; /* pastikan gak ada jarak dari atas */
}

/* kalau header kamu punya margin-bottom, netralkan di sini */
header, .navbar {
  margin-bottom: 0 !important;
}
.section .row {
    display: flex;
    justify-content: center;  /* Tengah horizontal */
    align-items: center;      /* Tengah vertikal kalau tinggi berbeda */
    flex-wrap: wrap;          /* Biar tetap responsif kalau ada banyak card */
    margin-top:1rem;
  }

  .section .card {
    margin: 20px; /* kasih jarak antar card biar gak nempel */
  }
/* Judul */
.section-title {
  font-size: 2rem;
  font-weight: 700;
  color: #2c2c2c;
  margin-bottom: 60px;
  position: relative;
  letter-spacing: 1px;
}

.section-title::after {
  content: "";
  position: absolute;
  left: 50%;
  bottom: -12px;
  transform: translateX(-50%);
  width: 36%;
  height: 10%;
  background-color: #ffc107;
  border-radius: 15%;
}

/* ====== KARTU PROFIL ====== */
.leader-card {
  background: #fff;
  border-radius: 18px;
  box-shadow: 0 10px 25px rgba(0,0,0,0.1);
  text-align: center;
  padding: 40px 30px;
  transition: 0.3s ease;
}

.leader-card:hover {
  transform: translateY(-8px);
  box-shadow: 0 14px 30px rgba(0,0,0,0.15);
}

/* Foto */
.leader-photo img {
  width: 220px;
  height: 220px;
  object-fit: cover;       /* biar foto tetap isi penuh */
  object-position: center 1%; /* agak naik biar fokus ke wajah */
  border-radius: 50%;
  border: 6px solid #ffc107;
  box-shadow: 0 5px 15px rgba(0,0,0,0.1);
  margin-bottom: 25px;
  transform: scale(1.1);   /* zoom 10% */
}

/* Nama */
.leader-name {
  font-size: 1.5rem;
  font-weight: 700;
  color: #222;
  margin-bottom: 6px;
}

/* Jabatan */
.leader-position {
  font-size: 1rem;
  font-weight: 500;
  color: #555;
  margin-bottom: 8px;
}

/* Periode */
.leader-period {
  display: inline-block;
  font-size: 0.95rem;
  color: #fff;
  background-color: #ffc107;
  padding: 5px 16px;
  border-radius: 20px;
  font-weight: 600;
}
/* ====== RESPONSIVE TABLET BESAR (≤ 992px) ====== */
@media (max-width: 992px) {
  .section {
    padding: 60px 0;
  }

  .section-title {
    font-size: 1.8rem;
  }

  .leader-card {
    width: 80%;
    padding: 45px 25px;
    margin: 0 auto 30px;
  }

  .leader-photo img {
    width: 200px;
    height: 200px;
  }

  .leader-name {
    font-size: 1.3rem;
  }

  .leader-position {
    font-size: 0.95rem;
  }

  .leader-period {
    font-size: 0.9rem;
  }
}
/* ====== RESPONSIVE UNTUK LAYOUT HP ====== */
@media (max-width: 768px) {

  /* Section */
  .section {
    padding: 60px 0;
  }

  .section .row {
    flex-direction: column;     /* susun card ke bawah */
    margin-top: -2rem;          /* kurangi jarak atas */
  }

  /* Judul */
 .section-title {
    font-size: 1.5rem;
    margin-bottom: 40px;
    width: 90%;              /* biar gak mepet tepi layar */
    max-width: 500px;        /* batasi lebar biar rapi */
    text-align: center;      /* teks di tengah */
    margin: 0 auto 40px;     /* posisi tengah + jarak bawah */
    line-height: 1.4;        /* biar gak numpuk terlalu rapet */
    word-wrap: break-word;   /* teks panjang otomatis turun */
    margin-left: -0.3rem;
  }

  /* Garis bawah kuning */
  .section-title::after {
    width: 40%;
    height: 4px;
    left: 50%;
    transform: translateX(-50%); /* tetap di tengah teks */
    bottom: -10px;
  }

  /* Card Profil */
  .leader-card {
    background: #fff;
  border-radius: 18px;
  box-shadow: 0 10px 25px rgba(0,0,0,0.1);
  text-align: center;
  padding: 50px 25px;
  transition: 0.3s ease;
  
  /* pusatkan card */
  width: 70%;
  max-width: 500px;      /* biar gak terlalu lebar di layar besar */
  margin: 0 auto 30px;   /* horizontal tengah + jarak antar card */
  display: block;
  margin-left:1rem;
}

.leader-card:hover {
  transform: translateY(-8px);
  box-shadow: 0 14px 30px rgba(0,0,0,0.15);
}
  /* Foto */
  .leader-photo img {
    width: 160px;
    height: 160px;
    transform: scale(1.05);    /* sedikit zoom */
    margin-bottom: 20px;
  }

  /* Nama */
  .leader-name {
    font-size: 1.3rem;
    margin-bottom: 5px;
  }

  /* Jabatan */
  .leader-position {
    font-size: 0.95rem;
  }

  /* Periode */
  .leader-period {
    font-size: 0.85rem;
    padding: 4px 12px;
  }
}
</style>