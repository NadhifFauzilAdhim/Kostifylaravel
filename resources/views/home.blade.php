@extends('layouts.main')
@section('container')
   
    <main>

      
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
                src="favicon.ico"
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
              Segera login ke Kostify dan jelajahi berbagai opsi tempat tinggal yang sesuai untukmu! &#128640
             
            </div>
          </div>
        </div>
        
        
      </section>

      <section
        class="hero-section d-flex justify-content-center align-items-center"
        id="section_1"
      >
  
        <div class="container hero-section-container">
          <div class="row">
            
            <div class="col-lg-8 col-12 mx-auto">
              <img
                src="assets/img/Kostify.png"
                alt=""
                width="300px"
                class="rounded mx-auto d-block"
              />

              <h6 class="text-center">
                Tempat terbaik mencari kos dan tempat tinggal yang sesuai dengan
                kebutuhan Anda.
              </h6>
           
              <form
                action="/"
                method="GET"
                class="custom-form mt-4 pt-2 mb-5"
                role="search"
              
              >
                <div class="input-group input-group-lg">
                  <span class="input-group-text bi-search" id="basic-addon1">
                  </span>

                  <input
                    name="search"
                    type="search"
                    class="form-control"
                    id="keyword"
                    placeholder="Cari Lokasi, Nama dan Tipe Disini"
                    aria-label="Search"
                    value="{{ request('search') }}"
                  />

                  <button type="submit" class="form-control">Search</button>
                </div>
              </form>
            </div>
          
          </div>
          <div class="header-shape">
            {{-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
              <path
                fill="#5d8bff"
                fill-opacity="1"
                d="M0,256L60,261.3C120,267,240,277,360,282.7C480,288,600,288,720,272C840,256,960,224,1080,229.3C1200,235,1320,277,1380,298.7L1440,320L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"
              ></path>
            </svg> --}}
            <svg
            class="waves"
            xmlns="http://www.w3.org/2000/svg"
            xmlns:xlink="http://www.w3.org/1999/xlink"
            viewBox="0 25 210 25"
            preserveAspectRatio="none"
            shape-rendering="auto"
          >
            <defs>
              <path
                id="gentle-wave"
                d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z"
              />
            </defs>
            <g class="parallax">
                
                <use
                  xlink:href="#gentle-wave"
                  x="48"
                  y="5"
                  fill="rgba(93, 139, 255,0.3)"
                />
                <use xlink:href="#gentle-wave" x="48" y="7" fill="#5d8bff" />
              </g>
          </svg>
          </div>
        </div>
      </section>

      <section class="featured-section">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-12 mb-4" data-aos="fade-up">
              <div class="custom-block bg-white shadow-lg">
                
                  <div class="d-flex">
                    <div>
                      <h5 class="mb-2">Pencarian Yang Mudah</h5>

                      <p class="mb-0">
                        Temukan kos atau tempat tinggal dengan beberapa klik
                        saja.
                      </p>
                    </div>

                    <span class="badge bg-design rounded-pill ms-auto">1</span>
                  </div>

                  <img
                    src="assets/img/search.png"
                    class="custom-block-image-featured img-fluid"
                    alt=""
                  />
                
              </div>
            </div>
            <div class="col-lg-4 col-12 mb-4" data-aos="fade-up">
              <div class="custom-block bg-white shadow-lg">
               
                  <div class="d-flex">
                    <div>
                      <h5 class="mb-2">Informasi Lengkap</h5>

                      <p class="mb-0">
                        Dapatkan detail lengkap tentang fasilitas, lokasi, dan
                        harga sewa setiap properti.
                      </p>
                    </div>

                    <span class="badge bg-design rounded-pill ms-auto">2</span>
                  </div>

                  <img
                    src="assets/img/information.png"
                    class="custom-block-image-featured img-fluid"
                    alt=""
                  />
                
              </div>
            </div>
            <div class="col-lg-4 col-12 mb-4">
              <div class="custom-block bg-white shadow-lg" data-aos="fade-up">
                  <div class="d-flex">
                    <div>
                      <h5 class="mb-2">Beragam Pilihan</h5>
                      <p class="mb-0">
                        Kami menawarkan berbagai tipe kos mulai dari kosan,
                        kontrakan, hingga rumah kost eksklusif.
                      </p>
                    </div>
                    <span class="badge bg-design rounded-pill ms-auto">3</span>
                  </div>
                  <img
                    src="assets/img/question.png"
                    class="custom-block-image-featured img-fluid"
                    alt=""
                  />
              </div>
            </div>
          </div>
          
        </div>
      </section>

      <section class="explore-section section-padding" id="section_2">
        <div class="container">
          <div class="col-12 text-center">
            <h2 class="mb-4">Cari Kost Pilihan Kamu</h2>
          </div>
        </div>
        <div class="container-fluid">
          <div class="row">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
              <li class="nav-item" role="presentation">
                <button
                  class="nav-link active"
                  id="design-tab"
                  data-bs-toggle="tab"
                  data-bs-target="#kost-tab"
                  type="button"
                  role="tab"
                  aria-controls="kost-tab"
                  aria-selected="true"
                >
                  Kost
                </button>
              </li>

              <li class="nav-item" role="presentation">
                <button
                  class="nav-link"
                  id="marketing-tab"
                  data-bs-toggle="tab"
                  data-bs-target="#paviliun-tab"
                  type="button"
                  role="tab"
                  aria-controls="paviliun-tab"
                  aria-selected="false"
                >
                  Paviliun
                </button>
              </li>

              <li class="nav-item" role="presentation">
                <button
                  class="nav-link"
                  id="finance-tab"
                  data-bs-toggle="tab"
                  data-bs-target="#kontrakan-tab"
                  type="button"
                  role="tab"
                  aria-controls="kontrakan-tab"
                  aria-selected="false"
                >
                  Kontrakan
                </button>
              </li>
            </ul>
          </div>
        </div>
           
        <div class="container">
          <div class="row">
            @if (count($listing) === 0)
            <h5 class="text-center">Pencarian Tidak Ditemukan &#128531;</h5>
            @else     
            <div class="col-12">
              <div class="tab-content" id="myTabContent">
                <div
                  class="tab-pane fade show active"
                  id="kost-tab"
                  role="tabpanel"
                  tabindex="0"
                >
                  <div class="row">
                    @foreach ($listing as $list)
                    @if ($list->category->name === $category[0]->name)
                        <div class="col-lg-4 col-md-6 col-12 mb-4" data-aos="zoom-in">
                            <div class="custom-block bg-white shadow-lg">
                                <a href="/detail/{{ $list->slug }}">
                                  @if ($list->image)
                                  <img src="{{ asset('storage/'.$list->image) }}" class="custom-block-image img-fluid rounded mb-3" alt="" />   
                                  @else
                                  <img src="{{ asset('assets/img/image-not-found.png') }}"class="custom-block-image img-fluid rounded mb-3" alt="" />
                                  @endif
                                  
                                    <div class="d-flex">
                                        <div>
                                            <h5 class="mb-2">{{ $list->placename }}</h5>
                                            <p class="fs-6 text-dark"><i class="bi bi-geo-fill text-danger"></i> {{ $list->location}}</p>
                                            <p class="fs-6 text-dark"> <i class="bi bi-tag-fill text-danger"></i> Rp. <strong class="text-danger">{{ number_format($list->price, 0, ',', '.') }}</strong>/Bulan</p>
                                            @if($list->available > 0)
                                            <p class="fs-6 text-dark"><i class="bi bi-door-open-fill text-danger"></i><strong>{{ $list->available}}</strong> Kamar Terseida</p>
                                           
                                            @else 
                                            <i class="bi bi-door-open-fill text-danger">Penuh</i><br />
                                            @endif
                                        </div>
                                        <span class="badge {{ ($list->forgender == 'Putra') ? 'bg-info' : 'bg-warning' }} rounded-pill ms-auto">
                                          {{ $list->forgender }}
                                       </span>
                                    </div>
                                    
                                </a>
                            </div>
                        </div>
                        
                    @endif
                @endforeach
                
                  </div>
                </div>

                <div
                  class="tab-pane fade"
                  id="paviliun-tab"
                  role="tabpanel"
                  tabindex="0"
                >
                <div class="row">
                    @foreach ($listing as $list)
                    @if ($list->category->name === $category[2]->name)
                    <div class="col-lg-4 col-md-6 col-12 mb-4" data-aos="zoom-in">
                      <div class="custom-block bg-white shadow-lg">
                          <a href="/detail/{{ $list->slug }}">
                            @if ($list->image)
                            <img src="{{ asset('storage/'.$list->image) }}" class="custom-block-image img-fluid rounded mb-3" alt="" />   
                            @else
                            <img src="{{ asset('assets/img/image-not-found.png') }}"class="custom-block-image img-fluid rounded mb-3" alt="" />
                            @endif
                            
                              <div class="d-flex">
                                  <div>
                                      <h5 class="mb-2">{{ $list->placename }}</h5>
                                      <p class="fs-6 text-dark"><i class="bi bi-geo-fill text-danger"></i> {{ $list->location}}</p>
                                      <p class="fs-6 text-dark"> <i class="bi bi-tag-fill text-danger"></i> Rp. <strong class="text-danger">{{ number_format($list->price, 0, ',', '.') }}</strong>/Bulan</p>
                                      @if($list->available > 0)
                                      <p class="fs-6 text-dark"><i class="bi bi-door-open-fill text-danger"></i><strong>{{ $list->available}}</strong> Kamar Terseida</p>
                                     
                                      @else 
                                      <i class="bi bi-door-open-fill text-danger">Penuh</i><br />
                                      @endif
                                  </div>
                                  <span class="badge {{ ($list->forgender == 'Putra') ? 'bg-info' : 'bg-warning' }} rounded-pill ms-auto">
                                    {{ $list->forgender }}
                                 </span>
                              </div>
                              
                          </a>
                      </div>
                  </div>
                    @endif
                @endforeach
                  </div>
                </div>
                <div
                  class="tab-pane fade"
                  id="kontrakan-tab"
                  role="tabpanel"
                  aria-labelledby="finance-tab"
                  tabindex="0"
                >
                  <div class="row">
                    @foreach ($listing as $list)
                    @if ($list->category->name === $category[1]->name)
                    <div class="col-lg-4 col-md-6 col-12 mb-4" data-aos="zoom-in">
                      <div class="custom-block bg-white shadow-lg">
                          <a href="/detail/{{ $list->slug }}">
                            @if ($list->image)
                            <img src="{{ asset('storage/'.$list->image) }}" class="custom-block-image img-fluid rounded mb-3" alt="" />   
                            @else
                            <img src="{{ asset('assets/img/image-not-found.png') }}"class="custom-block-image img-fluid rounded mb-3" alt="" />
                            @endif
                            
                              <div class="d-flex">
                                  <div>
                                      <h5 class="mb-2">{{ $list->placename }}</h5>
                                      <p class="fs-6 text-dark"><i class="bi bi-geo-fill text-danger"></i> {{ $list->location}}</p>
                                      <p class="fs-6 text-dark"> <i class="bi bi-tag-fill text-danger"></i> Rp. <strong class="text-danger">{{ number_format($list->price, 0, ',', '.') }}</strong>/Bulan</p>
                                      @if($list->available > 0)
                                      <p class="fs-6 text-dark"><i class="bi bi-door-open-fill text-danger"></i><strong>{{ $list->available}}</strong> Kamar Terseida</p>
                                     
                                      @else 
                                      <i class="bi bi-door-open-fill text-danger">Penuh</i><br />
                                      @endif
                                  </div>
                                  <span class="badge {{ ($list->forgender == 'Putra') ? 'bg-info' : 'bg-warning' }} rounded-pill ms-auto">
                                    {{ $list->forgender }}
                                 </span>
                              </div>
                              
                          </a>
                      </div>
                  </div>
                    @endif
                @endforeach
                  </div>
                </div>
              </div>
            </div>
            @endif
           
          </div>
        </div>
        <div class="col-lg-12 col-12">
          <nav aria-label="Page navigation example">
              <ul class="pagination justify-content-center mb-0">
                  <li class="page-item">
                      <a class="page-link" href="#" aria-label="Previous">
                          <span aria-hidden="true">Prev</span>
                      </a>
                  </li>

                  <li class="page-item active" aria-current="page">
                      <a class="page-link" href="#">1</a>
                  </li>
                  
                  <li class="page-item">
                      <a class="page-link" href="#">2</a>
                  </li>
                  
                  <li class="page-item">
                      <a class="page-link" href="#">3</a>
                  </li>

                  <li class="page-item">
                      <a class="page-link" href="#">4</a>
                  </li>

                  <li class="page-item">
                      <a class="page-link" href="#">5</a>
                  </li>
                  
                  <li class="page-item">
                      <a class="page-link" href="#" aria-label="Next">
                          <span aria-hidden="true">Next</span>
                      </a>
                  </li>
              </ul>
          </nav>
      </div>
      </section>

      <section class="faq-section section-padding" id="section_4" data-aos="fade-up">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 col-12">
              <h2 class="mb-4">Frequently Asked Questions</h2>
            </div>

            <div class="clearfix"></div>

            <div class="col-lg-5 col-12">
              <img
                src="assets/img/faq_graphic.jpg"
                class="img-fluid"
                alt="FAQs"
              />
            </div>
            <div class="col-lg-6 col-12 m-auto">
              <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingOne">
                    <button
                      class="accordion-button"
                      type="button"
                      data-bs-toggle="collapse"
                      data-bs-target="#collapseOne"
                      aria-expanded="true"
                      aria-controls="collapseOne"
                    >
                      Apa itu Kostify
                    </button>
                  </h2>

                  <div
                    id="collapseOne"
                    class="accordion-collapse collapse show"
                    aria-labelledby="headingOne"
                    data-bs-parent="#accordionExample"
                  >
                    <div class="accordion-body">
                      Kostify adalah sebuah platform yang dirancang untuk
                      membantu Anda menemukan tepat tinggal, dengan mudah dan
                      cepat. Kami menyediakan berbagai fitur yang memungkinkan
                      Anda untuk melakukan pencarian properti, menelusuri
                      beragam pilihan kos, dan menyewa tempat tinggal yang
                      sesuai dengan kebutuhan dan preferensi Anda.
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingTwo">
                    <button
                      class="accordion-button collapsed"
                      type="button"
                      data-bs-toggle="collapse"
                      data-bs-target="#collapseTwo"
                      aria-expanded="false"
                      aria-controls="collapseTwo"
                    >
                      Belum
                    </button>
                  </h2>

                  <div
                    id="collapseTwo"
                    class="accordion-collapse collapse"
                    aria-labelledby="headingTwo"
                    data-bs-parent="#accordionExample"
                  >
                    <div class="accordion-body">Disini</div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingThree">
                    <button
                      class="accordion-button collapsed"
                      type="button"
                      data-bs-toggle="collapse"
                      data-bs-target="#collapseThree"
                      aria-expanded="false"
                      aria-controls="collapseThree"
                    >
                      Belum
                    </button>
                  </h2>

                  <div
                    id="collapseThree"
                    class="accordion-collapse collapse"
                    aria-labelledby="headingThree"
                    data-bs-parent="#accordionExample"
                  >
                    <div class="accordion-body">Belum ada</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
    <script>
      let isLoggedIn = {{ Auth::check() ? 'true' : 'false' }};
      
      if (!isLoggedIn) {
          window.onload = (event) => {
              let myAlert = document.querySelectorAll(".toast")[0];
              if (myAlert) {
                  let bsAlert = new bootstrap.Toast(myAlert);
                  bsAlert.show();
              }
          };
      }
     
  </script>
@endsection  