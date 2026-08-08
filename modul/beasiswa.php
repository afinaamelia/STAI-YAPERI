 <!-- Page Header Start -->
<section id="PageHeader" class="page-header1">
    <div class="banner-overlay"></div>

    <div class="banner-content">
       <h3>Beasiswa Kampus</h3>
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
<!-- Beasiswa Start -->
<section class="beasiswa-section">
  <div class="container">

    <div class="beasiswa-header">
      <span class="beasiswa-label">PILIHAN BEASISWA</span>
      <h2>Program Beasiswa</h2>
      <p>
        Berbagai pilihan beasiswa untuk mendukung mahasiswa dalam meraih
        pendidikan yang lebih baik.
      </p>
    </div>

    <div class="beasiswa-grid">

      <!-- 01 -->
      <div class="beasiswa-card">
        <span class="beasiswa-number">01</span>

        <div class="beasiswa-icon">
          <img src="img/medali.png" alt="Beasiswa Prestasi">
        </div>

        <h4>Beasiswa Prestasi</h4>

        <div class="beasiswa-line"></div>

        <p>
          Kesempatan bagi mahasiswa berprestasi untuk mendapatkan dukungan
          pendidikan selama masa perkuliahan.
        </p>

       <div class="card-bottom">
    <i class="fas fa-medal"></i>
</div>
      </div>


      <!-- 02 -->
      <div class="beasiswa-card">
        <span class="beasiswa-number">02</span>

        <div class="beasiswa-icon">
          <img src="img/kip.png" alt="KIP Kuliah">
        </div>

        <h4>KIP Kuliah</h4>

        <div class="beasiswa-line"></div>

        <p>
          Program bantuan pendidikan bagi mahasiswa yang memenuhi
          persyaratan KIP Kuliah.
        </p>

        <div class="card-bottom">
    <i class="fas fa-book-open"></i>
</div>
      </div>


      <!-- 03 -->
      <div class="beasiswa-card">
        <span class="beasiswa-number">03</span>

        <div class="beasiswa-icon">
          <img src="img/rmh.png" alt="Beasiswa Yayasan">
        </div>

        <h4>Beasiswa Yayasan</h4>

        <div class="beasiswa-line"></div>

        <p>
          Dukungan pendidikan dari yayasan untuk membantu mahasiswa
          menyelesaikan perkuliahan.
        </p>

        <div class="card-bottom">
    <i class="fas fa-school"></i>
</div>
      </div>

    </div>

  </div>
</section>
<!-- Beasiswa End -->
<style>

/* =================================
   BEASISWA
================================= */
.beasiswa-section{
    padding:70px 0 80px;
    background:#f7f7f5;
}
/* HEADER */
.beasiswa-header{
    text-align:center;
    max-width:700px;
    margin:0 auto 45px;
}
.beasiswa-label{
    position:relative;
    display:inline-block;
    padding:0 45px;
    margin-bottom:12px;
    font-size:13px;
    font-weight:700;
    letter-spacing:1.5px;
    color:#ffc107;
}
.beasiswa-label::before,
.beasiswa-label::after{
    content:"";
    position:absolute;
    top:50%;
    width:32px;
    height:3px;
    background:#ffc107;
    border-radius:10px;
}
.beasiswa-label::before{
    left:0;
}
.beasiswa-label::after{
    right:0;
}
.beasiswa-header h2{
    margin:0 0 12px;
    font-size:34px;
    font-weight:800;
    color:#0f172a;
}
.beasiswa-header p{
    margin:0 auto;
    max-width:600px;
    font-size:14px;
    line-height:1.8;
    color:#777;
}
/* =================================
   GRID
================================= */
.beasiswa-grid{
    display:grid;
    grid-template-columns:repeat(3, 1fr);
    gap:28px;
    max-width:1200px;
    margin:0 auto;
}
/* =================================
   CARD
================================= */
.beasiswa-card{
    position:relative;
    min-height:400px;
    padding:35px 30px 0;
    background:#fff;
    border:1px solid #eeeeee;
    border-radius:20px;
    overflow:hidden;
    text-align:center;
    box-shadow:0 5px 20px rgba(0,0,0,.04);
    transition:all .3s ease;
}
/* NOMOR */
.beasiswa-number{
    position:absolute;
    top:20px;
    right:22px;
    font-size:42px;
    line-height:1;
    font-weight:800;
    color:#eeeeeb;
}
/* ICON */
.beasiswa-icon{
    width:110px;
    height:110px;
    margin:20px auto 22px;
    display:flex;
    align-items:center;
    justify-content:center;
    border-radius:50%;
    background:#f3f0e5;
}
.beasiswa-icon img{
    width:68px;
    height:68px;
    object-fit:contain;
}
/* JUDUL */
.beasiswa-card h4{
    margin:0;
    font-size:20px;
    font-weight:700;
    color:#222;
}
/* GARIS */
.beasiswa-line{
    width:55px;
    height:4px;
    margin:14px auto 20px;
    background:#ffc107;
    border-radius:10px;
}
/* DESKRIPSI */
.beasiswa-card p{
    max-width:300px;
    margin:0 auto;
    font-size:13px;
    line-height:1.8;
    color:#777;
}
/* =================================
   BAGIAN BAWAH CARD
================================= */
.card-bottom{
    position:absolute;
    left:0;
    right:0;
    bottom:0;
    height:70px;
    background:#ffc107;
    border-radius:50% 50% 0 0 / 35% 35% 0 0;
    display:flex;
    align-items:center;
    justify-content:center;
}
.card-bottom i{
    font-size:32px;
    color:#fff;
}
.card-bottom span{
    font-size:25px;
    color:#cba442;
}
/* =========================================
   RESPONSIVE 991px
========================================= */
@media (max-width: 991px) and (min-width: 577px){
    .beasiswa-section{
        padding:60px 25px 70px;
    }
    .beasiswa-grid{
        grid-template-columns:repeat(2, 1fr);
        gap:25px;
        max-width:850px;
    }
    .beasiswa-card{
        min-height:350px;
        padding:30px 25px 0;
    }
    /* Card ke-3 di tengah */
    .beasiswa-card:last-child{
        grid-column:1 / -1;
        width:calc(50% - 12.5px);
        justify-self:center;
    }
    .beasiswa-icon{
        width:100px;
        height:100px;
        margin:18px auto 20px;
    }
    .beasiswa-icon img{
        width:62px;
        height:62px;
    }
    .beasiswa-card h4{
        font-size:19px;
    }
    .beasiswa-card p{
        font-size:13px;
        line-height:1.7;
    }
    .beasiswa-number{
        font-size:38px;
        top:18px;
        right:18px;
    }
}
/* =========================================
   RESPONSIVE 576px
========================================= */
@media (max-width: 576px){
  .beasiswa-section{
        width:100%;
        padding-left:0 !important;
        padding-right:0 !important;
    }
    .beasiswa-section .container{
        width:100% !important;
        max-width:100% !important;
        padding-left:0 !important;
        padding-right:0 !important;
        margin-left:0 !important;
        margin-right:0 !important;
    }
    .beasiswa-header{
        width:100%;
        padding-left:15px;
        padding-right:15px;
        box-sizing:border-box;
    }
    /* JADI 1 KOLOM */
    .beasiswa-grid{
        display:grid;
        grid-template-columns:1fr !important;
        gap:10px;
        width:100%;
        max-width:430px;
        margin:0 auto;
    }
    .beasiswa-card{
        min-height:380px;
        width:100%;
        box-sizing:border-box;
        transform:scale(.8);
        margin:-15px 0;
    }
    .beasiswa-header h2{
        font-size:24px;
    }
    .beasiswa-header p{
        width:80%;
        font-size:10px;
        line-height:1.7;
        margin-bottom:-34px;
    }
    .beasiswa-label{
        font-size:11px;
        letter-spacing:1.2px;
        padding:0 34px;
    }
    .beasiswa-label::before,
    .beasiswa-label::after{
        width:24px;
        height:2px;
    }
    .beasiswa-icon{
        width:90px;
        height:90px;
        margin:18px auto 18px;
    }
    .beasiswa-icon img{
        width:56px;
        height:56px;
    }
    .beasiswa-card h4{
        font-size:19px;
    }
    .beasiswa-card p{
        max-width:320px;
        font-size:12px;
        line-height:1.7;
    }
    .beasiswa-number{
        font-size:35px;
        top:15px;
        right:18px;
    }
}
/* =========================================
   RESPONSIVE 400px
========================================= */
@media (max-width: 400px){
 .beasiswa-section{
        width:100%;
        padding-left:0 !important;
        padding-right:0 !important;
    }
    .beasiswa-section .container{
        width:100% !important;
        max-width:100% !important;
        padding-left:0 !important;
        padding-right:0 !important;
        margin-left:0 !important;
        margin-right:0 !important;
    }
    .beasiswa-header{
        width:100%;
        padding-left:15px;
        padding-right:15px;
        box-sizing:border-box;
    }
    .beasiswa-card{
        min-height:340px;
        width:100%;
        box-sizing:border-box;
        transform:scale(.80);
        margin:-25px 0;
    }
    .beasiswa-label{
        font-size:10px;
        padding:0 30px;
        letter-spacing:1px;
    }
    .beasiswa-label::before,
    .beasiswa-label::after{
        width:21px;
    }
    .beasiswa-header h2{
        font-size:20px;
        margin-bottom:10px;
    }
    .beasiswa-header p{
        width:87%;
        font-size:9px;
        padding:0 5px;
        margin-bottom:-5%;
    }
     .beasiswa-number{
        font-size:31px;
        top:14px;
        right:15px;
    }
    .beasiswa-icon{
        width:82px;
        height:82px;
        margin:17px auto 16px;
    }
    .beasiswa-icon img{
        width:51px;
        height:51px;
    }
    .beasiswa-card h4{
        font-size:18px;
    }
    .beasiswa-line{
        width:45px;
        height:3px;
        margin:11px auto 15px;
    }
    .beasiswa-card p{
        font-size:11.5px;
        line-height:1.7;
        max-width:300px;
    }
    .card-bottom{
        height:55px;
    }
    .card-bottom i{
        font-size:25px;
    }
}
/* =========================================
   RESPONSIVE 350px
========================================= */
@media (max-width: 350px){
    .beasiswa-section{
        width:100%;
        padding-left:0 !important;
        padding-right:0 !important;
    }
    .beasiswa-section .container{
        width:100% !important;
        max-width:100% !important;
        padding-left:0 !important;
        padding-right:0 !important;
        margin-left:0 !important;
        margin-right:0 !important;
    }
    .beasiswa-header{
        width:100%;
        padding-left:15px;
        padding-right:15px;
        box-sizing:border-box;
    }
    .beasiswa-card{
        min-height:250px;
        padding:20px 15px 0;
        border-radius:14px;
        transform:scale(.85);
        margin:-10px 0;
    }
    .beasiswa-label{
        font-size:8px;
        padding:0 27px;
        letter-spacing:.8px;
    }
    .beasiswa-label::before,
    .beasiswa-label::after{
        width:19px;
        height:2px;
    }
    .beasiswa-header h2{
        font-size:20px;
    }
    .beasiswa-header p{
        width:90%;
        font-size:9px;
        line-height:1.6;
        padding:0;
    }
   .beasiswa-number{
        font-size:25px;
        top:11px;
        right:11px;
    }
    /* Icon */
    .beasiswa-icon{
        width:65px;
        height:65px;
        margin:12px auto 12px;
    }
    .beasiswa-icon img{
        width:42px;
        height:42px;
    }
    /* Judul */
    .beasiswa-card h4{
        font-size:15px;
        margin-bottom:0;
    }
    /* Garis */
    .beasiswa-line{
        width:38px;
        height:2px;
        margin:8px auto 10px;
    }
    /* Deskripsi */
    .beasiswa-card p{
        max-width:250px;
        font-size:10px;
        line-height:1.5;
    }
    /* Bagian bawah */
    .card-bottom{
        height:42px;
    }
    .card-bottom i{
        font-size:20px;
    }     
}
</style>