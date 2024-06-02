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
                  <h5 class="mb-3 ">Reset Password</h5>
                  <p>Silahkan Buat Password Baru</p>
                  <form action="/reset-password" method="POST" id="resetForm">
                    @csrf 
                    <div class="form-outline mb-4">
                        <input type="email" id="email" name="email" class="form-control @error('email') is-invalid @enderror" 
                          placeholder="Masukkan Email Anda" autofocus required/>
                          @error('email')
                          <div class="invalid-feedback">
                            {{ $message }}
                          </div>
                          @enderror 
                    </div>
                    <div class="form-outline mb-4">
                        <input type="password" id="password" name="password" class="form-control @error('password') is-invalid @enderror"
                          placeholder="Masukkan Password Baru Anda" required/>
                          @error('password')
                          <div class="invalid-feedback">
                            {{ $message }}
                          </div>
                          @enderror 
                    </div>
                    <div class="form-outline mb-4">
                        <input type="password" id="password_confirmation" name="password_confirmation" class="form-control"
                          placeholder="Konfirmasi Password Baru Anda" required/>
                    </div>
                    <div class="form-outline mb-4">
                        <input type="hidden" name="token" value="{{ $token }}"/>
                    </div>
                    <div class="text-center pt-1 mb-5 pb-1">
                        <button class="btn btn-warning mb-3" type="submit">Reset</button>
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