<!-- Page Header Start -->
<section id="PageHeader" class="page-header1">
    <div class="banner-overlay"></div>

    <div class="banner-content">
       <h3>Organisasi Kampus</h3>
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

    <!-- Work Process -->
   <!-- DEMA -->
<section id="dema" class="dema-section">
    <div class="container">

        <div class="row align-items-center g-5">

            <!-- Text -->
            <div class="col-lg-7 order-2 order-lg-1">

                <div class="dema-content">

                    <span class="dema-subtitle">
                        Organisasi DEMA
                    </span>

                    <h2 class="dema-title">
                        Dewan Eksekutif Mahasiswa
                    </h2>

                    <p>
                        Dewan Eksekutif Mahasiswa (DEMA) merupakan salah satu organisasi kemahasiswaan internal yang menjadi Lembaga Eksekutif di Perguruan Tinggi atau Universitas.
                    </p>

                    <p>
                        Adapun tugas dan fungsinya bertanggung jawab dan bertujuan mengakomodir terhadap semua kegiatan kemahasiswaan di lingkup STAI YAPERI CIBINONG. Sesuai dengan namanya, Dewan Eksekutif Mahasiswa adalah sebagai organisasi kemahasiswaan tinggi yang menaungi seluruh organisasi intra kampus.
                    </p>

                    <div class="contact-box">

                        <div class="contact-item">
                            <div class="contact-icon">
                                <i class="fa fa-envelope-open"></i>
                            </div>

                            <div>
                                <small>Email</small>
                                <h6>demastaiyaperi@gmail.com</h6>
                            </div>
                        </div>

                        <div class="contact-item">
                            <div class="contact-icon">
                                <i class="fab fa-instagram"></i>
                            </div>

                            <div>
                                <small>Instagram</small>
                                <h6>demastaiyaperi</h6>
                            </div>
                        </div>

                    </div>

                </div>

            </div>

            <!-- Image -->
            <div class="col-lg-5 order-1 order-lg-2">

                <div class="dema-image">

                    <div class="img-card">
                        <img src="img/dema.png" class="img-fluid logo-dema" alt="">
                    </div>

                </div>

            </div>

        </div>

   <!-- Struktur -->
    <?php
  $sqloutput=$koneksi->query('SELECT*FROM tb_dema');
  $tampil=$sqloutput->fetch_array();
  ?>

 <div class="struktur-dema">
<img src="img/<?=$tampil['gambar']?>" class="img-fluid" alt="Struktur DEMA">
 </div>

</div>
</section>

<!-- ./Work Process -->


<style>
  /*========================
        DEMA
=========================*/

.dema-section{
    padding:90px 0;
    background:#f8fbff;
}

.dema-subtitle{
    display:inline-block;
    background: rgba(246, 201, 67, 0.1) ;
    color:#ffc107;
    padding:8px 18px;
    border-radius:50px;
    font-weight:600;
    margin-bottom:15px;
}
.dema-title{
    position: relative;
    display:block;
    font-size: 38px;
    font-weight: 700;
    color: #222;
    margin-bottom: 30px;
}

.dema-title::after{
    content: "";
    position: absolute;
    left: 0;
    bottom: -10px;
    width: 78%;          /* panjang garis */
    height: 2px;          /* tebal garis */
    background: #ffc107;
    border-radius: 50px;
}
.dema-content p{
    width:98%;
    color:#666;
    line-height:1.7;
    text-align:justify;
}

.contact-box{
    display:flex;
    gap:25px;
    margin-top:35px;
    flex-wrap:wrap;
}

.contact-item{
    display:flex;
    align-items:center;
    gap:15px;
    background:#fff;
    padding:18px 22px;
    border-radius:15px;
    box-shadow:0 10px 25px rgba(0,0,0,.08);
    transition:.3s;
}

.contact-item:hover{
    transform:translateY(-5px);
}

.contact-icon{
    width:60px;
    height:60px;
    border-radius:50%;
    background:#ffc107;
    display:flex;
    justify-content:center;
    align-items:center;
    color:#fff;
    font-size:22px;
}

.contact-item small{
    color:#888;
    display:block;
}

.contact-item h6{
    margin:0;
    font-weight:600;
}

.dema-image{
    display:flex;
    justify-content:center;
}

.img-card{
    background:#fff;
    border-radius:25px;
    padding:25px;
    box-shadow:0 20px 40px rgba(0,0,0,.08);
    margin-left: -25%;
}

.logo-dema{
    max-width:360px;
}

.struktur-dema{
    max-width:65%;
    margin:auto;
    background:#fff;
    border-radius:18px;
    padding:18px;
    box-shadow:0 15px 40px rgba(0,0,0,.08);
    margin-top:100px;
}

.struktur-dema img{
    width:100%;
    display:block;
    border-radius:12px;
    cursor:pointer;
    transition:.35s;
}
/*=========================================
        Tablet (768px - 991px)
=========================================*/
@media (min-width:768px) and (max-width:991px){
    .dema-section{
        padding:60px 0;
    }
    .dema-content{
        margin-left:0;
        text-align:center;
    }
    .dema-subtitle{
        font-size:13px;
        padding:8px 16px;
        margin-bottom:17px;
    }
    .dema-title{
        font-size:23px;
        margin-bottom:30px;
        position:relative;
    }
    .dema-title::after{
        content:"";
        position:absolute;
        left:50%;
        bottom:-10px;
        transform:translateX(-50%);
        width:43%;      /* sesuaikan */
        max-width:100%;
        height:2px;
        background:#ffc107;
        border-radius:50px;
    }
    .dema-content p{
        width:82%;
        margin:0 auto 20px;
        font-size:15px;
        line-height:1.7;
        text-align:justify;
    }
  .contact-box{
    display:flex;
    gap:25px;
    margin-top:35px;
    flex-wrap:wrap;
    margin-left:68px;
}
.contact-item{
    display:flex;
    align-items:center;
    gap:15px;
    background:#fff;
    padding:18px 22px;
    border-radius:15px;
    box-shadow:0 10px 25px rgba(0,0,0,.08);
    transition:.3s;
}
.contact-item:hover{
    transform:translateY(-5px);
}
.contact-icon{
    width:60px;
    height:60px;
    border-radius:50%;
    background:#ffc107;
    display:flex;
    justify-content:center;
    align-items:left;
    color:#fff;
    font-size:22px;
}
  .contact-item small{
    color:#888;
    display:block;
    text-align:left;
}
.contact-item h6{
    margin:0;
    font-weight:600;
}
    .img-card{
        margin:0 auto 30px;
        padding:5px;
        margin-bottom:-16px;
    }
    .logo-dema{
        max-width:350px;
    }
    .struktur-dema{
        max-width:90%;
        margin:50px auto 0;
        padding:15px;
        border-radius:15px;
    }
    .struktur-dema img{
        width:100%;
        border-radius:10px;
    }
}
/*=========================================
        Mobile (≤576px)
=========================================*/

@media (max-width:576px){
.dema-section{
    padding:50px 0;
}
.dema-content{
    margin-left:-12px;
    text-align:center;
}
.dema-subtitle{
    font-size:12px;
    padding:7px 14px;
}
.dema-title{
    display:block;
    width:100%;
    font-size:17px;
    text-align:center;
    margin-bottom:25px;
    position:relative;
}
.dema-title::after{
    content:"";
    position:absolute;
    left:50%;
    transform:translateX(-50%);
    bottom:-8px;
    width:250px;      /* sesuaikan panjang garis */
    max-width:70%;
    height:2px;
    background:#ffc107;
    border-radius:50px;
}
.dema-content p{
    width:70%;
    margin:0 auto 15px;
    padding:0;
    font-size:12px;
    line-height:1.8;
    text-align:justify;
}
.contact-box{
    flex-direction:column;
    align-items:center;
    gap:12px;
    margin-bottom:-50px;
}
.contact-item{
    width:70%;
    padding:10px;
}
.contact-icon{
    width:48px;
    height:48px;
    font-size:18px;
}
.contact-item small{
    font-size:13px;
    Text-align:left;
}
.contact-item h6{
    font-size:14px;
}
.img-card{
    margin:0 auto;
    padding:2px;
        margin-bottom:-45px;
}
.logo-dema{
    max-width:230px;
}
.struktur-dema{
    margin-left:15px;
    max-width:80%;
    padding:10px;
    border-radius:12px;
}
.struktur-dema img{
    border-radius:8px;
}
}
/*=========================================
        Mobile Kecil (≤350px)
=========================================*/
@media (max-width:350px){

.dema-section{
    padding:50px 0;
}
.dema-content{
    margin-left:0;
    text-align:center;
}
.dema-subtitle{
    font-size:12px;
    padding:7px 14px;
}
.dema-title{
    display:block;
    width:100%;
    font-size:17px;
    text-align:center;
    margin-bottom:25px;
    position:relative;
}
.dema-title::after{
    content:"";
    position:absolute;
    left:50%;
    transform:translateX(-50%);
    bottom:-8px;
    width:250px;      /* sesuaikan panjang garis */
    max-width:70%;
    height:2px;
    background:#ffc107;
    border-radius:50px;
}
.dema-content p{
    width:70%;
    margin:0 auto 15px;
    padding:0;
    font-size:12px;
    line-height:1.8;
    text-align:justify;
}
.contact-box{
    flex-direction:column;
    align-items:center;
    gap:12px;
    margin-bottom:-50px;
}
.contact-item{
    width:70%;
    padding:10px;
}
.contact-icon{
    width:48px;
    height:48px;
    font-size:18px;
}
.contact-item small{
    font-size:13px;
    Text-align:left;
}
.contact-item h6{
    font-size:14px;
}
.img-card{
    margin:0 auto;
    padding:2px;
    margin-left:67px;
    margin-bottom:-56px;
}
.logo-dema{
    max-width:220px;
}
.struktur-dema{
    margin-left:10px;
    max-width:80%;
    padding:10px;
    border-radius:12px;
}
.struktur-dema img{
    border-radius:8px;
}
}
/*=========================================
        Mobile Kecil (≤400px)
=========================================*/
@media (max-width:400px){

.dema-section{
    padding:50px 0;
}
.dema-content{
    margin-left:-12px;
    text-align:center;
}
.dema-subtitle{
    font-size:12px;
    padding:7px 14px;
}
.dema-title{
    display:block;
    width:100%;
    font-size:17px;
    text-align:center;
    margin-bottom:25px;
    position:relative;
}
.dema-title::after{
    content:"";
    position:absolute;
    left:50%;
    transform:translateX(-50%);
    bottom:-8px;
    width:250px;      /* sesuaikan panjang garis */
    max-width:70%;
    height:2px;
    background:#ffc107;
    border-radius:50px;
}
.dema-content p{
    width:70%;
    margin:0 auto 15px;
    padding:0;
    font-size:12px;
    line-height:1.8;
    text-align:justify;
}
.contact-box{
    flex-direction:column;
    align-items:center;
    gap:12px;
    margin-bottom:-50px;
}
.contact-item{
    width:70%;
    padding:10px;
}
.contact-icon{
    width:48px;
    height:48px;
    font-size:18px;
}
.contact-item small{
    font-size:13px;
    Text-align:left;
}
.contact-item h6{
    font-size:14px;
}
.img-card{
    margin:0 auto;
    padding:2px;
        margin-bottom:-45px;
}
.logo-dema{
    max-width:230px;
}
.struktur-dema{
    margin-left:15px;
    max-width:80%;
    padding:10px;
    border-radius:12px;
}
.struktur-dema img{
    border-radius:8px;
}
}
</style>