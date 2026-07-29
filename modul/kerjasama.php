<!-- Page Header Start -->
<section id="PageHeader" class="page-header1">
    <div class="banner-overlay"></div>

    <div class="banner-content">
       <h3>Kerja Sama</h3>
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

<section class="kerjasama-section">
    <div class="container">

        <div class="kerjasama-box">

            <!-- Gambar -->
            <div class="kerjasama-image">
                <img src="img/bg1.png" alt="Kerja Sama STAI YAPERI">
            </div>

            <!-- Konten -->
            <div class="kerjasama-text">

                <span class="sub-title">KERJA SAMA</span>

                <h2>
                    STAI Yaperi Cibinong Menjalin
                    <span>Kemitraan Strategis</span>
                </h2>

                <p>
                    STAI Yaperi Cibinong menjalin kerja sama dengan Pemerintah Daerah Kabupaten Bogor sebagai upaya memperkuat peran perguruan tinggi dalam pembangunan daerah. Kolaborasi ini meliputi bidang pendidikan, penelitian, serta pengabdian kepada masyarakat.
                </p>

                <div class="kerjasama-list">

                    <div class="item">
                        <span>✓</span>
                        Pendidikan
                    </div>

                    <div class="item">
                        <span>✓</span>
                        Penelitian
                    </div>

                    <div class="item">
                        <span>✓</span>
                        Pengabdian kepada Masyarakat
                    </div>

                    <div class="item">
                        <span>✓</span>
                        Pengembangan SDM
                    </div>

                </div>

                <a href="#" class="btn-kerjasama">
                    Selengkapnya →
                </a>

            </div>

        </div>

    </div>
</section>

<style>

/* ==========================
      KERJASAMA
========================== */

.kerjasama-section{
    padding:90px 0;
    background:#f8f9fc;
}

.kerjasama-box{
    display:flex;
    align-items:center;
    gap:70px;
}

.kerjasama-image{
    flex:1;
    display:flex;
    justify-content:center;
}

.kerjasama-image img{
    width:100%;
    max-width:380px;
    background:#fff;
    padding:20px;
    border-radius:24px;
    box-shadow:0 15px 35px rgba(0,0,0,.12);
    border:1px solid rgba(0,0,0,.05);
}

.kerjasama-text{
    flex:2;
}

.sub-title{
    display:inline-block;
    color:#ffc107;
    font-size:14px;
    font-weight:700;
    letter-spacing:2px;
    margin-bottom:12px;
}

.kerjasama-text h2{
    font-size:30px;
    line-height:1.2;
    font-weight:700;
    margin-bottom:18px;
    color:#222;
}

.kerjasama-text h2 span{
    display:block;
}

.kerjasama-text h2::after{
    content:"";
    display:block;
    width:300px;
    height:2px;
    background:#ffc107;
    border-radius:20px;
    margin-top:10px;
}

.kerjasama-text p{
    font-size:15px;
    line-height:1.9;
    color:#666;
    text-align:justify;
    margin-bottom:28px;
}

/* LIST */

.kerjasama-list{
    display:grid;
    grid-template-columns:repeat(2,1fr);
    gap:15px;
    margin-bottom:35px;
}

.item{
    display:flex;
    align-items:center;
    gap:12px;
    background:#fff;
    padding:14px 18px;
    border-radius:12px;
    box-shadow:0 6px 18px rgba(0,0,0,.06);
    font-weight:600;
     font-size:15px;
}

.item span{
    width:30px;
    height:30px;
    background:#ffc107;
    border-radius:50%;
    display:flex;
    align-items:center;
    justify-content:center;
    color:#fff;
   
}

.btn-kerjasama{
    display:inline-block;
    background:#ffc107;
    color:#222;
    padding:14px 30px;
    border-radius:50px;
    text-decoration:none;
    font-weight:600;
    transition:.3s;
}

.btn-kerjasama:hover{
    background:#222;
    color:#fff;
}

/* ==========================
      Tablet
========================== */

@media(max-width:992px){

.kerjasama-section{
    padding:70px 0;
}

.kerjasama-box{
    flex-direction:column;
    gap:40px;
}

.kerjasama-image{
    flex:1;
    display:flex;
    justify-content:center;
}

.kerjasama-image img{
    width:100%;
    max-width:380px;
    background:#fff;
    padding:20px;
    border-radius:24px;
    box-shadow:0 15px 35px rgba(0,0,0,.12);
    border:1px solid rgba(0,0,0,.05);
}

.kerjasama-text{
    width:100%;
}

.kerjasama-text h2{
    font-size:30px;
}

.kerjasama-text h2::after{
    width:140px;
}

.kerjasama-list{
    grid-template-columns:1fr 1fr;
}

}

/* ==========================
      Mobile
========================== */

@media(max-width:768px){

.kerjasama-box{
    width:92%;
    padding:0 15px;
    box-sizing:border-box;
}

.kerjasama-section{
    padding:60px 0;
    
}

.kerjasama-image img{
    max-width:240px;
}

.kerjasama-text h2{
    font-size:15px;
}

.kerjasama-text p{
    font-size:15px;
}

.kerjasama-list{
    grid-template-columns:1fr;
}

.item{
    padding:13px 15px;
}

.btn-kerjasama{
    width:90%;
    text-align:center;
}

}

/* ==========================
      Mobile S
========================== */

@media(max-width:480px){

.container{
    padding-left:18px;
    padding-right:18px;
}

.kerjasama-section{
    padding:50px 0;
}

.kerjasama-image img{
    max-width:190px;
}

.sub-title{
    font-size:10px;
}

.kerjasama-text h2{
    font-size:17px;
    margin-top:-8px;
}

.kerjasama-text h2::after{
    margin-top:6px;
    width:250px;
    height:2px;
}

.kerjasama-text p{
    font-size:13px;
    line-height:1.7;
}

.item{
    font-size:12px;
}

.btn-kerjasama{
    padding:12px;
    font-size:13px;
}

}

</style>