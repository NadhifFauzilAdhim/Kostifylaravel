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
        <div class="col-xl-6">
          <div class="card rounded-3 text-black">
                <div class="card-body p-md-5 mx-md-4 text-center ">
                    <div class="badge  p-3 mb-4 rounded-circle">
                        <img src="{{ asset('assets/img/forgot-password-icon.png') }}" alt="" width="100px">
                    </div>
                  <h5 class="mb-3 ">Lupa Password?</h5>
                  @if (session()->has('status'))
                  <div class="alert alert-success d-flex align-items-center justify-content-center" role="alert">  
                    <div>
                        {{ session('status') }}
                    </div>      
                  </div>
                  @endif
                  @if (session()->has('email'))
                  <div class="alert alert-success d-flex align-items-center justify-content-center" role="alert">  
                    <div>
                        {{ session('email') }}
                    </div>      
                  </div>
                  @endif
                  <p>Jangan Khawatir kami akan mengirimkan instruksi kepada anda</p>
                  <form action="/forgot-password" method="POST">
                    @csrf 
                    <div class="form-outline mb-4">
                        <input type="email" id="email" name="email" class="form-control  @error('email') is-invalid @enderror" value="{{ old('email') }}"
                          placeholder="Masukan Email Anda" autofocus required/>
                      </div>
                      <div class="text-center pt-1 mb-5 pb-1">
                        <button class="btn btn-warning mb-3" type="sumbit">Reset</button>
                      </div>
                  </form>
                </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
</body>
</html>