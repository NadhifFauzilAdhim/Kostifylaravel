<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Kostify | {{ $title }}</title>
  <link rel="shortcut icon" type="image" href="{{ asset('favicon.ico') }}" />
  <link rel="stylesheet" href="{{ asset('/css/styles.min.css')}}"/>
  <link rel="stylesheet" href="{{ asset('/css/bootstrap-icons.css') }}"/>
  {{-- Trix --}}
  <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.8/dist/trix.css">
  <script type="text/javascript" src="https://unpkg.com/trix@2.0.8/dist/trix.umd.min.js"></script>
  <style>
    trix-toolbar [data-trix-button-group="file-tools"]{
      display: none;
    }
  </style>
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

<body>
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
     @include('dashboard.layouts.sidebar')
    <div class="body-wrapper">
     @include('dashboard.layouts.header')
     @yield('container')
    </div>
    
  </div>
 
  <script src="{{ asset('/js/jquery.min.js') }}"></script>
  <script src="{{ asset('/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('/js/sidebarmenu.js') }}"></script>
  <script src="{{ asset('/js/app.min.js') }}"></script>
  {{-- <script src="./libs/apexcharts/dist/apexcharts.min.js"></script>
  <script src="./libs/simplebar/dist/simplebar.js"></script> --}}
  <script src="{{ asset('/js/dashboard.js') }}"></script>
  
</body>

</html>