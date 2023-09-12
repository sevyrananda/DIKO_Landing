<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Welcome to Andromeda!</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{url('TheEvent')}}/assets/img/favicon.png" rel="icon">
  <link href="{{url('TheEvent')}}/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{url('TheEvent')}}/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="{{url('TheEvent')}}/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{url('TheEvent')}}/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="{{url('TheEvent')}}/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="{{url('TheEvent')}}/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{url('TheEvent')}}/assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: TheEvent
  * Updated: Jul 27 2023 with Bootstrap v5.3.1
  * Template URL: https://bootstrapmade.com/theevent-conference-event-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
  @include('layout4.header')
  @yield('content')
  @include('layout4.footer')

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="{{url('TheEvent')}}/assets/vendor/aos/aos.js"></script>
<script src="{{url('TheEvent')}}/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="{{url('TheEvent')}}/assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="{{url('TheEvent')}}/assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="{{url('TheEvent')}}/assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="{{url('TheEvent')}}/assets/js/main.js"></script>
@yield('js')
  @show
</body>

</html>