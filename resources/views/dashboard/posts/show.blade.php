 @extends('dashboard.layouts.main')

 @section('container')
 <div class="container-fluid">   
    <div class="row">
      <h3 class=" fw-semibold mb-4 text-center">{{ $post->placename }}</h3>
        <div class="col-lg-6 d-flex align-items-stretch ">
          <div class="card w-100">
            <div class="card-body p-4">
                <iframe
                src="https://maps.google.com/maps?q={{ $post->location }}&t=&z=13&ie=UTF8&iwloc=&output=embed"
                frameborder="0"
                style="border: 0; width: 100%; height: 100%"
                allowfullscreen
            ></iframe>
            
            </div>
          </div>
        </div>
        <div class="col-lg-6 d-flex align-items-stretch">
          <div class="card w-100">
            <div class="card-body p-4">
              @if ($post->image)
              <img src="{{ asset('storage/'.$post->image) }}" alt="" class="card-img-top">
              @else
              <img src="{{ asset('assets/img/image-not-found.png') }}" alt="" class="card-img-top"> 
              @endif
            
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4 d-flex align-items-stretch">
          <div class="card w-100">
            <div class="card-body p-4">
              <div class="row alig n-items-start">
                <div class="col-8">
                  <h5 class="card-title mb-9 fw-semibold">Penghuni</h5>
                  
                  
                </div>
                <div class="table-responsive">
                  <table class="table text-nowrap mb-0 align-middle">
                    <thead class="text-dark fs-4">
                      <tr>
                        
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">No</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Name</h6>
                        </th>
                        
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="border-bottom-0"><h6 class="fw-semibold mb-0">1</h6></td>
                        <td class="border-bottom-0"><h6 class="fw-semibold mb-0">Belum Tersedia</h6></td>
                       
                        
                      </tr> 
                    </tbody>
                  </table>
                </div>
                
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 d-flex align-items-stretch">
          <div class="card w-100">
            <div class="card-body p-4">
              <div class="row alig n-items-start">
                <div class="col-8">
                  <h5 class="card-title mb-9 fw-semibold">Informasi</h5>
                  <h5 class="fw-semibold mb-2"><strong class="text-danger">{{ $post->available }}</strong> Kamar tersedia</h3>
                    <h5 class="fw-semibold mb-3">Rp. <strong class="text-danger">{{ number_format($post->price, 0, ',', '.') }}</strong>/Bulan</h3>
                  
                </div>
                <div class="col-4">
                  <div class="d-flex justify-content-end">
                    <div
                      class="text-white bg-secondary rounded-circle p-1 d-flex align-items-center justify-content-center px-2">
                      <i class="bi bi-info-circle fs-4"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 d-flex align-items-stretch">
          <div class="card w-100">
            <div class="card-body p-4">
              <div class="row alig n-items-start">
                <div class="col-8">
                  <h5 class="card-title mb-9 fw-semibold">Pendapatan Bulanan</h5>
                  <h4 class="fw-semibold mb-3">Rp. Belum Tersedia</h4>
                  <div class="d-flex align-items-center pb-1">
                    <span
                      class="me-2 rounded-circle bg-light-danger round-20 d-flex align-items-center justify-content-center">
                      <i class="ti ti-arrow-down-right text-danger"></i>
                    </span>
                    <p class="text-dark me-1 fs-3 mb-0">+9%</p>
                    <p class="fs-3 mb-0">last year</p>
                  </div>
                </div>
                <div class="col-4">
                  <div class="d-flex justify-content-end">
                    <div
                      class="text-white bg-secondary rounded-circle p-1 d-flex align-items-center justify-content-center px-2">
                      <i class="bi bi-currency-dollar fs-4"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        
      </div>
    <div class="col-lg-12 d-flex align-items-stretch">
      <div class="card w-100">
        <div class="card-body p-4">
          <h5 class="card-title fw-semibold mb-4">Comment</h5>
          <div class="table-responsive">
            <table class="table text-nowrap mb-0 align-middle">
              <thead class="text-dark fs-4">
                <tr>
                  <th class="border-bottom-0">
                    <h6 class="fw-semibold mb-0">No</h6>
                  </th>
                  
                  <th class="border-bottom-0">
                    <h6 class="fw-semibold mb-0">Name</h6>
                  </th>

                  <th class="border-bottom-0">
                    <h6 class="fw-semibold mb-0">Comment</h6>
                  </th>

                  <th class="border-bottom-0">
                    <h6 class="fw-semibold mb-0">Date</h6>
                  </th>
                  <th class="border-bottom-0">
                    <h6 class="fw-semibold mb-0">Action</h6>
                  </th>
                </tr>
              </thead>
              <tbody>
                @foreach ($post->comments as $itt => $comment)
                <tr>
                  <td class="border-bottom-0"><h6 class="fw-semibold mb-0">{{ $itt + 1 }}</h6></td>
                  <td class="border-bottom-0">
                      <h6 class="fw-semibold mb-1">{{ $comment->user->name }}</h6>
                      @if ($comment->user->id !== auth()->user()->id)
                      <span class="fw-normal badge  bg-primary rounded-3">User</span>
                      @else
                      <span class="fw-normal badge bg-warning rounded-3">Owner</span>
                      @endif
                                               
                  </td>
                  <td class="border-bottom-0">
                    <h6 class="fw-semibold mb-1">{{ $comment->comment_body }}</h6>
                  </td>
                
                  <td class="border-bottom-0">
                    <h6 class="fw-semibold mb-1">{{ floor($comment->created_at->diffInDays(now())) }} days ago</h6>
                    
                  </td>
                  <td class="border-bottom-0">
                    @if ($comment->user->id == auth()->user()->id)
                    <form action="{{ route('comments.destroy', $comment->id) }}" method="POST" id="deleteForm">
                      @method('delete')
                      @csrf
                      <button class="btn btn-danger" type="submit" data-bs-toggle="modal" data-bs-target="#deleteModal">
                          <i class="bi bi-trash"></i>
                      </button>
                  </form>
                    @else
                    
                    <button class="btn btn-warning" type="button" data-bs-toggle="modal" data-bs-target="#deleteModal">
                      <i class="bi bi-exclamation-diamond"></i>
                    </button>
                    
                    @endif
                    
                  </td>
                  
                </tr> 
                @endforeach
               
              </tbody>
            </table>
          </div>
          <form action="{{ route('post.comment') }}" method="POST" class="row g-3">
            @csrf
            <div class="col-10">
                <label for="exampleInputEmail1" class="form-label">Reply Comment</label>
                <input type="text" class="form-control" name="comment_body">
                <input type="hidden" name="slug" value="{{ $post->slug }}">
                <input type="hidden" name="post_id" value="{{ $post->id }}">
            </div>
            <div class="col-2 mt-5">
                <button type="submit" class="btn btn-primary">Reply</button>
            </div>
        </form>
        </div>
      </div>
    </div>
    
    <div class="py-6 px-6 text-center">
      <p class="mb-0 fs-4">Developed by <a href="https://ndfproject.my.id" target="_blank" class="pe-1 text-primary text-decoration-underline">NDFProject | Arabis Group</a> with &#10084; </p>
    </div>
  </div>
  
 @endsection
