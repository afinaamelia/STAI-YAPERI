 <!-- Page Header Start -->
<section id="PageHeader" class="page-header1">
    <div class="banner-overlay"></div>

    <div class="banner-content">
       <h3>Alur Pendaftaran Mahasiswa Baru</h3>
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
 
</style>
    <!-- Start Services Section
==================================== -->
<?php
  $sqloutput=$koneksi->query('SELECT*FROM tb_link');
  $tampil=$sqloutput->fetch_array();

?>

<section class="alur-section">

    <div class="container">

        <div class="alur-header">
            <span class="alur-badge">PMB STAI YAPERI</span>
            <h2>Alur Pendaftaran Mahasiswa Baru</h2>
            <p>Ikuti langkah-langkah berikut untuk menyelesaikan proses pendaftaran.</p>
        </div>

        <div class="alur-wrapper">

            <!-- Step 1 -->
            <div class="alur-item">

                <div class="alur-circle">
                    <img src="img/one.png" alt="">
                </div>

                <span class="step">Langkah 01</span>

                <h4>Pembayaran Registrasi</h4>

                <p>
                    Bayar biaya pendaftaran sebesar
                    <strong>Rp500.000</strong>.
                </p>

            </div>

            <!-- Step 2 -->
            <div class="alur-item">

                <div class="alur-circle">
                    <img src="img/two.png" alt="">
                </div>

                <span class="step">Langkah 02</span>

                <h4>Transfer ke Rekening</h4>

                <div class="rekening-card">
                    <p><strong>BCA</strong><br>1671381667<br>Moch Zaky Azima</p>

                    <hr>

                    <p><strong>BSI</strong><br>7124995498<br>Muhammad Zaky Azima</p>
                </div>

            </div>

            <!-- Step 3 -->
            <div class="alur-item">

                <div class="alur-circle">
                    <img src="img/three.png" alt="">
                </div>

                <span class="step">Langkah 03</span>

                <h4>Upload Bukti</h4>

                <p>
                    Upload bukti pembayaran pada Google Form
                    yang telah disediakan.
                </p>

            </div>

        </div>

    </div>

</section>
<style>
  .alur-section{
    padding:90px 0;
    background:#f8fafc;
}

.alur-header{
    text-align:center;
    margin-bottom:70px;
}

.alur-badge{
    display:inline-block;
    background:#ffc107;
    color:#fff;
    padding:8px 18px;
    border-radius:30px;
    font-size:14px;
    margin-bottom:15px;
}

.alur-header h2{
    font-size:34px;
    font-weight:700;
    color:#0f2d52;
}

.alur-header p{
    color:#6b7280;
}

.alur-wrapper{

    display:flex;
    justify-content:space-between;
    position:relative;
    gap:30px;

}

.alur-wrapper::before{

    content:"";
    position:absolute;
    top:50px;
    left:12%;
    right:12%;
    height:3px;
    background:#ffc107;
    z-index:0;

}

.alur-item{

    width:33%;
    text-align:center;
    position:relative;
    z-index:2;

}

.alur-circle{

    width:100px;
    height:100px;
    border-radius:50%;
    background:#fff;
    box-shadow:0 10px 25px rgba(0,0,0,.08);
    display:flex;
    justify-content:center;
    align-items:center;
    margin:auto auto 20px;

}

.alur-circle img{

    width:45px;

}

.step{

    display:inline-block;
    background:#0f2d52;
    color:#fff;
    padding:5px 15px;
    border-radius:20px;
    font-size:13px;
    margin-bottom:15px;

}

.alur-item h4{

    font-weight:700;
    margin-bottom:15px;

}

.alur-item p{

    color:#666;
    line-height:1.7;

}

.rekening-card{

    background:#fff;
    border-radius:15px;
    padding:20px;
    box-shadow:0 8px 20px rgba(0,0,0,.05);

}

.rekening-card hr{

    margin:15px 0;

}
</style>

    