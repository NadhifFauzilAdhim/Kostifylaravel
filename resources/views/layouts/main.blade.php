<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Kostify | {{ $title }}</title>
    <link
      rel="shortcut icon" 
      href="{{ asset('favicon.ico') }}"
      type="image"
    />

    <!-- CSS FILES -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />

    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700&family=Open+Sans&display=swap"
      rel="stylesheet"
    />

    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/bootstrap-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/mainstyle.css')}}" rel="stylesheet" />
    <link href="{{ asset('css/aos.css')}}" rel="stylesheet" />

    <script type="text/javascript">
      window.$crisp = [];
      window.CRISP_WEBSITE_ID = "1e04db0b-6c8c-4e95-a60b-49c6607ff0c3";
      (function () {
        d = document;
        s = d.createElement("script");
        s.src = "https://client.crisp.chat/l.js";
        s.async = 1;
        d.getElementsByTagName("head")[0].appendChild(s);
      })();
    </script>
  </head>

  <body id="top">
    <main>
      @include('partials.navbar')
      @yield('container')
   
    </main>

    <footer class="site-footer section-padding">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-12 mb-4 pb-2">
            <a class="navbar-brand mb-2" href="index.html">
              <img src="{{ asset('assets/img/kostifydev.png') }}" alt="" width="200px" />
            </a>
          </div>

          <div class="col-lg-3 col-md-4 col-6">
            <h6 class="site-footer-title mb-3">Resources</h6>

            <ul class="site-footer-links">
              <li class="site-footer-link-item">
                <a href="#" class="site-footer-link">Home</a>
              </li>

              <li class="site-footer-link-item">
                <a href="#" class="site-footer-link">How it works</a>
              </li>

              <li class="site-footer-link-item">
                <a href="#" class="site-footer-link">FAQs</a>
              </li>

              <li class="site-footer-link-item">
                <a href="#" class="site-footer-link">Contact</a>
              </li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-4 col-6 mb-4">
            <h6 class="site-footer-title mb-3">Information</h6>

            <p class="text-white d-flex mb-1">
              <a href="tel: 085 727 785 062" class="site-footer-link">
                085 727 785 062
              </a>
            </p>

            <p class="text-white d-flex">
              <a href="mailto:analyticgames@gmail.com" class="site-footer-link">
                analyticgames@gmail.com
              </a>
            </p>
            <p class="text-white d-flex">
              <a href="https://ndfproject.my.id" class="site-footer-link">
                ndfproject.my.id
              </a>
            </p>
          </div>

          <div class="col-lg-3 col-md-4 col-12 mt-4 mt-lg-0 ms-auto">
            <p class="copyright-text">Copyright © 2024 Arabis Group | NDFProject</p>
          </div>
        </div>
      </div>
    </footer>

    <!-- JAVASCRIPT FILES -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/jquery.sticky.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
    <script src="{{ asset('js/aos.js') }}"></script>
    

   
    <script>
        window.addEventListener('load', () => {
    AOS.init({
      duration: 1000,
      easing: 'ease-in-out',
      once: true,
      mirror: false
    })
  });
    </script>
  </body>
</html>
