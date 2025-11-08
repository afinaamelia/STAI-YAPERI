 <?php
  $sqloutput=$koneksi->query('SELECT*FROM tb_pmb');
  $tampil=$sqloutput->fetch_array();

?>

<section id="cta" class="cta" style="margin-top:-1.4375rem;"> <!-- -23px = -1.4375rem -->
  <div class="container" data-aos="zoom-in">
    <div class="text-center">
      <h3>Ayo daftarkan segera !!</h3>
      <p>Tata Cara Pendaftaran Mahasiswa/i Baru T.A.<?=$tampil['Tahun Akademik']?></p>
      <a class="cta-btn" href="bayar.php">klik disini</a>
    </div>
  </div>
</section>
<!-- end cta -->

<!-- about pendaftaran -->
   <section id="about" class="about">
  <div class="container" data-aos="fade-up">
    <div class="row">
      <!-- Kolom Gambar -->
 <div class="col-lg-6 order-1 order-lg-2 img-col" data-aos="fade-left" data-aos-delay="100">
  <img src="admin/gbr/<?=$tampil['gambar']?>" class="img-fluid" alt="">
</div>
      <!-- Kolom Konten -->
      <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-right" data-aos-delay="100" style="margin-top:100px;">

        <!-- Bagian Ajakan dan Keunggulan -->
        <div class="content" style="text-align:left;">
          <h3>Telah dibuka !!! Penerimaan Mahasiswa/i Baru Tahun Akademik <?=$tampil['Tahun Akademik']?></h3>
          <p class="fst-italic">
            Sudah siap melangkah menuju masa depan yang lebih bermakna? 🌟  
            Yuk, gabung bersama <strong>STAI Yaperi Cibinong</strong> — kampus dengan suasana islami, dosen berpengalaman, dan lingkungan belajar yang nyaman.
          </p>

          <ul>
            <li><i class="ri-check-double-line"></i> Islamic Ecosystem — suasana kampus religius & kondusif.</li>
            <li><i class="ri-check-double-line"></i> Terakreditasi dan diakui secara resmi.</li>
            <li><i class="ri-check-double-line"></i> Biaya terjangkau dan bisa dicicil.</li>
            <li><i class="ri-check-double-line"></i> Lokasi strategis di pusat Cibinong.</li>
            <li><i class="ri-check-double-line"></i> Tersedia Beasiswa Prestasi, KIP, dan Beasiswa Lembaga.</li>
          </ul>
            <h6 class="mt-3" style="font-weight: 600;">
            🎓 Daftarkan diri Anda sekarang dan wujudkan cita-cita bersama STAI Yaperi Cibinong!
</h6>
        </div>
        <!-- Bagian Informasi Pendaftaran -->
        <div class="info-daftar">
          <h5 class="fst-italic">📋 Informasi Pendaftaran:</h5>
          <ul>
            <li style="margin-bottom: 0.5rem;">📞 08515-697-697-4 (Admin Pendaftaran)</li>
            <li style="margin-bottom: 0.5rem;">
              📍 <strong>Sekretariat Pendaftaran:</strong><br>
              Jl. Raya Jakarta Bogor KM.45, Pakansari, Cibinong, Kab. Bogor 16915
            </li>
            <li>🕒 Senin - Sabtu: 10.00 – 17.00 WIB</li>
          </ul>
         </div>

      </div>
    </div>
  </div>
</section>
      <!-- end about -->

<!-- ====== PROGRAM STUDI SECTION ====== -->
<section id="blog" class="blog section bg-light"  data-aos="fade-up">
  <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s">
    <h1 class="display-6 mb-1">Program Studi STAI YAPERI CIBINONG</h1>
  </div>

  <div class="container">
    <div class="row justify-content-center">

      <!-- ====== CARD 1 ====== -->
      <div class="col-12 col-md-6 col-lg-5 mb-4">
        <div class="program-card">
          <div class="program-image">
            <img src="img/pai.jpg" alt="Pendidikan Agama Islam (PAI)">
          </div>
          <div class="program-content">
            <h3>Pendidikan Agama Islam (PAI)</h3>
            <p>
              Jurusan Pendidikan Agama Islam berfokus pada ilmu pengajaran dan pendidikan agama Islam, 
              dengan tujuan menghasilkan sarjana pendidikan yang profesional, berakhlak mulia, dan siap mengembangkan ilmu pendidikan Islam di masyarakat.
            </p>
            <p>
              Lulusan Program Studi PAI memperoleh gelar <strong>S.Pd</strong> (Sarjana Pendidikan) sesuai PMA No. 33 Tahun 2016.
            </p>
          </div>
        </div>
      </div>

      <!-- ====== CARD 2 ====== -->
      <div class="col-12 col-md-6 col-lg-5 mb-4">
        <div class="program-card">
          <div class="program-image">
            <img src="img/hki.jpg" alt="Hukum Keluarga Islam (HKI)">
          </div>
          <div class="program-content">
            <h3>Hukum Keluarga Islam (HKI)</h3>
            <p>
              Jurusan Hukum Keluarga Islam mempelajari hukum keluarga berdasarkan prinsip-prinsip Islam: pernikahan, talak, waris, dan hak asasi dalam konteks sosial modern.
            </p>
            <p>
              Lulusan Program Studi HKI memperoleh gelar <strong>S.H.I.</strong> (Sarjana Hukum Islam).
            </p>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>
