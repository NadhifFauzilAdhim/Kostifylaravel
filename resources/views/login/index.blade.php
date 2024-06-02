<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kostify | {{ $title }}</title>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/bootstrap-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/login.css')}}" rel="stylesheet" />
</head>
<body>
    
  <section class="h-100 gradient-form ">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-xl-10">
          <div class="card rounded-3 text-black">
            <div class="row g-0">
              <div class="col-lg-6">
                <div class="card-body p-md-5 mx-md-4">
  
                  <div class="text-center">
                    <img src="{{ asset('assets/img/Kostify.png') }}"
                      style="width: 185px;" alt="logo">
                  
                  </div>
                  @if (session()->has('success'))
                  <div class="alert alert-success d-flex align-items-center justify-content-center" role="alert">  
                    <div>
                     Pendaftaran Berhasil Silahkan Login
                    </div>
                  </div>
                  @else
                  <p class="text-center">login to your account</p>
                  @endif

                  @if (session()->has('loginfailed'))
                  <div class="alert alert-danger d-flex align-items-center justify-content-center" role="alert">  
                    <div>
                    {{ session('loginfailed') }}
                    </div>
                  </div>
                  @endif

                  <form action="/login" method="POST"> 
                    @csrf
                    <div class="form-outline mb-4">
                      <label class="form-label" for="email">Email</label>
                      <input type="email" id="email" name="email" class="form-control  @error('email') is-invalid @enderror" value="{{ old('email') }}"
                        placeholder="Email address" autofocus required/>
                    </div>
  
                    <div class="form-outline mb-4">
                      <label class="form-label" for="password">Password</label>
                      <input type="password" id="password" name="password" class="form-control  @error('password') is-invalid @enderror" autofocus required/>
                      <div id="frogotpassword" class="form-text"><a href="/forgot-password" class="text-danger">Lupa Password?</a></div>
                    </div>
  
                    <div class="text-center pt-1 mb-5 pb-1">
                      <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" type="sumbit">Log
                        in</button>
                     
                    </div>
  
                    <div class="d-flex align-items-center justify-content-center pb-4">
                      <p class="mb-0 me-2">Don't have an account?</p>
                      <a href="/register">
                        <button type="button" class="btn btn-outline-warning">Create new</button>
                      </a>
                      
                    </div>
  
                  </form>
  
                </div>
              </div>
              <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                  <h4 class="mb-4 text-white">Jangan Khawatir kami memproteksi dan mengenkripsi data anda</h4>
                  <p class="small mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
</body>
</html>