  <style>
        /*=================================================================
  Services section
==================================================================*/
.services {
  padding: 100px 0 130px;
}
.services .service-block.color-bg {
  background: #ffc107;
  color: #fff;
}
.services .service-block.color-bg i, .services .service-block.color-bg h3, .services .service-block.color-bg p {
  color: #fff;
}
.services .service-block .service-icon {
  margin-bottom: 30px;
}
.services .service-block i {
  font-size: 75px;
  color: #28ABE3;
}
.services .service-block h3 {
  color: #333;
  font-size: 18px;
  text-transform: uppercase;
  font-weight: bold;
}
.services .service-block p {
  font-size: 14px;
  color: #666;
}

/*=================================================================
  Services section 2
==================================================================*/
.service-2 .service-item {
  border: 1px solid #eee;
  margin-bottom: 30px;
  padding: 50px 20px;
  transition: all 0.3s ease 0s;
}
.service-2 .service-item:hover {
  box-shadow: 0 5px 65px 0 rgba(0, 0, 0, 0.15);
  -webkit-box-shadow: 0 5px 65px 0 rgba(0, 0, 0, 0.15);
}
.service-2 .service-item:hover i {
  background: #fff;
  color: #28ABE3;
}
.service-2 .service-item i {
  font-size: 30px;
  display: inline-block;
  background: #ffc107 none repeat scroll 0 0;
  border-radius: 30px;
  box-shadow: 0 5px 6px 0 rgba(0, 0, 0, 0.1);
  color: #fff;
  height: 55px;
  line-height: 55px;
  margin-bottom: 20px;
  width: 55px;
  transition: all 0.3s ease 0s;
}
</style>
    <!-- Start Services Section
==================================== -->
<?php
  $sqloutput=$koneksi->query('SELECT*FROM tb_link');
  $tampil=$sqloutput->fetch_array();

?>

<section class="services" id="services">
  <div class="container">
      <div class="row justify-content-center">
          <div class="col-xl-12 col-lg-8" style="margin-top:-45px;">
            <div class="title text-center">
              <h2>Tata cara Pendaftaran dan Pembayaran Online</h2>
              <div class="border"></div>
              <div class="row mt-5">
                  <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0 ">
                    <div class="service-block p-4 color-bg text-center" style="height:300px;">
                      <div class="service-icon text-center">
                        <i class="tf-ion-ios-copy-outline"></i>
                                    <img src="img/one.png" class="mb-4" alt="icon" style="width:89px;">
                      </div>
                      <p style="font-size:20px; margin-top:-20px;">Membayar biaya pendaftaran seharga Rp 500.000,-</p>
                    </div>
                  </div>

                  <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                    <div class="service-block p-4 text-center">
                      <div class="service-icon text-center">
                        <i class="tf-ion-ios-alarm-outline"></i>
                                    <img src="img/two.png" class="mb-4" alt="icon" style="width:89px;">
                      </div>
                      <p style="font-size:20px; margin-top:-25px;"> Transfer melalui bank</p>
                              <h2> <li style="font-size:16px;">BCA : 1671381667 (moch zaky azima)</li><h2>
                                <li style="font-size:16px; ">BSI : 7124995498 (Muhammad Zaky Azima)</li>
                    </div>
                  </div>

                  <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                    <div class="service-block p-4 color-bg text-center" style="height:300px;">
                      <div class="service-icon text-center">
                        <i class="tf-ion-ios-book-outline"></i>
                                    <img src="img/three.png" class="mb-4" alt="icon" style="width:100px;">
                      </div>
                      <p style="font-size:20px; margin-top:-20px;">Uploud bukti pembayaran di G.form yang sudah kami sediakan</p>
                    </div>
                  </div>
              </div>
              

            </div>
        </div>
      </div>
  </div>
</section>

<style>
    .call-to-action {
    background-color: #ffc107;
    padding: 30px;
    width:1089px;
    margin-left :90px;
    margin-top: -100px;
    }
    *, ::after, ::before {
    box-sizing: border-box;
    }
    div {
    display: block;
}
.btn:not(:disabled):not(.disabled) {
    cursor: pointer;
}
a:link, a:visited {
    text-decoration: none;
}
.warning {
  border-color: white;
  color: white;
}

.warning:hover {
  background: white;
  color: #ffc107;
}
    </style>