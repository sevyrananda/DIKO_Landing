@extends('layout.app')
@section('content')

<section id="hero-animated" class="hero-animated d-flex align-items-center" style="background-color:#C3E2FF;">
  <div class="container d-flex flex-column justify-content-center align-items-center text-center position-relative" data-aos="zoom-out" style="color : #144B9A;">
    <!-- <img src="assets/img/hero-carousel/hero-carousel-3.svg" class="img-fluid animated"> -->
    <p style="font-size: 15px; font-stretch: expanded;">
     
    </p>
    <p style="font-size: 45px; font-weight: bold; ">
    Selamat Datang di solusi terbaik untuk manajemen keuangan bisnis Anda. Temukan kemudahan dengan aplikasi akuntansi kami.</p>
    <p style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size: 20px;">Integrasi canggih: Inventori, Proyek, dan Penggajian, semua dalam satu solusi andal!</p>
    <div class="d-flex">
      <a href="#about" class="btn-get-started scrollto">Get Started</a>
      <a href="https://youtu.be/4ZoWQeCO0CI" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Watch
          Video</span></a>
    </div>
    <div>
      <img src="HeroBiz/assets/img/diko-sp-2.png" alt="" style="width: 900px;">
    </div>
  </div>
</section>

<main id="main">

  <!-- ======= Featured Services Section ======= -->
  <section id="featured-services" class="featured-services">
    <div class="container">

      <div class="row gy-4">

        <div class="col-xl-3 col-md-6 d-flex" data-aos="zoom-out">
          <div class="service-item position-relative">
            <div class="icon">
              <img src="{{url('HeroBiz')}}/time-management.png" alt="manage" width="50" height="50">
              <!-- <i class="bi bi-activity icon"></i> -->
            </div>
            <!-- <h4><a href="" class="stretched-link">Lorem Ipsum</a></h4> -->
            <p style="font-family: Verdana, Geneva, Tahoma, sans-serif;">Pengelolaan keuangan menjadi lebih efisien
              dan tertib</p>
          </div>
        </div><!-- End Service Item -->

        <div class="col-xl-3 col-md-6 d-flex" data-aos="zoom-out" data-aos-delay="200">
          <div class="service-item position-relative">
            <div class="icon">
              <img src="{{url('HeroBiz')}}/global-network.png" alt="network" width="45" height="45">
              <!-- <i class="bi bi-bounding-box-circles icon"></i> -->
            </div>
            <!-- <h4><a href="" class="stretched-link">Sed ut perspici</a></h4> -->
            <p style="font-family: Verdana, Geneva, Tahoma, sans-serif;">Solusi terpadu untuk mengelola jaringan
              cabang</p>
          </div>
        </div><!-- End Service Item -->

        <div class="col-xl-3 col-md-6 d-flex" data-aos="zoom-out" data-aos-delay="400">
          <div class="service-item position-relative">
            <div class="icon">
              <img src="{{url('HeroBiz')}}/transaction.png" alt="transaction" width="45" height="45">
              <!-- <i class="bi bi-calendar4-week icon"></i> -->
            </div>
            <!-- <h4><a href="" class="stretched-link">Magni Dolores</a></h4> -->
            <p style="font-family: Verdana, Geneva, Tahoma, sans-serif;">Proses transaksi bisnis lebih lancar dan
              instan</p>
          </div>
        </div><!-- End Service Item -->

        <div class="col-xl-3 col-md-6 d-flex" data-aos="zoom-out" data-aos-delay="600">
          <div class="service-item position-relative">
            <div class="icon">
              <!-- <i class="bi bi-broadcast icon"></i> -->
              <img src="{{url('HeroBiz')}}/responsive-design.png" alt="device" width="45" height="45">
            </div>
            <!-- <h4><a href="" class="stretched-link">Nemo Enim</a></h4> -->
            <p style="font-family: Verdana, Geneva, Tahoma, sans-serif;">Nikmati kemudahan akses melalui semua
              perangkat</p>
          </div>
        </div><!--End Service Item-->

      </div>

    </div>
  </section><!-- End Featured Services Section -->

  <!-- ======= About Section ======= -->
  <section id="about" class="about">
    <div class="container" data-aos="fade-up">

      <div class="section-header">
        <h2 style=" font-family: Verdana, Geneva, Tahoma, sans-serif;">About Us</h2>
        <p style="font-family: Verdana, Geneva, Tahoma, sans-serif;">
        Selamat datang di Layanan Simpan Pinjam Terbaik kami!
        Kami adalah teman finansial Anda, siap membantu Anda meraih sukses dan impian Anda. #ProspekGemilang #SuksesAndaAdalahMisiKami
        </p>
      </div>

      <div class="row g-4 g-lg-5" data-aos="fade-up" data-aos-delay="200">

        <!-- <div class="col-lg-5">
            <div class="about-img">
              <img src="assets/img/about.jpg" class="img-fluid" alt="">
            </div>
          </div> -->

        <!-- <div class="col-lg-7">
            <h3 class="pt-0 pt-lg-5">Neque officiis dolore maiores et exercitationem quae est seda lidera pat claero
            </h3> -->

        <!-- Tabs -->
        <!-- <ul class="nav nav-pills mb-3">
              <li><a class="nav-link active" data-bs-toggle="pill" href="#tab1">Saepe fuga</a></li>
              <li><a class="nav-link" data-bs-toggle="pill" href="#tab2">Voluptates</a></li>
              <li><a class="nav-link" data-bs-toggle="pill" href="#tab3">Corrupti</a></li>
            </ul>End Tabs -->

        <!-- Tab Content -->
        <!-- <div class="tab-content">

              <div class="tab-pane fade show active" id="tab1">

                <p class="fst-italic">Consequuntur inventore voluptates consequatur aut vel et. Eos doloribus expedita.
                  Sapiente atque consequatur minima nihil quae aspernatur quo suscipit voluptatem.</p>

                <div class="d-flex align-items-center mt-4">
                  <i class="bi bi-check2"></i>
                  <h4>Repudiandae rerum velit modi et officia quasi facilis</h4>
                </div>
                <p>Laborum omnis voluptates voluptas qui sit aliquam blanditiis. Sapiente minima commodi dolorum non
                  eveniet magni quaerat nemo et.</p>

                <div class="d-flex align-items-center mt-4">
                  <i class="bi bi-check2"></i>
                  <h4>Incidunt non veritatis illum ea ut nisi</h4>
                </div>
                <p>Non quod totam minus repellendus autem sint velit. Rerum debitis facere soluta tenetur. Iure
                  molestiae assumenda sunt qui inventore eligendi voluptates nisi at. Dolorem quo tempora. Quia et
                  perferendis.</p>

                <div class="d-flex align-items-center mt-4">
                  <i class="bi bi-check2"></i>
                  <h4>Omnis ab quia nemo dignissimos rem eum quos..</h4>
                </div>
                <p>Eius alias aut cupiditate. Dolor voluptates animi ut blanditiis quos nam. Magnam officia aut ut alias
                  quo explicabo ullam esse. Sunt magnam et dolorem eaque magnam odit enim quaerat. Vero error error
                  voluptatem eum.</p>

              </div>End Tab 1 Content -->

        <!-- <div class="tab-pane fade show" id="tab2"> -->

        <!-- <p class="fst-italic">Consequuntur inventore voluptates consequatur aut vel et. Eos doloribus expedita. -->
        <!-- Sapiente atque consequatur minima nihil quae aspernatur quo suscipit voluptatem.</p> -->

        <!-- <div class="d-flex align-items-center mt-4"> -->
        <!-- <i class="bi bi-check2"></i> -->
        <!-- <h4>Repudiandae rerum velit modi et officia quasi facilis</h4> -->
        <!-- </div>
                <p>Laborum omnis voluptates voluptas qui sit aliquam blanditiis. Sapiente minima commodi dolorum non -->
        <!-- eveniet magni quaerat nemo et.</p> -->

        <!-- <div class="d-flex align-items-center mt-4">
                  <i class="bi bi-check2"></i>
                  <h4>Incidunt non veritatis illum ea ut nisi</h4>
                </div>
                <p>Non quod totam minus repellendus autem sint velit. Rerum debitis facere soluta tenetur. Iure
                  molestiae assumenda sunt qui inventore eligendi voluptates nisi at. Dolorem quo tempora. Quia et
                  perferendis.</p> -->

        <!-- <div class="d-flex align-items-center mt-4">
                  <i class="bi bi-check2"></i>
                  <h4>Omnis ab quia nemo dignissimos rem eum quos..</h4>
                </div>
                <p>Eius alias aut cupiditate. Dolor voluptates animi ut blanditiis quos nam. Magnam officia aut ut alias
                  quo explicabo ullam esse. Sunt magnam et dolorem eaque magnam odit enim quaerat. Vero error error
                  voluptatem eum.</p> -->

        <!-- </div>End Tab 2 Content -->

        <!-- <div class="tab-pane fade show" id="tab3">

                <p class="fst-italic">Consequuntur inventore voluptates consequatur aut vel et. Eos doloribus expedita.
                  Sapiente atque consequatur minima nihil quae aspernatur quo suscipit voluptatem.</p> -->

        <!-- <div class="d-flex align-items-center mt-4">
                  <i class="bi bi-check2"></i>
                  <h4>Repudiandae rerum velit modi et officia quasi facilis</h4>
                </div>
                <p>Laborum omnis voluptates voluptas qui sit aliquam blanditiis. Sapiente minima commodi dolorum non
                  eveniet magni quaerat nemo et.</p> -->

        <!-- <div class="d-flex align-items-center mt-4">
                  <i class="bi bi-check2"></i>
                  <h4>Incidunt non veritatis illum ea ut nisi</h4>
                </div>
                <p>Non quod totam minus repellendus autem sint velit. Rerum debitis facere soluta tenetur. Iure
                  molestiae assumenda sunt qui inventore eligendi voluptates nisi at. Dolorem quo tempora. Quia et
                  perferendis.</p> -->

        <!-- <div class="d-flex align-items-center mt-4">
                  <i class="bi bi-check2"></i>
                  <h4>Omnis ab quia nemo dignissimos rem eum quos..</h4>
                </div>
                <p>Eius alias aut cupiditate. Dolor voluptates animi ut blanditiis quos nam. Magnam officia aut ut alias
                  quo explicabo ullam esse. Sunt magnam et dolorem eaque magnam odit enim quaerat. Vero error error
                  voluptatem eum.</p> -->

        <!-- </div>End Tab 3 Content -->

        <!-- </div> -->

        <!-- </div> -->

      </div>

    </div>
  </section><!-- End About Section -->

  <!-- ======= Clients Section ======= -->
  <!-- <section id="clients" class="clients">
      <div class="container" data-aos="zoom-out">

        <div class="clients-slider swiper">
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><img src="assets/img/clients/client-1.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-2.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-3.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-4.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-5.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-6.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-7.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-8.png" class="img-fluid" alt=""></div>
          </div>
        </div>

      </div>
    </section>End Clients Section -->

  <!-- ======= Call To Action Section ======= -->
  <!-- <section id="cta" class="cta">
      <div class="container" data-aos="zoom-out">

        <div class="row g-5">

          <div class="col-lg-8 col-md-6 content d-flex flex-column justify-content-center order-last order-md-first">
            <h3>Alias sunt quas <em>Cupiditate</em> oluptas hic minima</h3>
            <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
              Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est
              laborum.</p>
            <a class="cta-btn align-self-start" href="#">Call To Action</a>
          </div>

          <div class="col-lg-4 col-md-6 order-first order-md-last d-flex align-items-center">
            <div class="img">
              <img src="assets/img/cta.jpg" alt="" class="img-fluid">
            </div>
          </div>

        </div>

      </div>
    </section>End Call To Action Section -->

  <!-- ======= On Focus Section ======= -->
  <!-- <section id="onfocus" class="onfocus">
      <div class="container-fluid p-0" data-aos="fade-up">

        <div class="row g-0">
          <div class="col-lg-6 video-play position-relative">
            <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox play-btn"></a>
          </div>
          <div class="col-lg-6">
            <div class="content d-flex flex-column justify-content-center h-100">
              <h3>Voluptatem dignissimos provident quasi corporis</h3>
              <p class="fst-italic">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore
                magna aliqua.
              </p>
              <ul>
                <li><i class="bi bi-check-circle"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                <li><i class="bi bi-check-circle"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                <li><i class="bi bi-check-circle"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
                  aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla
                  pariatur.</li>
              </ul>
              <a href="#" class="read-more align-self-start"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
            </div>
          </div>
        </div>

      </div>
    </section>End On Focus Section -->

  <!-- ======= Features Section ======= -->
  <section id="features" class="features">
    <div class="container" data-aos="fade-up">

      <ul class="nav nav-tabs row gy-4 d-flex justify-content-center">

        <li class="nav-item col-6 col-md-4 col-lg-2">
          <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#tab-1">
          <i class="bi bi-braces-asterisk color-cyan"></i>
            <!-- <img src="{{url('HeroBiz')}}/integration.png" alt="integration" width="50" height="50"> -->
            <h4>Sekali Bayar</h4>
          </a>
        </li><!-- End Tab 1 Nav -->

        <li class="nav-item col-6 col-md-4 col-lg-2">
          <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-2">
          <i class="bi bi-shield-check color-teal"></i>
            <!-- <img src="{{url('HeroBiz')}}/shield.png" alt="monitor" width="50" height="50"> -->
            <h4>Keamanan</h4>
          </a>
        </li><!-- End Tab 2 Nav -->

        <li class="nav-item col-6 col-md-4 col-lg-2">
          <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-3">
          <i class="bi bi-binoculars color-indigo"></i>
            <!-- <img src="{{url('HeroBiz')}}/monitor.png" alt="monitor" width="50" height="50"> -->
            <h4>Pemantauan</h4>
          </a>
        </li><!-- End Tab 3 Nav -->

        <li class="nav-item col-6 col-md-4 col-lg-2">
          <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-4">
          <i class="bi bi-clock-history color-red"></i>
            <!-- <img src="{{url('HeroBiz')}}/stopwatch.png" alt="monitor" width="50" height="50"> -->
            <h4>RealTime</h4>
          </a>
        </li><!-- End Tab 4 Nav -->

        <!-- <li class="nav-item col-6 col-md-4 col-lg-2">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-5">
              <i class="bi bi-easel color-blue"></i>
              <h4>Adipiscing</h4>
            </a>
          </li>End Tab 5 Nav -->

        <!-- <li class="nav-item col-6 col-md-4 col-lg-2">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-6">
              <i class="bi bi-map color-orange"></i>
              <h4>Reprehit</h4>
            </a>
          </li>End Tab 6 Nav -->

      </ul>

      <div class="tab-content">

        <div class="tab-pane active show" id="tab-1">
          <div class="row gy-4">
            <div class="col-lg-8 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="100">
              <h3>Kemudahan Akses Pembayaran</h3>
              <p style="font-size: 20px; color: darkgray; font-family:Verdana, Geneva, Tahoma, sans-serif;">
              Sebuah opsi pembayaran di mana pengguna hanya perlu membayar sekali untuk mendapatkan akses atau manfaat tertentu tanpa harus berlangganan atau membayar secara berkala. 
              Ini adalah konsep keuangan yang bertentangan dengan model bisnis berlangganan atau pembayaran berulang seperti bulanan atau tahunan.
              </p>
              <!-- <ul>
                  <li><i class="bi bi-check-circle-fill"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.
                  </li>
                  <li><i class="bi bi-check-circle-fill"></i> Duis aute irure dolor in reprehenderit in voluptate velit.
                  </li>
                  <li><i class="bi bi-check-circle-fill"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat
                    nulla pariatur.</li>
                </ul> -->
              <!-- <p>
                  Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                  voluptate
                  velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,
                  sunt in
                  culpa qui officia deserunt mollit anim id est laborum
                </p> -->
            </div>
            <div class="col-lg-4 order-1 order-lg-2 text-center" data-aos="fade-up" data-aos-delay="200">

              <img src="{{url('HeroBiz')}}/assets/img/new-features-3.png" alt="" class="img-fluid" style="width:200px">
            </div>
          </div>
        </div><!-- End Tab Content 1 -->

        <div class="tab-pane" id="tab-2">
          <div class="row gy-4">
            <div class="col-lg-8 order-2 order-lg-1">
              <h3>Keamanan Data Terjaga</h3>
              <p style="font-size: 20px; color: darkgray; font-family:Verdana, Geneva, Tahoma, sans-serif;">
                Kenyamanan Anda dalam mengakses data di DikoSP menjadi prioritas utama kami. Kami menggunakan sistem
                enkripsi modern dan proteksi data yang kuat untuk memastikan keamanan data Anda tanpa memerlukan
                sertifikat.
              </p>

              <!-- <p class="fst-italic">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                  dolore
                  magna aliqua.
                </p> -->
              <!-- <ul>
                  <li><i class="bi bi-check-circle-fill"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.
                  </li>
                  <li><i class="bi bi-check-circle-fill"></i> Duis aute irure dolor in reprehenderit in voluptate velit.
                  </li>
                  <li><i class="bi bi-check-circle-fill"></i> Provident mollitia neque rerum asperiores dolores quos qui
                    a. Ipsum neque dolor voluptate nisi sed.</li>
                  <li><i class="bi bi-check-circle-fill"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat
                    nulla pariatur.</li>
                </ul> -->
            </div>
            <div class="col-lg-4 order-1 order-lg-2 text-center">
              <img src="{{url('HeroBiz')}}/assets/img/new-features-1.png" alt="" class="img-fluid" style="width:200px">
            </div>
          </div>
        </div><!-- End Tab Content 2 -->

        <div class="tab-pane" id="tab-3">
          <div class="row gy-4">
            <div class="col-lg-8 order-2 order-lg-1">
              <h3>Pantau Koperasi</h3>
              <p style="font-size: 20px; color: darkgray; font-family:Verdana, Geneva, Tahoma, sans-serif;">
                Anda dapat dengan mudah memantau tentang arus kas, keuntungan, dan statistik. Dengan pemantauan koperasi yang akurat, dpaat mengidentifikasi peluang pertumbuhan dan mengatasi masalah dengan cepat.
              </p>
              <!-- <ul>
                  <li><i class="bi bi-check-circle-fill"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.
                  </li>
                  <li><i class="bi bi-check-circle-fill"></i> Duis aute irure dolor in reprehenderit in voluptate velit.
                  </li>
                  <li><i class="bi bi-check-circle-fill"></i> Provident mollitia neque rerum asperiores dolores quos qui
                    a. Ipsum neque dolor voluptate nisi sed.</li>
                </ul> -->
              <!-- <p class="fst-italic">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                  dolore
                  magna aliqua.
                </p> -->
            </div>
            <div class="col-lg-4 order-1 order-lg-2 text-center">

              <img src="{{url('HeroBiz')}}/assets/img/new-features-2.png" alt="" class="img-fluid" style="width:200px">
            </div>
          </div>
        </div><!-- End Tab Content 3 -->

        <div class="tab-pane" id="tab-4">
          <div class="row gy-4">
            <div class="col-lg-8 order-2 order-lg-1">
              <h3>Pengelolaan Simpan Pinjam yang Efisien</h3>
              <p style="font-size: 20px; color: darkgray; font-family:Verdana, Geneva, Tahoma, sans-serif;">
                Simpan Pinjam dapat Anda kelola dengan mudah dan efisien secara real-time. Nikmati kemudahan pengingat
                jatuh tempo untuk memastikan rencana keuangan Anda tetap teratur dan terukur
              </p>
              <!-- <p class="fst-italic">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                  dolore
                  magna aliqua.
                </p>
                <ul>
                  <li><i class="bi bi-check-circle-fill"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.
                  </li>
                  <li><i class="bi bi-check-circle-fill"></i> Duis aute irure dolor in reprehenderit in voluptate velit.
                  </li>
                  <li><i class="bi bi-check-circle-fill"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat
                    nulla pariatur.</li>
                </ul> -->
            </div>
            <div class="col-lg-4 order-1 order-lg-2 text-center">
              <img src="{{url('HeroBiz')}}/assets/img/new-features-4.png" alt="" class="img-fluid" style="width:200px">
            </div>
          </div>
        </div><!-- End Tab Content 4 -->

        <div class="tab-pane" id="tab-5">
          <div class="row gy-4">
            <div class="col-lg-8 order-2 order-lg-1">
              <h3>Adipiscing</h3>
              <p>
                Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                voluptate
                velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,
                sunt in
                culpa qui officia deserunt mollit anim id est laborum
              </p>
              <p class="fst-italic">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore
                magna aliqua.
              </p>
              <ul>
                <li><i class="bi bi-check-circle-fill"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.
                </li>
                <li><i class="bi bi-check-circle-fill"></i> Duis aute irure dolor in reprehenderit in voluptate velit.
                </li>
                <li><i class="bi bi-check-circle-fill"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.
                  Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat
                  nulla pariatur.</li>
              </ul>
            </div>
            <div class="col-lg-4 order-1 order-lg-2 text-center">
              <img src="{{url('HeroBiz')}}/assets/img/features-5.svg" alt="" class="img-fluid">
            </div>
          </div>
        </div><!-- End Tab Content 5 -->

        <div class="tab-pane" id="tab-6">
          <div class="row gy-4">
            <div class="col-lg-8 order-2 order-lg-1">
              <h3>Reprehit</h3>
              <p>
                Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                voluptate
                velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,
                sunt in
                culpa qui officia deserunt mollit anim id est laborum
              </p>
              <p class="fst-italic">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore
                magna aliqua.
              </p>
              <ul>
                <li><i class="bi bi-check-circle-fill"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.
                </li>
                <li><i class="bi bi-check-circle-fill"></i> Duis aute irure dolor in reprehenderit in voluptate velit.
                </li>
                <li><i class="bi bi-check-circle-fill"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.
                  Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat
                  nulla pariatur.</li>
              </ul>
            </div>
            <div class="col-lg-4 order-1 order-lg-2 text-center">
              <img src="{{url('HeroBiz')}}/assets/img/features-6.svg" alt="" class="img-fluid">
            </div>
          </div>
        </div><!-- End Tab Content 6 -->

      </div>

    </div>
  </section>

  <!-- ======= Services Section ======= -->
  <section id="services" class="services">
    <div class="container" data-aos="fade-up">

      <div class="section-header">
        <h2 style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-weight: 500;">Fitur-fitur terbaik kami akan mempermudah bisnis Anda.</h2>
        <p style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size: 16px; color: #666;">Perhitungan Akurat,
          Keputusan Bijak, Produk Akuntansi Terpercaya</p>
      </div>

      <div class="row gy-5">

        <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
          <div class="service-item">
            <div class="img">
              <img src="{{url('HeroBiz')}}/assets/img/register.jpg" class="img-fluid" alt="">
            </div>
            <div class="details position-relative">
              <div class="icon">
                <i class="bi bi-search"></i>
              </div>
              <a href="#" class="stretched-link">
                <h3>Cari Register Nasabah</h3>
              </a>
              <p> Identifikasi dan kelola data nasabah dengan cepat dan akurat.
              </p>
            </div>
          </div>
        </div><!-- End Service Item -->

        <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="300">
          <div class="service-item">
            <div class="img">
              <img src="{{url('HeroBiz')}}/assets/img/kas.jpg" class="img-fluid" alt="">
            </div>
            <div class="details position-relative">
              <div class="icon">
                <i class="bi bi-arrow-up"></i>
                <i class="bi bi-arrow-down"></i>
              </div>
              <a href="#" class="stretched-link">
                <h3>Kas Bank</h3>
              </a>
              <p>Mencatat transaksi uang tunai masuk dan keluar untuk melacak arus kas dan memudahkan pengelolaan keuangan.</p>
            </div>
          </div>
        </div><!-- End Service Item -->

        <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="400">
          <div class="service-item">
            <div class="img">
              <img src="{{url('HeroBiz')}}/assets/img/jadwal angsuran.jpg" class="img-fluid" alt="">
            </div>
            <div class="details position-relative">
              <div class="icon">
                <i class="bi bi-chart-bar"></i> <!-- Ikon grafik batang -->
              </div>
              <a href="#" class="stretched-link">
                <h3>Jadwal Angsuran</h3>
              </a>
              <p> Merencanakan jadwal pembayaran, ketepatan pembayaran dan transparasi berapa total jumlah yang harus dibayarkan selama masa pinjaman</p>
            </div>
          </div>
        </div><!-- End Service Item -->

        <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="500">
          <div class="service-item">
            <div class="img">
              <img src="{{url('HeroBiz')}}/assets/img/buku simpanan.jpg" class="img-fluid" alt="">
            </div>
            <div class="details position-relative">
              <div class="icon">
                <i class="bi bi-bounding-box-circles"></i>
              </div>
              <a href="#" class="stretched-link">
                <h3>Buku Simpanan</h3>
              </a>
              <p>Membantu nasabah dalam mengelola dan mengoptimalkan simpanan mereka serta memberikan visibilitas yang lebih baik tentang kondisi keuangan</p>
              <a href="#" class="stretched-link"></a>
            </div>
          </div>
        </div><!-- End Service Item -->

        <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="600">
          <div class="service-item">
            <div class="img">
              <img src="{{url('HeroBiz')}}/assets/img/cetak bilyet.jpg" class="img-fluid" alt="">
            </div>
            <div class="details position-relative">
              <div class="icon">
                <i class="bi bi-calendar4-week"></i>
              </div>
              <a href="#" class="stretched-link">
                <h3>Bilyet Simpanan Berjangka</h3>
              </a>
              <p>Mencatat detail penting dari simpanan berjangka, termasuk jumlah setoran, tingkat bunga, tanggal jatuh tempo, dan informasi identifikasi nasabah</p>
              <a href="#" class="stretched-link"></a>
            </div>
          </div>
        </div><!-- End Service Item -->

        <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="700">
          <div class="service-item">
            <div class="img">
              <img src="{{url('HeroBiz')}}/assets/img/laporan.jpg" class="img-fluid" alt="">
            </div>
            <div class="details position-relative">
              <div class="icon">
                <i class="bi bi-chat-square-text"></i>
              </div>
              <a href="#" class="stretched-link">
                <h3>Laporan</h3>
              </a>
              <p>Membantu bisnis dalam melacak pendapatan, biaya, laba, dan arus kas</p>
              <a href="#" class="stretched-link"></a>
            </div>
          </div>
        </div><!-- End Service Item -->

      </div>

    </div>
  </section><!-- End Services Section -->

  <!-- ======= Testimonials Section ======= -->
  <!-- <section id="testimonials" class="testimonials">
    <div class="container" data-aos="fade-up"> -->

      <!-- <div class="testimonials-slider swiper">
        <div class="swiper-wrapper"> -->

          <!-- <div class="swiper-slide">
            <div class="testimonial-item">
              <img src="{{url('HeroBiz')}}/assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
              <h3>Saul Goodman</h3>
              <h4>Ceo &amp; Founder</h4>
              <div class="stars">
                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
              </div>
              <p>
                <i class="bi bi-quote quote-icon-left"></i>
                Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium
                quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                <i class="bi bi-quote quote-icon-right"></i>
              </p>
            </div>
          </div> -->
          <!-- End testimonial item -->

          <!-- <div class="swiper-slide">
            <div class="testimonial-item">
              <img src="{{url('HeroBiz')}}/assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
              <h3>Sara Wilsson</h3>
              <h4>Designer</h4>
              <div class="stars">
                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
              </div>
              <p>
                <i class="bi bi-quote quote-icon-left"></i>
                Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis
                quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                <i class="bi bi-quote quote-icon-right"></i>
              </p>
            </div>
          </div> -->
          <!-- End testimonial item -->

          <!-- <div class="swiper-slide">
            <div class="testimonial-item">
              <img src="{{url('HeroBiz')}}/assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
              <h3>Jena Karlis</h3>
              <h4>Store Owner</h4>
              <div class="stars">
                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
              </div>
              <p>
                <i class="bi bi-quote quote-icon-left"></i>
                Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim
                tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                <i class="bi bi-quote quote-icon-right"></i>
              </p>
            </div>
          </div> -->
          <!-- End testimonial item -->

          <!-- <div class="swiper-slide">
            <div class="testimonial-item">
              <img src="{{url('HeroBiz')}}/assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
              <h3>Matt Brandon</h3>
              <h4>Freelancer</h4>
              <div class="stars">
                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
              </div>
              <p>
                <i class="bi bi-quote quote-icon-left"></i>
                Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit
                minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                <i class="bi bi-quote quote-icon-right"></i>
              </p>
            </div>
          </div> -->
          <!-- End testimonial item -->

          <!-- <div class="swiper-slide">
            <div class="testimonial-item">
              <img src="{{url('HeroBiz')}}/assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
              <h3>John Larson</h3>
              <h4>Entrepreneur</h4>
              <div class="stars">
                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
              </div>
              <p>
                <i class="bi bi-quote quote-icon-left"></i>
                Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa
                labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                <i class="bi bi-quote quote-icon-right"></i>
              </p>
            </div>
          </div> -->
          <!-- End testimonial item -->

        <!-- </div>
        <div class="swiper-pagination"></div>
      </div> -->

    </div>
  </section><!-- End Testimonials Section -->
  <!-- ======= Pricing Section ======= -->
  <!-- <section id="pricing" class="pricing">
    <div class="container" data-aos="fade-up"> -->

      <!-- <div class="section-header">
        <h2>Our Pricing</h2>
        <p>Architecto nobis eos vel nam quidem vitae temporibus voluptates qui hic deserunt iusto omnis nam voluptas
          asperiores sequi tenetur dolores incidunt enim voluptatem magnam cumque fuga.</p>
      </div>

      <div class="row gy-4">

        <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="200">
          <div class="pricing-item">

            <div class="pricing-header">
              <h3>Free Plan</h3>
              <h4><sup>$</sup>0<span> / month</span></h4>
            </div>

            <ul>
              <li><i class="bi bi-dot"></i> <span>Quam adipiscing vitae proin</span></li>
              <li><i class="bi bi-dot"></i> <span>Nec feugiat nisl pretium</span></li>
              <li><i class="bi bi-dot"></i> <span>Nulla at volutpat diam uteera</span></li>
              <li class="na"><i class="bi bi-x"></i> <span>Pharetra massa massa ultricies</span></li>
              <li class="na"><i class="bi bi-x"></i> <span>Massa ultricies mi quis hendrerit</span></li>
            </ul>

            <div class="text-center mt-auto">
              <a href="#" class="buy-btn">Buy Now</a>
            </div>

          </div>
        </div>End Pricing Item

        <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="400">
          <div class="pricing-item featured">

            <div class="pricing-header">
              <h3>Business Plan</h3>
              <h4><sup>$</sup>29<span> / month</span></h4>
            </div>

            <ul>
              <li><i class="bi bi-dot"></i> <span>Quam adipiscing vitae proin</span></li>
              <li><i class="bi bi-dot"></i> <span>Nec feugiat nisl pretium</span></li>
              <li><i class="bi bi-dot"></i> <span>Nulla at volutpat diam uteera</spa>
              </li>
              <li><i class="bi bi-dot"></i> <span>Pharetra massa massa ultricies</spa>
              </li>
              <li><i class="bi bi-dot"></i> <span>Massa ultricies mi quis hendrerit</span></li>
            </ul>

            <div class="text-center mt-auto">
              <a href="#" class="buy-btn">Buy Now</a>
            </div>

          </div>
        </div>End Pricing Item -->

        <!-- <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="600">
          <div class="pricing-item">

            <div class="pricing-header">
              <h3>Developer Plan</h3>
              <h4><sup>$</sup>49<span> / month</span></h4>
            </div>

            <ul>
              <li><i class="bi bi-dot"></i> <span>Quam adipiscing vitae proin</span></li>
              <li><i class="bi bi-dot"></i> <span>Nec feugiat nisl pretium</span></li>
              <li><i class="bi bi-dot"></i> <span>Nulla at volutpat diam uteera</span></li>
              <li><i class="bi bi-dot"></i> <span>Pharetra massa massa ultricies</span></li>
              <li><i class="bi bi-dot"></i> <span>Massa ultricies mi quis hendrerit</span></li>
            </ul>

            <div class="text-center mt-auto">
              <a href="#" class="buy-btn">Buy Now</a>
            </div>

          </div>
        </div>< End Pricing Item -->

      </div>

    </div>
  </section>
  <!-- End Pricing Section -->

  <!-- ======= F.A.Q Section ======= -->
  <section id="faq" class="faq">
    <div class="container-fluid" data-aos="fade-up">

      <div class="row gy-4">

        <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">

          <div class="content px-xl-5">
            <h3><strong>Pertanyaan</strong> yang sering diajukan</h3>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
              dolore magna aliqua. Duis aute irure dolor in reprehenderit
            </p>
          </div>

          <div class="accordion accordion-flush px-xl-5" id="faqlist">

            <div class="accordion-item" data-aos="fade-up" data-aos-delay="200">
              <h3 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-1">
                  <i class="bi bi-question-circle question-icon"></i>
                  Apa itu DIKO?
                </button>
              </h3>
              <div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                <div class="accordion-body">
                DIKO merupakan sistem aplikasi simpan pinjam koperasi adalah platform perangkat lunak 
                yang dirancang khusus untuk membantu koperasi dalam mengelola keuangan, anggota, dan transaksi simpan pinjam.
                </div>
              </div>
            </div><!-- # Faq item-->

            <div class="accordion-item" data-aos="fade-up" data-aos-delay="300">
              <h3 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-2">
                  <i class="bi bi-question-circle question-icon"></i>
                  Apa manfaat menggunakan DIKO?
                </button>
              </h3>
              <div id="faq-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                <div class="accordion-body">
                Menggunakan DIKO dapat membantu koperasi meningkatkan efisiensi pengelolaan keuangan, 
                memperbaiki pelayanan kepada anggota, dan mengurangi potensi kesalahan dalam pencatatan transaksi.
                </div>
              </div>
            </div><!-- # Faq item-->

            <div class="accordion-item" data-aos="fade-up" data-aos-delay="400">
              <h3 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-3">
                  <i class="bi bi-question-circle question-icon"></i>
                  Bagaimana cara mendaftar sebagai anggota koperasi melalui sistem aplikasi ini?
                </button>
              </h3>
              <div id="faq-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                <div class="accordion-body">
                Untuk mendaftar sebagai anggota koperasi, Anda perlu menghubungi pengelola koperasi Anda. 
                Mereka akan memberikan panduan langkah demi langkah tentang cara mendaftar dan menggunakan sistem aplikasi.
                </div>
              </div>
            </div><!-- # Faq item-->

            <div class="accordion-item" data-aos="fade-up" data-aos-delay="500">
              <h3 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-4">
                  <i class="bi bi-question-circle question-icon"></i>
                  Apakah sistem ini aman digunakan?
                </button>
              </h3>
              <div id="faq-content-4" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                <div class="accordion-body">
                  <i class="bi bi-question-circle question-icon"></i>
                  Ya, kami telah mengimplementasikan berbagai lapisan keamanan, termasuk enkripsi data, 
                  otentikasi dua faktor, dan pengawasan akses, untuk menjaga data Anda tetap aman.
                </div>
              </div>
            </div><!-- # Faq item-->

            <div class="accordion-item" data-aos="fade-up" data-aos-delay="600">
              <h3 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-5">
                  <i class="bi bi-question-circle question-icon"></i>
                  Apakah saya dapat melihat saldo dan riwayat transaksi saya melalui DIKO?
                </button>
              </h3>
              <div id="faq-content-5" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                <div class="accordion-body">
                Ya, Anda dapat mengakses saldo dan riwayat transaksi Anda melalui akun anggota Anda di sistem aplikasi.
                </div>
              </div>
            </div><!-- # Faq item-->

            <div class="accordion-item" data-aos="fade-up" data-aos-delay="700">
              <h3 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-6">
                  <i class="bi bi-question-circle question-icon"></i>
                  Bagaimana saya dapat mengajukan pinjaman melalui DIKO?
                </button>
              </h3>
              <div id="faq-content-6" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                <div class="accordion-body">
                Anda dapat mengajukan pinjaman melalui sistem aplikasi dengan mengisi formulir pinjaman 
                yang tersedia dalam akun anggota Anda dan mengikuti petunjuk yang diberikan.
                </div>
              </div>
            </div><!-- # Faq item-->

            <div class="accordion-item" data-aos="fade-up" data-aos-delay="800">
              <h3 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-7">
                  <i class="bi bi-question-circle question-icon"></i>
                  Bagaimana jika saya lupa kata sandi akun saya?
                </button>
              </h3>
              <div id="faq-content-7" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                <div class="accordion-body">
                Anda dapat mengikuti prosedur pemulihan kata sandi yang ada di sistem aplikasi 
                atau menghubungi pengelola koperasi untuk membantu Anda mengatasi masalah ini.
                </div>
              </div>
            </div><!-- # Faq item-->

            <div class="accordion-item" data-aos="fade-up" data-aos-delay="900">
              <h3 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-8">
                  <i class="bi bi-question-circle question-icon"></i>
                  Apakah saya dapat mengakses DIKO melalui perangkat seluler?
                </button>
              </h3>
              <div id="faq-content-8" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                <div class="accordion-body">
                Ya, sistem aplikasi kami umumnya dapat diakses melalui perangkat seluler seperti smartphone atau tablet dengan mudah.
                </div>
              </div>
            </div><!-- # Faq item-->

            <div class="accordion-item" data-aos="fade-up" data-aos-delay="1000">
              <h3 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-9">
                  <i class="bi bi-question-circle question-icon"></i>
                  Bagaimana jika saya memiliki pertanyaan lebih lanjut atau masalah teknis?
                </button>
              </h3>
              <div id="faq-content-9" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                <div class="accordion-body">
                Jangan ragu untuk menghubungi tim dukungan kami melalui informasi kontak yang tersedia di situs web kami. 
                Kami akan dengan senang hati membantu Anda.
                </div>
              </div>
            </div><!-- # Faq item-->

            <div class="accordion-item" data-aos="fade-up" data-aos-delay="1100">
              <h3 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-10">
                  <i class="bi bi-question-circle question-icon"></i>
                  Bagaimana cara mengajukan saran atau masukan untuk meningkatkan DIKO?
                </button>
              </h3>
              <div id="faq-content-10" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                <div class="accordion-body">
                Kami selalu mendengar masukan dari pengguna kami. Anda dapat mengirimkan saran atau masukan melalui formulir 
                yang disediakan di situs web kami atau menghubungi pengelola koperasi Anda.
                </div>
              </div>
            </div><!-- # Faq item-->

          </div>

        </div>

        <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img" style='background-image: url("assets/img/faq.jpg");'>&nbsp;</div>
      </div>

    </div>
  </section><!-- End F.A.Q Section -->

  <!-- ======= Portfolio Section ======= -->
  <!-- <section id="portfolio" class="portfolio" data-aos="fade-up"> -->

    <!-- <div class="container">

      <div class="section-header">
        <h2>Portfolio</h2>
        <p>Non hic nulla eum consequatur maxime ut vero memo vero totam officiis pariatur eos dolorum sed fug dolorem
          est possimus esse quae repudiandae. Dolorem id enim officiis sunt deserunt esse soluta consequatur quaerat
        </p>
      </div>

    </div> -->

    <!-- <div class="container-fluid" data-aos="fade-up" data-aos-delay="200">

      <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry" data-portfolio-sort="original-order">

        <ul class="portfolio-flters">
          <li data-filter="*" class="filter-active">All</li>
          <li data-filter=".filter-app">Simpanan</li>
          <li data-filter=".filter-product">Pinjaman</li>
          <li data-filter=".filter-branding">Simpanan Berjangka</li>
          <li data-filter=".filter-books">Akuntansi</li>
        </ul><!-- End Portfolio Filters -->

        <!-- <div class="row g-0 portfolio-container">

          <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="{{url('HeroBiz')}}/assets/img/portfolio/app-1.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>App 1</h4>
              <a href="{{url('HeroBiz')}}/assets/img/portfolio/app-1.jpg" title="App 1" data-gallery="portfolio-gallery" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
              <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
            </div>
          </div> -->
          <!-- End Portfolio Item -->

          <!-- <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-product">
            <img src="{{url('HeroBiz')}}/assets/img/portfolio/product-1.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Product 1</h4>
              <a href="{{url('HeroBiz')}}/assets/img/portfolio/product-1.jpg" title="Product 1" data-gallery="portfolio-gallery" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
              <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
            </div>
          </div> -->
          <!-- End Portfolio Item -->

          <!-- <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-branding">
            <img src="{{url('HeroBiz')}}/assets/img/portfolio/branding-1.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Branding 1</h4>
              <a href="{{url('HeroBiz')}}/assets/img/portfolio/branding-1.jpg" title="Branding 1" data-gallery="portfolio-gallery" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
              <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
            </div>
          </div> -->
          <!-- End Portfolio Item -->

          <!-- <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-books">
            <img src="{{url('HeroBiz')}}/assets/img/portfolio/books-1.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Books 1</h4>
              <a href="{{url('HeroBiz')}}/assets/img/portfolio/books-1.jpg" title="Branding 1" data-gallery="portfolio-gallery" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
              <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
            </div>
          </div> -->
          <!-- End Portfolio Item -->

          <!-- <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="{{url('HeroBiz')}}/assets/img/portfolio/app-2.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>App 2</h4>
              <a href="{{url('HeroBiz')}}/assets/img/portfolio/app-2.jpg" title="App 2" data-gallery="portfolio-gallery" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
              <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
            </div>
          </div> -->
          <!-- End Portfolio Item -->

          <!-- <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-product">
            <img src="{{url('HeroBiz')}}/assets/img/portfolio/product-2.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Product 2</h4>
              <a href="{{url('HeroBiz')}}/assets/img/portfolio/product-2.jpg" title="Product 2" data-gallery="portfolio-gallery" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
              <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
            </div>
          </div> -->
          <!-- End Portfolio Item -->

          <!-- <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-branding">
            <img src="{{url('HeroBiz')}}/assets/img/portfolio/branding-2.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Branding 2</h4>
              <a href="{{url('HeroBiz')}}/assets/img/portfolio/branding-2.jpg" title="Branding 2" data-gallery="portfolio-gallery" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
              <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
            </div>
          </div> -->
          <!-- End Portfolio Item -->

          <!-- <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-books">
            <img src="{{url('HeroBiz')}}/assets/img/portfolio/books-2.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Books 2</h4>
              <a href="{{url('HeroBiz')}}/assets/img/portfolio/books-2.jpg" title="Branding 2" data-gallery="portfolio-gallery" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
              <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
            </div>
          </div> -->
          <!-- End Portfolio Item -->

          <!-- <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="{{url('HeroBiz')}}/assets/img/portfolio/app-3.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>App 3</h4>
              <a href="{{url('HeroBiz')}}/assets/img/portfolio/app-3.jpg" title="App 3" data-gallery="portfolio-gallery" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
              <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
            </div>
          </div> -->
          <!-- End Portfolio Item -->

          <!-- <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-product">
            <img src="{{url('HeroBiz')}}/assets/img/portfolio/product-3.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Product 3</h4>
              <a href="{{url('HeroBiz')}}/assets/img/portfolio/product-3.jpg" title="Product 3" data-gallery="portfolio-gallery" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
              <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
            </div>
          </div> -->
          <!-- End Portfolio Item -->

          <!-- <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-branding">
            <img src="{{url('HeroBiz')}}/assets/img/portfolio/branding-3.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Branding 3</h4>
              <a href="{{url('HeroBiz')}}/assets/img/portfolio/branding-3.jpg" title="Branding 2" data-gallery="portfolio-gallery" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
              <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
            </div>
          </div> -->
          <!-- End Portfolio Item -->

          <!-- <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-books">
            <img src="{{url('HeroBiz')}}/assets/img/portfolio/books-3.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Books 3</h4>
              <a href="{{url('HeroBiz')}}/assets/img/portfolio/books-3.jpg" title="Branding 3" data-gallery="portfolio-gallery" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
              <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
            </div>
          </div> -->
          <!-- End Portfolio Item -->
<!-- 
        </div> -->
        <!-- End Portfolio Container -->

      <!-- </div> -->

    <!-- </div>
  </section> 
  End Portfolio Section -->

  <!-- ======= Team Section ======= -->
  <!-- <section id="team" class="team">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Our Team</h2>
          <p>Architecto nobis eos vel nam quidem vitae temporibus voluptates qui hic deserunt iusto omnis nam voluptas
            asperiores sequi tenetur dolores incidunt enim voluptatem magnam cumque fuga.</p>
        </div>

        <div class="row gy-5"> -->

  <!-- <div class="col-xl-4 col-md-6 d-flex" data-aos="zoom-in" data-aos-delay="200">
            <div class="team-member">
              <div class="member-img">
                <img src="assets/img/team/team-1.jpg" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
                <h4>Walter White</h4>
                <span>Chief Executive Officer</span>
              </div>
            </div> -->
  <!-- </div>End Team Member -->

  <!-- <div class="col-xl-4 col-md-6 d-flex" data-aos="zoom-in" data-aos-delay="400">
            <div class="team-member">
              <div class="member-img">
                <img src="assets/img/team/team-2.jpg" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
                <h4>Sarah Jhonson</h4>
                <span>Product Manager</span>
              </div>
            </div> -->
  <!-- </div>End Team Member -->

  <!-- <div class="col-xl-4 col-md-6 d-flex" data-aos="zoom-in" data-aos-delay="600">
            <div class="team-member">
              <div class="member-img">
                <img src="assets/img/team/team-3.jpg" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
                <h4>William Anderson</h4>
                <span>CTO</span>
              </div>
            </div> -->
  <!-- </div>End Team Member -->

  <!-- </div>

      </div> -->
  <!-- </section>End Team Section -->

  <!-- ======= Recent Blog Posts Section ======= -->
  <section id="recent-blog-posts" class="recent-blog-posts">

    <div class="container" data-aos="fade-up">

      <div class="section-header">
        <h2>Blog</h2>
        <!-- <p>Recent posts form our Blog</p> -->
      </div>

      <div class="row">

        <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
          <div class="post-box">
            <div class="post-img"><img src="{{url('HeroBiz')}}/assets/img/blog/634.jpg" class="img-fluid" alt=""></div>
            <div class="meta">
              <span class="post-date">25 Agustus 2023</span>
              <!-- <span class="post-author"> / Julia Parker</span> -->
            </div>
            <h3 class="post-title">Income Statement Artinya Apa? Inilah Pengertian dan Fungsinya</h3>
            <p>Income Statement atau laporan laba rugi adalah salah satu laporan keuangan yang bisa memberikan gambaran mengenai kinerja bisnis. Dalam laporan ini, terdapat informasi mengenai pendapatan, biaya, dan laba rugi dalam periode tertentu.</p>
            <a href="blog-details.html" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
          </div>
        </div>

        <div class="col-lg-4" data-aos="fade-up" data-aos-delay="400">
          <div class="post-box">
            <div class="post-img"><img src="{{url('HeroBiz')}}/assets/img/blog/revisi1.png" class="img-fluid" alt=""></div>
            <div class="meta">
              <span class="post-date">14 Agustus 2023</span>
              <!-- <span class="post-author"> / Mario Douglas</span> -->
            </div>
            <h3 class="post-title">Apa saja unsur-unsur laporan keuangan?</h3>
            <p>Setiap laporan keuangan memiliki tiga unsur utama: neraca, laporan laba rugi, dan laporan arus kas. Ketiga unsur ini memberikan informasi penting tentang kinerja keuangan suatu perusahaan dan digunakan untuk mengambil keputusan keuangan.</p>
            <a href="blog-details.html" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
          </div>
        </div>

        <div class="col-lg-4" data-aos="fade-up" data-aos-delay="600">
          <div class="post-box">
            <div class="post-img"><img src="{{url('HeroBiz')}}/assets/img/blog/revisi2.png" class="img-fluid" alt=""></div>
            <div class="meta">
              <span class="post-date">10 Maret 2023</span>
              <!-- <span class="post-author"> / Lisa Hunter</span> -->
            </div>
            <h3 class="post-title">5 Jenis Laporan Keuangan</h3>
            <p>Laporan keuangan adalah dokumen yang berisi informasi mengenai kinerja keuangan suatu perusahaan atau organisasi. Laporan keuangan ini memaparkan secara rinci sumber pendapatan dan pengeluaran selama periode tertentu, serta posisi keuangan saat laporan tersebut dibuat.</p>
            <a href="blog-details.html" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
          </div>
        </div>
        
      </div>
    </div>

  </section><!-- End Recent Blog Posts Section -->

  <!-- ======= Contact Section ======= -->
   <section id="contact" class="contact">
    <div class="container">
      <div class="row gy-5 gx-lg-5">
        <div class="col-lg-6">
          <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3954.428402113363!2d111.54006207413555!3d-7.6369929755328085!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e79bf36978c3bf3%3A0x8c1997902afb269f!2sMARSTECH!5e0!3m2!1sid!2sid!4v1690605880803!5m2!1sid!2sid" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div><!-- End Google Maps -->
        </div>
        <div class="col-lg-6">
          <div class="info">
            <div class="section-header">
              <h2>Contact</h2>
              <!-- <p>Kami senang mendengar dari Anda dan siap membantu menjawab pertanyaan, menyediakan dukungan, atau menerima umpan balik yang berharga. Kami berkomitmen untuk memberikan layanan pelanggan yang luar biasa, dan Anda adalah prioritas kami.</p> -->
            </div>
            
            <div class="info-item d-flex">
              <i class="bi bi-geo-alt flex-shrink-0"></i>
              <div>
                <h4>Alamat:</h4>
                <p>Office : JL. Bulu Mas II No. 1 - Kanigoro - Kota Madiun - Jawa Timur<br><br>
                  Branch Office : Perum Griya Gadang Sejahtera Kav. 14 Gadang - Sukun - Kota Malang - Jawa Timur </p>
              </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex">
              <i class="bi bi-envelope flex-shrink-0"></i>
              <div>
                <h4>Alamat Email:</h4>
                <p>cs@marstech.co.id</p>
              </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex">
              <i class="bi bi-phone flex-shrink-0"></i>
              <div>
                <h4>Nomor Telepon:</h4>
                <p>Office : 0351-2812555<br>
                  Marketing : 0811-3636-09 </p>
              </div>
            </div><!-- End Info Item -->
          </div>
        </div>
      </div>
    </div>
  </section><!-- End Contact Section -->

</main><!-- End #main -->

@endsection