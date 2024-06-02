
@extends('layouts.main') @section('container')

<header
    class="site-header d-flex flex-column justify-content-center align-items-center">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-lg-5 col-12 mb-5">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="/">Homepage</a>
                        </li>

                        <li class="breadcrumb-item active" aria-current="page">
                            Detail {{ $selected->placename }}
                        </li>
                        
                    </ol>
                </nav>

                <h2 class="text-white">{{ $selected->placename }}</h2>
                <p class="text-white fs-6">Dibuat : {{ $selected->created_at }} <br>Update : {{ $selected->updated_at }}</p>
                <div class="header-shape">
          </div>
            </div>
            <div class="col-lg-5 col-12">
                <div class="topics-detail-block bg-white shadow-lg">
                    <iframe
                        src="https://maps.google.com/maps?q={{ $selected->location }}&t=&z=13&ie=UTF8&iwloc=&output=embed"
                        frameborder="0"
                        style="border: 0; width: 100%; height: 290px"
                        allowfullscreen
                    ></iframe>
                </div>
            </div>
        </div>
    </div>
</header>

      <section>
        <div class="toast-container position-fixed top-0 end-0 p-3" data-aos="fade-left">
          <div
            id="liveToast"
            class="toast"
            role="alert"
            aria-live="assertive"
            aria-atomic="true"
          >
            <div class="toast-header">
              <img
                src="/favicon.ico"
                class="rounded me-2"
                alt="..."
              />
              <strong class="me-auto">Notifikasi</strong>
              <small>Now</small>
              <button
                type="button"
                class="btn-close"
                data-bs-dismiss="toast"
                aria-label="Close"
              ></button>
            </div>
            <div class="toast-body text-center"> 
              {{ $selected->placename }} udah Penuh &#128557;<br>
              Masih Banyak pilihan lainnya
            </div>
          </div>
        </div>
      </section>

<section class="py-5 py-xl-8">
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-12 col-md-10 col-lg-8 col-xl-7 col-xxl-6">
                <h2 class="mb-4 display-5 text-center">Detail {{ $selected->category->name }} <strong>{{ $selected->forgender }}</strong> <br> {{ $selected->placename }}</h2>
                <hr class="w-50 mx-auto mb-5 mb-xl-9 border-dark-subtle" />
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-12">
                <div id="carouselExampleCaptions" class="carousel slide mb-3" data-bs-ride="false">
                    <div class="carousel-indicators">
                      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            @if ($selected->image)
                            <img src="{{ asset('storage/'.$selected->image) }}" class="d-block w-100" alt="...">
                            @else
                            <img src="{{ asset('assets/img/image-not-found.png') }}" class="d-block w-100" alt="...">
                            @endif
                            
                            <div class="carousel-caption d-none d-md-block">
                              <h5 class="text-white">Kamar</h5>
                              <p class="text-white">Keterangan</p>
                            </div>
                        </div>                                            
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>      
            </div>
            <blockquote class="mb-5 mt-5 text-center">
               <h5>{!! $selected->facility !!}</h5> 
            </blockquote>
        </div> 
    </div>
    <div class="container overflow-hidden">
        <div class="row gy-5 gx-md-4 gy-lg-0 gx-xxl-5 justify-content-center text-center">
            <div class="col-11 col-sm-6 col-lg-3 feature-icon">
                <div class="badge bg-primary p-3 mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-tag" viewBox="0 0 16 16">
                        <path d="M6 4.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0m-1 0a.5.5 0 1 0-1 0 .5.5 0 0 0 1 0"/>
                        <path d="M2 1h4.586a1 1 0 0 1 .707.293l7 7a1 1 0 0 1 0 1.414l-4.586 4.586a1 1 0 0 1-1.414 0l-7-7A1 1 0 0 1 1 6.586V2a1 1 0 0 1 1-1m0 5.586 7 7L13.586 9l-7-7H2z"/>
                      </svg>
                </div>
                <h4 class="mb-3">Harga</h4>
                <p class="mb-3 text-secondary">
                    Rp. <strong class="text-danger">  {{ number_format($selected->price, 0,',','.') }}</strong>/bulan
                </p>
                
            </div>
            <div class="col-11 col-sm-6 col-lg-3 feature-icon">
                <div class="badge {{ ($selected->available == 0) ? 'bg-danger' : 'bg-success' }} p-3 mb-4">
                  
                    @if($selected->available != 0)
                      <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-house-check" viewBox="0 0 16 16">
                        <path d="M7.293 1.5a1 1 0 0 1 1.414 0L11 3.793V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v3.293l2.354 2.353a.5.5 0 0 1-.708.708L8 2.207l-5 5V13.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 1 0 1h-4A1.5 1.5 0 0 1 2 13.5V8.207l-.646.647a.5.5 0 1 1-.708-.708z"/>
                        <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m1.679-4.493-1.335 2.226a.75.75 0 0 1-1.174.144l-.774-.773a.5.5 0 0 1 .708-.707l.547.547 1.17-1.951a.5.5 0 1 1 .858.514"/>
                      </svg>
                      @else
                      
                      <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-house-x" viewBox="0 0 16 16">
                        <path d="M7.293 1.5a1 1 0 0 1 1.414 0L11 3.793V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v3.293l2.354 2.353a.5.5 0 0 1-.708.708L8 2.207l-5 5V13.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 1 0 1h-4A1.5 1.5 0 0 1 2 13.5V8.207l-.646.647a.5.5 0 1 1-.708-.708z"/>
                        <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m-.646-4.854.646.647.646-.646a.5.5 0 0 1 .708.707l-.647.646.647.646a.5.5 0 0 1-.708.708l-.646-.647-.646.647a.5.5 0 0 1-.708-.707l.647-.647-.647-.646a.5.5 0 0 1 .708-.707Z"/>
                      </svg>
                      @endif
                </div>
                @if($selected->available == 0)
                <h4 class="mb-3">Tidak Tersedia</h4>
                <p class="mb-3 text-secondary"><strong>Penuh</strong></p>
                @else
                <h4 class="mb-3">Tersedia</h4>
                <p class="mb-3 text-secondary"><strong>{{ $selected->available }} Kamar Tersedia</strong></p>
                @endif
            </div>
            <div class="col-11 col-sm-6 col-lg-3 feature-icon">
                <div class="badge bg-primary p-3 mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-geo" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M8 1a3 3 0 1 0 0 6 3 3 0 0 0 0-6M4 4a4 4 0 1 1 4.5 3.969V13.5a.5.5 0 0 1-1 0V7.97A4 4 0 0 1 4 3.999zm2.493 8.574a.5.5 0 0 1-.411.575c-.712.118-1.28.295-1.655.493a1.3 1.3 0 0 0-.37.265.3.3 0 0 0-.057.09V14l.002.008.016.033a.6.6 0 0 0 .145.15c.165.13.435.27.813.395.751.25 1.82.414 3.024.414s2.273-.163 3.024-.414c.378-.126.648-.265.813-.395a.6.6 0 0 0 .146-.15l.015-.033L12 14v-.004a.3.3 0 0 0-.057-.09 1.3 1.3 0 0 0-.37-.264c-.376-.198-.943-.375-1.655-.493a.5.5 0 1 1 .164-.986c.77.127 1.452.328 1.957.594C12.5 13 13 13.4 13 14c0 .426-.26.752-.544.977-.29.228-.68.413-1.116.558-.878.293-2.059.465-3.34.465s-2.462-.172-3.34-.465c-.436-.145-.826-.33-1.116-.558C3.26 14.752 3 14.426 3 14c0-.599.5-1 .961-1.243.505-.266 1.187-.467 1.957-.594a.5.5 0 0 1 .575.411"/>
                      </svg>
                </div>
                <h4 class="mb-3">Lokasi</h4>
                <p class="mb-3 text-secondary">
                    {{ $selected->location }}
                </p>
                <a href="https://maps.google.com/maps?q={{ $selected->location }}" class="fw-bold text-decoration-none link-primary" target="_blank">
                    
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 92.3 132.3"><path fill="#1a73e8" d="M60.2 2.2C55.8.8 51 0 46.1 0 32 0 19.3 6.4 10.8 16.5l21.8 18.3L60.2 2.2z"/><path fill="#ea4335" d="M10.8 16.5C4.1 24.5 0 34.9 0 46.1c0 8.7 1.7 15.7 4.6 22l28-33.3-21.8-18.3z"/><path fill="#4285f4" d="M46.2 28.5c9.8 0 17.7 7.9 17.7 17.7 0 4.3-1.6 8.3-4.2 11.4 0 0 13.9-16.6 27.5-32.7-5.6-10.8-15.3-19-27-22.7L32.6 34.8c3.3-3.8 8.1-6.3 13.6-6.3"/><path fill="#fbbc04" d="M46.2 63.8c-9.8 0-17.7-7.9-17.7-17.7 0-4.3 1.5-8.3 4.1-11.3l-28 33.3c4.8 10.6 12.8 19.2 21 29.9l34.1-40.5c-3.3 3.9-8.1 6.3-13.5 6.3"/><path fill="#34a853" d="M59.1 109.2c15.4-24.1 33.3-35 33.3-63 0-7.7-1.9-14.9-5.2-21.3L25.6 98c2.6 3.4 5.3 7.3 7.9 11.3 9.4 14.5 6.8 23.1 12.8 23.1s3.4-8.7 12.8-23.2"/></svg>
                    Lihat Maps
                    <i class="bi bi-arrow-right-circle"></i>
                </a>
            </div>
            <div class="col-11 col-sm-6 col-lg-3 feature-icon">
                <a href="/profile/{{ $selected->user->username }}">
                    <div class="badge bg-primary p-3 mb-4">
                        <img src="https://img.icons8.com/color/48/user-male-circle--v1.png" alt="avatar" class="rounded-circle img-fluid" style="width: 50px;">
                  </div>
                </a>
                <h4 class="mb-3">Oleh</h4>
                <p class="mb-3 text-secondary">
                    {{ $selected->user->name }} <br>
                    {{ $selected->created_at }}
                </p>
               
                <a href="https://wa.me/{{ $selected->user->phone }}?text=Hai%20saya%20melihat%20post%20{{ urlencode($selected->placename) }}" class="fw-bold text-decoration-none link-primary" target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16"  height="16" viewBox="0 0 175.216 175.552"><defs><linearGradient id="b" x1="85.915" x2="86.535" y1="32.567" y2="137.092" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#57d163"/><stop offset="1" stop-color="#23b33a"/></linearGradient><filter id="a" width="1.115" height="1.114" x="-.057" y="-.057" color-interpolation-filters="sRGB"><feGaussianBlur stdDeviation="3.531"/></filter></defs><path fill="#b3b3b3" d="m54.532 138.45 2.235 1.324c9.387 5.571 20.15 8.518 31.126 8.523h.023c33.707 0 61.139-27.426 61.153-61.135.006-16.335-6.349-31.696-17.895-43.251A60.75 60.75 0 0 0 87.94 25.983c-33.733 0-61.166 27.423-61.178 61.13a60.98 60.98 0 0 0 9.349 32.535l1.455 2.312-6.179 22.558zm-40.811 23.544L24.16 123.88c-6.438-11.154-9.825-23.808-9.821-36.772.017-40.556 33.021-73.55 73.578-73.55 19.681.01 38.154 7.669 52.047 21.572s21.537 32.383 21.53 52.037c-.018 40.553-33.027 73.553-73.578 73.553h-.032c-12.313-.005-24.412-3.094-35.159-8.954zm0 0" filter="url(#a)"/><path fill="#fff" d="m12.966 161.238 10.439-38.114a73.42 73.42 0 0 1-9.821-36.772c.017-40.556 33.021-73.55 73.578-73.55 19.681.01 38.154 7.669 52.047 21.572s21.537 32.383 21.53 52.037c-.018 40.553-33.027 73.553-73.578 73.553h-.032c-12.313-.005-24.412-3.094-35.159-8.954z"/><path fill="url(#linearGradient1780)" d="M87.184 25.227c-33.733 0-61.166 27.423-61.178 61.13a60.98 60.98 0 0 0 9.349 32.535l1.455 2.312-6.179 22.559 23.146-6.069 2.235 1.324c9.387 5.571 20.15 8.518 31.126 8.524h.023c33.707 0 61.14-27.426 61.153-61.135a60.75 60.75 0 0 0-17.895-43.251 60.75 60.75 0 0 0-43.235-17.929z"/><path fill="url(#b)" d="M87.184 25.227c-33.733 0-61.166 27.423-61.178 61.13a60.98 60.98 0 0 0 9.349 32.535l1.455 2.313-6.179 22.558 23.146-6.069 2.235 1.324c9.387 5.571 20.15 8.517 31.126 8.523h.023c33.707 0 61.14-27.426 61.153-61.135a60.75 60.75 0 0 0-17.895-43.251 60.75 60.75 0 0 0-43.235-17.928z"/><path fill="#fff" fill-rule="evenodd" d="M68.772 55.603c-1.378-3.061-2.828-3.123-4.137-3.176l-3.524-.043c-1.226 0-3.218.46-4.902 2.3s-6.435 6.287-6.435 15.332 6.588 17.785 7.506 19.013 12.718 20.381 31.405 27.75c15.529 6.124 18.689 4.906 22.061 4.6s10.877-4.447 12.408-8.74 1.532-7.971 1.073-8.74-1.685-1.226-3.525-2.146-10.877-5.367-12.562-5.981-2.91-.919-4.137.921-4.746 5.979-5.819 7.206-2.144 1.381-3.984.462-7.76-2.861-14.784-9.124c-5.465-4.873-9.154-10.891-10.228-12.73s-.114-2.835.808-3.751c.825-.824 1.838-2.147 2.759-3.22s1.224-1.84 1.836-3.065.307-2.301-.153-3.22-4.032-10.011-5.666-13.647"/></svg>
                    Whatsapp
                    <i class="bi bi-arrow-right-circle"></i>
                </a>
                <br>
                <a href="" class="fw-bold text-decoration-none link-primary" target="_blank">
                <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" width="16"  height="16" viewBox="0 0 512 512"><defs><style>.cls-1{fill:#d9e4e8;}.cls-2{opacity:0.14;}.cls-3{fill:#17292d;}.cls-4{fill:#fff;}.cls-5{fill:#141f38;}</style></defs><title>speech-bubble-4-filled</title><path class="cls-1" d="M218,397c-41.68,0-81.81-10.89-116-31.51l-6.26-3.77-60.83,32.8A15,15,0,0,1,27,397a14.64,14.64,0,0,1-12.37-7.58c-1.76-3.11-3.12-8.05.39-13.9l31.76-58.86-4.46-6.47C23,282.34,12.82,250.29,12.82,217.54c0-99,92-179.5,205.14-179.5s205.14,80.52,205.14,179.5S331.08,397,218,397Z"/><g class="cls-2"><path class="cls-3" d="M153,339.34a157.25,157.25,0,0,0,14.23,65.24A246,246,0,0,0,218,409.86c120.38,0,218-86.1,218-192.32a171.25,171.25,0,0,0-3.11-32.26,208.42,208.42,0,0,0-87.49-19C239.28,166.25,153,243.9,153,339.34Z"/></g><path class="cls-4" d="M491.31,474a8,8,0,0,1-4.09-1.24l-48.65-26.26-6.26,3.77c-25.79,15.53-56,23.73-87.42,23.73-85.07,0-154.29-60.39-154.29-134.62S259.82,204.71,344.9,204.71s154.28,60.39,154.28,134.62a121.69,121.69,0,0,1-22.06,69.37l-4.46,6.46,25,46.34c1.86,3.12,1.95,5.7.55,8.17a8.3,8.3,0,0,1-6.88,4.29Z"/><path class="cls-5" d="M487.67,416C503.1,393.65,512,367.41,512,339.34c0-51.81-30.29-97.38-76.1-123.67C434.76,110.31,337.63,25.22,218,25.22,97.58,25.22,0,111.32,0,217.54c0,36.62,11.61,70.85,31.74,100L4,368.95c-11.63,19.38,3.92,40.91,23,40.91a26.89,26.89,0,0,0,13.93-4l54.4-29.34A235.57,235.57,0,0,0,197.6,409c28.19,46.29,83.57,77.76,147.29,77.76,34.87,0,67.24-9.44,94-25.56l41.71,22.49a20.63,20.63,0,0,0,10.68,3.07c14.61,0,26.53-16.5,17.61-31.36ZM108.53,354.54,96,347l-12.87,6.94-54.4,29.34-.52.28-.5.3a4.78,4.78,0,0,1-.71.35,2.53,2.53,0,0,1-1.36-1.3,2.72,2.72,0,0,1,.35-.77l.3-.5.28-.52,27.74-51.43,7.46-13.83-8.93-12.92C35,277.2,25.64,247.66,25.64,217.54c0-91.91,86.27-166.68,192.32-166.68,100.53,0,183.28,67.2,191.62,152.49a186,186,0,0,0-64.68-11.46c-92.29,0-167.11,66-167.11,147.45a131.45,131.45,0,0,0,7,42.38A207.85,207.85,0,0,1,108.53,354.54Zm358,46.87-8.93,12.92,7.46,13.83,13.72,25.43L451.1,438.65l-12.87-6.94-12.53,7.54c-23.79,14.32-51.74,21.89-80.81,21.89-78,0-141.46-54.64-141.46-121.8s63.46-121.8,141.46-121.8,141.46,54.64,141.46,121.8A109,109,0,0,1,466.57,401.41Zm-70-55.66a12.82,12.82,0,1,1-12.82-12.82A12.82,12.82,0,0,1,396.61,345.75Zm-38.46,0a12.82,12.82,0,1,1-12.82-12.82A12.82,12.82,0,0,1,358.14,345.75Zm-38.46,0a12.82,12.82,0,1,1-12.82-12.82A12.82,12.82,0,0,1,319.68,345.75Z"/></svg>
                    Chatify
                    <i class="bi bi-arrow-right-circle"></i>
                </a>
                <br>
                <a href="/profile/{{ $selected->user->username }}" class="fw-bold text-decoration-none link-primary">
                    Lihat Profile
                    <i class="bi bi-arrow-right-circle"></i>
                </a>
            </div>
        </div>
    </div>
</section>

<section class="pt-5">
        <div class="container my-5 py-5">
          <div class="row d-flex justify-content-center">
            <div class="col-md-12 col-lg-10 col-xl-12">
                <div class="card py-3 border-0" >
                    @if (session()->has('message'))
                       <div class="alert alert-success text-center" role="alert">
                         {{ session('message') }}
                        </div>
                    @endif
                    <form action="/detail/comments" method="POST">
                        @csrf
                        <div class="d-flex flex-start w-100">
                            <img class="rounded-circle shadow-1-strong me-3"
                              src="https://img.icons8.com/color/48/user-male-circle--v1.png" alt="avatar" width="40"
                              height="40" />
                            <div data-mdb-input-init class="form-outline w-100">
                                <input type="hidden" name="slug" value="{{ $selected->slug }}">
                                <input type="hidden" name="post_id" value="{{ $selected->id }}">
                              <textarea class="form-control" id="comment_body" rows="4"
                                 name="comment_body"></textarea>
                                @error('comment_body')
                                <div class="invalid-feedback">
                                 {{ $message }}
                                </div>
                                @enderror 
                              <label class="form-label" for="comment">Message</label>
                            </div>
                          </div>
                          <div class="float-end mt-2 pt-1">
                            <button type="submit" class="btn btn-primary btn-sm">Post comment</button>
                        
                          </div>
                    </form>
                </div>
                <div class="card text-dark">
                    <h4 class="mb-0 mt-4 ms-4">Recent comments</h4>
                        <p class="fw-light mb-4 pb-2 ms-4">Latest Comments section by users</p>
                    @foreach ($selected->comments as $item)
                    <div class="card-body p-4">
                        <div class="d-flex flex-start">
                          <img class="rounded-circle shadow-1-strong me-3"
                            src="https://img.icons8.com/color/48/user-male-circle--v1.png" alt="avatar" width="60"
                            height="60" />
                          <div>
                            <h6 class="fw-bold mb-1 text-dark">{{ $item->user->name }} <span class="badge {{ $item->user_id == $selected->user->id ? 'bg-primary' : 'bg-warning' }}">
                                @if ($item->user_id == $selected->user->id )
                                    Owner
                                @else
                                    User
                                @endif
                            </span>
                            @if ($selected->user->id == $item->user_id)
                            <span class="badge">
                              <form action="{{ route('comments.detail.destroy', $item->id) }}" method="POST" id="deleteForm">
                                @method('delete')
                                @csrf
                                <button class="btn btn-danger rounded-circle" type="submit" data-bs-toggle="modal" data-bs-target="#deleteModal">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </form>
                          </span>
                            
                                
                            @endif
                            </h6>
                            
                            <div class="d-flex align-items-center mb-3">
                              <p class="mb-0">
                                {{ $item->created_at }}
                               
                              </p>
                              <a href="#!" class="link-muted"><i class="fas fa-pencil-alt ms-2"></i></a>
                              <a href="#!" class="link-muted"><i class="fas fa-redo-alt ms-2"></i></a>
                              <a href="#!" class="link-muted"><i class="fas fa-heart ms-2"></i></a>
                            </div>
                            <p class="mb-0">
                                {{ $item->comment_body }}
                            </p>
                          </div>
                        </div>
                      </div>
                    @endforeach
                    <hr class="my-0" />
                  </div>
            </div>
          </div>
        </div>
   
</section>
<script>
    function triggerToast() {
        let myAlert = document.querySelectorAll(".toast")[0];
        if (myAlert) {
            let bsAlert = new bootstrap.Toast(myAlert);
            bsAlert.show();
        }
    }
    function monitorValue() {
        let availableValue = {{ $selected->available }};
        if (availableValue === 0) {
            triggerToast();
        }
    }
    window.onload = (event) => {
        monitorValue();
    };
</script>

@endsection
