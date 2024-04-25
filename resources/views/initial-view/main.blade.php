<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>UJIKOM</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="Free HTML Templates" name="keywords" />
    <meta content="Free HTML Templates" name="description" />

    <!-- Favicon -->
    <link  rel="icon" href="{{asset('assets/img/favicon.ico')}}"/>

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
     rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Handlee&family=Nunito&display=swap"
    />

    {{-- boostrap --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-xxx" crossorigin="anonymous"></script>


    <!-- Font Awesome -->
   
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css"
      rel="stylesheet"
    />

    <!-- Flaticon Font -->
    <link href="{{asset('assets/lib/flaticon/font/flaticon.css')}}" rel="stylesheet" />

    <!-- Libraries Stylesheet -->
    <link rel="stylesheet" href="{{asset('assets/lib/owlcarousel/assets/owl.carousel.min.css')}}"/>
    <link  rel="stylesheet" href="{{asset('assets/lib/lightbox/css/lightbox.min.css')}}" />

    <!-- Customized Bootstrap Stylesheet -->
    <link  rel="stylesheet" href="{{asset('assets/css/style.css')}}" />
  </head>

  <body>
    <div id="app">
      <div class="main-wrapper main-wrapper-1">
          @include('initial-view.layouts.navbar')

          <div class="main-content">
              <section class="section">

                  <main>
                      @yield('container')
                  </main>

              </section>
          </div>

          @include('initial-view.layouts.footer')

      </div>
  </div>
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.6/umd/popper.min.js" integrity="sha384-xxx" crossorigin="anonymous"></script>
    <script src="{{asset('assets/lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('assets/lib/owlcarousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('assets/lib/isotope/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('assets/lib/lightbox/js/lightbox.min.js')}}"></script>

    <!-- Contact Javascript File -->
    <script src="{{asset('assets/mail/jqBootstrapValidation.min.js')}}"></script>
    <script src="{{asset('assets/mail/contact.js')}}"></script>

    <!-- Template Javascript -->
    <script src="{{asset('assets/js/main.js')}}"></script>
  </body>
</html>