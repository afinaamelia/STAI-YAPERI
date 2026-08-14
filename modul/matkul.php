 <!-- Page Header Start -->
<section id="PageHeader" class="page-header1">
    <div class="banner-overlay"></div>

    <div class="banner-content">
       <h3>Jadwal Kuliah</h3>
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


 <div class="container py-5">
    <div class="text-center mb-5">
       <h2 class="schedule-title">
            Jadwal Kuliah STAI YAPERI CIBINONG
        </h2>
        <p class="schedule-desc">
            Silakan melihat jadwal perkuliahan sesuai dengan semester kalian.
    </div>
   <div class="schedule-grid">

<?php
        $sqloutput = $koneksi->query("
            SELECT * 
            FROM tb_jadwal 
            ORDER BY id_jadwal ASC
        ");

        while($tampil = $sqloutput->fetch_array()){
        ?>

        <div class="schedule-item">
            <div class="schedule-card">

            <!-- GAMBAR JADWAL -->
                <div class="schedule-image">
                    <img 
                        src="admin/gbr/<?= htmlspecialchars($tampil['gambar']) ?>"
                        alt="<?= htmlspecialchars($tampil['judul_semester']) ?>">

                </div>
                <!-- CONTENT -->
                <div class="schedule-content">
                    <h5>
                        <?= htmlspecialchars($tampil['judul_semester']) ?>
                    </h5>
                    <!-- TOMBOL LIHAT -->
                    <a 
                        href="admin/gbr/<?= htmlspecialchars($tampil['gambar']) ?>"
                        target="_blank"
                        class="download-btn" >
                        <i class="fa fa-eye"></i>
                        Lihat Jadwal
                    </a>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
</div>

<!-- ===== CSS ===== -->
<style>
    /* ================================
   HEADER JADWAL
================================ */
.text-center.mb-5{
    position:relative;
    margin-bottom:55px !important;
}
/* JUDUL */
.schedule-title{
    position:relative;
    font-size:30px;
    font-weight:800;
    color:#16375c;
    margin:0;
    line-height:1.25;
    letter-spacing:-.5px;
}
/* GARIS BAWAH */
.schedule-title::after{
    content:"";
    display:block;
    width:46%;
    height:2px;
   background:#ffc107;
    border-radius:20px;
    margin:6px auto 0;
    box-shadow:0 3px 8px rgba(255,193,7,.25);
}
/* DESKRIPSI */
.schedule-desc{
    margin:16px auto 0;
    max-width:600px;
    color:#777;
    font-size:16px;
    line-height:1.7;
}
/* ================================
   GRID JADWAL - 3 SEJAJAR
================================ */
.schedule-grid{
    display:grid;
    grid-template-columns:repeat(3, 1fr);
    gap:30px;
    max-width:1100px;
    margin:0 auto;
}
/* ================================
   CARD
=============================== */
.schedule-item{
    width:100%;
}
.schedule-card{
    background:#fff;
    border-radius:16px;
    overflow:hidden;
    box-shadow:0 8px 22px rgba(0,0,0,.08);
    transition:.3s;
    height:100%;
}
.schedule-card:hover{
    transform:translateY(-6px);
    box-shadow:0 15px 30px rgba(0,0,0,.12);
}
/* ================================
   GAMBAR
================================ */
.schedule-image{
    width:100%;
    height:230px;
    overflow:hidden;
    background:#f5f5f5;
}
.schedule-image img{
    width:100%;
    height:100%;
    object-fit:cover;
    display:block;
}
/* ================================
   CONTENT
================================ */
.schedule-content{
    padding:17px 15px 20px;
    text-align:center;
}
.schedule-content h5{
    font-size:17px;
    font-weight:700;
    margin-bottom:16px;
}
/* ================================
   BUTTON
================================ */
.download-btn{
    display:inline-flex;
    align-items:center;
    justify-content:center;
    gap:8px;
    padding:10px 18px;
    background:#ffc107;
    color:#222;
    border-radius:30px;
    text-decoration:none;
    font-size:14px;
    font-weight:600;
    transition:.3s;
}
.download-btn:hover{
    background:#e6ac00;
    color:#fff;
    transform:translateY(-2px);
}
/* =========================================
   RESPONSIVE JADWAL PERKULIAHAN
========================================= */

/* ===== LAPTOP / TABLET BESAR - max 991px ===== */
@media (max-width: 991px){
    .schedule-grid{
        grid-template-columns:repeat(2, 1fr);
        gap:24px;
        max-width:760px;
        padding:0 15px;
    }
    .schedule-title{
        font-size:20px;
    } .schedule-title::after{
        width:50%;
        height:2px;
    }
    .schedule-desc{
        font-size:13px;
        max-width:550px;
    }
    .schedule-image{
        height:210px;
    }
    .schedule-content{
        padding:16px 14px 18px;
    }
    .schedule-content h5{
        font-size:16px;
        margin-bottom:14px;
    }
    .download-btn{
        padding:9px 16px;
        font-size:13px;
    }
}
/* =========================================
   RESPONSIVE 576px
========================================= */
@media (max-width: 576px){
    html,
    body{
        width:100%;
        max-width:100%;
        overflow-x:hidden;
    }
    /* CONTAINER UTAMA */
    .container,
    .container-fluid,
    .container.py-5{
        width:100% !important;
        max-width:100% !important;
        margin-left:auto !important;
        margin-right:auto !important;
        padding-left:15px !important;
        padding-right:15px !important;
        box-sizing:border-box;
    }
    /* HEADER */
    .text-center.mb-5{
        width:100% !important;
        max-width:100% !important;
        margin-left:auto !important;
        margin-right:auto !important;
        text-align:center !important;
        box-sizing:border-box;
    }
    .schedule-title{
        width:100%;
        max-width:3000px;
        margin-left:auto !important;
        margin-right:auto !important;
        text-align:center !important;
        font-size:18px;
        line-height:1.3;
        margin-bottom:-6px;
    }
    .schedule-title::after{
        width:80%;
        height:2px;
        margin-left:auto !important;
        margin-right:auto !important;
    }
    .schedule-desc{
        width:100%;
        max-width:350px;
        margin-left:auto !important;
        margin-right:auto !important;
        text-align:center !important;
        font-size:12px;
        line-height:1.6;
        margin-bottom:-20px;    
    }
    /* GRID */
    .schedule-grid{
        width:100% !important;
        max-width:430px !important;
        margin-left:auto !important;
        margin-right:auto !important;
        padding:0 !important;
        display:grid;
        grid-template-columns:1fr;
        justify-items:center;
        box-sizing:border-box;
    }
    .schedule-item{
        width:100% !important;
        max-width:350px !important;
        margin-left:auto !important;
        margin-right:auto !important;
        box-sizing:border-box;
    }
    .schedule-card{
        width:100% !important;
        max-width:400px !important;
        margin-left:auto !important;
        margin-right:auto !important;
        box-sizing:border-box;
    }
    /* GAMBAR */
    .schedule-image{
        width:100% !important;
        max-width:100% !important;
        height:230px;
        margin-left:auto !important;
        margin-right:auto !important;
    }

    .schedule-image img{
        width:100% !important;
        max-width:100% !important;
        height:100%;
        object-fit:cover;
    }
    /* CONTENT */
    .schedule-content{
        width:100%;
        box-sizing:border-box;
        text-align:center !important;
    }
    .schedule-content h5{
        text-align:center !important;
        margin-left:auto !important;
        margin-right:auto !important;
        font-size:16px;
    }
    .download-btn{
        margin-left:auto !important;
        margin-right:auto !important;
        font-size:13px;
        padding:9px 17px;
    }
    /* TABEL */
    .schedule-content img,
    .schedule-table,
    .table-responsive{
        max-width:100% !important;
        box-sizing:border-box;
    }
    .table-responsive{
        width:100% !important;
        overflow-x:auto;
    }
}
/* =========================================
   RESPONSIVE 400px
========================================= */
@media (max-width:400px){
    html,
    body{
        width:100%;
        max-width:100%;
        overflow-x:hidden;
    }
    /* CONTAINER */
    .container,
    .container-fluid,
    .container.py-5{
        width:100% !important;
        max-width:100% !important;
        margin-left:auto !important;
        margin-right:auto !important;
        padding-left:12px !important;
        padding-right:12px !important;
        box-sizing:border-box;
    }
    /* HEADER */
    .text-center.mb-5{
        width:100% !important;
        max-width:100% !important;
        margin-left:auto !important;
        margin-right:auto !important;
        text-align:center !important;
    }
    .schedule-title{
        width:100%;
        max-width:280px;
        margin-left:auto !important;
        margin-right:auto !important;
        text-align:center !important;
        font-size:16px;
        line-height:1.3;
        margin-bottom:-4px;
    }
    .schedule-title::after{
        width:100%;
        height:2px;
        margin-left:auto !important;
        margin-right:auto !important;
    }
    .schedule-desc{
        width:100%;
        max-width:280px;
        margin-left:auto !important;
        margin-right:auto !important;
        text-align:center !important;
        font-size:10px;
        line-height:1.55;
        margin-bottom:-30px;
    }
    /* GRID */
    .schedule-grid{
        width:100% !important;
        max-width:330px !important;
        margin-left:auto !important;
        margin-right:auto !important;
        padding:0 !important;
        display:grid;
        grid-template-columns:1fr;
        justify-items:center;
        box-sizing:border-box;
    }
    .schedule-item{
        width:100% !important;
        max-width:280px !important;
        margin-left:auto !important;
        margin-right:auto !important;
        box-sizing:border-box;
    }
    .schedule-card{
        width:100% !important;
        max-width:300px !important;
        margin-left:auto !important;
        margin-right:auto !important;
        box-sizing:border-box;
    }
    /* GAMBAR */
    .schedule-image{
        width:100% !important;
        max-width:100% !important;
        height:210px;
        margin-left:auto !important;
        margin-right:auto !important;
    }
    .schedule-image img{
        width:100% !important;
        max-width:100% !important;
        height:100%;
        object-fit:cover;
    }
    /* CONTENT */
    .schedule-content{
        width:100%;
        box-sizing:border-box;
        text-align:center !important;
    }
    .schedule-content h5{
        text-align:center !important;
        margin-left:auto !important;
        margin-right:auto !important;
        font-size:15px;
    }
    .download-btn{
        margin-left:auto !important;
        margin-right:auto !important;
        font-size:12px;
        padding:8px 15px;
    }
    /* TABEL */
    .schedule-content img,
    .schedule-table,
    .table-responsive{
        max-width:100% !important;
        box-sizing:border-box;
    }
    .table-responsive{
        width:100% !important;
        overflow-x:auto;
    }
}
/* =========================================
   FIX MOBILE 320px - 350px
========================================= */
@media (max-width: 350px){
    html,
    body{
        width:100%;
        max-width:100%;
        overflow-x:hidden;
    }
    /* CONTAINER UTAMA */
    .container,
    .container-fluid,
    .container.py-5{
        width:100% !important;
        max-width:100% !important;
        margin-left:auto !important;
        margin-right:auto !important;
        padding-left:10px !important;
        padding-right:10px !important;
        box-sizing:border-box;
    }
    /* HEADER JADWAL */
    .text-center.mb-5{
        width:100% !important;
        max-width:100% !important;
        padding-left:5px !important;
        padding-right:5px !important;
        margin-left:auto !important;
        margin-right:auto !important;
        text-align:center !important;
        box-sizing:border-box;
    }
    .schedule-title{
        width:100%;
        max-width:250px;
        margin-left:auto !important;
        margin-right:auto !important;
        text-align:center !important;
        font-size:14px;
        line-height:1.3;
    }
    .schedule-title::after{
        margin-left:auto !important;
        margin-right:auto !important;
        height:2px;
        width:100%;
    }
    .schedule-desc{
        width:100%;
        max-width:230px;
        margin-left:auto !important;
        margin-right:auto !important;
        text-align:center !important;
        font-size:10px;
        margin-bottom:-10px;
    }
    /* GRID */
    .schedule-grid{
        width:100% !important;
        max-width:310px !important;
        margin-left:auto !important;
        margin-right:auto !important;
        padding:0 !important;
        display:grid;
        grid-template-columns:1fr;
        justify-items:center;
        box-sizing:border-box;
    }
    .schedule-item{
        width:100% !important;
        max-width:270px !important;
        margin-left:auto !important;
        margin-right:auto !important;
        box-sizing:border-box;
    }
    .schedule-card{
        width:100% !important;
        max-width:310px !important;
        margin-left:auto !important;
        margin-right:auto !important;
        box-sizing:border-box;
    }
    /* GAMBAR */
    .schedule-image{
        width:100% !important;
        max-width:100% !important;
        height:190px;
        margin-left:auto !important;
        margin-right:auto !important;
    }
    .schedule-image img{
        width:100% !important;
        max-width:100% !important;
        height:100%;
        object-fit:cover;
    }
    /* CONTENT CARD */
    .schedule-content{
        width:100%;
        box-sizing:border-box;
        text-align:center !important;
    }
    .schedule-content h5{
        text-align:center !important;
        margin-left:auto !important;
        margin-right:auto !important;
    }
    .download-btn{
        margin-left:auto !important;
        margin-right:auto !important;
    }
    /* GAMBAR/TABEL JADWAL DI HALAMAN */
    .schedule-content img,
    .schedule-table,
    .table-responsive{
        max-width:100% !important;
        box-sizing:border-box;
    }
    .table-responsive{
        width:100% !important;
        overflow-x:auto;
    }
}
</style>