

    <!-- Page Header Start -->
<style>
    .page-header {
    background: linear-gradient(rgba(0, 0, 0, .75), rgba(0, 0, 0, .75)), url(img/ft4.jpg) center center no-repeat;
    background-size: cover;
}
/* Responsif untuk HP, tablet, iPad */
@media (max-width: 992px) { /* ≤991px = tablet & iPad */
    .page-header {
        padding: 5rem 1rem; /* sesuaikan padding */
    }
    .page-header h1 {
        font-size: clamp(1.5rem, 5vw, 2.2rem); /* font menyesuaikan layar */
        margin-left:-3.4rem ;
    }
}

    </style>

    <div class="container-fluid page-header py-6 my-6 mt-0 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center">
            <h1 class="display-4 text-white animated slideInDown mb-4">Organisasi Kampus</h1>
            <nav aria-label="breadcrumb animated slideInDown">
            </nav>
        </div>
    </div>
    <!-- Page Header End -->
    <!-- Work Process -->
    <div id="dema" >
  <div class="container-xxl py-6">
    <div class="container">
      <!-- Tambahkan class flex-row-reverse agar gambar di kanan -->
      <div class="row g-5 flex-row-reverse">

        <!-- Gambar di kanan -->
         <div id="logo-workprocess">
        <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s" style="margin-top:-56px;">
          <div class="position-relative overflow-hidden ps-5 pt-5 h-100" style="min-height: 40px;">
            <img src="img/dema.png" alt="Logo DEMA" class="img-fluid" style="max-width:400px; margin-left:10px;">
          </div>
        </div>
        </div>
        <!-- Teks di kiri -->
         <div id="teks-workprocess">
        <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
          <div class="h-100" style="margin-top:-56px;">
            <h6 class="text-primary text-uppercase mb-2">Organisasi DEMA</h6>
            <h1 class="display-6 mb-4" style="font-size: 34px;">Dewan Eksekutif Mahasiswa</h1>
            <p>Dewan Eksekutif Mahasiswa (DEMA) merupakan salah satu organisasi kemahasiswaan internal yang menjadi Lembaga Eksekutif di Perguruan Tinggi atau Universitas.</p>
            <p class="mb-4">Adapun tugas dan fungsinya bertanggung jawab dan bertujuan mengakomodir terhadap semua kegiatan kemahasiswaan di lingkup STAI YAPERI CIBINONG. Sesuai dengan namanya, Dewan Eksekutif Mahasiswa adalah sebagai organisasi kemahasiswaan tinggi yang menaungi seluruh organisasi intra kampus.</p>

            <div id="logo-email">
            <div class="row pt-2">
              <div class="col-sm-6">
                <div class="d-flex align-items-center">
                  <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                    <i class="fa fa-envelope-open text-white"></i>
                  </div>
                  </div>

                  <div id="email-teks">
                  <div class="ms-3">
                    <p class="mb-2">Email</p>
                    <h5 class="mb-0" style="margin-top:-10px;">demastaiyaperi@gmail.com</h5>
                  </div>
                </div>
              </div>

              <div id="instagram-logo">
              <div class="col-sm-6" style="margin-left:3px; margin-top:15px;">
                <div class="d-flex align-items-center">
                  <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                    <i class="fab fa-instagram text-white"></i>
                  </div>
                  </div>

                  <div id="instagram-teks">
                  <div class="ms-3">
                    <p class="mb-2">Instagram</p>
                    <h5 class="mb-0" style="margin-top:-10px;">demastaiyaperi</h5>
                  </div>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>

      </div>
    </div>
  </div>
</div>
</div>
<!-- ./Work Process -->
    <?php
  $sqloutput=$koneksi->query('SELECT*FROM tb_dema');
  $tampil=$sqloutput->fetch_array();

?>

<img src="img/<?=$tampil['gambar']?>" >

  
<style>
    /* Workprocess */
    #teks-workprocess{
        position: relative;
        left: 50px;
        top: -400px;
    }
    #logo-workprocess{
        position: relative;
        left: 700px;
        top: -50px;
    }
    #logo-email{
      position: relative;
      top: -15px;
    }
    #email-teks{
      position: relative;
      left: 50px;
      top: -50px;
    }
    #instagram-teks{
      position: relative;
      left: 50px;
      top: -50px;
    }
    #instagram-logo{
      position: relative;
      top: -50px;
    }
</style>
