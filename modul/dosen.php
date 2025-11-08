<div class="container-fluid page-header py-6 my-6 mt-0 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center">
            <h1 class="display-4 text-white animated slideInDown mb-4">Struktur Kampus</h1>
            <nav aria-label="breadcrumb animated slideInDown">
            </nav>
        </div>
    </div>
    <!-- Page Header End -->
    <?php
  $sqloutput=$koneksi->query('SELECT*FROM tb_dosen');
  $tampil=$sqloutput->fetch_array();

?>
<!-- Team Start -->
<div class="team-container">
  <div class="team-card">
    <img src="admin/gbr/<?=$tampil['gambar1']?>" alt="Logo 1" class="team-img">
  </div>
  <div class="team-card card2">
    <img src="admin/gbr/<?=$tampil['gambar2']?>" alt="Logo 2" class="team-img card2">
  </div>
</div>

<style>
.team-container {
  display: flex;
  flex-direction: column; /* atas bawah */
  align-items: center;
  justify-content: center;
  gap: 2rem; /* jarak antar card */
  margin: 3rem auto;
  width: 90%;
  max-width: 700px;
}

/* ====== Card ====== */
.team-card {
  background: #fff;
  border-radius: 20px;
  box-shadow: 0 6px 20px rgba(0,0,0,0.08);
  padding: 1.5rem;
  transition: all 0.3s ease;
  text-align: center;
  width: 100%;
}

.team-card:hover {
  box-shadow: 0 10px 30px rgba(0,0,0,0.15);
  transform: translateY(-6px);
}

/* ====== Gambar ====== */
.team-img {
  width: 100%;
  max-width: 300%; /* besar di PC */
  height: auto;
  border-radius: 12px;
  transition: transform 0.3s ease;
}

.team-card:hover .team-img {
  transform: scale(1.03);
}

/* ====== RESPONSIVE ====== */

/* Tablet (iPad, ukuran sedang) */
@media (max-width: 992px) {
  .team-container {
    width: 95%;
    max-width: 600px;
    gap: 1.8rem;
  }

  .team-card {
    padding: 1.3rem;
  }

  .team-img {
    max-width: 200%; /* sedikit kecil di tablet */
  }
}

/* HP besar & iPad mini */
@media (max-width: 768px) {
  .team-container {
    width: 90%;
    margin: 2.5rem auto;
  }

  .team-card {
    padding: 1.2rem;
    border-radius: 16px;
  }

  .team-img {
    max-width: 150%; /* biar tetap pas di layar HP */
  }
}

/* HP kecil (≤ 480px) */
@media (max-width: 480px) {
  .team-container {
    width: 100%;
    margin: 2rem auto;
    gap: 1.5rem;
  }

  .team-card {
    padding: 1rem;
  }

  .team-img {
    max-width: 120%; /* cukup besar tapi tidak melebihi layar */
  }
}
</style>
<!-- Team End -->