 <!-- Page Header Start -->
<section id="PageHeader" class="page-header1">
    <div class="banner-overlay"></div>

    <div class="banner-content">
       <h3>Profil Ketua </h3>
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
  $sqloutput=$koneksi->query('SELECT*FROM tb_ketua');
  $tampil=$sqloutput->fetch_array();

?>
 <!-- Ketua STAI -->
<section class="leader-section">
  <div class="container">

    <div class="leader-wrapper">

      <!-- Foto -->
      <div class="leader-image">
        <img src="admin/gbr/<?=$tampil['gambar']?>" alt="Ketua STAI">
      </div>

      <!-- Informasi -->
      <div class="leader-content">
                <h3 class="leader-name">
          <?=$tampil['namaketua']?>
        </h3>

        <div class="leader-line"></div>

        <span class="leader-label">
          Ketua STAI Yaperi Cibinong
        </span>
        <p class="leader-desc">
          Memimpin STAI YAPERI Cibinong dalam mengembangkan pendidikan tinggi
          Islam yang unggul, berkualitas, serta menghasilkan lulusan yang
          berakhlak mulia, profesional, dan siap berkontribusi bagi masyarakat.
        </p>

</div>

    </div>

  </div>
</section>

<style>
/*=========================
      SECTION
=========================*/

.leader-section{
    padding:90px 0;
    background:#f8f9fc;
}

.leader-title{
    text-align:center;
    font-size:1.8rem;
    font-weight:700;
    color:#222;
    margin-bottom:70px;
    position:relative;
}

.leader-title::after{

    content:"";
    width:38%;
    height:2px;
    background:#ffc107;
    position:absolute;
    left:50%;
    bottom:-18px;
    transform:translateX(-50%);
    border-radius:30px;
    margin-bottom:10px;

}

/*=========================
      BOX
=========================*/
.leader-wrapper{
    background:#fff;
    border-radius:25px;
    display:flex;
    align-items:center;
    gap:60px;
    padding:50px;
    transition:.3s;
}
.leader-wrapper:hover{
    transform:translateY(-6px);
   }
/*=========================
      FOTO
=========================*/
.leader-image{
    flex:0 0 320px;
    text-align:center;
}
.leader-image img{
    width:280px;
    height:280px;
    object-fit:cover;
    object-position:center top;
    border-radius:20px;
    border:6px solid #ffc107;
}
/*=========================
      CONTENT
=========================*/
.leader-content{
    flex:1;
}
.leader-label{
    display:inline-block;
    background:#ffc107;
    color:#222;
    padding:8px 18px;
    border-radius:50px;
    font-size:.7rem;
    font-weight:600;
    margin-bottom:15px;
}
.leader-name{
    font-size:1.5rem;
    font-weight:700;
    color:#222;
    margin-bottom:8px;
}
.leader-line{
    width:47%;
    height:2px;
    background:#ffc107;
    border-radius:20px;
    margin-bottom:15px;
}
.leader-desc{
    font-size:1.05rem;
    color:#666;
    line-height:1.9;
    margin:0;
}
/*==================================================
            TABLET (768-991)
==================================================*/
@media (min-width:768px) and (max-width:991px){
.leader-wrapper{
    max-width:720px;
    gap:30px;
    padding:35px;
}
.leader-image{
    flex:0 0 220px;
}
.leader-image img{
    width:200px;
    height:200px;
}
.leader-name{
    font-size:1.5rem;
}
.leader-desc{
    font-size:.95rem;
}
}
/*==================================================
            MOBILE (576-767)
==================================================*/
@media (max-width:575px){
  .leader-section{
    padding:40px 15px;
}
.leader-wrapper{
    display:flex;
    flex-direction:column;
    align-items:center;
    text-align:center;
    width:100%;
    max-width:100%;
    padding:25px 20px;
    margin:0 auto;
    margin-left:-12px;
    gap:8px;
    border-radius:20px;
    box-sizing:border-box;
}
.leader-image{
    width:100%;
    flex:none;
}
.leader-image img{
    width:160px;
    height:160px;
    max-width:100%;
}
.leader-content{
    width:100%;
}
.leader-name{
    margin-bottom:-12px;
    font-size:1rem;
}
.leader-line{
    width:50%;
    height:2px;
    margin:19px auto;
    margin-bottom:10px;
}
.leader-label{
    font-size:.6rem;
    padding:8px 18px;
}
.leader-desc{
    font-size:.8rem;
    line-height:1.6;
    text-align:justify;
}
}
@media (max-width:350px){
    .leader-section{
    padding:40px 15px;
}
.leader-wrapper{
    display:flex;
    flex-direction:column;
    align-items:center;
    text-align:center;
    width:100%;
    max-width:100%;
    padding:25px 20px;
    margin:0 auto;
    margin-left:-12px;
    gap:8px;
    border-radius:20px;
    box-sizing:border-box;
}
.leader-image{
    width:100%;
    flex:none;
}
.leader-image img{
    width:160px;
    height:160px;
    max-width:100%;
}
.leader-content{
    width:100%;
}
.leader-name{
    margin-bottom:-12px;
    font-size:1rem;
}
.leader-line{
    width:85%;
    height:2px;
    margin:19px auto;
    margin-bottom:10px;
}
.leader-label{
    font-size:.6rem;
    padding:8px 18px;
}
.leader-desc{
    font-size:.8rem;
    line-height:1.6;
    text-align:justify;
}
}
@media (max-width:400px){
    .leader-section{
    padding:40px 15px;
}
.leader-wrapper{
    display:flex;
    flex-direction:column;
    align-items:center;
    text-align:center;
    width:100%;
    max-width:100%;
    padding:25px 20px;
    margin:0 auto;
    margin-left:-12px;
    gap:8px;
    border-radius:20px;
    box-sizing:border-box;
}
.leader-image{
    width:100%;
    flex:none;
}
.leader-image img{
    width:160px;
    height:160px;
    max-width:100%;
}
.leader-content{
    width:100%;
}
.leader-name{
    margin-bottom:-12px;
    font-size:1rem;
}
.leader-line{
    width:69%;
    height:2px;
    margin:19px auto;
    margin-bottom:10px;
}
.leader-label{
    font-size:.6rem;
    padding:8px 18px;
}
.leader-desc{
    font-size:.8rem;
    line-height:1.6;
    text-align:justify;
}
}
</style>