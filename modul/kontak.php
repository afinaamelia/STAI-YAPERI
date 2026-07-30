<!-- Page Header Start -->
<section id="PageHeader" class="page-header1">
    <div class="banner-overlay"></div>

    <div class="banner-content">
       <h3>Kontak Kampus</h3>
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
<!-- ==========================
        CONTACT
========================== -->

<section class="contact-section">

    <div class="container">

        <div class="contact-box">

            <!-- MAP -->
            <div class="contact-map">

                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.3082739537817!2d106.83898187418643!3d-6.482587163379565!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c1c002ec2511%3A0xd88aca59f5ce1eb6!2sSTAI%20YAPERI%20CIBINONG!5e0!3m2!1sid!2sid!4v1698129960292!5m2!1sid!2sid"
                    loading="lazy"
                    allowfullscreen=""
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>

            </div>

            <!-- CONTENT -->
            <div class="contact-content">

                <span class="contact-subtitle">
                    Kontak
                </span>

                <h2>
                    Hubungi Kami
                </h2>

                <p>
                    Pihak profesional yang dapat memberikan informasi terpercaya kepada calon mahasiswa/mahasiswi atau pihak lain yang membutuhkan informasi tersebut.
                </p>

                <div class="contact-info">

                    <div class="info-item">
                        <i class="fa fa-map-marker-alt"></i>
                        <div>
                            <h5>Alamat</h5>
                            <span>Jl. Raya Jakarta Bogor KM.45, Pakansari, Cibinong, Bogor 16915</span>
                        </div>
                    </div>

                    <div class="info-item">
                        <i class="fab fa-instagram"></i>
                        <div>
                            <h5>Instagram</h5>
                            <span>@staiyaperi</span>
                        </div>
                    </div>

                    <div class="info-item">
                        <i class="fa fa-phone-alt"></i>
                        <div>
                            <h5>Telepon</h5>
                            <span>(021) 837-137-49</span>
                        </div>
                    </div>

                    <div class="info-item">
                        <i class="fab fa-whatsapp"></i>
                        <div>
                            <h5>WhatsApp</h5>
                            <span>0851-5697-6974</span>
                        </div>
                    </div>

                    <div class="info-item">
                        <i class="fa fa-envelope"></i>
                        <div>
                            <h5>Email</h5>
                            <span>stai.yaperi.cbg@gmail.com</span>
                        </div>
                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

<style>

/* ==========================
        CONTACT
========================== */

.contact-section{
    padding:90px 0;
    background:#f7f9fc;
}

.contact-box{
    display:grid;
    grid-template-columns:1.2fr .9fr;
    background:#fff;
    border-radius:28px;
    overflow:hidden;
       max-width:1000px;
    margin:0 auto;
    height:42rem;
    align-items:stretch; /* penting */
}

/* MAP */


.contact-map{
    height:100%;
}

.contact-map iframe{
    width:100%;
    height:100%;
    min-height:620px;
    border:0;
    display:block;
}
/* CONTENT */

.contact-content{
    padding:55px;
}

.contact-subtitle{
    display:inline-block;
    color:#ffc107;
    text-transform:uppercase;
    letter-spacing:2px;
    font-size:14px;
    font-weight:700;
    margin-bottom:-10px;
}

.contact-content h2{
    font-size:30px;
    font-weight:700;
    color:#222;
    margin-bottom:20px;
}

.contact-content h2::after{
    content:"";
    display:block;
    width:210px;
    height:3px;
    background:#ffc107;
    border-radius:30px;
    margin-top:4px;
}

.contact-content p{
    color:#666;
    line-height:1.6;
    text-align:justify;
    margin-bottom:30px;
    font-size:15px;
}

/* INFO */

.contact-info{
    display:flex;
    flex-direction:column;
    gap:10px;
}

.info-item{
    display:flex;
    align-items:flex-start;
    gap:13px;
    padding-bottom:12px;
    border-bottom:1px solid #ffc107;
}

.info-item:last-child{
    border-bottom:none;
}

.info-item i{
    width:48px;
    height:48px;
    background:#ffc107;
    color:#fff;
    border-radius:50%;
    display:flex;
    justify-content:center;
    align-items:center;
    font-size:17px;
    flex-shrink:0;
}

.info-item h5{
    margin:0 0 5px;
    font-size:15px;
}

.info-item span{
    color:#666;
    line-height:1.4;
    font-size:14px;
}

/* ==========================
      Tablet
========================== */

@media(max-width:992px){

.contact-box{
    grid-template-columns:1fr;
    height:auto;
}

.contact-map iframe{
    height:380px;
    min-height:380px;
}
.contact-content{
    padding:40px 30px;
}

}

/* ==========================
      Mobile
========================== */

@media(max-width:768px){

.contact-section{
    padding:60px 0;
}

.contact-content{
    padding:30px 22px;
}

.contact-content h2{
    font-size:26px;
}

.contact-content p{
    font-size:15px;
}

.info-item i{
    width:42px;
    height:42px;
    font-size:15px;
}

.info-item h5{
    font-size:15px;
}

.info-item span{
    font-size:14px;
}

.contact-map iframe{
    min-height:300px;
}

}

/* ==========================
      Mobile S
========================== */

@media(max-width:480px){
.contact-box{
    width:92%;
    height:90%;
    margin:0 auto;
    border-radius:18px;
    margin-left: 3px;
}

.contact-content{
    padding:25px 18px;
}

.contact-content h2{
    font-size:22px;
}

.contact-content h2::after{
    width:156px;
    height:2px;
}

.contact-content p{
    font-size:12px;
}

.contact-map iframe{
    min-height:250px;
}

.info-item{
    gap:10px;
}

.info-item i{
    width:38px;
    height:38px;
    font-size:14px;
    margin-bottom:-10px;
}

.info-item span{
    font-size:12px;
}

}

</style>