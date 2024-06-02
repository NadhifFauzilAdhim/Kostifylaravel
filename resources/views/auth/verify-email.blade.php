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
              <div class="col-lg-12">
                <div class="card-body p-md-5 mx-md-4">
  
                  <div class="text-center">
                    <img src="{{ asset('assets/img/Kostify.png') }}"
                      style="width: 185px;" alt="logo">
                  
                  </div>
                  <h6 class="text-center mt-5">Verifikasi Akun Email Anda</h6>
                 
                  <div class="alert alert-success d-flex align-items-center justify-content-center" role="alert">  
                    @if (session()->has('resendsuccess'))
                    <div>
                        {{ session('resendsuccess') }}
                    </div>
                    @else
                    <div>
                        Email Verifikasi dikirimkan, silahkan cek Email Anda
                    </div>
                    @endif
                    
                  </div>
                  <div class="d-flex align-items-center justify-content-center pb-4">
                    <p class="mb-0 me-2">Tidak Menerima Email?</p>
                    <form action="/email/verification-notification" method="POST">
                        @csrf
                        <button type="sumbit" class="btn btn-outline-warning">Resend</button>
                    </form>
                     
                   
                  </div>
                 

                  
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