
@extends('layouts.main')

@section('container')


            <header class="site-header d-flex flex-column justify-content-center align-items-center">
                <div class="container  py-5 h-100">
                  
                    <div class="row d-flex justify-content-center align-items-center h-100">
                      <div class="col col-lg-10 mb-4 mb-lg-0">
                        <div class="card mb-3" style="border-radius: .5rem;">
                          <div class="row g-0">
                            <div class="col-md-4 gradient-custom-profile text-center text-white"
                              style="border-top-left-radius: .5rem; border-bottom-left-radius: .5rem;">
                              <img src="{{ asset('upload/profile/author.png') }}"
                                alt="Avatar" class="img-fluid my-5 rounded-circle" style="width: 120px;"  />
                              <h5>{{ $profile->username }}</h5>
                              <p>Bergabung Sejak {{ $datediff }} hari</p>
                              <i class="far fa-edit mb-5"></i>
                             
                                <div class=" mb-4">
                                  <div class="card-body text-center">
                                    <div class="social-links text-center">
                                      <a href="mailto:{{ $profile->email }}" class="mail" target="_blank"><i class="bi bi-envelope"></i></a>
                                      <a href="https://wa.me/{{ $profile->phone }}" class="instagram" target="_blank"><i class="bi bi-whatsapp"></i></a>
                                    </div>
                                  </div>
                                </div>
                              
                            </div>
                            <div class="col-md-8">
                              <div class="card-body p-4">
                                <h6 class="text-dark">Information</h6>
                                <hr class="mt-0 mb-4">
                                <div class="row pt-1">
                                  <div class="col-6 mb-3">
                                    <h6 class="text-dark">Name</h6>
                                    <p class="text-muted">{{ $profile->name }}</p>
                                  </div>
                                  <div class="col-6 mb-3">
                                    <h6 class="text-dark">Phone</h6>
                                    <p class="text-muted">{{ $profile->phone }}</p>
                                  </div>
                                </div>
                                
                                <hr class="mt-0 mb-4">
                                <div class="row pt-1">
                                  <div class="col-6 mb-3">
                                    <h6 class="text-dark">Post</h6>
                                    <p class="text-muted">{{ count($listing) }} Post</p>
                                  </div>
                                </div>
                                <div class="d-flex justify-content-start">
                                  <a href="#!"><i class="fab fa-facebook-f fa-lg me-3"></i></a>
                                  <a href="#!"><i class="fab fa-twitter fa-lg me-3"></i></a>
                                  <a href="#!"><i class="fab fa-instagram fa-lg"></i></a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                </div>
            </header>
            <section class="explore-section section-padding" id="section_2">
                <div class="container">
                  <div class="col-12 text-center" data-aos="zoom-in">
                    @if(count($listing) === 0)
                    <h3 class="mb-4">Belum Ada Post &#128577;</h3>
                    @else
                    <h3 class="mb-4">Postingan oleh {{ $profile->username }}</h3>
                    @endif
                    
                  </div>
                </div>
                <div class="container">
                  <div class="row">
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
                           
                                <div class="col-lg-4 col-md-6 col-12 mb-4" data-aos="zoom-in">
                                    <div class="custom-block bg-white shadow-lg">
                                        <a href="/detail/{{ $list->slug }}">
                                            <div class="d-flex">
                                                <div>
                                                    <h5 class="mb-2">{{ $list->placename }}</h5>
                                                    <i class="bi bi-geo-alt-fill">{{ $list->location}}</i><br />
                                                    <i class="bi bi-tag-fill">Rp. {{ number_format($list->price, 0, ',', '.') }}</i><br>    
                                                    <i class="bi bi-house-door-fill">{{ $list->category->name}}</i>
                                                </div>
                                                <span class="badge {{ ($list->available == 0) ? 'bg-danger' : (($list->available == 1) ? 'bg-warning' : ($list->available > 5 ? 'bg-success' : 'bg-primary')) }} rounded-pill ms-auto">
                                                    @if($list->available == 0)
                                                        Penuh
                                                    @else
                                                        {{ $list->available }} Tersedia
                                                    @endif
                                              </span>
                                            </div>
                                            <img src="{{ $list->imagepath }}"
                                                class="custom-block-image img-fluid" alt="" />
                                        </a>
                                    </div>
                                </div>
                     
                        @endforeach
                        
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </section>


            <section class="section-padding section-bg">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-12 col-12">
                            <h3 class="mb-4">Advertisment</h3>
                        </div>

                        <div class="col-lg-6 col-md-6 col-12 mt-3 mb-4 mb-lg-0">
                            <div class="custom-block bg-white shadow-lg">
                                <a href="/">
                                    <div class="d-flex">
                                        <div class="mb-4"> 
                                            <img src="{{ asset('assets/img/Kostify.png') }}" alt="" width="150px" />
                                        </div>
                                        <span class="badge bg-finance rounded-pill ms-auto">Now</span>
                                    </div>
                                    <img src="/assets/img/adv.gif" class="custom-block-image-adv img-fluid" alt="">
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-12 mt-lg-3">
                            <div class="custom-block custom-block-overlay">
                                <div class="d-flex flex-column h-100">
                                    <img src=" "class="custom-block-image img-fluid" alt="">

                                    <div class="custom-block-overlay-text d-flex">
                                        <div>
                                            <h5 class="text-white mb-2">Finance</h5>

                                            <p class="text-white">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sint animi necessitatibus aperiam repudiandae nam omnis</p>

                                            <a href="topics-detail.html" class="btn custom-btn mt-2 mt-lg-3">Learn More</a>
                                        </div>

                                        <span class="badge bg-finance rounded-pill ms-auto">25</span>
                                    </div>

                                    <div class="social-share d-flex">
                                        <p class="text-white me-4">Share:</p>

                                        <ul class="social-icon">
                                            <li class="social-icon-item">
                                                <a href="#" class="social-icon-link bi-twitter"></a>
                                            </li>

                                            <li class="social-icon-item">
                                                <a href="#" class="social-icon-link bi-facebook"></a>
                                            </li>

                                            <li class="social-icon-item">
                                                <a href="#" class="social-icon-link bi-pinterest"></a>
                                            </li>
                                        </ul>

                                        <a href="#" class="custom-icon bi-bookmark ms-auto"></a>
                                    </div>

                                    <div class="section-overlay"></div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>
       
        @endsection

		