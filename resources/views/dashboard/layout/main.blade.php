<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  @if (Auth::check())
  <title>Hallo {{ Auth::user()->username }} </title>
@endif

  <!-- General CSS Files -->
  <link rel="stylesheet" href="{{ asset('aset/assets/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('dist/assets/modules/fontawesome/css/all.min.css')}}">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="{{ asset('dist/assets/modules/jqvmap/dist/jqvmap.min.css')}}">
  <link rel="stylesheet" href="{{ asset('dist/assets/modules/summernote/summernote-bs4.css')}}">
  <link rel="stylesheet" href="{{ asset('dist/assets/modules/owlcarousel2/dist/assets/owl.carousel.min.css')}}">
  <link rel="stylesheet" href="{{ asset('dist/assets/modules/owlcarousel2/dist/assets/owl.theme.default.min.css')}}">
  <link rel="stylesheet" href="{{ asset('dist/assets/modules/ionicons/css/ionicons.min.css')}}">
  <!-- Template CSS -->
  <link rel="stylesheet" href="{{ asset('dist/assets/css/style.css')}}">
  <link rel="stylesheet" href="{{ asset('dist/assets/css/components.css')}}">
<!-- Start GA -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote-bs4.min.js"></script>
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-94034622-3');
</script>
<!-- /END GA --></head>

<body>
    <div id="app">
      <div class="main-wrapper main-wrapper-1">
        
        @include('dashboard.layout.navbar');

        @include('dashboard.layout.sidebar');

        {{-- main content --}}
        <div class="main-content">
            <section class="section">

                <main>
                    @yield('container');
                </main>

            </section>
        </div>
        
        @include('dashboard.layout.footer');

      </div>
    </div>
  
    <!-- General JS Scripts -->
    <script src="{{ asset('dist/assets/modules/jquery.min.js')}}"></script>
    <script src="{{ asset('dist/assets/modules/popper.js')}}"></script>
    <script src="{{ asset('dist/assets/modules/tooltip.js')}}"></script>
    <script src="{{ asset('dist/assets/modules/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('dist/assets/modules/nicescroll/jquery.nicescroll.min.js')}}"></script>
    <script src="{{ asset('dist/assets/modules/moment.min.js')}}"></script>
    <script src="{{ asset('dist/assets/js/stisla.js')}}"></script>
    
    <!-- JS Libraies -->
    <script src="{{ asset('dist/assets/modules/jquery.sparkline.min.js')}}"></script>
    <script src="{{ asset('dist/assets/modules/chart.min.js')}}"></script>
    <script src="{{ asset('dist/assets/modules/owlcarousel2/dist/owl.carousel.min.js')}}"></script>
    <script src="{{ asset('dist/assets/modules/summernote/summernote-bs4.js')}}"></script>
    <script src="{{ asset('dist/assets/modules/chocolat/dist/js/jquery.chocolat.min.js')}}"></script>
  
    <!-- Page Specific JS File -->
    <script src="{{ asset('dist/assets/js/page/index.js')}}"></script>

    <!-- Template JS File -->
    <script src="{{ asset('dist/assets/js/scripts.js')}}"></script>
    <script src="{{ asset('dist/assets/js/custom.js')}}"></script>
</html>
