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
        <span class="schedule-badge">Jadwal Perkuliahan</span>
        <h2 class="schedule-title">Jadwal Kuliah STAI YAPERI CIBINONG</h2>
        <p class="schedule-desc">
            Silakan unduh jadwal kuliah sesuai semester yang dipilih.
        </p>
    </div>

    <div class="row g-4 justify-content-center">

        <?php
        $sqloutput = $koneksi->query("SELECT * FROM tb_jadwal ORDER BY id_jadwal ASC");
        while($tampil = $sqloutput->fetch_array()){
        ?>

        <div class="col-lg-4 col-md-6">

            <div class="schedule-card">

                <div class="schedule-image">
                    <img src="admin/gbr/<?= $tampil['gambar'] ?>"
                         alt="<?= htmlspecialchars($tampil['judul_semester']) ?>">
                </div>

                <div class="schedule-content">

                    <h5><?= htmlspecialchars($tampil['judul_semester']) ?></h5>

                    <a href="admin/gbr/<?= $tampil['gambar'] ?>"
                       download
                       class="download-btn">
                        <i class="fa fa-download"></i>
                        Download Jadwal
                    </a>

                </div>

            </div>

        </div>

        <?php } ?>

    </div>

</div>

<!-- ===== CSS ===== -->
<style>
.schedule-badge{
    display:inline-block;
    background:#ffc107;
    color:#fff;
    padding:8px 18px;
    border-radius:30px;
    font-size:14px;
    font-weight:600;
    margin-bottom:15px;
}

.schedule-title{
    font-size:34px;
    font-weight:700;
    margin-bottom:15px;
    position:relative;
}

.schedule-title::after{
    content:"";
    width:130px;
    height:3px;
    background:#ffc107;
    display:block;
    margin:12px auto 0;
    border-radius:30px;
}

.schedule-desc{
    color:#777;
    max-width:550px;
    margin:auto;
}

.schedule-card{
    background:#fff;
    border-radius:18px;
    overflow:hidden;
    box-shadow:0 10px 25px rgba(0,0,0,.08);
    transition:.35s;
    height:100%;
}

.schedule-card:hover{
    transform:translateY(-8px);
    box-shadow:0 18px 35px rgba(0,0,0,.12);
}

.schedule-image img{
    width:100%;
    height:280px;
    object-fit:cover;
    display:block;
}

.schedule-content{
    padding:20px;
    text-align:center;
}

.schedule-content h5{
    font-weight:700;
    margin-bottom:18px;
}

.download-btn{
    display:inline-flex;
    align-items:center;
    gap:8px;
    padding:12px 22px;
    background:#ffc107;
    color:#222;
    border-radius:30px;
    text-decoration:none;
    font-weight:600;
    transition:.3s;
}

.download-btn:hover{
    background:#e6ac00;
    color:#fff;
}
</style>