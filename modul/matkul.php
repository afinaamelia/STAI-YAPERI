<div class="container-fluid page-header py-6 my-6 mt-0 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center">
            <h1 class="display-4 text-white animated slideInDown mb-4">Jadwal Kuliah</h1>
            <nav aria-label="breadcrumb animated slideInDown">
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

  <!-- ===== Judul Halaman ===== -->
<style>
/* ===== Judul Halaman (Desktop Default) ===== */
.section-title {
  font-size: 2rem;           /* ~32px */
  font-weight: 700;
  color: #2c2c2c;
  margin-bottom: 60px;
  position: relative;
  letter-spacing: 1px;
  text-align: center;        /* Biar tetap rapi tengah */
}

.section-title::after {
  content: "";
  position: absolute;
  left: 50%;
  bottom: -12px;
  transform: translateX(-50%);
  width: 36%;
  height: 5px;
  background-color: #ffc107;
  border-radius: 10px;
}

/* ===== Tablet (max-width: 992px) ===== */
@media (max-width: 992px) {
  .section-title {
    font-size: 1.75rem;     /* sedikit lebih kecil */
    margin-bottom: 50px;
  }

  .section-title::after {
    width: 45%;             /* garis agak panjang */
    height: 4px;
  }
}

/* ===== HP Landscape (max-width: 768px) ===== */
@media (max-width: 768px) {
  .section-title {
    font-size: 1.5rem;      /* ~24px */
    margin-bottom: 40px;
  }

  .section-title::after {
    width: 50%;
    height: 3.5px;
  }
}

/* ===== HP Kecil (max-width: 576px) ===== */
@media (max-width: 576px) {
  .section-title {
    font-size: 1.3rem;      /* ~21px */
    margin-bottom: 35px;
  }

  .section-title::after {
    width: 60%;
    height: 3px;
  }
}
</style>

  <div class="text-center mb-5">
    <h2 class="section-title">Jadwal Kuliah STAI YAPERI CIBINONG</h2>
  </div>
 <!-- ===== END Judul Halaman ===== -->

<!-- ===== Jadwal Kuliah ===== -->
<div class="container my-5">
  <!-- Grid Card -->
  <div class="wrapper text-center">
    <?php
     $sqloutput = $koneksi->query("SELECT * FROM tb_jadwal ORDER BY id_jadwal ASC");
      while ($tampil = $sqloutput->fetch_array()) {
    ?>
      <div class="col-lg-3 col-md-6 col-sm-12 mb-4 d-flex justify-content-center">
        <div class="card shadow-lg border-0 rounded-4 gallery-card h-100 mx-auto">
          
          <div class="card-body p-3 bg-light rounded-bottom-4">
            <h5 class="fw-bold text-dark mb-0">
              <?= htmlspecialchars($tampil['judul_semester']) ?>
            </h5>
          </div>

         <a href="../admin/gbr/<?= $tampil['gambar'] ?>" 
   class="gallery-link position-relative d-block" 
   onclick="openModal(event, this)">
  <img src="admin/gbr/<?= $tampil['gambar'] ?>" 
       alt="<?= htmlspecialchars($tampil['judul_semester']) ?>"
       class="gallery-img card-img-top rounded-top-4">
  <!-- Ikon kaca pembesar -->
  <div class="always-icon">
    <i class="fa fa-search-plus"></i>
  </div>
</a>

<!-- ===== Modal Gambar ===== -->
<div id="imageModal" class="custom-modal">
  <div class="modal-wrapper">
    <div class="img-container">
      <img class="modal-content" id="modalImg">
      <!-- Tombol close di dalam gambar -->
      <span class="inner-close" onclick="closeModal()">
        <i class="fa fa-times"></i>
      </span>
    </div>
  </div>
</div>
        </div>
      </div>
    <?php } ?>
  </div>
</div>

<!-- ===== CSS ===== -->
<style>
/* ===== Struktur Grid Utama ===== */
.wrapper {
  display: flex;
  flex-wrap: wrap;
  justify-content: center; 
  gap: 2rem; /* jarak antar card */
  margin: 0 auto;
  padding: 1rem;
}

/* ===== Kartu ===== */
.gallery-card {
  flex: 1 1 calc(33.333% - 2rem); /* default: 3 kolom */
  max-width: 22rem;
  background: #fff;
  border-radius: 0.75rem;
  transition: transform 0.3s ease, box-shadow 0.3s ease;
  display: flex;
  flex-direction: column;
  align-items: center;
}

.gallery-card:hover {
  transform: translateY(-0.4rem);
  box-shadow: 0 0.6rem 1.2rem rgba(0, 0, 0, 0.15);
}

/* ===== Gambar ===== */
.gallery-img {
  width: 100%;
  aspect-ratio: 1 / 1; /* bikin persegi proporsional */
  object-fit: cover;
  border-radius: 0.75rem 0.75rem 0 0;
  display: block;
  cursor: pointer;
}

/* ===== Ikon kaca pembesar di gambar utama ===== */
.always-icon {
  position: absolute;
  top: 0.8rem;
  right: 0.8rem;
  background: rgba(17, 153, 142, 0.9);
  color: #fff;
  padding: 0.55rem 0.7rem;
  border-radius: 50%;
  font-size: 1.1rem;
  box-shadow: 0 0.15rem 0.4rem rgba(0,0,0,0.3);
  transition: transform 0.2s ease;
}
.always-icon:hover {
  transform: scale(1.1);
}

/* ===== Modal ===== */
.custom-modal {
  display: none;
  position: fixed;
  inset: 0;
  z-index: 1000;
  background: rgba(0,0,0,0.9);
  justify-content: center;
  align-items: center;
}

.modal-wrapper {
  position: relative;
  max-width: 90%;
  max-height: 90%;
}

.img-container {
  position: relative;
  display: inline-block;
}

.modal-content {
  width: 100%;
  max-height: 90vh;
  object-fit: contain;
  border-radius: 10px;
  display: block;
}

/* ===== Tombol close di dalam gambar ===== */
.inner-close {
  position: absolute;
  top: 12px;
  right: 12px;
  background: rgba(255,255,255,0.85);
  color: #111;
  font-size: 1.3rem;
  border-radius: 50%;
  padding: 6px 10px;
  cursor: pointer;
  transition: all 0.2s ease;
  z-index: 10;
}
.inner-close:hover {
  background: #ff5252;
  color: #fff;
}

/* ===== Judul ===== */
.card-body h5 {
  color: #000 !important;
  font-size: 1.1rem;
  text-align: center;
}

/* ===== Tablet ===== */
@media (max-width: 992px) {
  .gallery-card {
    flex: 1 1 calc(50% - 2rem); /* 2 kolom */
    max-width: 20rem;
  }
}

/* ===== HP ===== */
@media (max-width: 576px) {
  .gallery-card {
    flex: 1 1 100%; /* 1 kolom */
    max-width: 22rem;
  }
}
</style>

<script>
function openModal(event, link) {
  event.preventDefault();
  const imgSrc = link.querySelector('img').src;
  document.getElementById("modalImg").src = imgSrc;
  document.getElementById("imageModal").style.display = "flex";
}

function closeModal() {
  document.getElementById("imageModal").style.display = "none";
}
</script>