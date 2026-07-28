 <?php
  $sqloutput=$koneksi->query('SELECT*FROM tb_pmb');
  $tampil=$sqloutput->fetch_array();

?>

<section id="register-banner">
    <div class="banner-overlay"></div>

    <div class="banner-content">
        <h3>Ayo daftarkan segera !!</h3>
        <p>Tata Cara Pendaftaran Mahasiswa/i Baru T.A. <?=$tampil['Tahun Akademik']?></p>

        <a href="?page=bayar" class="banner-btn">
            Klik Disini
        </a>
    </div>
</section>

<style>
    /* ==========================
   REGISTER BANNER
========================== */

#register-banner{
    position: relative;
    min-height: 220px; /* sebelumnya 450px */

    background-image: url("img/ft4.jpg");
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;

    display: flex;
    justify-content: center;
    align-items: center;
}

#register-banner::before{
    content: "";
    position: absolute;
    inset: 0;
    background: rgba(0, 0, 0, 0.75); /* Hitam transparan */
}

#register-banner .banner-content{
    position: relative;
    z-index: 2;
    text-align: center;
    color: #fff;
    padding: 20px;
}

#register-banner .banner-btn{
    display: inline-block;
    margin-top: 15px;
    padding: 14px 35px;
    background: #ffc107;
    color: #000;
    border-radius: 30px;
    text-decoration: none;
    font-weight: 600;
    transition: .3s;
}

#register-banner .banner-btn:hover{
    background: #fff;
}
#register-banner h3{
    color: #fff;
    font-size: 2rem;
    font-weight: 700; /* Tebal (bold) */
    margin-bottom: 3px;
}

#register-banner p{
    color: #fff;
    font-size: 1.45rem;
    font-weight: 400; /* Normal */
    line-height: 1.6;
    margin-bottom: 0;
}
/* =========================
   Responsive
========================= */

/* Tablet */
@media (max-width: 992px) {
    #register-banner{
        min-height: 200px;
    }

    #register-banner .banner-content{
        padding: 18px;
    }

    #register-banner h3{
        font-size: 1.8rem;
    }

    #register-banner p{
        font-size: 1.2rem;
    }

    #register-banner .banner-btn{
        padding: 12px 30px;
        font-size: 0.95rem;
    }
}

/* Mobile */
@media (max-width: 768px) {
    #register-banner{
        min-height: 180px;
        background-position: center;
    }

    #register-banner .banner-content{
        padding: 15px;
    }

    #register-banner h3{
        font-size: 1.5rem;
        margin-bottom: 5px;
    }

    #register-banner p{
        font-size: 1rem;
        line-height: 1.5;
    }

    #register-banner .banner-btn{
        margin-top: 12px;
        padding: 10px 25px;
        font-size: 0.9rem;
    }
}

/* Mobile kecil */
@media (max-width: 480px) {
    #register-banner{
        min-height: 160px;
    }

    #register-banner .banner-content{
        padding: 12px;
    }

    #register-banner h3{
        font-size: 1.2rem;
    }

    #register-banner p{
        font-size: 0.7rem;
    }

    #register-banner .banner-btn{
        padding: 9px 20px;
        font-size: 0.65rem;
    }
}
.about-pmb{
    padding:80px 0;
}

.about-wrapper{
    display:flex;
    align-items:center;
    justify-content:space-between;
    gap:50px;
}

.about-img,
.about-content{
    flex:1;
}

.about-img{
    display:flex;
    justify-content:center;
    align-items:center;
}

.about-img img{
    width:100%;
    max-width:500px;
    border-radius:15px;
    box-shadow:0 10px 25px rgba(0,0,0,.2);
}

.about-content h3{
    font-size:26px;
    font-weight:700;
    margin-bottom:20px;
    line-height:1.4;
}

.about-content p,
.about-content li{
    font-size:15px;
    line-height:1.7;
    letter-spacing:0.3px;
}

.about-content ul{
    padding-left:20px;
}

.about-content h4{
    margin-top:20px;
}

.about-content h5{
    margin-top:25px;
}

/* Tablet */
@media (max-width:991px){

    .about-wrapper{
        flex-direction:column;
    }

    .about-img{
        order:1;
    }

    .about-content{
        order:2;
        width:100%;
    }

    .about-img img{
        max-width:420px;
    }

    .about-content h3{
        font-size:28px;
    }
}

/* HP */
@media (max-width:576px){

    .about-pmb{
        padding:50px 15px;
    }

    .about-wrapper{
        gap:25px;
    }

    .about-img img{
        max-width:100%;
        margin-left:-25px;
    }

    .about-content h3{
        font-size:20px;
    }

    .about-content p,
    .about-content li{
        font-size:13px;
        overflow-wrap: break-word;
    }

    .about-content h4{
        font-size:22px;
        overflow-wrap: break-word;
    }

    .about-content h5{
        font-size:18px;
    }
}
</style>

<section id="about2" class="about-pmb">

    <div class="container">

        <div class="about-wrapper">

            <!-- Gambar -->
            <div class="about-img">
                <img src="admin/gbr/<?=$tampil['gambar']?>" alt="">
            </div>

            <!-- Teks -->
            <div class="about-content">

                <h3>
                    Telah dibuka !!! Penerimaan Mahasiswa/i Baru Tahun Akademik
                    <?=$tampil['Tahun Akademik']?>
                </h3>

                <p>
                    Sudah siap melangkah menuju masa depan yang lebih bermakna? 🌟
                    Yuk, gabung bersama <b>STAI Yaperi Cibinong</b> — kampus dengan suasana islami,
                    dosen berpengalaman, dan lingkungan belajar yang nyaman.
                </p>

                <ul>
                    <li>Islamic Ecosystem — suasana kampus religius & kondusif.</li>
                    <li>Terakreditasi dan diakui secara resmi.</li>
                    <li>Biaya kuliah terjangkau dan bisa dicicil.</li>
                    <li>Lokasi strategis di pusat Cibinong.</li>
                    <li>Tersedia Beasiswa Prestasi, KIP, dan Beasiswa Lembaga.</li>
                </ul>

                <h5>
                    🎓 Daftarkan diri Anda sekarang dan wujudkan cita-cita bersama STAI Yaperi Cibinong!
                </h5>

                <hr>

                <h4>📋 Informasi Pendaftaran</h4>

                <p>📞 08515-697-697-4 (Admin Pendaftaran)</p>

                <p>
                    📍 <b>Sekretariat Pendaftaran</b><br>
                    Jl. Raya Jakarta Bogor KM.45, Pakansari,
                    Cibinong, Kab. Bogor 16915
                </p>

                <p>🕒 Senin - Sabtu : 10.00 – 17.00 WIB</p>

            </div>

        </div>

    </div>

</section>

</section>
<!-- ====== PROGRAM STUDI SECTION ====== -->
<section id="blog" class="blog section bg-light"  data-aos="fade-up">
  <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s">
    <h1 class="display-6 mb-1" style="font-size:21px;">Program Studi STAI YAPERI CIBINONG</h1>
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

    </div>
  </div>
</section>
