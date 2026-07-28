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

<!-- About Start -->
 <section class="kerjasama">
    <div class="container">
        <div class="kerjasama-wrapper">

            <!-- Gambar -->
            <div class="kerjasama-img">
                <img src="img/bg1.png" alt="Kerja Sama STAI YAPERI">
            </div>

            <!-- Konten -->
            <div class="kerjasama-content">
                <h6>KERJA SAMA</h6>

                <h2>
                    STAI YAPERI Cibinong Menjalin Kemitraan Strategis
                </h2>

                <p>
                    STAI Yaperi Cibinong menjalin kerja sama dengan Pemerintah Daerah Kabupaten Bogor sebagai upaya memperkuat peran perguruan tinggi dalam pembangunan daerah. Kolaborasi ini meliputi bidang pendidikan, penelitian, serta pengabdian kepada masyarakat.
                </p>

                <ul>
                    <li>✔ Pendidikan</li>
                    <li>✔ Penelitian</li>
                    <li>✔ Pengabdian kepada Masyarakat</li>
                    <li>✔ Pengembangan SDM</li>
                </ul>

                <a href="#" class="btn-kerjasama">Selengkapnya</a>
            </div>

        </div>
    </div>
</section>
<style>
  .kerjasama{
    padding:80px 0;
    background:#fff;
}

.kerjasama-wrapper{
    display:flex;
    align-items:center;
    gap:60px;
}

.kerjasama-img{
    flex: 0 0 40%;
    text-align: center;
}

.kerjasama-img img{
    width: 300px;
    max-width: 420px;   /* Ubah sesuai selera */
    height: auto;
    border-radius: 20px;
    box-shadow: 0 10px 25px rgba(255, 255, 255, 0.12);
}
.kerjasama-content{
    flex:1;
}

.kerjasama-content h6{
    color:#ffc107;
    text-transform:uppercase;
    letter-spacing:2px;
    margin-bottom:10px;
}

.kerjasama-content h2{
    font-size:35px;
    font-weight:700;
    margin-bottom:20px;
}

.kerjasama-content p{
    max-width:550px;
    text-align:justify;
    line-height:1.8;
    color:#555;
}
.kerjasama-content p{
    max-width:550px;
    text-align:justify;
    text-justify:inter-word;
    line-height:1.8;
    color:#555;
    margin-bottom:20px;
}
.kerjasama-content ul{
    list-style:none;
    padding:0;
    margin:25px 0;
}

.kerjasama-content li{
    margin-bottom:12px;
    font-size:15px;
}

.btn-kerjasama{
    display:inline-block;
    padding:12px 28px;
    background:#ffc107;
    color:#fff;
    text-decoration:none;
    border-radius:50px;
    transition:.3s;
}

.btn-kerjasama:hover{
    Color:#000;
}
/* =========================
   Laptop (≤ 1200px)
========================= */
@media (max-width:1200px){

    .kerjasama-wrapper{
        gap:40px;
    }

    .kerjasama-img img{
        width:260px;
    }

    .kerjasama-content h2{
        font-size:30px;
    }

    .kerjasama-content p{
        max-width:100%;
    }
}

/* =========================
   Tablet (≤ 992px)
========================= */
@media (max-width:992px){

    .kerjasama{
        padding:60px 0;
    }

    .kerjasama-wrapper{
        flex-direction:column;
        text-align:center;
        gap:35px;
    }

    .kerjasama-img{
        flex:unset;
    }

    .kerjasama-img img{
        width:250px;
    }

    .kerjasama-content{
        width:100%;
    }

    .kerjasama-content h2{
        font-size:28px;
    }

.kerjasama-content p{
    max-width:550px;
    text-align:justify;
    text-justify:inter-word;
    line-height:1.8;
    color:#555;
    margin-bottom:20px;
}
.kerjasama-content ul{
    width:100%;
    padding-left:0;
    margin:20px 0;
}

.kerjasama-content li{
    text-align:left;
}
.kerjasama-content{
    text-align:left;
}
}

/* =========================
   Mobile (≤ 768px)
========================= */
@media (max-width:768px){

    .kerjasama{
        padding:50px 20px;
    }

    .kerjasama-wrapper{
        gap:25px;
    }

    .kerjasama-img img{
        width:220px;
    }

    .kerjasama-content h6{
        font-size:14px;
    }

    .kerjasama-content h2{
        font-size:24px;
        line-height:1.4;
    }

    .kerjasama-content p{
        font-size:15px;
        line-height:1.8;
    }

    .kerjasama-content li{
        font-size:15px;
    }

    .btn-kerjasama{
        padding:10px 22px;
        font-size:15px;
    }
}

/* =========================
   Mobile Kecil (≤ 480px)
========================= */
@media (max-width:480px){

    .kerjasama{
        padding:40px 15px;
    }

    .kerjasama-img img{
        width:180px;
    }

    .kerjasama-content h2{
        font-size:21px;
    }

    .kerjasama-content p{
        font-size:14px;
    }

    .kerjasama-content li{
        font-size:14px;
    }

.btn-kerjasama{
    display:inline-flex;
    align-items:center;
    justify-content:center;
    padding:10px 22px;
}
}
</style>
<!-- About End -->