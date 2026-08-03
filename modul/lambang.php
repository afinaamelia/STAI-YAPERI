 <!-- Page Header Start -->
<section id="PageHeader" class="page-header1">
    <div class="banner-overlay"></div>

    <div class="banner-content">
       <h3>Arti Logo Kampus </h3>
                   </div>
</section>
<style>
 /* START CSS PageHeader */
     #PageHeader{
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

#PageHeader::before{
    content: "";
    position: absolute;
    inset: 0;
    background: rgba(0, 0, 0, 0.75); /* Hitam transparan */
}

#PageHeader .banner-content{
    position: relative;
    z-index: 2;
    text-align: center;
    color: #fff;
    padding: 20px;
}

#PageHeader .banner-btn{
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

#PageHeader .banner-btn:hover{
    background: #fff;
}
#PageHeader h3{
    color: #fff;
    font-size: 2rem;
    font-weight: 700; /* Tebal (bold) */
    margin-bottom: 3px;
}
/* =========================
   Responsive
========================= */

/* Tablet */
@media (max-width: 992px) {
    #PageHeader{
        min-height: 200px;
    }

    #PageHeader .banner-content{
        padding: 18px;
    }

    #PageHeader h3{
        font-size: 1.8rem;
    }

}

/* Mobile */
@media (max-width: 768px) {
    #PageHeader{
        min-height: 180px;
        background-position: center;
    }

    #PageHeader .banner-content{
        padding: 15px;
    }

    #PageHeader h3{
        font-size: 1.5rem;
        margin-bottom: 5px;
    }
}

/* Mobile kecil */
@media (max-width: 480px) {
    #PageHeader{
        min-height: 160px;
    }

    #PageHeader .banner-content{
        padding: 12px;
    }

    #PageHeader h3{
        font-size: 1.2rem;
    }
}
/* END CSS PageHeader */
</style>
<!-- Page Header End -->


   <!-- About Logo Start -->
<section id="about2">
  <div class="container mt-5">
    <div class="row mt-5 align-items-center g-5">

     <!-- Logo Image -->
 <div class="col-lg-6 col-md-12 wow fadeInUp mb-4 mb-lg-0" data-wow-delay="0.5s">
  <div class="logo-box">
    <img src="img/logo1.png" alt="Logo STAI Yaperi" class="logo-img">
  </div>
</div>

      <!-- Arti Logo -->
      <div class="col-lg-6 wow fadeInUp mt-2" data-wow-delay="0.5s">
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
            <p><strong>Kapas berjumlah lima buah berwarna putih:</strong> Melambangkan rukun Islam yang wajib dilaksanakan agama islam, sehingga terwujud kesejahteraan yang adil dan merata.</p>
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
/* ===========================
   ABOUT LOGO
=========================== */

#about2{
    padding:10px 0 90px; /* atas 50px, bawah 90px */
}

#about2 .row{
    align-items:center;
}

/* Logo */

#about2 .col-lg-6:first-child{
    display:flex;
    justify-content:center;
    align-items:center;
}

.logo-box{
    width:100%;
    max-width:380px;   /* biar box nggak terlalu lebar */
    margin:auto;       /* benar-benar di tengah */
    background:#fff;
    border:3px solid #ffc107;
    border-radius:20px;
    padding:25px;
    text-align:center;
}

.logo-img{
    width:100%;
    max-width:320px;   /* sebelumnya 320px */
    height:auto;
    display:block;
    margin:0 auto;
}

/* Judul */

#about2 h6{
    color:#ffc107;
    font-weight:700;
    letter-spacing:2px;
    text-transform:uppercase;
    margin-bottom:10px;
}

#about2 h2{
    position:relative;
    display:inline-block;
    font-size:2.2rem;
    font-weight:700;
    margin-bottom:35px;
}

#about2 h2::after{
    content:"";
    position:absolute;
    left:0;
    bottom:-10px;
    width:70px;
    height:4px;
    background:#ffc107;
    border-radius:20px;
}

/* Card */

.logo-meaning-container{
    display:flex;
    flex-direction:column;
    gap:18px;
}

.logo-meaning-card{
    display:flex;
    align-items:flex-start;
    gap:15px;
    background:#fff;
    padding:18px 20px;
    border-radius:14px;
    border-left:5px solid #ffc107;
    box-shadow:0 10px 25px rgba(0,0,0,.08);
    transition:.3s;
}

.logo-meaning-card:hover{
    transform:translateY(-5px);
    box-shadow:0 18px 35px rgba(0,0,0,.12);
}

.logo-meaning-card .bullet{
    font-size:22px;
    flex-shrink:0;
}

.logo-meaning-card p{
    margin:0;
    line-height:1.7;
    font-size:15px;
    color:#555;
}

.logo-meaning-card strong{
    color:#222;
}
/* ==========================================
   TABLET (991px ke bawah)
========================================== */
@media (max-width:991.98px){

    #about2{
        padding:1px 0 70px;
    }

    #about2 .row{
        gap:2px;
    }

    /* Logo */
    #about2 .col-lg-6:first-child{
        justify-content:center;
    }

    .logo-box{
        max-width:300px;
        margin:0 auto;
        padding:22px;
    }

    .logo-img{
        max-width:290px;
    }

    /* Judul */
    #about2 h6,
    #about2 h2{
        text-align:center;
        display:block;
    }

    #about2 h2{
        font-size:1.7rem;
        margin-bottom:30px;
    }

    #about2 h2::after{
        left:50%;
        width:50%;
        height:2px;
        transform:translateX(-50%);
    }

    /* Card */
    .logo-meaning-container{
        gap:15px;
    }

    .logo-meaning-card{
        padding:16px 18px;
    }

    .logo-meaning-card p{
        font-size:15px;
    }
}


/* ==========================================
   MOBILE (767px ke bawah)
========================================== */
@media (max-width:767.98px){

    #about2{
        padding:1px 0 60px;
    }

    .logo-box{
        max-width:280px;
        padding:18px;
        border-width:2px;
    }

    .logo-img{
        max-width:200px;
    }

    #about2 h6{
        font-size:10px;
        letter-spacing:1px;
        text-align:center;
    }
   #about h2::after{
        width:50%;
        height:2px;
        margin-bottom:4px;
    }
    .logo-meaning-container{
        gap:12px;
    }

    .logo-meaning-card{
        padding:15px;
        gap:12px;
        border-radius:12px;
    }

    .logo-meaning-card .bullet{
        font-size:18px;
    }

    .logo-meaning-card p{
        font-size:14px;
        line-height:1.6;
    }
}


/* ==========================================
   MOBILE KECIL (480px ke bawah)
========================================== */
@media (max-width:480px){

    #about2{
        padding:1px 0 50px;
        margin-top: -100px;
    }

    .logo-box{
        max-width:200px;
        padding:15px;
    }

    .logo-img{
        max-width:200px;
    }
    #about2 h6{
        font-size:10px;
        letter-spacing:1px;
    }
    #about2 h2{
        font-size:1rem;
        margin-top:-10px;
    }
   #about2 h2::after{
        width:60%;
        height:2px;
        margin-bottom:4px;
    }
    .logo-meaning-card{
        padding:14px;
        width:85%;
        margin-left:auto;
        margin-right:auto;
    }

    .logo-meaning-card p{
        font-size:11px;
        text-align: justify;
    }

    .logo-meaning-card .bullet{
        font-size:13px;
    }
    
}
</style>
<!-- About Logo End -->