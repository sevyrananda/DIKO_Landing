@extends('layout.app')
@section('content')
    <!-- ======= Hero Section ======= -->
    <section id="hero-animated" class="hero-animated d-flex align-items-center" style="background-color: #fff;">
        <div class="container d-flex flex-column justify-content-center align-items-center text-center position-relative"
            data-aos="zoom-out">
            <img src="{{ asset('HeroBiz/assets/img/DIKO TRANSPARANT.png') }}" class="img-fluid animated" style="width: 370px;">
            <h2>Selamat Datang di <span>DIKO POS</span></h2>
            <p>Kelola Pinjaman dan Laporan Keuangan dengan Lebih Mudah!</p>
            <div class="d-flex">
                <a href="#about" class="btn-get-started scrollto" style="background-color: #144B9A;">Get Started</a>
                <a href="https://youtu.be/4ZoWQeCO0CI" class="glightbox btn-watch-video d-flex align-items-center"
                    style="color: #144B9A;"><i class="bi bi-play-circle" style="color: #144B9A;"></i><span>Watch
                        Video</span></a>
            </div>
        </div>
    </section><!-- End Clients Section -->

    <main id="main">
        <!-- ======= About Section ======= -->
        <section id="about" class="about" style="background-color: #485664; margin-top: 10px;">
            <div class="container" data-aos="fade-up">
                <div class="flex" style="background-color: #485664;">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="{{ asset('HeroBiz/mockup-1.png') }}" class="img-fluid animated fill-shadow"
                                alt="Gambar DIKO POS">
                        </div>
                        <div class="col-md-6">
                            <h2 style="color: #fff;">Bagaimana Diko POS membantu Anda?</h2>
                            <ul class="list-group" style="color: #fff;">
                                <li class="list-group-item d-flex align-items-center">
                                    <i class="bi bi-check-circle text-success me-2"></i>
                                    <span>Pelayanan terbaik dengan kejujuran dan profesionalisme dalam setiap
                                        transaksi.</span>
                                </li>
                                <li class="list-group-item d-flex align-items-center">
                                    <i class="bi bi-check-circle text-success me-2"></i>
                                    <span>Layanan simpan pinjam yang terintegrasi dengan sistem inventori, proyek, dan
                                        penggajian.</span>
                                </li>
                                <li class="list-group-item d-flex align-items-center">
                                    <i class="bi bi-check-circle text-success me-2"></i>
                                    <span>Keamanan operasional dengan hak akses menggunakan fitur tertentu</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
        </section><!-- End About Section -->

        <!-- ======= Features Section ======= -->
        <section id="features" class="features">
            <div class="container" data-aos="fade-up">
                <div class="section-header">
                    <h2>Fitur Diko POS</h2>
                </div>
                <ul class="nav nav-tabs row gy-4 d-flex justify-content-center">
                    <li class="nav-item col-6 col-md-4 col-lg-2">
                        <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#tab-1">
                            <i class="bi bi-cash-coin color-teal"></i>
                            <h4>Sekali Bayar</h4>
                        </a>
                    </li><!-- End Tab 1 Nav -->

                    <li class="nav-item col-6 col-md-4 col-lg-2">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-2">
                            <i class="bi bi-shield-check color-cyan"></i>
                            <h4>Keamanan</h4>
                        </a>
                    </li><!-- End Tab 2 Nav -->

                    <li class="nav-item col-6 col-md-4 col-lg-2">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-3">
                            <i class="bi bi-binoculars color-indigo"></i>
                            <h4>Pemantauan</h4>
                        </a>
                    </li><!-- End Tab 3 Nav -->

                    <li class="nav-item col-6 col-md-4 col-lg-2">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-4">
                            <i class="bi bi-clock-history color-red"></i>
                            <h4>Realtime</h4>
                        </a>
                    </li><!-- End Tab 4 Nav -->
                </ul>

                <div class="tab-content">

                    <div class="tab-pane active show" id="tab-1">
                        <div class="row gy-4 justify-content-center">
                            <div class="col-lg-8 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="100">
                                <h3>Kemudahan Akses Pembayaran</h3>
                                <p class="fst-italic">
                                    Anggota koperasi untuk melakukan pembayaran atau transaksi sekali bayar dengan mudah.
                                    Ini dapat mencakup pembelian saham, pembayaran pinjaman, atau pembelian produk dan
                                    layanan lainnya yang ditawarkan oleh koperasi.
                                    Memungkinkan anggota untuk melihat riwayat transaksi mereka, sehingga mereka dapat
                                    melacak semua pembayaran dan transaksi yang telah mereka lakukan.
                                </p>
                            </div>
                            <div class="col-lg-2 order-1 text-center" data-aos="fade-up" data-aos-delay="200">
                                <img src="{{ asset('HeroBiz/assets/img/new-features-1.png') }}" alt=""
                                    class="img-fluid">
                            </div>
                        </div>
                    </div><!-- End Tab Content 1 -->

                    <div class="tab-pane" id="tab-2">
                        <div class="row gy-4 justify-content-center">
                            <div class="col-lg-8 order-2 order-lg-1">
                                <h3>Keamanan Data Terjaga</h3>
                                <p class="fst-italic">
                                    Sistem keamanan yang kuat akan memerlukan otorisasi dan autentikasi yang tepat untuk
                                    mengakses informasi atau melakukan transaksi.
                                    Hal ini dapat mencakup verifikasi dua faktor, kata sandi yang kuat, dan kontrol akses
                                    yang baik.
                                </p>
                            </div>
                            <div class="col-lg-2 order-1 text-center">
                                <img src="{{ asset('HeroBiz/assets/img/new-features-2.png') }}" alt=""
                                    class="img-fluid">
                            </div>
                        </div>
                    </div><!-- End Tab Content 2 -->

                    <div class="tab-pane" id="tab-3">
                        <div class="row gy-4 justify-content-center">
                            <div class="col-lg-8 order-2 order-lg-1">
                                <h3>Pantau Transaksi</h3>
                                <p class="fst-italic">
                                    Fitur pemantauan akan memungkinkan pengelola koperasi untuk memantau aktivitas di situs
                                    web, termasuk transaksi yang terjadi.
                                    Ini membantu mendeteksi potensi kecurangan atau aktivitas yang mencurigakan.
                                </p>
                            </div>
                            <div class="col-lg-2 order-1 text-center">
                                <img src="{{ asset('HeroBiz/assets/img/new-features-3.png') }}" alt=""
                                    class="img-fluid">
                            </div>
                        </div>
                    </div><!-- End Tab Content 3 -->

                    <div class="tab-pane" id="tab-4">
                        <div class="row gy-4 justify-content-center">
                            <div class="col-lg-8 order-2 order-lg-1">
                                <h3>Pengelolaan Simpan Pinjam yang Efisien</h3>
                                <p class="fst-italic">
                                    Fitur ini memastikan bahwa informasi di situs web selalu diperbarui secara real-time.
                                    Ini penting terutama dalam hal saldo akun anggota, informasi produk, dan suku bunga yang
                                    berubah.
                                </p>
                            </div>
                            <div class="col-lg-2 order-1 text-center">
                                <img src="{{ asset('HeroBiz/assets/img/new-features-4.png') }}" alt=""
                                    class="img-fluid">
                            </div>
                        </div>
                    </div><!-- End Tab Content 4 -->
                </div>
            </div>
        </section><!-- End Features Section -->

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
                                <a href="{{ url('HeroBiz') }}/assets/img/fitur/pos1.png" data-gallery="fitur-gallery"
                                    class="glightbox preview-link">
                                    <img src="{{ url('HeroBiz') }}/assets/img/fitur/pos1.png" class="img-fluid"
                                        alt="">
                                </a>
                            </div>
                            <div class="details position-relative">
                                <div class="icon">
                                    <i class="bi bi-search"></i>
                                </div>
                                <a href="#" class="stretched-link">
                                    <h3>Master</h3>
                                </a>
                                <p> Mengelola data-data inti yang mencakup informasi produk atau layanan yang ditawarkan.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- End Service Item -->


                    <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="300">
                        <div class="service-item">
                            <div class="img">
                                <a href="{{ url('HeroBiz') }}/assets/img/fitur/pos2.png" data-gallery="fitur-gallery"
                                    class="glightbox preview-link">
                                    <img src="{{ url('HeroBiz') }}/assets/img/fitur/pos2.png" class="img-fluid"
                                        alt="">
                                </a>
                            </div>
                            <div class="details position-relative">
                                <div class="icon">
                                    <i class="bi bi-arrow-up"></i>
                                    <i class="bi bi-arrow-down"></i>
                                </div>
                                <a href="#" class="stretched-link">
                                    <h3>Kasir</h3>
                                </a>
                                <p>Mencatat transaksi uang tunai masuk dan keluar untuk melacak arus kas dan memudahkan
                                    pengelolaan keuangan.</p>
                            </div>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="400">
                        <div class="service-item">
                            <div class="img">
                                <a href="{{ url('HeroBiz') }}/assets/img/fitur/pos3.pngg" data-gallery="fitur-gallery"
                                    class="glightbox preview-link">
                                    <img src="{{ url('HeroBiz') }}/assets/img/fitur/pos3.png" class="img-fluid"
                                        alt="">
                                </a>
                            </div>
                            <div class="details position-relative">
                                <div class="icon">
                                    <i class="bi bi-bar-chart"></i> <!-- Ikon grafik batang -->
                                </div>
                                <a href="#" class="stretched-link">
                                    <h3>Pembelian</h3>
                                </a>
                                <p>Mencatat tahapan penting dalam menghasilkan pendapatan dan memastikan pelanggan
                                    mendapatkan layanan yang mereka inginkan dengan cara aman dan efisien.</p>
                            </div>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="500">
                        <div class="service-item">
                            <div class="img">
                                <a href="{{ url('HeroBiz') }}/assets/img/fitur/pos4.png" data-gallery="fitur-gallery"
                                    class="glightbox preview-link">
                                    <img src="{{ url('HeroBiz') }}/assets/img/fitur/pos4.png" class="img-fluid"
                                        alt="">
                                </a>
                            </div>
                            <div class="details position-relative">
                                <div class="icon">
                                    <i class="bi bi-bounding-box-circles"></i>
                                </div>
                                <a href="#" class="stretched-link">
                                    <h3>Penjualan</h3>
                                </a>
                                <p>Membantu menyimpan riwayat penjualan pengguna yang memungkinkan mereka untuk melihat
                                    stock yang telah terjual.</p>
                                <a href="#" class="stretched-link"></a>
                            </div>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="600">
                        <div class="service-item">
                            <div class="img">
                                <a href="{{ url('HeroBiz') }}/assets/img/fitur/pos5.png" data-gallery="fitur-gallery"
                                    class="glightbox preview-link">
                                    <img src="{{ url('HeroBiz') }}/assets/img/fitur/pos5.png" class="img-fluid"
                                        alt="">
                                </a>
                            </div>
                            <div class="details position-relative">
                                <div class="icon">
                                    <i class="bi bi-calendar4-week"></i>
                                </div>
                                <a href="#" class="stretched-link">
                                    <h3>Transaksi Stock</h3>
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
                                <a href="{{ url('HeroBiz') }}/assets/img/fitur/pos6.png" data-gallery="fitur-gallery"
                                    class="glightbox preview-link">
                                    <img src="{{ url('HeroBiz') }}/assets/img/fitur/pos6.png" class="img-fluid"
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

        <!-- ======= Featured Services Section ======= -->
        <section id="featured-services" class="featured-services" style="background-color:#C3E2FF;">
            <div class="container">

                <div class="row gy-4">

                    <div class="col-xl-3 col-md-6 d-flex" data-aos="zoom-out">
                        <div class="service-item position-relative">
                            <div class="icon" style="text-align: center;">
                                <img src="{{ asset('HeroBiz/time-management.png') }}" alt="manage" width="50"
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
                            <div class="icon" style="text-align: center;">
                                <img src="{{ asset('HeroBiz/global-network.png') }}" alt="network" width="45"
                                    height="45">
                                <!-- <i class="bi bi-bounding-box-circles icon"></i> -->
                            </div>
                            <!-- <h4><a href="" class="stretched-link">Sed ut perspici</a></h4> -->
                            <p style="font-family: Verdana, Geneva, Tahoma, sans-serif;">Solusi terpadu untuk mengelola
                                jaringan
                                cabang</p>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-xl-3 col-md-6 d-flex" data-aos="zoom-out" data-aos-delay="400">
                        <div class="service-item position-relative">
                            <div class="icon" style="text-align: center;">
                                <img src="{{ asset('HeroBiz/transaction.png') }}" alt="transaction" width="45"
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
                            <div class="icon" style="text-align: center;">
                                <!-- <i class="bi bi-broadcast icon"></i> -->
                                <img src="{{ asset('HeroBiz/responsive-design.png') }}" alt="device" width="45"
                                    height="45">
                            </div>
                            <!-- <h4><a href="" class="stretched-link">Nemo Enim</a></h4> -->
                            <p style="font-family: Verdana, Geneva, Tahoma, sans-serif;">Nikmati kemudahan akses melalui
                                semua
                                perangkat</p>
                        </div>
                    </div><!--End Service Item-->
                </div>
            </div>
        </section><!-- End Featured Services Section -->


        {{-- ======= Pricing Section =======  --}}
        <section id="pricing" class="pricing">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>Our Pricing</h2>
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
        {{-- <End Pricing Section> --}}

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
                    showModal("pluginMasterModal");
                });

                // Logo 2 (Plugin Master Barcode Form Add)
                document.querySelector(".col-md-3.grid-item:nth-child(2)").addEventListener("click", function() {
                    showModal("barcodeModal");
                });

                // Logo 3 (Plugin Master Golongan Jaminan)
                document.querySelector(".col-md-3.grid-item:nth-child(3)").addEventListener("click", function() {
                    showModal("golonganModal");
                });

                // Logo 4 (Plugin Master Kode Transaksi)
                document.querySelector(".col-md-3.grid-item:nth-child(4)").addEventListener("click", function() {
                    showModal("kodeModal");
                });

                function closeModal(modalId) {
                    var modal = new bootstrap.Modal(document.getElementById(modalId));
                    modal.hide();
                }
            </script>

            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


<<<<<<< HEAD
            <!-- Modals -->
            <div class="modal fade" id="pluginMasterModal" tabindex="-1" role="dialog"
                aria-labelledby="pluginMasterModalLabel" aria-hidden="false">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="pluginMasterModalLabel">Plugin Master Menu Bank & E-Commerce</h5>
                            <button type="button" class="close" data-dismiss="modal" data-target="#pluginMasterModal"
                                aria-label="Close">
                                <span aria-hidden="false">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <!-- Informasi yang ingin Anda tambahkan -->
                            <p>Plugin ini mendukung berbagai bank dan penyedia layanan pembayaran, mencakup beragam opsi
                                seperti kartu kredit, transfer bank, e-wallet, dan banyak lagi.</p>
                        </div>
                        {{-- <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      </div> --}}
                    </div>
=======

  {{-- ======= Pricing Section =======  --}}
  <section id="pricing" class="pricing">
    <div class="container" data-aos="fade-up">

      <div class="section-header">
        <h2>Our Pricing</h2>
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
  {{-- <End Pricing Section> --}}



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


  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">
    <div class="container">
      <div class="section-header">
        <h2>Kontak</h2>
        <p> Kami senang mendengar dari Anda dan siap membantu menjawab pertanyaan, menyediakan dukungan, 
          atau menerima umpan balik yang berharga. Kami berkomitmen untuk memberikan layanan pelanggan yang luar biasa, 
          dan Anda adalah prioritas kami.</p>
      </div>
    </div>

    <div class="container">
      <div class="row gy-5">
        <div class="col-lg-6">
          <div class="card flex-fill shadow p-3">
            <div class="card-body">
              <h3>More Info</h3>
              <p>Hubungi kami menggunakan informasi di bawah ini</p>
              <br/><br/>
              <div class="info-item d-flex">
                <i class="bi bi-geo-alt flex-shrink-0"></i>
                <div>
                  <h4>Alamat:</h4>
                  <p>Office : JL. Bulu Mas II No. 1 - Kanigoro - Kota Madiun - Jawa Timur<br><br>
                    Branch Office : Perum Griya Gadang Sejahtera Kav. 14 Gadang - Sukun - Kota Malang - Jawa Timur </p>
>>>>>>> cdcaf0a9b7628d3b62d871bb662cba5f8be77ce4
                </div>
            </div>

            <div class="modal fade" id="barcodeModal" tabindex="-1" role="dialog" aria-labelledby="barcodeModalLabel"
                aria-hidden="false">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="barcodeModalLabel">Plugin Master Menu Barcode</h5>
                            <button type="button" class="close" data-dismiss="modal" data-target="#pluginMasterModal"
                                aria-label="Close">
                                <span aria-hidden="false">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <!-- Informasi yang ingin Anda tambahkan -->
                            <p>Plugin ini juga dapat terintegrasi dengan sistem POS (Point of Sale) Anda, memberikan
                                kemudahan dalam proses penjualan dan pencatatan data produk.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="barcodeModal" tabindex="-1" role="dialog" aria-labelledby="barcodeModalLabel"
                aria-hidden="false">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="barcodeModalLabel">Plugin Master Menu Barcode</h5>
                            <button type="button" class="close" data-dismiss="modal" data-target="#pluginMasterModal"
                                aria-label="Close">
                                <span aria-hidden="false">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <!-- Informasi yang ingin Anda tambahkan -->
                            <p>Plugin ini memberikan kemudahan dalam penyusunan laporan keuangan dan memungkinkan Anda untuk
                                membuat keputusan yang lebih baik dalam pengelolaan keuangan Anda.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="golonganModal" tabindex="-1" role="dialog"
                aria-labelledby="golonganModalLabel" aria-hidden="false">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="golonganModalLabel">Plugin Master Menu Golongan Pinjaman</h5>
                            <button type="button" class="close" data-dismiss="modal" data-target="#golonganModal"
                                aria-label="Close">
                                <span aria-hidden="false">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <!-- Informasi yang ingin Anda tambahkan -->
                            <p>Plugin ini memungkinkan pengguna untuk dengan mudah mengintegrasikan berbagai opsi pembayaran
                                dari berbagai bank dan penyedia layanan pembayaran dalam satu menu yang terstruktur,
                                memberikan pengalaman belanja yang lebih nyaman bagi pelanggan. </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="kodeModal" tabindex="-1" role="dialog" aria-labelledby="kodeModalLabel"
                aria-hidden="false">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="kodeModalLabel">Plugin Master Menu Kode Transaksi Pinjaman</h5>
                            <button type="button" class="close" data-dismiss="modal" data-target="#kodenModal"
                                aria-label="Close">
                                <span aria-hidden="false">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <!-- Informasi yang ingin Anda tambahkan -->
                            <p>Plugin ini juga memungkinkan Anda untuk dengan cepat mengidentifikasi dan membedakan berbagai
                                jenis transaksi pinjaman, seperti pinjaman pribadi, hipotek, atau bisnis.</p>
                        </div>
                    </div>
                </div>
            </div>



            <section id="plugin-menu" class="plugin-menu">
                <div class="container" data-aos="fade-up">
                    <div class="section-header">
                        <h2>Our Plugin Menu</h2>
                    </div>

                    <div class="grid-menu">
                        <div class="row">
                            <!-- Item 1 (Logo 1) -->
                            <div class="col-md-3 grid-item">
                                <div class="hidden-button">
                                    <img src="{{ url('HeroBiz') }}/assets/img/logo koperasi.png" alt="Logo 1"
                                        class="small-logo" id="showModalButton">
                                </div>
                            </div>

                            <script>
                                document.getElementById("showModalButton").addEventListener("click", function() {
                                    // Menampilkan modal ketika gambar diklik
                                    $('#pluginMasterModal').modal('show');
                                });
                            </script>

                            <!-- Item 2 (Logo 2) -->
                            <div class="col-md-3 grid-item" data-toggle="modal" data-target="#barcodeModal">
                                <img src="{{ url('HeroBiz') }}/assets/img/logo koperasi.png" alt="Logo 2"
                                    class="small-logo">
                            </div>

                            <!-- Item 3 (Logo 3) -->
                            <div class="col-md-3 grid-item" data-toggle="modal" data-target="#golonganModal">
                                <img src="{{ url('HeroBiz') }}/assets/img/logo koperasi.png" alt="Logo 3"
                                    class="small-logo">
                            </div>

                            <!-- Item 4 (Logo 4) -->
                            <div class="col-md-3 grid-item" data-toggle="modal" data-target="#kodeModal">
                                <img src="{{ url('HeroBiz') }}/assets/img/logo koperasi.png" alt="Logo 4"
                                    class="small-logo">
                            </div>
                        </div>
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


        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container">
                <div class="section-header">
                    <h2>Kontak</h2>
                    <p> Kami senang mendengar dari Anda dan siap membantu menjawab pertanyaan, menyediakan dukungan,
                        atau menerima umpan balik yang berharga. Kami berkomitmen untuk memberikan layanan pelanggan yang
                        luar biasa,
                        dan Anda adalah prioritas kami.</p>
                </div>
            </div>

            <div class="container">
                <div class="row gy-5">
                    <div class="col-lg-6">
                        <div class="card flex-fill shadow p-3">
                            <div class="card-body">
                                <h3>More Info</h3>
                                <p>Hubungi kami menggunakan informasi di bawah ini</p>
                                <br /><br />
                                <div class="info-item d-flex">
                                    <i class="bi bi-geo-alt flex-shrink-0"></i>
                                    <div>
                                        <h4>Alamat:</h4>
                                        <p>Office : JL. Bulu Mas II No. 1 - Kanigoro - Kota Madiun - Jawa Timur<br><br>
                                            Branch Office : Perum Griya Gadang Sejahtera Kav. 14 Gadang - Sukun - Kota
                                            Malang - Jawa Timur </p>
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
                                        <p>HP : 0811-3636-09<br>
                                            Hotline : (0351) 2812555 </p>
                                    </div>
                                </div><!-- End Info Item -->
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <!-- <div class="card flex-fill shadow"> -->
                        <div class="card-body">
                            <div class="map">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3954.428402113363!2d111.54006207413555!3d-7.6369929755328085!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e79bf36978c3bf3%3A0x8c1997902afb269f!2sDIKO!5e0!3m2!1sid!2sid!4v1690605880803!5m2!1sid!2sid"
                                    width="100%" height="90%" style="border:0;" allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade">
                                </iframe>
                            </div><!-- End Google Maps -->
                        </div>
                        <!-- </div> -->
                    </div>
                </div>
            </div>
        </section><!-- End Contact Section -->

    </main>
    <!-- End #main -->
@endsection
