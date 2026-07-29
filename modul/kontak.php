<!-- Page Header Start -->
<section id="PageHeader" class="page-header1">
    <div class="banner-overlay"></div>

    <div class="banner-content">
       <h3>KKontak Kampus</h3>
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
    <!-- Contact Start -->
<div class="container-xxl py-6 mt-5">
  <div class="container">
    <div class="row g-5 align-items-center">
      <!-- Kolom Kiri: Maps -->
      <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
        <div class="position-relative h-100">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.3082739537817!2d106.83898187418643!3d-6.482587163379565!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c1c002ec2511%3A0xd88aca59f5ce1eb6!2sSTAI%20YAPERI%20CIBINONG!5e0!3m2!1sid!2sid!4v1698129960292!5m2!1sid!2sid"
            width="100%"
            height="450"
            style="border:0; border-radius:10px;"
            allowfullscreen=""
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade">
          </iframe>
        </div>
      </div>

      <!-- Kolom Kanan: Teks -->
      <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
        <h6 class="text-primary text-uppercase mb-2">Kontak</h6>
        <h1 class="display-6 mb-4">Hubungi kami dibawah ini</h1>
        <p class="mb-4">
          Pihak profesional yang dapat memberikan informasi terpercaya kepada calon mahasiswa/mahasiswi atau pihak lain yang membutuhkan informasi tersebut.
        </p>
        <div class="contact-info">
          <p><i class="fa fa-map-marker-alt me-3"></i>Jl. Raya Jakarta Bogor KM. 45, Pakansari, Cibinong, Bogor 16915</p>
          <p><i class="fab fa-instagram me-3"></i>@staiyaperi</p>  
          <p><i class="fa fa-phone-alt me-3"></i>(021) 837-137-49</p>
          <p><i class="fab fa-whatsapp me-3"></i>0851-5697-6974</p>
          <p><i class="fa fa-envelope me-3"></i>stai.yaperi.cbg@gmail.com</p>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Contact End -->