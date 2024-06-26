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
  
                  <form action="/register" method="POST">
                    @csrf
                    <p class="text-center">Create An Account</p>


                    <div class="form-outline mb-2">
                      <label class="form-label" for="is_owner">User Type</label>
                        <select id="is_owner" name="is_owner" class="form-select">
                          <option value="1">Pemilik Property</option>
                          <option value="0">Penghuni Property</option>
                        </select>
                  </div>

                    <div class="form-outline mb-2">
                        <label class="form-label" for="username">Username</label>
                        <input type="text" name="username" id="username" class="form-control @error('username') is-invalid @enderror" value="{{ old('username') }}"
                          placeholder="Username" />  
                          @error('username')
                          <div class="invalid-feedback">
                            {{ $message }}
                          </div>
                          @enderror 
                          
                    </div>

                    <div class="form-outline mb-2">
                        <label class="form-label" for="name">Nama</label>
                        <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}"
                          placeholder="Name" />
                          @error('name')
                          <div class="invalid-feedback">
                            {{ $message }}
                          </div>
                          @enderror 
                    </div>

                    <div class="form-outline mb-2">
                        <label class="form-label" for="phone">No.Telp</label>
                        <input type="text" name="phone" id="phone" class="form-control  @error('phone') is-invalid @enderror" value="{{ old('phone') }}"
                          placeholder="+6200000000000" />
                          @error('phone')
                          <div class="invalid-feedback">
                            {{ $message }}
                          </div>
                          @enderror 
                      </div>
  
                    <div class="form-outline mb-2">
                        <label class="form-label" for="email">Email</label>
                      <input type="email" name="email" id="email" class="form-control  @error('email') is-invalid @enderror" value="{{ old('email') }}"
                        placeholder="Email address" />
                        @error('email')
                          <div class="invalid-feedback">
                            {{ $message }}
                          </div>
                          @enderror 
                    </div>
  
                    <div class="form-outline mb-2">
                        <label class="form-label" for="password">Password</label>
                      <input type="password" id="password" name="password" class="form-control  @error('password') is-invalid @enderror" />
                      @error('password')
                          <div class="invalid-feedback">
                            {{ $message }}
                          </div>
                          @enderror 
                    </div>
  
                    <div class="text-center pt-1 mb-5 pb-1">
                      <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" type="sumbit">Sign Up</button>
                      
                    </div>
  
  
                  </form>
                </div>
              </div>
              <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                  <h4 class="mb-4 text-white">Daftar Untuk memulai</h4>
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