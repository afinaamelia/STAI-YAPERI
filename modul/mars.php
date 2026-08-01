

 <!-- Page Header Start -->
<section id="PageHeader" class="page-header1">
    <div class="banner-overlay"></div>

    <div class="banner-content">
       <h3> Mars & Hymne </h3>
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

  <!-- START SECTION: MARS & HYMNE -->
<section id="mars-hymne" class="py-5 mt-5">
  <div class="container">
    <div class="row g-4 justify-content-center">

      <!-- 🔹 MARS YAYASAN & MARS STAI -->
      <div class="mars-container">
        <!-- MARS YAYASAN -->
        <div class="card mars-card">
          <div class="mars text-center mb-3">
            <h2>Mars Yayasan Ar-Ridho</h2>
            <p>Kunci: F</p>
          </div>
          <div class="mars2">
            <blockquote class="quote-post">
              <p>Yayasan Ar-Ridho STAI Yaperi</p>
              <p>Siap sedia berkiprah</p>
              <p>Menambah ilmu dunia akhirat</p>
              <p>Bagi nusa dan bangsa</p>
            </blockquote>
            <blockquote class="quote-post">
              <p>Harapan kami yayasan Ar-Ridho</p>
              <p>Semoga menjadi petunjuk</p>
              <p>Tuk mengembangkan bakat</p>
              <p>Jadi orang berguna</p>
              <p>Bagi kehidupan nyata</p>
            </blockquote>
            <blockquote class="quote-post">
              <p><strong>Reff:</strong></p>
              <p>Ar-Ridho kita STAI</p>
              <p>Pencetak kader pembimbing umat</p>
              <p>STAI Yaperi Cibinong</p>
              <p>Kami siap membantu</p>
            </blockquote>
          </div>
          <div class="mars1 mt-3">
            <p><strong>Pencipta:</strong></p>
            <ul>
              <li>Hj. Tb Syachril, BA, S.Pd.I (Alm)</li>
              <li>Tb Maulana Setiaki, S.Pd.I, M.Si</li>
            </ul>
          </div>
        </div>

        <!-- MARS STAI -->
        <div class="card mars-card">
          <div class="mars text-center mb-3">
            <h2>Mars STAI Yaperi Cibinong</h2>
            <p>Kunci: F</p>
          </div>

          <div class="mars2">
            <blockquote class="quote-post">
              <p>Bangunlah, wahai mahasiswa</p>
              <p>STAI Yaperi Cibinong harapan bangsa</p>
              <p>Pencetak kader pemimpin umat</p>
              <p>Pelurus jalan kebenaran</p>
            </blockquote>
            <blockquote class="quote-post">
              <p>Galihlah kekayaan rohani Islam</p>
              <p>Kembangkan ke segenap penjuru alam</p>
              <p>Masyarakat menanti kehadiranmu</p>
              <p>Penerus pejuang Islam yang tulus</p>
            </blockquote>
            <blockquote class="quote-post">
              <p><strong>Reff:</strong></p>
              <p>Bangkitlah semangat juangmu</p>
              <p>Perkayalah jiwamu dengan ilmu</p>
              <p>STAI Yaperi Cibinong</p>
              <p>Tetap jaya</p>
            </blockquote>
          </div>

          <div class="mars1 mt-3">
            <p><strong>Pencipta:</strong></p>
            <ul>
              <li>Hj. Tb Syachril, BA, S.Pd.I (Alm)</li>
              <li>Tb Maulana Setiaki, S.Pd.I, M.Si</li>
            </ul>
          </div>
        </div>
      </div>

      <!-- 🔹 HYMNE STAI -->
        <div class="col-12">
        <div class="card mars-card">
          <div class="mars mb-3 text-center">
            <h2>Hymne STAI Yaperi Cibinong</h2>
          </div>

          <div class="mars2 text-center">
            <blockquote class="quote-post">
              <p>STAI Yaperi Cibinong</p>
              <p>Islam dasar tujuanmu</p>
              <p>Pusat penerapan kecerdasan bangsa</p>
              <p>Pengabdi Allah yang Maha Rahman</p>
              <p>Pembangun jiwa semangat juang</p>
              <p>Menjunjung jiwa yang haq dan sejati</p>
            </blockquote>

            <blockquote class="quote-post">
              <p><strong>Reff:</strong></p>
              <p>Pembangkit akhlak mulia</p>
              <p>Bekal kejayaan bangsa</p>
              <p>Tantangan masa depan kita</p>
              <p>Menanti baktimu</p>
              <p>Ciptakan negeri aman sentosa</p>
              <p>STAI wujud nyata</p>
            </blockquote>
          </div>

          <div class="mars1 mt-3">
            <p><strong>Pencipta:</strong></p>
            <ul>
              <li>Hj. Tb Syachril, BA, S.Pd.I (Alm)</li>
              <li>Tb Maulana Setiaki, S.Pd.I, M.Si</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- END SECTION: MARS & HYMNE -->

<style>
.mars1 {
  text-align: left;
  margin-left: 1rem;
}
.mars1 ul {
  padding-left: 1.2rem;
  margin: 0;
}
.mars1 li {
  list-style-type: disc;
  margin-bottom: 4px;
}

/* Section background fix */
#mars-hymne {
  position: relative;
  z-index: 1;
}

/* Card dan layout */
.mars-container{
    display:flex;
    flex-wrap:wrap;
    justify-content:center;
    gap:20px;
    padding:20px;

    margin-top:0;      /* HAPUS -2rem */
    margin-left:0;     /* HAPUS -1rem */
}
.mars-card {
  flex: 1 1 45%;      /* sama seperti card Mars lainnya */
  max-width: 500px;   /* sama ukuran max */
  background: #fff;
  border-radius: 15px;
  padding: 25px;
  box-shadow: 0 4px 10px rgba(0,0,0,0.1);
  transition: transform 0.3s ease, box-shadow 0.3s ease;
  cursor: pointer;
}

.mars-card:hover {
  transform: translateY(-6px);
  box-shadow: 0 8px 18px rgba(0,0,0,0.15);
}

/* Garis bawah judul */
.mars h2 {
  position: relative;
  display: inline-block;
  font-size: 1.3rem;
  font-weight: 600;
  margin-bottom: 0.6rem;
  color: #333;
}
.mars h2::after {
  content: "";
  position: absolute;
  left: 50%;
  bottom: -8px;
  transform: translateX(-50%);
  width: 100%;
  height: 2px;
  background-color: #ffc107;
  border-radius: 10%;
}

/* Lirik */
.mars2{
    display: flex;
    flex-direction: column;
    align-items: center; /* blok lirik tetap di tengah */
}

.mars2 blockquote{
    width: 100%;
    max-width: 340px; /* lebar teks */
    margin: 0 0 1.2rem;
    padding-left: 14px;
    border-left: 4px solid #ffc107;
}

.quote-post p{
    margin: 4px 0;
    line-height: 1.6;
    text-align: left; /* teks rata kiri */
}
/* HP layout */
.card {
  border-radius: 10px;
  background-color: #fff;
}

/* Hymne card tengah */
.col-12 {
    display: flex;
    justify-content: center; /* tengah horizontal */
    width: 100%;
    margin: 0 auto; /* pastikan tidak ada margin negatif */
    margin-left:-0.5rem;
}
@media (max-width:992px){

    .mars2 blockquote{
        max-width:300px;
    }

    .quote-post p{
        font-size:0.95rem;
        line-height:1.5;
    }

}
@media (max-width:768px){
 .quote-post p{
        font-size:0.75rem;
        line-height:1.5;
    }
    .mars-container{
        display:flex;
        flex-direction:column;
        align-items:center;
        gap:15px;
        padding:0 15px;
        margin:0;
    }

    .mars-card{
        width:80%;
        max-width:100%;
        flex:none;
        margin:0;
        padding:16px;
        box-sizing:border-box;
        margin-left:-15%;
        margin-top:40px;
    }

    .col-12{
        padding:0 15px;
        margin:0;
    }
.mars h2 {
  position: relative;
  display: inline-block;
  font-size: 1rem;
  font-weight: 600;
  margin-bottom: 0.6rem;
  color: #333;
}
.mars h2::after {
  content: "";
  position: absolute;
  left: 50%;
  bottom: -8px;
  transform: translateX(-50%);
  width: 100%;
  height: 2px;
  background-color: #ffc107;
  border-radius: 10%;
}
.mars p{
  font-size: 0.85rem;
}
    .mars2 blockquote{
        width:100%;
        max-width:100%;
    }
    .mars1 li{
        font-size:0.75rem;
        margin-bottom: 3px;
}
    .mars1 p{
        font-size:0.80rem;
         margin-bottom: 4px;
    }
  .mars1 ul{
    margin-top: 0;
    padding-left: 20px;
}
.col-12{
    display: flex;
    justify-content: center;
    margin-top: 20px; /* atur sesuai kebutuhan */
}
    }


</style>
<!-- end mars & hymne -->