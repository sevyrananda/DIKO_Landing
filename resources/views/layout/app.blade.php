<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>DIKO</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{url('HeroBiz')}}/assets/img/DIKO TRANSPARANT.png" rel="icon">
  <link href="{{url('HeroBiz')}}/assets/img/DIKO TRANSPARANT.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Source+Sans+Pro:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{url('HeroBiz')}}/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{url('HeroBiz')}}/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="{{url('HeroBiz')}}/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="{{url('HeroBiz')}}/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="{{url('HeroBiz')}}/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Variables CSS Files. Uncomment your preferred color scheme -->
  <link href="{{url('HeroBiz')}}/assets/css/variables.css" rel="stylesheet">
  <!-- <link href="{{url('HeroBiz')}}/assets/css/variables-blue.css" rel="stylesheet"> -->
  <!-- <link href="{{url('HeroBiz')}}/assets/css/variables-green.css" rel="stylesheet"> -->
  <!-- <link href="{{url('HeroBiz')}}/assets/css/variables-orange.css" rel="stylesheet"> -->
  <!-- <link href="{{url('HeroBiz')}}/assets/css/variables-purple.css" rel="stylesheet"> -->
  <!-- <link href="{{url('HeroBiz')}}/assets/css/variables-red.css" rel="stylesheet"> -->
  <!-- <link href="{{url('HeroBiz')}}/assets/css/variables-pink.css" rel="stylesheet"> -->

  <!-- Template Main CSS File -->
  <link href="{{url('HeroBiz')}}/assets/css/main.css" rel="stylesheet">

  @section('css')
  @show
  <!-- =======================================================
  * Template Name: HeroBiz - v2.3.1
  * Template URL: https://bootstrapmade.com/herobiz-bootstrap-business-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
  @include('layout.header')
  @yield('content')
  @include('layout.footer')

  <!-- ======= Footer ======= -->

  <!-- <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>
        -->
  <div class="floating-ascend-button">
    <a href="#" class="scroll-top d-flex align-items-center justify-content-center" style="width: 150px; padding: 10px;">
      We're Online!
      <i class="bi bi-arrow-up-short"></i>
    </a>
  </div>





  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{url('HeroBiz')}}/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="{{url('HeroBiz')}}/assets/vendor/aos/aos.js"></script>
  <script src="{{url('HeroBiz')}}/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="{{url('HeroBiz')}}/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="{{url('HeroBiz')}}/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="{{url('HeroBiz')}}/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="{{url('HeroBiz')}}/assets/js/main.js"></script>
  @yield('js')
  @show
</body>

</html>