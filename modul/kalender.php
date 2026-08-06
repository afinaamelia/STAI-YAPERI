 <!-- Page Header Start -->
<section id="PageHeader" class="page-header1">
    <div class="banner-overlay"></div>

    <div class="banner-content">
       <h3>Kalender Akademik</h3>
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

    <?php
  $sqloutput=$koneksi->query('SELECT*FROM tb_akademik');
  $tampil=$sqloutput->fetch_array();

?>

<section class="academic-section">
    <div class="container">

        <div class="academic-header">
            <span class="academic-badge">Kalender Akademik</span>
            <h2>Tahun Akademik 2026/2027</h2>
            <p>
                Klik gambar untuk melihat kalender akademik dalam ukuran penuh.
            </p>
        </div>

        <div class="academic-poster">
            <img src="admin/gbr/<?=$tampil['gambar']?>"
                 id="gambarKecil"
                 class="poster-img"
                 alt="Kalender Akademik">
        </div>

    </div>
</section>

<!-- Overlay -->
<div id="overlay" class="image-overlay">
    <span class="close-btn">&times;</span>

    <img src="admin/gbr/<?=$tampil['gambar']?>"
         alt="Kalender Akademik">
</div>

    <style>
/* ==========================
   Kalender Akademik
========================== */
.academic-section{
    padding:80px 0;
    background:#f5f7fb;
}
.academic-header{
    text-align:center;
    margin-bottom:40px;
}
.academic-badge{
    display:inline-block;
    background:#ffc107;
    color:#fff;
    padding:8px 20px;
    border-radius:30px;
    font-size:15px;
    font-weight:600;
    margin-bottom:15px;
}
.academic-header h2{
    position:relative;
    display:block;
    font-size:25px;
    font-weight:700;
    margin-bottom:30px;
    color:#1f2937;
}
.academic-header h2::after{
    content:"";
    position:absolute;
    left:50%;
    transform:translateX(-50%);
    bottom:-10px;
    width:30%;          /* panjang garis */
    height:2px;
    background:#ffc107;   /* kuning */
    border-radius:50px;
}
.academic-header p{
    font-size:15px;
    color:#6b7280;
    max-width:600px;
    margin:auto;
    line-height:1.2;
}
.academic-poster{
    max-width:40%;
    margin:auto;
    background:#fff;
    border-radius:18px;
    padding:18px;
    box-shadow:0 15px 40px rgba(0,0,0,.08);
}
.poster-img{
    width:100%;
    display:block;
    border-radius:12px;
    cursor:pointer;
    transition:.35s;
}
.poster-img:hover{
    transform:scale(1.02);
    box-shadow:0 10px 30px rgba(0,0,0,.18);
}
/* Overlay */
.image-overlay{
    position:fixed;
    inset:0;
    background:rgba(0,0,0,.9);
    display:none;
    justify-content:center;
    align-items:center;
    z-index:9999;
}
.image-overlay img{
    width:auto;
    max-width:95%;
    max-height:95%;
    border-radius:10px;
    animation:zoom .3s;
}
.close-btn{
    position:absolute;
    top:20px;
    right:35px;
    color:#fff;
    font-size:45px;
    cursor:pointer;
}
@keyframes zoom{
    from{
        transform:scale(.85);
        opacity:0;
    }
    to{
        transform:scale(1);
        opacity:1;
    }
}
/* ===========================
   TABLET (768px - 991px)
=========================== */
@media (max-width:991px){
    .academic-section{
        padding:60px 0;
    }
    .academic-badge{
        font-size:12px;
        padding:8px 18px;
    }
    .academic-header h2{
        font-size:20px;
        margin-bottom:25px;
    }
    .academic-header h2::after{
        width:38%;
    }
    .academic-header p{
        max-width:70%;
        font-size:14px;
        line-height:1.7;
    }
    .academic-poster{
        max-width:60%;
        padding:15px;
    }
    .close-btn{
        font-size:40px;
        right:25px;
    }
}
/* ===========================
   MOBILE (≤576px)
=========================== */
@media (max-width:576px){
     .academic-section .container{
        padding-left:1px;
        padding-right:15px;
    }

    .academic-section{
        padding:30px 0;
    }
    .academic-badge{
        font-size:11px;
        padding:5px 12px;
    }
    .academic-header h2{
        font-size:18px;
    }
    .academic-header h2::after{
        width:59%;
        height:2px;
    }
    .academic-header p{
        width:64%;
        font-size:12px;
        line-height:1.5;
    }
    .academic-poster{
        max-width:70%;
        padding:8px;
        border-radius:10px;
    }
    .poster-img{
        border-radius:8px;
    }
    .close-btn{
        top:10px;
        right:12px;
        font-size:28px;
    }
}
/* ===========================
   MOBILE KECIL (≤400px)
=========================== */
@media (max-width:400px){
     .academic-section .container{
        padding-left:1px;
        padding-right:10px;
    }

    .academic-section{
        padding:30px 0;
    }
    .academic-badge{
        font-size:11px;
        padding:5px 12px;
    }
    .academic-header h2{
        font-size:17px;
    }
    .academic-header h2::after{
        width:65%;
        height:2px;
    }
    .academic-header p{
        width:60%;
        font-size:10px;
        line-height:1.5;
    }
    .academic-poster{
        max-width:70%;
        padding:8px;
        border-radius:10px;
    }
    .poster-img{
        border-radius:8px;
    }
    .close-btn{
        top:10px;
        right:12px;
        font-size:28px;
    }
}
/* ===========================
   EXTRA SMALL (≤350px)
=========================== */
@media (max-width:350px){
     .academic-section .container{
        padding-left:1px;
        padding-right:8px;
    }

    .academic-section{
        padding:30px 0;
    }
    .academic-badge{
        font-size:11px;
        padding:5px 12px;
    }
    .academic-header h2{
        font-size:17px;
    }
    .academic-header h2::after{
        width:70%;
        height:2px;
    }
    .academic-header p{
        width:80%;
        font-size:10px;
        line-height:1.5;
    }
    .academic-poster{
        max-width:70%;
        padding:8px;
        border-radius:10px;
    }
    .poster-img{
        border-radius:8px;
    }
    .close-btn{
        top:10px;
        right:12px;
        font-size:28px;
    }
}
</style>

