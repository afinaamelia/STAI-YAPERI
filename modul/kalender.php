
      <!-- Page Header Start -->
      <div class="container-fluid page-header py-6 my-6 mt-0 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center">
            <h1 class="display-4 text-white animated slideInDown mb-4">Kalender Akademik</h1>
        </div>
    </div>
    <?php
  $sqloutput=$koneksi->query('SELECT*FROM tb_akademik');
  $tampil=$sqloutput->fetch_array();

?>
    <!-- Page Header End -->
    <style>
/* Kontainer untuk gambar kecil supaya bisa di tengah */
.image-container {
  display: flex;
  justify-content: center; /* posisi horizontal di tengah */
  align-items: center;     /* posisi vertikal bisa diatur juga kalau mau tengah halaman */
  margin-top: 50px;        /* jarak dari atas halaman */
}

/* Gambar kecil di halaman */
.image-click {
  width: 600px;
  transition: transform 0.3s ease;
  cursor: pointer;
  border-radius: 8px;
  box-shadow: 0 4px 12px rgba(0,0,0,0.2);
}
.image-click:hover {
  transform: scale(1.05);
}

/* Overlay fullscreen (saat gambar diklik) */
.image-overlay {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: rgba(0,0,0,0.85);
  display: none;
  justify-content: center;
  align-items: center;
  z-index: 9999;
}

/* Gambar di tengah fullscreen */
.image-overlay img {
  max-width: 90%;
  max-height: 90%;
  border-radius: 10px;
  box-shadow: 0 8px 30px rgba(0,0,0,0.5);
  animation: zoomIn 0.4s ease;
}

/* Tombol keluar (logo X) */
.close-btn {
  position: absolute;
  top: 30px;
  right: 40px;
  font-size: 35px;
  color: white;
  cursor: pointer;
  font-weight: bold;
  transition: transform 0.2s;
}
.close-btn:hover {
  transform: scale(1.2);
  color: #ff4b4b;
}

/* Animasi zoom */
@keyframes zoomIn {
  from { transform: scale(0.7); opacity: 0; }
  to { transform: scale(1); opacity: 1; }
}
</style>

<!-- Gambar kecil di tengah -->
<div class="image-container">
  <img src="admin/gbr/<?=$tampil['gambar']?>" id="gambarKecil" class="image-click">
</div>

<!-- Overlay fullscreen -->
<div id="overlay" class="image-overlay">
  <span class="close-btn" id="closeBtn">&times;</span> <!-- logo X -->
  <img src="admin/gbr/<?=$tampil['gambar']?>" alt="Gambar Besar">
</div>

<script>
const gambarKecil = document.getElementById('gambarKecil');
const overlay = document.getElementById('overlay');
const closeBtn = document.getElementById('closeBtn');

// Saat gambar kecil diklik → tampilkan overlay
gambarKecil.addEventListener('click', () => {
  overlay.style.display = 'flex';
});

// Saat tombol X diklik → sembunyikan overlay
closeBtn.addEventListener('click', () => {
  overlay.style.display = 'none';
});

// Klik di luar gambar juga menutup overlay
overlay.addEventListener('click', (e) => {
  if (e.target === overlay) {
    overlay.style.display = 'none';
  }
});
</script>
