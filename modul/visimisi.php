<!-- Page Header Start -->
<section id="PageHeader" class="page-header1">
    <div class="banner-overlay"></div>

    <div class="banner-content">
       <h3> Visi & Misi Kampus</h3>
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


<!-- ===== VISI & MISI START ===== -->
<section id="visi-misi" class="visi-misi-section">
    <div class="container">

        <!-- Judul -->
        <div class="text-center mb-5">
            <h6 class="text-primary text-uppercase mb-1">STAI YAPERI</h6>
            <h2 class="section-title">Visi & Misi</h2>
        </div>

        <div class="vm-wrapper">

            <!-- VISI -->
            <div class="vm-box left">
                <div class="vm-number">01</div>

                <div class="vm-content">
                    <h3>Visi</h3>

                    <p>
                        Terwujudnya sekolah tinggi agama Islam yang unggul, handal, dan
                        terdepan dalam pengkajian, pengembangan, pengintegrasian,
                        serta penerapan ilmu agama Islam yang berlandaskan nilai
                        keislaman, kemanusiaan, dan keindahan.
                    </p>
                </div>
            </div>

            <!-- MISI -->
            <div class="vm-box right">
                <div class="vm-number">02</div>

                <div class="vm-content">
                    <h3>Misi</h3>

                    <ul>
                        <li>Melaksanakan pendidikan dan pengajaran integratif dalam ilmu agama Islam.</li>
                        <li>Mengembangkan dan menerapkan ilmu agama Islam berbasis pendidikan, penelitian, dan pengabdian.</li>
                        <li>Menyelenggarakan manajemen modern perguruan tinggi berorientasi kualitas, transparansi, akuntabilitas, dan profesionalitas.</li>
                        <li>Menjalin kerjasama dengan lembaga pemerintah dan non-pemerintah baik dalam maupun luar negeri.</li>
                    </ul>
                </div>
            </div>

        </div>

    </div>
</section>
<!-- ===== VISI & MISI END ===== -->

<style>
/* ===========================
   VISI & MISI
=========================== */

.visi-misi-section{
    padding:90px 0;
    background:#fff;
    height:900px;
}

.section-title{
    display:inline-block;
    position:relative;
    font-size:2rem;
    font-weight:700;
    color:#222;
}

.section-title::after{
    content:"";
    position:absolute;
    left:50%;
    bottom:-7px;
    transform:translateX(-50%);
    width:160px;
    height:3px;
    background:#ffc107;
    border-radius:30px;
}

.vm-wrapper{
    position:relative;
    margin-top:70px;
}

.vm-wrapper::before{
    content:"";
    position:absolute;
    left:50%;
    top:0;
    bottom:0;
    width:4px;
    background:#ffc107;
    transform:translateX(-50%);
    margin-top:2px;
}

.vm-box{
    position:relative;
    width:45%;
    margin-bottom:70px;
}

.vm-box.left{
    margin-right:auto;
    text-align:right;
}

.vm-box.right{
    margin-left:auto;
}

.vm-number{
    position:absolute;
    top:0;
    width:60px;
    height:60px;
    border-radius:50%;
    background:#ffc107;
    color:#fff;
    display:flex;
    align-items:center;
    justify-content:center;
    font-size:20px;
    font-weight:700;
    box-shadow:0 8px 20px rgba(0,0,0,.15);
}

.vm-box.left .vm-number{
    right:-95px;
}

.vm-box.right .vm-number{
    left:-95px;
}

.vm-content{
    background:#fff;
    padding:35px;
    border-radius:18px;
    box-shadow:0 15px 35px rgba(0,0,0,.08);
    transition:.35s;
}

.vm-content:hover{
    transform:translateY(-8px);
    box-shadow:0 20px 40px rgba(0,0,0,.12);
}

.vm-content h3{
    font-size:1.7rem;
    font-weight:700;
    color:#0f172a;
    margin-bottom:20px;
}

.vm-content p{
    margin:0;
    text-align:justify;
    color:#666;
    line-height:1.9;
}

.vm-content ul{
    list-style:none;
    margin:0;
    padding:0;
}

.vm-content li{
    position:relative;
    padding-left:30px;
    margin-bottom:15px;
    color:#666;
    line-height:1.8;
    text-align:justify;
}

.vm-content li:last-child{
    margin-bottom:0;
}

.vm-content li::before{
    content:"✔";
    position:absolute;
    left:0;
    top:1px;
    color:#0f172a;
    font-weight:bold;
}

/* ===========================
   TABLET
=========================== */

@media (max-width:991px){

    .visi-misi-section{
        padding:80px 0;
        height:auto;
    }

    .section-title{
        font-size:1.8rem;
    }

    .vm-wrapper{
        margin-top:50px;
    }

    .vm-wrapper::before{
        left:28px;
    }

    .vm-box{
        width:100%;
        padding-left:85px;
        text-align:left !important;
        margin-bottom:45px;
    }

    .vm-box.left,
    .vm-box.right{
        margin-left:0;
        margin-right:0;
    }

    .vm-number{
        width:55px;
        height:55px;
        font-size:18px;
        left:0 !important;
        right:auto !important;
    }

   

}
/* ===========================
   TABLET (768px)
=========================== */

@media (max-width:768px){

    .visi-misi-section{
        padding:70px 0;
    }

    .vm-wrapper::before{
        left:24px;
    }

    .vm-box{
        width:100%;
        padding-left:70px;
        margin-bottom:35px;
    }

    .vm-number{
        width:48px;
        height:48px;
        font-size:16px;
    }

    .vm-content{
        width:80%;
        padding:22px;
    }

    .vm-content h3{
        font-size:1.3rem;
    }
    .vm-content p,
    .vm-content li{
        font-size:0.8rem !important;
        line-height:1.7;
    }

}
@media (max-width:576px){

    .visi-misi-section{
        padding:60px 0;
    }

    .container{
        padding-left:20px;
        padding-right:20px;
    }

    .vm-box{
        width:100%;
        padding-left:55px;
        padding-right:5px;
        margin-bottom:30px;
    }

    .vm-content{
        padding:18px;
        border-radius:12px;
        width:60%;
    }

    .vm-content h3{
        font-size:1.2rem;
    }
    .vm-content p,
    .vm-content li{
        font-size:0.7rem !important;
        line-height:1.7;
         text-align:left;
    }

}
</style>