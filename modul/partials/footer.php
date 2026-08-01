<!-- ================= FOOTER ================= -->

<footer class="footer1-section">

    <div class="container1">

        <div class="row align-items-center g-4">
           <!-- Logo -->
<div class="col-lg-4 col-md-12 text-center">

    <img src="img/f1.png"
         alt="Logo STAI YAPERI"
         class="footer1-logo img-fluid">

</div>
            <!-- Kontak -->
          <div class="col-lg-3 col-md-6 footer1-contact">

                <h5 class="footer1-title">
                    Kontak
                </h5>

                <ul class="footer1-list">

                    <li>
                        <i class="fas fa-location-dot"></i>
                        <span>STAI YAPERI CIBINONG</span>
                    </li>

                    <li>
                        <i class="fas fa-envelope"></i>
                        <span>stai.yaperi.cbg@gmail.com</span>
                    </li>

                    <li>
                        <i class="fab fa-whatsapp"></i>
                        <span>+62 8515-697-697-4</span>
                    </li>

                    <li>
                        <i class="fas fa-phone"></i>
                        <span>(021) 837-137-49</span>
                    </li>

                </ul>

            </div>

            <!-- Jam Operasional -->
            <div class="col-lg-4 col-md-6">

                <h5 class="footer2-title">
                    Jam Operasional
                </h5>

                <div class="footer1-hours">

                    <div class="footer1-hours-item">
                        <span>Senin - Selasa</span>
                        <strong>12.00 - 17.00 WIB</strong>
                    </div>

                    <div class="footer1-hours-item">
                        <span>Rabu - Sabtu</span>
                        <strong>10.00 - 18.00 WIB</strong>
                    </div>

                    <div class="footer1-hours-item">
                        <span>Minggu</span>
                        <strong>Tutup</strong>
                    </div>

                </div>

            </div>

        </div>

    </div>

    <!-- Bottom -->

    <div class="footer1-bottom">

        <div class="container">

            <div class="footer1-bottom-content">

                <p>
                    © Copyright 2025
                    <a href="#">STAI YAPERI Cibinong</a>.
                    All Rights Reserved.
                </p>

                <div class="footer1-social">

                    <a href="https://instagram.com/staiyaperi">
                        <i class="fab fa-instagram"></i>
                    </a>

                    <a href="https://web.facebook.com/staiyaperi">
                        <i class="fab fa-facebook-f"></i>
                    </a>

                    <a href="https://staiyaperi.ac.id">
                        <i class="fas fa-globe"></i>
                    </a>

                    <a href="https://www.tiktok.com/@staiyaperi">
                        <i class="fab fa-tiktok"></i>
                    </a>

                </div>

            </div>

        </div>

    </div>

</footer>

<style>
/*==================================================
                    FOOTER 1
==================================================*/
.container1{
    margin-left:2rem;

}
.footer1-section{
    background:#0f172a;
    color:#fff;
    margin-top:80px;
    padding:50px 0 0;
    position:relative;
    overflow:hidden;
}

.footer1-section::before{
    content:"";
    position:absolute;
    top:0;
    left:0;
    width:100%;
    height:4px;
    background:#ffc107;
}

.footer1-brand{
    display:flex;
    align-items:center;
    gap:25px;
}

.footer1-logo{
    width:100%;
    max-width:320px; /* ukuran laptop */
    height:auto;
    display:block;
    margin:auto;
}
.footer1-brand-text h3{
    color:#fff;
    font-size:30px;
    font-weight:700;
    margin-bottom:8px;
}

.footer1-brand-text p{
    color:#cfcfcf;
    margin:0;
    line-height:1.8;
}

.footer1-title{
    color:#ffc107;
    font-size:22px;
    font-weight:700;
    margin-bottom:25px;
    position:relative;
}

.footer1-title::after{
    content:"";
    position:absolute;
    left:0;
    bottom:-8px;
    width:80px;
    height:2px;
    background:#ffc107;
    border-radius:20px;
}
.footer2-title{
    color:#ffc107;
    font-size:22px;
    font-weight:700;
    margin-bottom:25px;
    position:relative;
}

.footer2-title::after{
    content:"";
    position:absolute;
    left:0;
    bottom:-8px;
    width:188px;
    height:2px;
    background:#ffc107;
    border-radius:20px;
}

.footer1-list{
    list-style:none;
    padding:0;
    margin:0;
}

.footer1-list li{
    display:flex;
    align-items:flex-start;
    gap:15px;
    margin-bottom:18px;
    color:#d9d9d9;
    line-height:1.8;
}

.footer1-list li i{
    width:20px;
    color:#ffc107;
    margin-top:5px;
    font-size:18px;
}

.footer1-hours{
    display:flex;
    flex-direction:column;
    gap:15px;
}

.footer1-hours-item{
    position: relative;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 10px;
    gap:10%;
    width:78%;
}

.footer1-hours-item::after{
    content: "";
    position: absolute;
    left: 0;
    bottom: 0;
    width: 105%; /* panjang garis */
    height: 2px;
    background: rgba(255,255,255,.08);
}
.footer1-hours-item span{
    color:#d8d8d8;
}

.footer1-hours-item strong{
    color:#fff;
    font-size:14px;
    font-weight:600;
}

.footer1-bottom{
    margin-top:60px;
    border-top:1px solid rgba(255,255,255,.08);
    padding:22px 0;
}

.footer1-bottom-content{
    display:flex;
    justify-content:space-between;
    align-items:center;
    gap:20px;
}

.footer1-bottom-content p{
    margin:0;
    color:#d7d7d7;
    line-height:1.7;
}

.footer1-bottom-content p a{
    color:#ffc107;
    text-decoration:none;
    transition:.3s;
}

.footer1-bottom-content p a:hover{
    color:#fff;
}

.footer1-social{
    display:flex;
    gap:12px;
}

.footer1-social a{
    width:45px;
    height:45px;
    border-radius:50%;
    display:flex;
    justify-content:center;
    align-items:center;
    background:rgba(255,255,255,.08);
    color:#fff;
    text-decoration:none;
    font-size:18px;
    transition:.35s;
}

.footer1-social a:hover{
    background:#ffc107;
    color:#0f172a;
    transform:translateY(-6px);
}
/* ==========================================
   Tablet (992px ke bawah)
========================================== */
@media (max-width:991.98px){
   .footer1-logo{
    width:100%;
    max-width:400px;
    height:auto;
    display:block;
    margin:0;
}
    .footer1-title,
    .footer2-title{
        text-align:left;
    }

    .footer1-title::after,
    .footer2-title::after{
        left:0;
        transform:none;
    }

    .footer1-list,
    .footer1-hours{
        margin:0;
        max-width:100%;
    }
       .footer1-contact{
        margin-top:-5px;
    }

}
/* ==========================================
   Mobile (768px ke bawah)
========================================== */
@media (max-width:767.98px){

    .footer1-contact{
        margin-top:-5px;
    }
    .footer1-logo{
    width:100%;
    max-width:800px;
    height:auto;
    display:block;
    margin:0;
}

    .footer1-title,
    .footer2-title{
        text-align:left;
        margin-top:0;
    }

    .footer1-title::after,
    .footer2-title::after{
        left:0;
        transform:none;
    }

    .footer1-list,
    .footer1-hours{
        margin:0;
    }

    .footer1-hours-item{
        width:70%;
        flex-direction:row; /* tetap sejajar */
        justify-content:space-between;
        align-items:center;
        margin-left:-10px;
    }
.footer1-hours-item::after{
    content: "";
    position: absolute;
    left: 0;
    bottom: 0;
    width: 100%; /* panjang garis */
    height: 1px;
    background: rgba(202, 196, 196, 0.75);
}
.footer1-title::after{
    content:"";
    position:absolute;
    left:0;
    bottom:-8px;
    width:67px;
    height:2px;
    background:#ffc107;
    border-radius:20px;
}
.footer2-title::after{
    content:"";
    position:absolute;
    left:0;
    bottom:-8px;
    width:150px;
    height:2px;
    background:#ffc107;
    border-radius:20px;
}

 .footer1-bottom-content{
        display:flex;
        flex-direction:column;
        align-items:flex-start;
        text-align:left;
        gap:15px;
    }

    .footer1-bottom-content p{
        order:2;
        font-size:8px;
        width:100%;
    }

    .footer1-social{
        order:1;
        display:flex;
        justify-content:flex-start;
        width:100%;
    }
.footer1-social a{
    width:35px;
    height:35px;
    font-size:12px;
}
}
/* ==========================================
   Mobile Kecil (480px ke bawah)
========================================== */
@media (max-width:480px){

    .container1{
        padding:10px 1px;
    }

    .footer1-logo{
    max-width:300px;
    height:auto;
    display:block;
    margin:0;
    margin-left:-2rem;
}

    .footer1-title,
    .footer2-title{
        font-size:18px;
    }

    .footer1-list li{
        font-size:12px;
    }

    .footer1-hours-item span,
    .footer1-hours-item strong{
        font-size:12px;
    }
    

}
</style>