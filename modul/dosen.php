<!-- Page Header Start -->
<section id="PageHeader" class="page-header1">
    <div class="banner-overlay"></div>

    <div class="banner-content">
       <h3>Struktural Kampus </h3>
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
  $sqloutput=$koneksi->query('SELECT*FROM tb_dosen');
  $tampil=$sqloutput->fetch_array();

?>
<!-- Team Start -->
<div class="team-section">

    <div class="team-container">

        <div class="team-card">
            <img src="admin/gbr/<?=$tampil['gambar1']?>" alt="Struktur Organisasi" class="team-img">
        </div>

        <div class="team-card">
            <img src="admin/gbr/<?=$tampil['gambar2']?>" alt="Struktur Pengurus" class="team-img">
        </div>

    </div>

</div>
<style>
/*=========================================
            SECTION
=========================================*/

.team-section{
    padding:80px 0;
    background:#f8f9fc;
}


/*=========================================
            CONTAINER
=========================================*/

.team-container{
    max-width:1200px;
    width:92%;
    margin:auto;

    display:grid;
    grid-template-columns:repeat(2,1fr);
    gap:30px;
}


/*=========================================
              CARD
=========================================*/

.team-card{

    background:#fff;

    border-radius:22px;

    padding:25px;

    border-top:5px solid #ffc107;

    box-shadow:0 12px 35px rgba(0,0,0,.08);

    transition:.35s;

    overflow:hidden;

}

.team-card:hover{

    transform:translateY(-8px);

    box-shadow:0 18px 40px rgba(0,0,0,.15);

}


/*=========================================
              IMAGE
=========================================*/

.team-img{

    width:100%;

    display:block;

    border-radius:15px;

    transition:.35s;

}

.team-card:hover .team-img{

    transform:scale(1.02);

}

/*=========================================
            TABLET
=========================================*/

@media (max-width:991px){

.team-container{

    grid-template-columns:1fr;
    width:94%;
    gap:25px;

}

.team-card{
    width:75%;
    margin-left:76px;
    padding:20px;

}

}


/*=========================================
            MOBILE
=========================================*/

@media (max-width:767px){

.team-section{
    padding:60px 0;
}

.team-container{
    grid-template-columns:1fr;
    width:95%;
    gap:20px;

}

.team-card{
    width:85%;
    margin-left:29px;
    padding:15px;

}

.team-img{
    width:100%;
    height:auto;
    display:block;
    border-radius:12px;
}

}


/*=========================================
        SMALL MOBILE
=========================================*/

@media (max-width:480px){

.team-container{

    width:100%;

}

.team-card{
    width: 81%; 
    padding:12px;

}

}
@media (max-width:350px){

.team-container{

    width:100%;

}

.team-card{
    width: 81%; 
    padding:12px;
    margin-left: 19px;
}

}
@media (max-width:400px){

.team-container{

    width:100%;

}

.team-card{
    width: 81%; 
    padding:12px;
}
}
</style>
<!-- Team End -->