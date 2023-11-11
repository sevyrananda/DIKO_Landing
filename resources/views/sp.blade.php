@extends('layout.app')
@section('content')
    <section id="hero-animated" class="hero-animated d-flex align-items-center" style="background-color:#C3E2FF;">
        <div class="container d-flex flex-column justify-content-center align-items-center text-center position-relative"
            data-aos="zoom-out" style="color : #144B9A;">
            <!-- <img src="assets/img/hero-carousel/hero-carousel-3.svg" class="img-fluid animated"> -->
            <p style="font-size: 15px; font-stretch: expanded;">

            </p>
            <p style="font-size: 45px; font-weight: bold; ">
                Solusi terbaik untuk manajemen keuangan bisnis Anda.</p>
            <p style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size: 20px;">Integrasi canggih: Inventori,
                Proyek, dan Penggajian, semua dalam satu solusi andal!</p>
            <div class="d-flex">
                <a href="#about" class="btn-get-started scrollto">Get Started</a>
                <a href="https://youtu.be/4ZoWQeCO0CI" class="glightbox btn-watch-video d-flex align-items-center"><i
                        class="bi bi-play-circle"></i><span>Watch
                        Video</span></a>
            </div>
            <div>
                <img src="HeroBiz/assets/img/diko-sp-2.png" alt="" style="width: 100%;">
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
                                <img src="{{ url('HeroBiz') }}/time-management.png" alt="manage" width="50"
                                    height="50">
                                <!-- <i class="bi bi-activity icon"></i> -->
                            </div>
                            <!-- <h4><a href="" class="stretched-link">Lorem Ipsum</a></h4> -->
                            <p style="font-family: Verdana, Geneva, Tahoma, sans-serif;">Pengelolaan keuangan menjadi lebih
                                efisien
                                dan tertib</p>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-xl-3 col-md-6 d-flex" data-aos="zoom-out" data-aos-delay="200">
                        <div class="service-item position-relative">
                            <div class="icon">
                                <img src="{{ url('HeroBiz') }}/global-network.png" alt="network" width="45"
                                    height="45">
                                <!-- <i class="bi bi-bounding-box-circles icon"></i> -->
                            </div>
                            <p style="font-family: Verdana, Geneva, Tahoma, sans-serif;">Solusi terpadu untuk mengelola
                                jaringan
                                cabang</p>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-xl-3 col-md-6 d-flex" data-aos="zoom-out" data-aos-delay="400">
                        <div class="service-item position-relative">
                            <div class="icon">
                                <img src="{{ url('HeroBiz') }}/transaction.png" alt="transaction" width="45"
                                    height="45">
                                <!-- <i class="bi bi-calendar4-week icon"></i> -->
                            </div>
                            <!-- <h4><a href="" class="stretched-link">Magni Dolores</a></h4> -->
                            <p style="font-family: Verdana, Geneva, Tahoma, sans-serif;">Proses transaksi bisnis lebih
                                lancar dan
                                instan</p>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-xl-3 col-md-6 d-flex" data-aos="zoom-out" data-aos-delay="600">
                        <div class="service-item position-relative">
                            <div class="icon">
                                <!-- <i class="bi bi-broadcast icon"></i> -->
                                <img src="{{ url('HeroBiz') }}/responsive-design.png" alt="device" width="45"
                                    height="45">
                            </div>
                            <!-- <h4><a href="" class="stretched-link">Nemo Enim</a></h4> -->
                            <p style="font-family: Verdana, Geneva, Tahoma, sans-serif;">Nikmati kemudahan akses melalui
                                semua perangkat</p>
                        </div>
                    </div><!--End Service Item-->
                </div>
            </div>
        </section><!-- End Featured Services Section -->

        <!-- ======= Features Section ======= -->
        <section id="features" class="features">
            <div class="container" data-aos="fade-up">

                <ul class="nav nav-tabs row gy-4 d-flex justify-content-center">

                    <li class="nav-item col-6 col-md-4 col-lg-2">
                        <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#tab-1">
                            <i class="bi bi-cash-coin color-teal"></i>
                            <!-- <img src="{{ url('HeroBiz') }}/integration.png" alt="integration" width="50" height="50"> -->
                            <h4>Sekali Bayar</h4>
                        </a>
                    </li><!-- End Tab 1 Nav -->

                    <li class="nav-item col-6 col-md-4 col-lg-2">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-2">
                            <i class="bi bi-shield-check color-cyan"></i>
                            <!-- <img src="{{ url('HeroBiz') }}/shield.png" alt="monitor" width="50" height="50"> -->
                            <h4>Keamanan</h4>
                        </a>
                    </li><!-- End Tab 2 Nav -->

                    <li class="nav-item col-6 col-md-4 col-lg-2">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-3">
                            <i class="bi bi-binoculars color-indigo"></i>
                            <!-- <img src="{{ url('HeroBiz') }}/monitor.png" alt="monitor" width="50" height="50"> -->
                            <h4>Pemantauan</h4>
                        </a>
                    </li><!-- End Tab 3 Nav -->

                    <li class="nav-item col-6 col-md-4 col-lg-2">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-4">
                            <i class="bi bi-clock-history color-red"></i>
                            <!-- <img src="{{ url('HeroBiz') }}/stopwatch.png" alt="monitor" width="50" height="50"> -->
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
                                <p
                                    style="font-size: 20px; color: darkgray; font-family:Verdana, Geneva, Tahoma, sans-serif;">
                                    Sebuah opsi pembayaran di mana pengguna hanya perlu membayar sekali untuk mendapatkan
                                    akses atau manfaat tertentu tanpa harus berlangganan atau membayar secara berkala.
                                    Ini adalah konsep keuangan yang bertentangan dengan model bisnis berlangganan atau
                                    pembayaran berulang seperti bulanan atau tahunan.
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

                                <img src="{{ url('HeroBiz') }}/assets/img/new-features-3.png" alt=""
                                    class="img-fluid" style="width:200px">
                            </div>
                        </div>
                    </div><!-- End Tab Content 1 -->

                    <div class="tab-pane" id="tab-2">
                        <div class="row gy-4">
                            <div class="col-lg-8 order-2 order-lg-1">
                                <h3>Keamanan Data Terjaga</h3>
                                <p
                                    style="font-size: 20px; color: darkgray; font-family:Verdana, Geneva, Tahoma, sans-serif;">
                                    Kenyamanan Anda dalam mengakses data di DikoSP menjadi prioritas utama kami. Kami
                                    menggunakan sistem
                                    enkripsi modern dan proteksi data yang kuat untuk memastikan keamanan data Anda tanpa
                                    memerlukan
                                    sertifikat.
                                </p>
                            </div>
                            <div class="col-lg-4 order-1 order-lg-2 text-center">
                                <img src="{{ url('HeroBiz') }}/assets/img/new-features-1.png" alt=""
                                    class="img-fluid" style="width:200px">
                            </div>
                        </div>
                    </div><!-- End Tab Content 2 -->

                    <div class="tab-pane" id="tab-3">
                        <div class="row gy-4">
                            <div class="col-lg-8 order-2 order-lg-1">
                                <h3>Pantau Koperasi</h3>
                                <p
                                    style="font-size: 20px; color: darkgray; font-family:Verdana, Geneva, Tahoma, sans-serif;">
                                    Anda dapat dengan mudah memantau tentang arus kas, keuntungan, dan statistik. Dengan
                                    pemantauan koperasi yang akurat, dpaat mengidentifikasi peluang pertumbuhan dan
                                    mengatasi masalah dengan cepat.
                                </p>
                            </div>
                            <div class="col-lg-4 order-1 order-lg-2 text-center">

                                <img src="{{ url('HeroBiz') }}/assets/img/new-features-2.png" alt=""
                                    class="img-fluid" style="width:200px">
                            </div>
                        </div>
                    </div><!-- End Tab Content 3 -->

                    <div class="tab-pane" id="tab-4">
                        <div class="row gy-4">
                            <div class="col-lg-8 order-2 order-lg-1">
                                <h3>Pengelolaan Simpan Pinjam yang Efisien</h3>
                                <p
                                    style="font-size: 20px; color: darkgray; font-family:Verdana, Geneva, Tahoma, sans-serif;">
                                    Simpan Pinjam dapat Anda kelola dengan mudah dan efisien secara real-time. Nikmati
                                    kemudahan pengingat
                                    jatuh tempo untuk memastikan rencana keuangan Anda tetap teratur dan terukur
                                </p>
                            </div>
                            <div class="col-lg-4 order-1 order-lg-2 text-center">
                                <img src="{{ url('HeroBiz') }}/assets/img/new-features-4.png" alt=""
                                    class="img-fluid" style="width:200px">
                            </div>
                        </div>
                    </div><!-- End Tab Content 4 -->

                    <div class="tab-pane" id="tab-5">
                        <div class="row gy-4">
                            <div class="col-lg-8 order-2 order-lg-1">
                                <h3>Adipiscing</h3>
                                <p>
                                    Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                                    reprehenderit in
                                    voluptate
                                    velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                    proident,
                                    sunt in
                                    culpa qui officia deserunt mollit anim id est laborum
                                </p>
                                <p class="fst-italic">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et
                                    dolore
                                    magna aliqua.
                                </p>
                                <ul>
                                    <li><i class="bi bi-check-circle-fill"></i> Ullamco laboris nisi ut aliquip ex ea
                                        commodo consequat.
                                    </li>
                                    <li><i class="bi bi-check-circle-fill"></i> Duis aute irure dolor in reprehenderit in
                                        voluptate velit.
                                    </li>
                                    <li><i class="bi bi-check-circle-fill"></i> Ullamco laboris nisi ut aliquip ex ea
                                        commodo consequat.
                                        Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro
                                        dolore eu fugiat
                                        nulla pariatur.</li>
                                </ul>
                            </div>
                            <div class="col-lg-4 order-1 order-lg-2 text-center">
                                <img src="{{ url('HeroBiz') }}/assets/img/features-5.svg" alt=""
                                    class="img-fluid">
                            </div>
                        </div>
                    </div><!-- End Tab Content 5 -->

                    <div class="tab-pane" id="tab-6">
                        <div class="row gy-4">
                            <div class="col-lg-8 order-2 order-lg-1">
                                <h3>Reprehit</h3>
                                <p>
                                    Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                                    reprehenderit in
                                    voluptate
                                    velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                    proident,
                                    sunt in
                                    culpa qui officia deserunt mollit anim id est laborum
                                </p>
                                <p class="fst-italic">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et
                                    dolore
                                    magna aliqua.
                                </p>
                                <ul>
                                    <li><i class="bi bi-check-circle-fill"></i> Ullamco laboris nisi ut aliquip ex ea
                                        commodo consequat.
                                    </li>
                                    <li><i class="bi bi-check-circle-fill"></i> Duis aute irure dolor in reprehenderit in
                                        voluptate velit.
                                    </li>
                                    <li><i class="bi bi-check-circle-fill"></i> Ullamco laboris nisi ut aliquip ex ea
                                        commodo consequat.
                                        Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro
                                        dolore eu fugiat
                                        nulla pariatur.</li>
                                </ul>
                            </div>
                            <div class="col-lg-4 order-1 order-lg-2 text-center">
                                <img src="{{ url('HeroBiz') }}/assets/img/features-6.svg" alt=""
                                    class="img-fluid">
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
                    <h2 style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-weight: 500;">Fitur-fitur terbaik
                        kami akan mempermudah bisnis Anda.</h2>
                    <p style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size: 16px; color: #666;">Perhitungan
                        Akurat,
                        Keputusan Bijak, Produk Akuntansi Terpercaya</p>
                </div>

                <div class="row gy-5">

                    <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
                        <div class="service-item">
                            <div class="img">


                                <!-- <img src="{{ url('HeroBiz') }}/assets/img/register.jpg" class="img-fluid" alt=""> -->

                                <a href="{{ url('HeroBiz') }}/assets/img/fitur/cari.png" data-gallery="fitur-gallery"
                                    class="glightbox preview-link">
                                    <img src="{{ url('HeroBiz') }}/assets/img/fitur/cari.png" class="img-fluid"
                                        alt="">
                                </a>

                            </div>
                            <div class="details position-relative">
                                <div class="icon">
                                    <i class="bi bi-search"></i>
                                </div>
                                <a href="#" class="stretched-link">
                                    <h3>Registrasi Nasabah</h3>
                                </a>
                                <p> Identifikasi dan kelola data nasabah dengan cepat dan akurat.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- End Service Item -->


                    <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="300">
                        <div class="service-item">
                            <div class="img">
                                <a href="{{ url('HeroBiz') }}/assets/img/fitur/kas.jpg" data-gallery="fitur-gallery"
                                    class="glightbox preview-link">
                                    <img src="{{ url('HeroBiz') }}/assets/img/fitur/kas.jpg" class="img-fluid"
                                        alt="">
                                </a>
                            </div>
                            <div class="details position-relative">
                                <div class="icon">
                                    <i class="bi bi-arrow-up"></i>
                                    <i class="bi bi-arrow-down"></i>
                                </div>
                                <a href="#" class="stretched-link">
                                    <h3>Kas Bank</h3>
                                </a>
                                <p>Mencatat transaksi uang tunai masuk dan keluar untuk melacak arus kas dan memudahkan
                                    pengelolaan keuangan.</p>
                            </div>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="400">
                        <div class="service-item">
                            <div class="img">
                                <a href="{{ url('HeroBiz') }}/assets/img/fitur/neraca1.png" data-gallery="fitur-gallery"
                                    class="glightbox preview-link">
                                    <img src="{{ url('HeroBiz') }}/assets/img/fitur/neraca1.png" class="img-fluid"
                                        alt="">
                                </a>
                            </div>
                            <div class="details position-relative">
                                <div class="icon">
                                    <i class="bi bi-bar-chart"></i> <!-- Ikon grafik batang -->
                                </div>
                                <a href="#" class="stretched-link">
                                    <h3>Neraca</h3>
                                </a>
                                <p>Mencatat dan melacak semua aset yang dimiliki. Mencakup uang tunai, tabungan anggota,
                                    pinjaman yang diberikan.</p>
                            </div>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="500">
                        <div class="service-item">
                            <div class="img">
                                <a href="{{ url('HeroBiz') }}/assets/img/fitur/simpanan1.png"
                                    data-gallery="fitur-gallery" class="glightbox preview-link">
                                    <img src="{{ url('HeroBiz') }}/assets/img/fitur/simpanan1.png" class="img-fluid"
                                        alt="">
                                </a>
                            </div>
                            <div class="details position-relative">
                                <div class="icon">
                                    <i class="bi bi-bounding-box-circles"></i>
                                </div>
                                <a href="#" class="stretched-link">
                                    <h3>Simpanan Berjangka</h3>
                                </a>
                                <p>Membantu nasabah dalam mengelola dan mengoptimalkan simpanan mereka serta memberikan
                                    visibilitas yang lebih baik tentang kondisi keuangan</p>
                                <a href="#" class="stretched-link"></a>
                            </div>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="600">
                        <div class="service-item">
                            <div class="img">
                                <a href="{{ url('HeroBiz') }}/assets/img/fitur/kasir1.png" data-gallery="fitur-gallery"
                                    class="glightbox preview-link">
                                    <img src="{{ url('HeroBiz') }}/assets/img/fitur/kasir1.png" class="img-fluid"
                                        alt="">
                                </a>
                            </div>
                            <div class="details position-relative">
                                <div class="icon">
                                    <i class="bi bi-calendar4-week"></i>
                                </div>
                                <a href="#" class="stretched-link">
                                    <h3>Kasir</h3>
                                </a>
                                <p>Mencatat pinjaman nasabah, menghitung total tabungan nasabah dan keterangan mutasi
                                    anggota</p>
                                <a href="#" class="stretched-link"></a>
                            </div>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="700">
                        <div class="service-item">
                            <div class="img">
                                <a href="{{ url('HeroBiz') }}/assets/img/fitur/pembukuan1.png"
                                    data-gallery="fitur-gallery" class="glightbox preview-link">
                                    <img src="{{ url('HeroBiz') }}/assets/img/fitur/pembukuan1.png" class="img-fluid"
                                        alt="">
                                </a>
                            </div>
                            <div class="details position-relative">
                                <div class="icon">
                                    <i class="bi bi-chat-square-text"></i>
                                </div>
                                <a href="#" class="stretched-link">
                                    <h3>Pembukuan</h3>
                                </a>
                                <p>Membantu bisnis dalam melacak pendapatan, biaya, laba, dan arus kas</p>
                                <a href="#" class="stretched-link"></a>
                            </div>
                        </div>
                    </div><!-- End Service Item -->
                </div>
            </div>
        </section><!-- End Services Section -->

        </div>
        </section><!-- End Testimonials Section -->

        <!-- ======= Pricing Section ======= -->
        <section id="pricing" class="pricing">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>Our Pricing</h2>
                    {{-- <p>Architecto nobis eos vel nam quidem vitae temporibus voluptates qui hic deserunt iusto omnis nam voluptas
          asperiores sequi tenetur dolores incidunt enim voluptatem magnam cumque fuga.</p> --}}
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
                                <li class="na"><i class="bi bi-x"></i> <span>Pharetra massa massa ultricies</span>
                                </li>
                                <li class="na"><i class="bi bi-x"></i> <span>Massa ultricies mi quis hendrerit</span>
                                </li>
                            </ul>

                            <div class="text-center mt-auto">
                                <a href="#" class="buy-btn">Buy Now</a>
                            </div>
                        </div>
                    </div>

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
                    </div>

                    <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="600">
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
                    </div>
                </div>
            </div>
        </section>
        <!-- End Pricing Section -->


        <html lang="en">
      <head>
          <!-- Masukkan tag <head> untuk mengatur CSS, judul, dll. -->
          <style>
              .grid-item {
                  display: flex;
                  flex-direction: column;
                  align-items: center;
                  text-align: center;
              }
          </style>
      </head>
      <body>
          {{-- Route Modal Plugin --}}
          <script>
              document.addEventListener("DOMContentLoaded", function() {
                  // Function to set the size of the logos
                  function setLogoSize(logoClass, width, height) {
                      const logos = document.querySelectorAll(logoClass);
                      logos.forEach((logo) => {
                          logo.style.width = width;
                          logo.style.height = height;
                      });
                  }

                  // Set the size of the logos (you can adjust the width and height values)
                  setLogoSize(".small-logo", "100px", "100px");
              });

              // Function to display the modal with the specified content
              function showModal(modalId) {
                  var modal = new bootstrap.Modal(document.getElementById(modalId));
                  modal.show();
              }

              // Add click event listeners for each logo
              // Logo 1 (Plugin Master Menu Bank & E-Commerce)
              document.querySelector(".col-md-3.grid-item:nth-child(1)").addEventListener("click", function() {
                  showModal("modal1");
              });

              // Logo 2 (Plugin Master Barcode Form Add)
              document.querySelector(".col-md-3.grid-item:nth-child(2)").addEventListener("click", function() {
                  showModal("modal2");
              });

              // Logo 3 (Plugin Master Golongan Jaminan)
              document.querySelector(".col-md-3.grid-item:nth-child(3)").addEventListener("click", function() {
                  showModal("modal3");
              });

              // Logo 4 (Plugin Master Kode Transaksi)
              document.querySelector(".col-md-3.grid-item:nth-child(4)").addEventListener("click", function() {
                  showModal("modal4");
              });

              // Logo 5 (Plugin Master Kode Transaksi)
              document.querySelector(".col-md-3.grid-item:nth-child(5)").addEventListener("click", function() {
                  showModal("modal5");
              });

              // Logo 6 (Plugin Master Kode Transaksi)
              document.querySelector(".col-md-3.grid-item:nth-child(6)").addEventListener("click", function() {
                  showModal("modal6");
              });

              // Logo 7 (Plugin Master Kode Transaksi)
              document.querySelector(".col-md-3.grid-item:nth-child(7)").addEventListener("click", function() {
                  showModal("modal7");
              });

              // Logo 8 (Plugin Master Kode Transaksi)
              document.querySelector(".col-md-3.grid-item:nth-child(8)").addEventListener("click", function() {
                  showModal("modal8");
              });

              function closeModal(modalId) {
                  var modal = new bootstrap.Modal(document.getElementById(modalId));
                  modal.hide();
              }
          </script>

          <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
          <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


          <!-- Modals Plugin-->
          <div class="modal fade" id="modal1" tabindex="-1" role="dialog"
              aria-labelledby="modal1Label" aria-hidden="false">
              <div class="modal-dialog" role="document">
                  <div class="modal-content">
                      <div class="modal-header">
                          <h5 class="modal-title" id="modal1Label">Plugin Master Menu Bank & E-Commerce</h5>
                          <button type="button" class="close" data-dismiss="modal" data-target="#modal1" aria-label="Close">
                              <span aria-hidden="false">&times;</span>
                          </button>
                      </div>
                      <div class="modal-body">
                          <p>Plugin ini mendukung berbagai bank dan penyedia layanan pembayaran, mencakup beragam opsi seperti kartu kredit, transfer bank, e-wallet, dan banyak lagi.</p>
                      </div>
                  </div>
              </div>
          </div>

          <div class="modal fade" id="modal2" tabindex="-1" role="dialog"
          aria-labelledby="modal2Label" aria-hidden="false">
          <div class="modal-dialog" role="document">
              <div class="modal-content">
                  <div class="modal-header">
                      <h5 class="modal-title" id="modal2Label">Plugin Master Menu Barcode</h5>
                      <button type="button" class="close" data-dismiss="modal" data-target="#modal1" aria-label="Close">
                          <span aria-hidden="false">&times;</span>
                      </button>
                  </div>
                  <div class="modal-body">
                      <!-- Informasi yang ingin Anda tambahkan -->
                      <p>Plugin ini juga dapat terintegrasi dengan sistem POS (Point of Sale) Anda, memberikan kemudahan dalam proses penjualan dan pencatatan data produk.</p>
                  </div>
              </div>
          </div>
      </div>

      <div class="modal fade" id="modal2" tabindex="-1" role="dialog"
      aria-labelledby="modal2Label" aria-hidden="false">
      <div class="modal-dialog" role="document">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title" id="modal2Label">Plugin Master Menu Barcode</h5>
                  <button type="button" class="close" data-dismiss="modal" data-target="#modal1" aria-label="Close">
                      <span aria-hidden="false">&times;</span>
                  </button>
              </div>
              <div class="modal-body">
                  <!-- Informasi yang ingin Anda tambahkan -->
                  <p>Plugin ini memberikan kemudahan dalam penyusunan laporan keuangan dan memungkinkan Anda untuk membuat keputusan yang lebih baik dalam pengelolaan keuangan Anda.</p>
              </div>
          </div>
      </div>
  </div>

  <div class="modal fade" id="modal3" tabindex="-1" role="dialog"
  aria-labelledby="modal3Label" aria-hidden="false">
  <div class="modal-dialog" role="document">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="modal3Label">Plugin Master Menu Golongan Pinjaman</h5>
              <button type="button" class="close" data-dismiss="modal" data-target="#modal3" aria-label="Close">
                  <span aria-hidden="false">&times;</span>
              </button>
          </div>
          <div class="modal-body">
              <!-- Informasi yang ingin Anda tambahkan -->
              <p>Plugin ini memungkinkan pengguna untuk dengan mudah mengintegrasikan berbagai opsi pembayaran dari berbagai bank dan penyedia layanan pembayaran dalam satu menu yang terstruktur, memberikan pengalaman belanja yang lebih nyaman bagi pelanggan. </p>
          </div>
      </div>
  </div>
</div>

<div class="modal fade" id="modal4" tabindex="-1" role="dialog" aria-labelledby="modal4Label" aria-hidden="false">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="modal4Label">Plugin Master Menu Kode Transaksi Pinjaman</h5>
            <button type="button" class="close" data-dismiss="modal" data-target="#kodenModal" aria-label="Close">
                <span aria-hidden="false">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <!-- Informasi yang ingin Anda tambahkan -->
            <p>Plugin ini juga memungkinkan Anda untuk dengan cepat mengidentifikasi dan membedakan berbagai jenis transaksi pinjaman, seperti pinjaman pribadi, hipotek, atau bisnis.</p>
        </div>
    </div>
  </div>
</div>

<div class="modal fade" id="modal5" tabindex="-1" role="dialog" aria-labelledby="modal5Label" aria-hidden="false">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="modal5Label">Plugin 5</h5>
            <button type="button" class="close" data-dismiss="modal" data-target="#kodenModal" aria-label="Close">
                <span aria-hidden="false">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <!-- Informasi yang ingin Anda tambahkan -->
            <p>Plugin ini juga memungkinkan Anda untuk dengan cepat mengidentifikasi dan membedakan berbagai jenis transaksi pinjaman, seperti pinjaman pribadi, hipotek, atau bisnis.</p>
        </div>
    </div>
  </div>
</div>

<div class="modal fade" id="modal6" tabindex="-1" role="dialog" aria-labelledby="modal6Label" aria-hidden="false">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="modal6Label">Plugin 6</h5>
            <button type="button" class="close" data-dismiss="modal" data-target="#kodenModal" aria-label="Close">
                <span aria-hidden="false">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <!-- Informasi yang ingin Anda tambahkan -->
            <p>Plugin ini juga memungkinkan Anda untuk dengan cepat mengidentifikasi dan membedakan berbagai jenis transaksi pinjaman, seperti pinjaman pribadi, hipotek, atau bisnis.</p>
        </div>
    </div>
  </div>
</div>

<div class="modal fade" id="modal7" tabindex="-1" role="dialog" aria-labelledby="modal7Label" aria-hidden="false">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="modal7Label">Plugin 7</h5>
            <button type="button" class="close" data-dismiss="modal" data-target="#kodenModal" aria-label="Close">
                <span aria-hidden="false">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <!-- Informasi yang ingin Anda tambahkan -->
            <p>Plugin ini juga memungkinkan Anda untuk dengan cepat mengidentifikasi dan membedakan berbagai jenis transaksi pinjaman, seperti pinjaman pribadi, hipotek, atau bisnis.</p>
        </div>
    </div>
  </div>
</div>

<div class="modal fade" id="modal8" tabindex="-1" role="dialog" aria-labelledby="modal8Label" aria-hidden="false">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="modal8Label">Plugin 8</h5>
            <button type="button" class="close" data-dismiss="modal" data-target="#kodenModal" aria-label="Close">
                <span aria-hidden="false">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <!-- Informasi yang ingin Anda tambahkan -->
            <p>Plugin ini juga memungkinkan Anda untuk dengan cepat mengidentifikasi dan membedakan berbagai jenis transaksi pinjaman, seperti pinjaman pribadi, hipotek, atau bisnis.</p>
        </div>
    </div>
  </div>
</div>



<section id="plugin-menu" class="plugin-menu">
  <div class="container" data-aos="fade-up">
      <div class="section-header">
          <h2>Our Plugin Menu</h2>
      </div>

      <div id="carouselExample" class="carousel slide text-center" data-ride="carousel">
          <div class="carousel-inner">
              <!-- Slide 1 -->
              <div class="carousel-item active">
                  <div class="row">
                      <!-- Item 1 (Logo 1) -->
                      <div class="col-sm">
                          <img src="{{ url('HeroBiz') }}/assets/img/logo koperasi.png" alt="Logo 1"
                              class="small-logo mx-auto p-2" data-toggle="modal" data-target="#modal1">
                      </div>

                      <!-- Item 2 (Logo 2) -->
                      <div class="col-sm">
                          <img src="{{ url('HeroBiz') }}/assets/img/logo koperasi.png" alt="Logo 2"
                              class="small-logo mx-auto p-2" data-toggle="modal" data-target="#modal2">
                      </div>

                      <!-- Item 3 (Logo 3) -->
                      <div class="col-sm">
                          <img src="{{ url('HeroBiz') }}/assets/img/logo koperasi.png" alt="Logo 3"
                              class="small-logo mx-auto p-2" data-toggle="modal" data-target="#modal3">
                      </div>

                      <!-- Item 4 (Logo 4) -->
                      <div class="col-sm">
                          <img src="{{ url('HeroBiz') }}/assets/img/logo koperasi.png" alt="Logo 4"
                              class="small-logo mx-auto p-2" data-toggle="modal" data-target="#modal4">
                      </div>

                      <!-- Item 4 (Logo 4) -->
                      <div class="col-sm">
                          <img src="{{ url('HeroBiz') }}/assets/img/logo koperasi.png" alt="Logo 4"
                              class="small-logo mx-auto p-2" data-toggle="modal" data-target="#modal4">
                      </div>

                      <!-- Item 4 (Logo 4) -->
                      <div class="col-sm">
                          <img src="{{ url('HeroBiz') }}/assets/img/logo koperasi.png" alt="Logo 4"
                              class="small-logo mx-auto p-2" data-toggle="modal" data-target="#modal4">
                      </div>

                      <!-- Item 4 (Logo 4) -->
                      <div class="col-sm">
                          <img src="{{ url('HeroBiz') }}/assets/img/logo koperasi.png" alt="Logo 4"
                              class="small-logo mx-auto p-2" data-toggle="modal" data-target="#modal4">
                      </div>

                      <!-- Item 4 (Logo 4) -->
                      <div class="col-sm">
                          <img src="{{ url('HeroBiz') }}/assets/img/logo koperasi.png" alt="Logo 4"
                              class="small-logo mx-auto p-2" data-toggle="modal" data-target="#modal4">
                      </div>
                  </div>
              </div>

              <!-- Slide 2 -->
              <div class="carousel-item">
                  <div class="row">
                      <!-- Item 5 (Logo 5) -->
                      <div class="col-sm">
                          <img src="{{ url('HeroBiz') }}/assets/img/logo koperasi.png" alt="Logo 5"
                              class="small-logo mx-auto p-2" data-toggle="modal" data-target="#modal5">
                      </div>

                      <!-- Item 6 (Logo 6) -->
                      <div class="col-sm">
                          <img src="{{ url('HeroBiz') }}/assets/img/logo koperasi.png" alt="Logo 6"
                              class="small-logo mx-auto p-2" data-toggle="modal" data-target="#modal6">
                      </div>

                      <!-- Item 7 (Logo 7) -->
                      <div class="col-sm">
                          <img src="{{ url('HeroBiz') }}/assets/img/logo koperasi.png" alt="Logo 7"
                              class="small-logo mx-auto p-2" data-toggle="modal" data-target="#modal7">
                      </div>

                      <!-- Item 8 (Logo 8) -->
                      <div class="col-sm">
                          <img src="{{ url('HeroBiz') }}/assets/img/logo koperasi.png" alt="Logo 8"
                              class="small-logo mx-auto p-2" data-toggle="modal" data-target="#modal8">
                      </div>
                  </div>
              </div>
          </div>

          <!-- Previous and Next Buttons with Adjusted Padding -->
          <a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev" style="color: black; left: -10%;">
              <span class="carousel-control-prev-icon" aria-hidden="true" style="filter: invert(100%);"></span>
          </a>
          <a class="carousel-control-next" href="#carouselExample" role="button" data-slide="next" style="color: black; right: -10%;">
              <span class="carousel-control-next-icon" aria-hidden="true" style="filter: invert(100%);"></span>
          </a>
      </div>
  </div>
</section>







      </body>
      </html>


        <!-- ======= F.A.Q Section ======= -->
        <section id="faq" class="faq">
            <div class="container-fluid" data-aos="fade-up">
                <div class="row gy-4">
                    <div
                        class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">

                        <div class="content px-xl-5">
                            <h3><strong>Pertanyaan</strong> yang sering diajukan</h3>
                            <!-- <p>
                                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                                  dolore magna aliqua. Duis aute irure dolor in reprehenderit
                                </p> -->
                        </div>

                        <div class="accordion accordion-flush px-xl-5" id="faqlist">

                            <div class="accordion-item" data-aos="fade-up" data-aos-delay="200">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq-content-1">
                                        <i class="bi bi-question-circle question-icon"></i>
                                        Apa itu DIKO?
                                    </button>
                                </h3>
                                <div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                    <div class="accordion-body">
                                        DIKO merupakan sistem aplikasi simpan pinjam koperasi adalah platform perangkat
                                        lunak
                                        yang dirancang khusus untuk membantu koperasi dalam mengelola keuangan, anggota, dan
                                        transaksi simpan pinjam.
                                    </div>
                                </div>
                            </div><!-- # Faq item-->

                            <div class="accordion-item" data-aos="fade-up" data-aos-delay="300">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq-content-2">
                                        <i class="bi bi-question-circle question-icon"></i>
                                        Apa manfaat menggunakan DIKO?
                                    </button>
                                </h3>
                                <div id="faq-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                    <div class="accordion-body">
                                        Menggunakan DIKO dapat membantu koperasi meningkatkan efisiensi pengelolaan
                                        keuangan,
                                        memperbaiki pelayanan kepada anggota, dan mengurangi potensi kesalahan dalam
                                        pencatatan transaksi.
                                    </div>
                                </div>
                            </div><!-- # Faq item-->

                            <div class="accordion-item" data-aos="fade-up" data-aos-delay="400">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq-content-3">
                                        <i class="bi bi-question-circle question-icon"></i>
                                        Bagaimana cara mendaftar sebagai anggota koperasi melalui sistem aplikasi ini?
                                    </button>
                                </h3>
                                <div id="faq-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                    <div class="accordion-body">
                                        Untuk mendaftar sebagai anggota koperasi, Anda perlu menghubungi pengelola koperasi
                                        Anda.
                                        Mereka akan memberikan panduan langkah demi langkah tentang cara mendaftar dan
                                        menggunakan sistem aplikasi.
                                    </div>
                                </div>
                            </div><!-- # Faq item-->

                            <div class="accordion-item" data-aos="fade-up" data-aos-delay="500">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq-content-4">
                                        <i class="bi bi-question-circle question-icon"></i>
                                        Apakah sistem ini aman digunakan?
                                    </button>
                                </h3>
                                <div id="faq-content-4" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                    <div class="accordion-body">
                                        <i class="bi bi-question-circle question-icon"></i>
                                        Ya, kami telah mengimplementasikan berbagai lapisan keamanan, termasuk enkripsi
                                        data,
                                        otentikasi dua faktor, dan pengawasan akses, untuk menjaga data Anda tetap aman.
                                    </div>
                                </div>
                            </div><!-- # Faq item-->

                            <div class="accordion-item" data-aos="fade-up" data-aos-delay="600">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq-content-5">
                                        <i class="bi bi-question-circle question-icon"></i>
                                        Apakah saya dapat melihat saldo dan riwayat transaksi saya melalui DIKO?
                                    </button>
                                </h3>
                                <div id="faq-content-5" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                    <div class="accordion-body">
                                        Ya, Anda dapat mengakses saldo dan riwayat transaksi Anda melalui akun anggota Anda
                                        di sistem aplikasi.
                                    </div>
                                </div>
                            </div><!-- # Faq item-->

                            <div class="accordion-item" data-aos="fade-up" data-aos-delay="700">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq-content-6">
                                        <i class="bi bi-question-circle question-icon"></i>
                                        Bagaimana saya dapat mengajukan pinjaman melalui DIKO?
                                    </button>
                                </h3>
                                <div id="faq-content-6" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                    <div class="accordion-body">
                                        Anda dapat mengajukan pinjaman melalui sistem aplikasi dengan mengisi formulir
                                        pinjaman
                                        yang tersedia dalam akun anggota Anda dan mengikuti petunjuk yang diberikan.
                                    </div>
                                </div>
                            </div><!-- # Faq item-->

                            <div class="accordion-item" data-aos="fade-up" data-aos-delay="800">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq-content-7">
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
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq-content-8">
                                        <i class="bi bi-question-circle question-icon"></i>
                                        Apakah saya dapat mengakses DIKO melalui perangkat seluler?
                                    </button>
                                </h3>
                                <div id="faq-content-8" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                    <div class="accordion-body">
                                        Ya, sistem aplikasi kami umumnya dapat diakses melalui perangkat seluler seperti
                                        smartphone atau tablet dengan mudah.
                                    </div>
                                </div>
                            </div><!-- # Faq item-->

                            <div class="accordion-item" data-aos="fade-up" data-aos-delay="1000">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq-content-9">
                                        <i class="bi bi-question-circle question-icon"></i>
                                        Bagaimana jika saya memiliki pertanyaan lebih lanjut atau masalah teknis?
                                    </button>
                                </h3>
                                <div id="faq-content-9" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                    <div class="accordion-body">
                                        Jangan ragu untuk menghubungi tim dukungan kami melalui informasi kontak yang
                                        tersedia di situs web kami.
                                        Kami akan dengan senang hati membantu Anda.
                                    </div>
                                </div>
                            </div><!-- # Faq item-->

                            <div class="accordion-item" data-aos="fade-up" data-aos-delay="1100">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq-content-10">
                                        <i class="bi bi-question-circle question-icon"></i>
                                        Bagaimana cara mengajukan saran atau masukan untuk meningkatkan DIKO?
                                    </button>
                                </h3>
                                <div id="faq-content-10" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                    <div class="accordion-body">
                                        Kami selalu mendengar masukan dari pengguna kami. Anda dapat mengirimkan saran atau
                                        masukan melalui formulir
                                        yang disediakan di situs web kami atau menghubungi pengelola koperasi Anda.
                                    </div>
                                </div>
                            </div><!-- # Faq item-->
                        </div>
                    </div>
                    <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img"
                        style='background-image: url("assets/img/faq.jpg");'>&nbsp;</div>
                </div>
            </div>
        </section><!-- End F.A.Q Section -->

        <section id="card-section" class="card-section" style="background-color: #C3E2FF;">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-4">
                                        <img src="{{ url('HeroBiz') }}/assets/img/globe.png" class="card-img-top"
                                            alt="Gambar Card 1" style="max-width: 100px; max-height: 100px;">
                                    </div>
                                    <div class="col-8">
                                        <h5 class="card-title">Coba DIKO, gratis!</h5>
                                        <p class="card-text">Level up pencatatan, management, dan pelaporan Bisnis Anda
                                            dengan menggunakan DIKO</p>
                                        <a href="#" class="btn btn-primary"
                                            style="background-color: #144B9A;">Mulai Sekarang</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-4">
                                        <img src="{{ url('HeroBiz') }}/assets/img/telephone-call.png"
                                            class="card-img-top" alt="Gambar Card 2"
                                            style="max-width: 100px; max-height: 100px;">
                                    </div>
                                    <div class="col-8">
                                        <h5 class="card-title">Hubungi DIKO</h5>
                                        <p class="card-text">Consultant kami akan membantu untuk memilih aplikasi terbaik
                                            sesuai kebutuhan perusahaan Anda</p>
                                        <a href="#" class="btn btn-primary"
                                            style="background-color: #144B9A;">Ajukan Demo</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container">
                <div class="row gy-5 gx-lg-5">
                    <div class="col-lg-6">
                        <div class="map">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3954.428402113363!2d111.54006207413555!3d-7.6369929755328085!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e79bf36978c3bf3%3A0x8c1997902afb269f!2sDIKO!5e0!3m2!1sid!2sid!4v1690605880803!5m2!1sid!2sid"
                                width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade">
                            </iframe>
                        </div><!-- End Google Maps -->
                    </div>
                    <div class="col-lg-6">
                        <div class="info">
                            <div class="section-header">
                                <h2>Contact</h2>
                            </div>

                            <div class="info-item d-flex">
                                <i class="bi bi-geo-alt flex-shrink-0"></i>
                                <div>
                                    <h4>Alamat:</h4>
                                    <p>Office : JL. Bulu Mas II No. 1 - Kanigoro - Kota Madiun - Jawa Timur<br>
                                        <br>Branch Office : Perum Griya Gadang Sejahtera Kav. 14 Gadang - Sukun - Kota
                                        Malang - Jawa Timur
                                    </p>
                                </div>
                            </div><!-- End Info Item -->

                            <div class="info-item d-flex">
                                <i class="bi bi-envelope flex-shrink-0"></i>
                                <div>
                                    <h4>Alamat Email:</h4>
                                    <p>cs@diko.co.id</p>
                                </div>
                            </div><!-- End Info Item -->
                            <div class="info-item d-flex">
                                <i class="bi bi-phone flex-shrink-0"></i>
                                <div>
                                    <h4>Nomor Telepon:</h4>
                                    <p>HP : 0811-3636-09 <br>
                                        Hotline : (0351) 2812555 </p>
                                </div>
                            </div><!-- End Info Item -->
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End Contact Section -->
    </main><!-- End #main -->
@endsection
