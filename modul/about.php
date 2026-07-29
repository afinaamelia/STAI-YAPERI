<!-- Page Header Start -->
<section id="PageHeader" class="page-header1">
    <div class="banner-overlay"></div>

    <div class="banner-content">
       <h3>Tentang Kami</h3>
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



<!-- About Start -->
<!-- =========================
     Sejarah Singkat STAI YAPERI
========================== -->

<section class="about-history">
    <div class="container">

        <div class="history-card">

            <!-- Gambar -->
            <div class="history-image">
                <div class="img-box">
                    <img src="img/logo1.png" alt="Logo STAI YAPERI">
                </div>
            </div>

            <!-- Konten -->
            <div class="history-content">

                <span class="section-subtitle">Tentang Kami</span>

                <h2 class="section-title">
                    Sejarah Singkat
                    <span>STAI YAPERI CIBINONG</span>
                </h2>

                <p>
                    STAI YAPERI Cibinong berdiri pada
                    <strong>22 Maret 2002</strong> sebagai salah satu
                    perguruan tinggi yang berkomitmen dalam pengembangan
                    pendidikan tinggi Islam yang berkualitas.
                </p>

                <p>
                    Perguruan tinggi ini didirikan oleh
                    <strong>Drs. H. Ahmad Nuryani, HS, M.Pd.I (Alm)</strong>
                    dengan harapan dapat melahirkan lulusan yang unggul,
                    berintegritas, dan mampu berkontribusi bagi masyarakat.
                </p>

                <p>
                    Saat ini STAI YAPERI Cibinong menyelenggarakan Program Studi
                    <strong>Pendidikan Agama Islam (S.Pd)</strong> dengan dukungan
                    berbagai fasilitas pembelajaran yang menunjang proses akademik.
                </p>

            </div>

        </div>

    </div>
</section>

<style>
/* =========================
      ABOUT HISTORY
========================= */

.about-history{
    padding:90px 0;
    background:#f8f9fc;
}

.history-card{
    display:flex;
    align-items:center;
    gap:70px;
    background:#fff;
    padding:60px;
    border-radius:28px;
    box-shadow:0 15px 40px rgba(0,0,0,.08);
    position:relative;
    overflow:hidden;
}

/* Background Shape */


.history-image,
.history-content{
    flex:1;
}

.img-box{
    max-width:380px;
    margin:auto;
    background:#fff;
    padding:25px;
    border-radius:24px;
    box-shadow:0 10px 30px rgba(0,0,0,.08);
}

.img-box img{
    width:100%;
    display:block;
}

.section-subtitle{
    display:inline-block;
    color:#ffc107;
    text-transform:uppercase;
    font-size:15px;
    font-weight:700;
    letter-spacing:2px;
    margin-bottom:-10px;
}

.section-title{
    font-size:33px;
    font-weight:700;
    color:#222;
    line-height:1.3;
    margin-bottom:25px;
}

.section-title span{
    display:block;
}

.section-title::after{
    content:"";
    display:block;
    width:380px;
    height:3px;
    background:#ffc107;
    border-radius:20px;
    margin-top:5px;
}

.history-content p{
    font-size:15px;
    color:#666;
    line-height:1.9;
    text-align:justify;
    margin-bottom:18px;
}
/* =========================
      Tablet
========================= */

@media (max-width:992px){

.about-history{
    padding:80px 0;
}

.history-card{
    flex-direction:column;
    text-align:center;
    gap:35px;
    padding:45px 35px;
}

.section-title{
    font-size:30px;
}

.section-title::after{
    margin:8px auto 0;
}

.history-content p{
   text-align:justify;
}

.img-box{
    max-width:300px;
}

}

/* =========================
      Mobile
========================= */

@media (max-width:768px){
.history-content{
    max-width:90%;
    margin:auto;
}
.about-history{
    padding:70px 0;
}

.history-card{
    padding:30px 22px;
    border-radius:22px;
}

.section-subtitle{
    font-size:13px;
}

.section-title{
    font-size:26px;
}

.history-content p{
    font-size:15px;
    line-height:1.8;
       padding-right:20px;
    padding-left:5px;
}
.history-image{
    display:flex;
    justify-content:center;
    align-items:center;
    margin-left:-10px;
}
.img-box{
    max-width:250px;
    padding:18px;
}

}

/* =========================
      Mobile S
========================= */

@media (max-width:480px){
.container{
    padding-left:14px;
    padding-right:14px;
}
.about-history{
    padding:60px 0;
}

.history-card{
    background:transparent;
    box-shadow:none;
    border-radius:0;
    padding:0;
}


.section-subtitle{
    font-size:12px;
    letter-spacing:1px;
    
}

.section-title{
    font-size:20px;
}

.section-title::after{
    width:250px;
    height:2px;
}

.history-content p{
    font-size:13px;
    line-height:1.8;
}

.history-image{
    display:flex;
    justify-content:center;
    align-items:center;
    margin-left:-10px;
}
.img-box{
    max-width:240px;
padding:15px;
}
}
</style>