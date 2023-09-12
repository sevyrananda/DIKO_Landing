@extends('layout3.app')
@section('content')
<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center" style="background-color:#820000;">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
        <h1>WELCOME TO ANDROMEDA POS</h1>
        <h2>Inventori, Project, dan Payroll TERINTEGRASI</h2>
        <div class="d-flex justify-content-center justify-content-lg-start">
          <a href="#about" class="btn-get-started scrollto">Get Started</a>
        </div>
      </div>
      <div class="col-lg-6 order-1 order-lg-2 hero-img" data-tilt data-aos="zoom-in" data-aos-delay="200">
        <img src="{{ asset('Arsha/assets/img/hero-img.png') }}" class="img-fluid" alt="">
      </div>
    </div>
  </div>
</section><!-- End Hero -->
<main id="main">

  <!-- ======= Clients Section ======= -->
  <section id="clients" class="clients section-bg">
    <div class="container">

      <div class="row" data-aos="zoom-in">

        <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
          <img src="assets/img/clients/client-1.png" class="img-fluid" alt="">
        </div>

        <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
          <img src="assets/img/clients/client-2.png" class="img-fluid" alt="">
        </div>

        <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
          <img src="assets/img/clients/client-3.png" class="img-fluid" alt="">
        </div>

        <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
          <img src="assets/img/clients/client-4.png" class="img-fluid" alt="">
        </div>

        <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
          <img src="assets/img/clients/client-5.png" class="img-fluid" alt="">
        </div>

        <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
          <img src="assets/img/clients/client-6.png" class="img-fluid" alt="">
        </div>

      </div>

    </div>
  </section><!-- End Cliens Section -->

  <!-- ======= About Us Section ======= -->
  <section id="about" class="about">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>About Us</h2>
      </div>

      <div class="row content">
        <div class="col-lg-250">
          <p>
            Software akuntansi untuk memudahkan pemilik bisnis dan akuntan untuk mengerjakan dan menganalisa keuangan lebih cepat, mudah dan akurat. Gratis trial atau demo gratis dengan Tim Andromeda.
          </p>
          <ul>
            <li><i class="ri-check-double-line"></i> Terpercaya</li>
            <li><i class="ri-check-double-line"></i> Akurat</li>
            <li><i class="ri-check-double-line"></i> Mudah Dipahami</li>
          </ul>
        </div>
        <div class="col-lg-6 pt-4 pt-lg-0">
          <a href="#" class="btn-learn-more">Learn More</a>
        </div>
      </div>

    </div>
  </section><!-- End About Us Section -->

  <!-- ======= Why Us Section ======= -->
  <section id="why-us" class="why-us section-bg">
    <div class="container-fluid" data-aos="fade-up">

      <div class="row">

        <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">

          <div class="content">
            <h3><strong>Manfaat Aplikasi ANDROMEDA</strong></h3>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit
            </p>
          </div>

          <div class="accordion-list">
            <ul>
              <li>
                <a data-bs-toggle="collapse" class="collapse" data-bs-target="#accordion-list-1"><span>01</span> Mengimbangi pesatnya perkembangan teknologi, sehingga Koperasi mampu bertahan di era persaingan bsinis maupun ekonomi yang sudah bergantung pada teknologi<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                <div id="accordion-list-1" class="collapse show" data-bs-parent=".accordion-list">
                </div>
              </li>

              <li>
                <a data-bs-toggle="collapse" data-bs-target="#accordion-list-2" class="collapsed"><span>02</span> Memiliki database secara digital sehingga memastikan keberadaan data aman dan terjaga<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                <div id="accordion-list-2" class="collapse" data-bs-parent=".accordion-list">
                </div>
              </li>

              <li>
                <a data-bs-toggle="collapse" data-bs-target="#accordion-list-3" class="collapsed"><span>03</span> Efisiensi biaya operasional seperti cetak kertas <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                <div id="accordion-list-3" class="collapse" data-bs-parent=".accordion-list">
                </div>
              </li>

              <li>
                <a data-bs-toggle="collapse" data-bs-target="#accordion-list-4" class="collapsed"><span>04</span> Kepemilikan informasi tidak terpusat disalah satu orang pengurus saja, karena data bisa diakses melalui aplikasi oleh pihak yang diberikan akses <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                <div id="accordion-list-4" class="collapse" data-bs-parent=".accordion-list">
                </div>
              </li>

              <li>
                <a data-bs-toggle="collapse" data-bs-target="#accordion-list-5" class="collapsed"><span>05</span> Mengurangi adanya Human Error pada saat pencatatan transaksi <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                <div id="accordion-list-5" class="collapse" data-bs-parent=".accordion-list">
                </div>
              </li>

            </ul>
          </div>

        </div>

        <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img" style='background-image: url("assets/img/why-us.png");' data-aos="zoom-in" data-aos-delay="150">&nbsp;</div>
      </div>

    </div>
  </section><!-- End Why Us Section -->


  </div>

  </div>
  </div>

  </div>
  </section><!-- End Skills Section -->

  <!-- ======= Services Section ======= -->
  <section id="services" class="services section-bg">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Services</h2>
        <p>MARSTECH - ANDROMEDA</p>
      </div>

      <div class="row">
        <div class="col-xl-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
          <div class="icon-box">
            <div class="icon"><i class="bx bxl-dribbble"></i></div>
            <h4><a href="">Akuntansi Koperasi dan UKM</a></h4>
            <p>cabang akuntansi yang khusus menangani pencatatan, pengukuran, dan pelaporan keuangan dari koperasi dan usaha mikro, kecil, dan menengah.</p>
          </div>
        </div>

        <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
          <div class="icon-box">
            <div class="icon"><i class="bx bx-file "></i></div>
            <h4><a href="">Aplikasi Simpan Pinjam Gratis</a></h4>
            <p>Akuntansi koperasi adalah suatu sistem pencatatan, pengelolaan, dan pelaporan keuangan yang digunakan oleh koperasi untuk menghasilkan informasi keuangan yang berguna dan akurat dalam mengelola keuangan koperasi.</p>
          </div>
        </div>

        <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="300">
          <div class="icon-box">
            <div class="icon"><i class="bx bx-tachometer"></i></div>
            <h4><a href="">Aplikasi Koperasi Digital</a></h4>
            <p>Aplikasi koperasi digital adalah aplikasi yang dirancang untuk membantu pengelolaan koperasi secara digital.</p>
          </div>
        </div>

        <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="400">
          <div class="icon-box">
            <div class="icon"><i class="bx bx-layer"></i></div>
            <h4><a href="">Laporan Keuangan Koperasi Simpan Pinjam</a></h4>
            <p>Simpan pinjam adalah kegiatan yang dilakukan untuk menghimpun dana dan menyalurkannya melalui kegiatan usaha simpan pinjam dari dan untuk anggota koperasi yang bersangkutan, calon anggota koperasi yang bersangkutan, koperasi lain dan atau anggotanya.</p>
          </div>
        </div>

      </div>

    </div>
  </section><!-- End Services Section -->


  </div>

  </div>
  </section><!-- End Portfolio Section -->

  <!-- ======= Team Section ======= -->
  <section id="team" class="team section-bg">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>TESTIMONIALS</h2>
        <p>Our Client Trust Us</p>
      </div>

      <div class="row">

        <div class="col-lg-6" data-aos="zoom-in" data-aos-delay="100">
          <div class="member d-flex align-items-start">
            <div class="pic"><img src="assets/img/team/team-1.jpg" class="img-fluid" alt=""></div>
            <div class="member-info">
              <h4>Diana, Baitutamwil Berkah Umat</h4>
              <p>Alhamdulillah dengan memakai aplikasi smartcoop ini koperasi kami sangat terbantu data-data jadi lebih rapi dan aksesnya pun mudah sekali. Fitur-fiturya juga sangat membantu kami dalam pembukuan di Anggota koperasi kami juga bisa mengakses simpanannya lewat hp nya masing-masing karena sudah tersedia aplikasi smartcoop di playstore. Sejauh ini kami sangat terbantu dan berterima kasih sekali.</p>
            </div>
          </div>
        </div>

        <div class="col-lg-6 mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="200">
          <div class="member d-flex align-items-start">
            <div class="pic"><img src="assets/img/team/team-2.jpg" class="img-fluid" alt=""></div>
            <div class="member-info">
              <h4>Miarta, Koperasi Gemilang</h4>
              <p>Andromeda memiliki tampilan yang sangat user friendly bahkan dengan saya dan team yang sebelumnya buta dengan keuangan koperasi dapat mengerti dengan mudah. Ditambah aplikasi dijalankan dengan browser online sangat membantu update data secara realtime.</p>
            </div>
          </div>
        </div>

        <div class="col-lg-6 mt-4" data-aos="zoom-in" data-aos-delay="300">
          <div class="member d-flex align-items-start">
            <div class="pic"><img src="assets/img/team/team-3.jpg" class="img-fluid" alt=""></div>
            <div class="member-info">
              <h4>Penny Dwika Wardani, S.E , KSP Mulia</h4>
              <p>QMenurut saya Andromeda mudah sekali untuk diakses baik bagi pengelola hingga para anggota koperasi. Selain itu bagi saya selaku pengelola, saya sangat terbantu dalam pembuatan laporan keuangan karena alumnya jelas dan sangat detail, serta hal itu mempermudah pengawas dalam membaca laporan keuangan yg sudah tersedia. Bagi para anggotapun mereka dapat melihat perhitungan SHU yang mereka dapatkan</p>
            </div>
          </div>
        </div>

        <div class="col-lg-6 mt-4" data-aos="zoom-in" data-aos-delay="400">
          <div class="member d-flex align-items-start">
            <div class="pic"><img src="assets/img/team/team-4.jpg" class="img-fluid" alt=""></div>
            <div class="member-info">
              <h4>Bagas Prakoso, Koperasi Lancar Makmur</h4>
              <p>Menurut saya Andromeda sangat membantu kami dalam input data koperasi, selain alur sistem nya yang mudah dipahami, tampilan nya juga sangat menarik sehingga staff kami tidak bingung untuk mnegoperasikan nya.</p>
            </div>
          </div>
        </div>

      </div>

    </div>
  </section><!-- End Team Section -->

  <!-- ======= Pricing Section ======= -->
  <section id="pricing" class="pricing">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Pricing</h2>
      </div>

      <div class="row">

        <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
          <div class="box">
            <h3>Paket Basic</h3>
            <h4><sup>Rp.</sup>25.000.000</h4>
            <ul>
              <li><i class="bx bx-check"></i>Keanggotaan</li>
              <li><i class="bx bx-check"></i>Simpanan</li>
              <li><i class="bx bx-check"></i>Pinjaman</li>
              <li><i class="bx bx-check"></i>Pembukuan</li>
              <li><i class="bx bx-check"></i>Laporan Keuangan</li>
            </ul>
            <a href="#" class="buy-btn">Get Started</a>
          </div>
        </div>

        <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="200">
          <div class="box featured">
            <h3>Paket Multi Usaha Unit</h3>
            <h4><sup>Rp.</sup>35.000.000</h4>
            <ul>
              <li><i class="bx bx-check"></i>Login Anggota</li>
              <li><i class="bx bx-check"></i>Unit Usaha Pembiayaan</li>
              <li><i class="bx bx-check"></i>Unit Usaha PPOB</li>
              <li><i class="bx bx-check"></i>Fitur Barcode</li>
              <li><i class="bx bx-check"></i>Laporan Unit Usaha</li>
            </ul>
            <a href="#" class="buy-btn">Get Started</a>
          </div>
        </div>

        <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="300">
          <div class="box">
            <h3>Paket Custom Mobile Apps</h3>
            <h4><sup>Rp.</sup>20.000.000</h4>
            <ul>
              <li><i class="bx bx-check"></i>Personalize Apps</li>
              <li><i class="bx bx-check"></i>Publish di Android Playstore</li>
              <li><i class="bx bx-check"></i>Login tanpa perlu kode koperasi</li>
              <li><i class="bx bx-check"></i>Fitur Barcode</li>
              <li><i class="bx bx-check"></i>Free update aplikasi menyesuaikan dengan update aplikasi mobile utama Andromeda selama satu tahun</li>
            </ul>
            <a href="#" class="buy-btn">Get Started</a>
          </div>
        </div>

      </div>

    </div>
  </section><!-- End Pricing Section -->

  <!-- ======= Frequently Asked Questions Section ======= -->
  <section id="faq" class="faq section-bg">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Klien Kami</h2>
      </div>

      <div class="faq-list">
        <ul>
          <li data-aos="fade-up" data-aos-delay="100">
            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-1">Koperasi Bhakti Arthama Fiskal<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
            <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
            </div>
          </li>

          <li data-aos="fade-up" data-aos-delay="200">
            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-2" class="collapsed">Koperasi Karyawan PT.Argapura<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
            <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
            </div>
          </li>

          <li data-aos="fade-up" data-aos-delay="300">
            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-3" class="collapsed">KOPKAR SUMBER SEJAHTERA AGRION<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
            <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
            </div>
          </li>

          <li data-aos="fade-up" data-aos-delay="400">
            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-4" class="collapsed">Koperasi Jasa Baituttamwil Berkah Umat <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
            <div id="faq-list-4" class="collapse" data-bs-parent=".faq-list">
            </div>
          </li>

          <li data-aos="fade-up" data-aos-delay="500">
            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-5" class="collapsed">Koperasi Bali Surya Dewata<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
            <div id="faq-list-5" class="collapse" data-bs-parent=".faq-list">
            </div>
          </li>

        </ul>
      </div>

    </div>
  </section><!-- End Frequently Asked Questions Section -->

  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Contact</h2>
        <p>Hubungi Kontak dibawah ini</p>
      </div>

      <div class="row">

        <div class="col-lg-12 d-flex align-items-stretch">
          <div class="info">
            <h3>ANDROMEDA</h3>
            <p>
              <strong>Office:</strong> Margatama Asri IV No. 3 <br>
              Kota Madiun - Jawa Timur<br>
              <strong> Branch Office:</strong> Perum Griya Gadang Sejahtera Kav. 14<br>
              Gadang - Sukun - Kota Malang - Jawa Timur<br><br>
              <strong>TELP:</strong> 0811-2501-827<br>
              <strong>WA:</strong> 0811-2501-827<br>
              <strong>Email:</strong> cs@marstech.co.id<br>
            </p>

            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3954.428402113363!2d111.54006207413555!3d-7.6369929755328085!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e79bf36978c3bf3%3A0x8c1997902afb269f!2sMARSTECH!5e0!3m2!1sid!2sid!4v1690605880803!5m2!1sid!2sid" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
          </div>

        </div>

      </div>

    </div>
  </section><!-- End Contact Section -->

</main><!-- End #main -->

<style>
  /* My Keyboard Section */
  .keyboard-box {
    position: relative;
    background-color: #0c6efd;
    border-radius: 10px;
    height: 500px;
    transform-style: preserve-3d;
  }

  .keyboard-box::before {
    content: 'MY';
    position: absolute;
    color: #fff;
    font-size: 6em;
    font-weight: bold;
    font-style: italic;
    top: 30px;
    left: 50%;
    transform: translate(-50%, 0);
    opacity: 0;
    transition: 0.5s;
  }

  .keyboard-box:hover::before {
    opacity: 0.2;
  }

  .keyboard-box::after {
    content: 'KEYBOARD';
    position: absolute;
    color: #fff;
    font-size: 4.3em;
    font-weight: bold;
    font-style: italic;
    top: 350px;
    left: 50%;
    transform: translate(-50%, 0);
    opacity: 0;
    transition: 0.5s;
  }

  .keyboard-box:hover::after {
    opacity: 0.2;
  }

  .keyboard-name {
    position: absolute;
    top: 0;
    width: 100%;
    color: #fff;
    text-align: center;
    font-size: 2em;
    opacity: 0;
    transform: translate3d(0, 0, 50px);
    transition: 0.5s;
  }

  .keyboard-box:hover .keyboard-name {
    top: 20px;
    opacity: 1;
  }

  .keyboard-detail-button {
    position: absolute;
    bottom: 0;
    left: 50%;
    transform: translate3d(-50%, 0, 100px);
    opacity: 0;
    transition: 0.5s;
    z-index: 3;
  }

  .keyboard-box:hover .keyboard-detail-button {
    opacity: 1;
    bottom: 20px;
  }

  .keyboard-img {
    position: absolute;
    top: 52%;
    left: 50%;
    transform: translate3d(-50%, -52%, 80px);
    max-width: 350px;
    transition: 0.5s;
    z-index: 2;
  }

  .keyboard-box:hover .keyboard-img {
    transform: translate3d(-50%, -52%, 100px) rotate(5deg) scale(1.2);
  }
</style>
<section id="my-keyboards">
  <div class="container">
    <div class="row text-center mb-3">
      <div class="col">
        <h2>My Keyboards</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6 col-lg-4 mb-3">
        <div class="keyboard-box">
          <h4 class="keyboard-name">Keychron K2</h4>
          <img src="{{ asset('keyboards/3.png') }}" alt="Keychron K3" class="keyboard-img" />
          <a href="#" class="btn btn-light keyboard-detail-button">Show Details</a>
        </div>
      </div>
      <div class="col-md-6 col-lg-4 mb-3">
        <div class="keyboard-box">
          <h4 class="keyboard-name">Womier RGB</h4>
          <img src="{{ asset('keyboards/1.png') }}" alt="Womier RGB" class="keyboard-img" />
          <a href="#" class="btn btn-light keyboard-detail-button">Show Details</a>
        </div>
      </div>
      <div class="col-md-6 col-lg-4 mb-3">
        <div class="keyboard-box">
          <h4 class="keyboard-name">Red Dragon</h4>
          <img src="{{ asset('keyboards/2.png') }}" alt="Red Dragon" class="keyboard-img" />
          <a href="#" class="btn btn-light keyboard-detail-button">Show Details</a>
        </div>
      </div>
    </div>
  </div>
</section>

<script>
  var VanillaTilt = function() {
    "use strict";
    class t {
      constructor(e, i = {}) {
        if (!(e instanceof Node)) throw "Can't initialize VanillaTilt because " + e + " is not a Node.";
        this.width = null, this.height = null, this.clientWidth = null, this.clientHeight = null, this.left = null, this.top = null, this.gammazero = null, this.betazero = null, this.lastgammazero = null, this.lastbetazero = null, this.transitionTimeout = null, this.updateCall = null, this.event = null, this.updateBind = this.update.bind(this), this.resetBind = this.reset.bind(this), this.element = e, this.settings = this.extendSettings(i), this.reverse = this.settings.reverse ? -1 : 1, this.glare = t.isSettingTrue(this.settings.glare), this.glarePrerender = t.isSettingTrue(this.settings["glare-prerender"]), this.fullPageListening = t.isSettingTrue(this.settings["full-page-listening"]), this.gyroscope = t.isSettingTrue(this.settings.gyroscope), this.gyroscopeSamples = this.settings.gyroscopeSamples, this.elementListener = this.getElementListener(), this.glare && this.prepareGlare(), this.fullPageListening && this.updateClientSize(), this.addEventListeners(), this.reset(), this.updateInitialPosition()
      }
      static isSettingTrue(t) {
        return "" === t || !0 === t || 1 === t
      }
      getElementListener() {
        if (this.fullPageListening) return window.document;
        if ("string" == typeof this.settings["mouse-event-element"]) {
          const t = document.querySelector(this.settings["mouse-event-element"]);
          if (t) return t
        }
        return this.settings["mouse-event-element"] instanceof Node ? this.settings["mouse-event-element"] : this.element
      }
      addEventListeners() {
        this.onMouseEnterBind = this.onMouseEnter.bind(this), this.onMouseMoveBind = this.onMouseMove.bind(this), this.onMouseLeaveBind = this.onMouseLeave.bind(this), this.onWindowResizeBind = this.onWindowResize.bind(this), this.onDeviceOrientationBind = this.onDeviceOrientation.bind(this), this.elementListener.addEventListener("mouseenter", this.onMouseEnterBind), this.elementListener.addEventListener("mouseleave", this.onMouseLeaveBind), this.elementListener.addEventListener("mousemove", this.onMouseMoveBind), (this.glare || this.fullPageListening) && window.addEventListener("resize", this.onWindowResizeBind), this.gyroscope && window.addEventListener("deviceorientation", this.onDeviceOrientationBind)
      }
      removeEventListeners() {
        this.elementListener.removeEventListener("mouseenter", this.onMouseEnterBind), this.elementListener.removeEventListener("mouseleave", this.onMouseLeaveBind), this.elementListener.removeEventListener("mousemove", this.onMouseMoveBind), this.gyroscope && window.removeEventListener("deviceorientation", this.onDeviceOrientationBind), (this.glare || this.fullPageListening) && window.removeEventListener("resize", this.onWindowResizeBind)
      }
      destroy() {
        clearTimeout(this.transitionTimeout), null !== this.updateCall && cancelAnimationFrame(this.updateCall), this.reset(), this.removeEventListeners(), this.element.vanillaTilt = null, delete this.element.vanillaTilt, this.element = null
      }
      onDeviceOrientation(t) {
        if (null === t.gamma || null === t.beta) return;
        this.updateElementPosition(), this.gyroscopeSamples > 0 && (this.lastgammazero = this.gammazero, this.lastbetazero = this.betazero, null === this.gammazero ? (this.gammazero = t.gamma, this.betazero = t.beta) : (this.gammazero = (t.gamma + this.lastgammazero) / 2, this.betazero = (t.beta + this.lastbetazero) / 2), this.gyroscopeSamples -= 1);
        const e = this.settings.gyroscopeMaxAngleX - this.settings.gyroscopeMinAngleX,
          i = this.settings.gyroscopeMaxAngleY - this.settings.gyroscopeMinAngleY,
          s = e / this.width,
          n = i / this.height,
          l = (t.gamma - (this.settings.gyroscopeMinAngleX + this.gammazero)) / s,
          a = (t.beta - (this.settings.gyroscopeMinAngleY + this.betazero)) / n;
        null !== this.updateCall && cancelAnimationFrame(this.updateCall), this.event = {
          clientX: l + this.left,
          clientY: a + this.top
        }, this.updateCall = requestAnimationFrame(this.updateBind)
      }
      onMouseEnter() {
        this.updateElementPosition(), this.element.style.willChange = "transform", this.setTransition()
      }
      onMouseMove(t) {
        null !== this.updateCall && cancelAnimationFrame(this.updateCall), this.event = t, this.updateCall = requestAnimationFrame(this.updateBind)
      }
      onMouseLeave() {
        this.setTransition(), this.settings.reset && requestAnimationFrame(this.resetBind)
      }
      reset() {
        this.event = {
          clientX: this.left + this.width / 2,
          clientY: this.top + this.height / 2
        }, this.element && this.element.style && (this.element.style.transform = `perspective(${this.settings.perspective}px) ` + "rotateX(0deg) rotateY(0deg) scale3d(1, 1, 1)"), this.resetGlare()
      }
      resetGlare() {
        this.glare && (this.glareElement.style.transform = "rotate(180deg) translate(-50%, -50%)", this.glareElement.style.opacity = "0")
      }
      updateInitialPosition() {
        if (0 === this.settings.startX && 0 === this.settings.startY) return;
        this.onMouseEnter(), this.fullPageListening ? this.event = {
          clientX: (this.settings.startX + this.settings.max) / (2 * this.settings.max) * this.clientWidth,
          clientY: (this.settings.startY + this.settings.max) / (2 * this.settings.max) * this.clientHeight
        } : this.event = {
          clientX: this.left + (this.settings.startX + this.settings.max) / (2 * this.settings.max) * this.width,
          clientY: this.top + (this.settings.startY + this.settings.max) / (2 * this.settings.max) * this.height
        };
        let t = this.settings.scale;
        this.settings.scale = 1, this.update(), this.settings.scale = t, this.resetGlare()
      }
      getValues() {
        let t, e;
        return this.fullPageListening ? (t = this.event.clientX / this.clientWidth, e = this.event.clientY / this.clientHeight) : (t = (this.event.clientX - this.left) / this.width, e = (this.event.clientY - this.top) / this.height), t = Math.min(Math.max(t, 0), 1), e = Math.min(Math.max(e, 0), 1), {
          tiltX: (this.reverse * (this.settings.max - t * this.settings.max * 2)).toFixed(2),
          tiltY: (this.reverse * (e * this.settings.max * 2 - this.settings.max)).toFixed(2),
          percentageX: 100 * t,
          percentageY: 100 * e,
          angle: Math.atan2(this.event.clientX - (this.left + this.width / 2), -(this.event.clientY - (this.top + this.height / 2))) * (180 / Math.PI)
        }
      }
      updateElementPosition() {
        let t = this.element.getBoundingClientRect();
        this.width = this.element.offsetWidth, this.height = this.element.offsetHeight, this.left = t.left, this.top = t.top
      }
      update() {
        let t = this.getValues();
        this.element.style.transform = "perspective(" + this.settings.perspective + "px) rotateX(" + ("x" === this.settings.axis ? 0 : t.tiltY) + "deg) rotateY(" + ("y" === this.settings.axis ? 0 : t.tiltX) + "deg) scale3d(" + this.settings.scale + ", " + this.settings.scale + ", " + this.settings.scale + ")", this.glare && (this.glareElement.style.transform = `rotate(${t.angle}deg) translate(-50%, -50%)`, this.glareElement.style.opacity = `${t.percentageY*this.settings["max-glare"]/100}`), this.element.dispatchEvent(new CustomEvent("tiltChange", {
          detail: t
        })), this.updateCall = null
      }
      prepareGlare() {
        if (!this.glarePrerender) {
          const t = document.createElement("div");
          t.classList.add("js-tilt-glare");
          const e = document.createElement("div");
          e.classList.add("js-tilt-glare-inner"), t.appendChild(e), this.element.appendChild(t)
        }
        this.glareElementWrapper = this.element.querySelector(".js-tilt-glare"), this.glareElement = this.element.querySelector(".js-tilt-glare-inner"), this.glarePrerender || (Object.assign(this.glareElementWrapper.style, {
          position: "absolute",
          top: "0",
          left: "0",
          width: "100%",
          height: "100%",
          overflow: "hidden",
          "pointer-events": "none"
        }), Object.assign(this.glareElement.style, {
          position: "absolute",
          top: "50%",
          left: "50%",
          "pointer-events": "none",
          "background-image": "linear-gradient(0deg, rgba(255,255,255,0) 0%, rgba(255,255,255,1) 100%)",
          transform: "rotate(180deg) translate(-50%, -50%)",
          "transform-origin": "0% 0%",
          opacity: "0"
        }), this.updateGlareSize())
      }
      updateGlareSize() {
        if (this.glare) {
          const t = 2 * (this.element.offsetWidth > this.element.offsetHeight ? this.element.offsetWidth : this.element.offsetHeight);
          Object.assign(this.glareElement.style, {
            width: `${t}px`,
            height: `${t}px`
          })
        }
      }
      updateClientSize() {
        this.clientWidth = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth, this.clientHeight = window.innerHeight || document.documentElement.clientHeight || document.body.clientHeight
      }
      onWindowResize() {
        this.updateGlareSize(), this.updateClientSize()
      }
      setTransition() {
        clearTimeout(this.transitionTimeout), this.element.style.transition = this.settings.speed + "ms " + this.settings.easing, this.glare && (this.glareElement.style.transition = `opacity ${this.settings.speed}ms ${this.settings.easing}`), this.transitionTimeout = setTimeout(() => {
          this.element.style.transition = "", this.glare && (this.glareElement.style.transition = "")
        }, this.settings.speed)
      }
      extendSettings(t) {
        let e = {
            reverse: !1,
            max: 15,
            startX: 0,
            startY: 0,
            perspective: 1e3,
            easing: "cubic-bezier(.03,.98,.52,.99)",
            scale: 1,
            speed: 300,
            transition: !0,
            axis: null,
            glare: !1,
            "max-glare": 1,
            "glare-prerender": !1,
            "full-page-listening": !1,
            "mouse-event-element": null,
            reset: !0,
            gyroscope: !0,
            gyroscopeMinAngleX: -45,
            gyroscopeMaxAngleX: 45,
            gyroscopeMinAngleY: -45,
            gyroscopeMaxAngleY: 45,
            gyroscopeSamples: 10
          },
          i = {};
        for (var s in e)
          if (s in t) i[s] = t[s];
          else if (this.element.hasAttribute("data-tilt-" + s)) {
          let t = this.element.getAttribute("data-tilt-" + s);
          try {
            i[s] = JSON.parse(t)
          } catch (e) {
            i[s] = t
          }
        } else i[s] = e[s];
        return i
      }
      static init(e, i) {
        e instanceof Node && (e = [e]), e instanceof NodeList && (e = [].slice.call(e)), e instanceof Array && e.forEach(e => {
          "vanillaTilt" in e || (e.vanillaTilt = new t(e, i))
        })
      }
    }
    return "undefined" != typeof document && (window.VanillaTilt = t, t.init(document.querySelectorAll("[data-tilt]"))), t
  }();
</script>
<script type="text/javascript">
  VanillaTilt.init(document.querySelectorAll('.keyboard-box'), {
    max: 35,
    speed: 1000,
    glare: true,
  });
</script>
@endsection