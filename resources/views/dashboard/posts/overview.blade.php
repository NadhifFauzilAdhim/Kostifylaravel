@extends('dashboard.layouts.main')
@section('container')
<div class="container-fluid">   
  <div class="row">
    <div class="col-lg-4 d-flex align-items-stretch ">
      <div class="card w-100">
        <div class="card-body p-4">
          <div class="mb-4">
            <h5 class="card-title fw-semibold">Recent Transactions</h5>
          </div>
          <ul class="timeline-widget mb-0 position-relative mb-n5">
            <li class="timeline-item d-flex position-relative overflow-hidden">
              <div class="timeline-time text-dark flex-shrink-0 text-end">09:30</div>
              <div class="timeline-badge-wrap d-flex flex-column align-items-center">
                <span class="timeline-badge border-2 border border-primary flex-shrink-0 my-8"></span>
                <span class="timeline-badge-border d-block flex-shrink-0"></span>
              </div>
              <div class="timeline-desc fs-3 text-dark mt-n1">Payment received from John Doe of $385.90</div>
            </li>
            <li class="timeline-item d-flex position-relative overflow-hidden">
              <div class="timeline-time text-dark flex-shrink-0 text-end">10:00 am</div>
              <div class="timeline-badge-wrap d-flex flex-column align-items-center">
                <span class="timeline-badge border-2 border border-info flex-shrink-0 my-8"></span>
                <span class="timeline-badge-border d-block flex-shrink-0"></span>
              </div>
              <div class="timeline-desc fs-3 text-dark mt-n1 fw-semibold">New sale recorded <a
                  href="javascript:void(0)" class="text-primary d-block fw-normal">#ML-3467</a>
              </div>
            </li>
            <li class="timeline-item d-flex position-relative overflow-hidden">
              <div class="timeline-time text-dark flex-shrink-0 text-end">12:00 am</div>
              <div class="timeline-badge-wrap d-flex flex-column align-items-center">
                <span class="timeline-badge border-2 border border-success flex-shrink-0 my-8"></span>
                <span class="timeline-badge-border d-block flex-shrink-0"></span>
              </div>
              <div class="timeline-desc fs-3 text-dark mt-n1">Payment was made of $64.95 to Michael</div>
            </li>
            <li class="timeline-item d-flex position-relative overflow-hidden">
              <div class="timeline-time text-dark flex-shrink-0 text-end">09:30 am</div>
              <div class="timeline-badge-wrap d-flex flex-column align-items-center">
                <span class="timeline-badge border-2 border border-warning flex-shrink-0 my-8"></span>
                <span class="timeline-badge-border d-block flex-shrink-0"></span>
              </div>
              <div class="timeline-desc fs-3 text-dark mt-n1 fw-semibold">New sale recorded <a
                  href="javascript:void(0)" class="text-primary d-block fw-normal">#ML-3467</a>
              </div>
            </li>
            <li class="timeline-item d-flex position-relative overflow-hidden">
              <div class="timeline-time text-dark flex-shrink-0 text-end">09:30 am</div>
              <div class="timeline-badge-wrap d-flex flex-column align-items-center">
                <span class="timeline-badge border-2 border border-danger flex-shrink-0 my-8"></span>
                <span class="timeline-badge-border d-block flex-shrink-0"></span>
              </div>
              <div class="timeline-desc fs-3 text-dark mt-n1 fw-semibold">New arrival recorded 
              </div>
            </li>
            <li class="timeline-item d-flex position-relative overflow-hidden">
              <div class="timeline-time text-dark flex-shrink-0 text-end">12:00 am</div>
              <div class="timeline-badge-wrap d-flex flex-column align-items-center">
                <span class="timeline-badge border-2 border border-success flex-shrink-0 my-8"></span>
              </div>
              <div class="timeline-desc fs-3 text-dark mt-n1">Payment Done</div>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="col-lg-8 d-flex align-items-stretch">
      <div class="card w-100">
        <div class="card-body p-4">
          <h5 class="card-title fw-semibold mb-4">Recent Post Comments</h5>
          <div class="table-responsive">
            <table class="table text-nowrap mb-0 align-middle">
              <thead class="text-dark fs-4">
                <tr>
                  <th class="border-bottom-0">
                    <h6 class="fw-semibold mb-0">Post</h6>
                  </th>
                  <th class="border-bottom-0">
                    <h6 class="fw-semibold mb-0">Name</h6>
                  </th>
                  <th class="border-bottom-0">
                    <h6 class="fw-semibold mb-0">Date</h6>
                  </th>
                  <th class="border-bottom-0">
                    <h6 class="fw-semibold mb-0">Comment</h6>
                  </th>
                 
                </tr>
              </thead>
              <tbody>
                @foreach ($listings as $listing)
               @foreach ($listing->comments as $comment)
               @if ($comment->listing_id == $listing->id && $comment->user_id != auth()->user()->id) 
               <tr>
                <td class="border-bottom-0">
                    <a href="/dashboard/posts/{{ $listing->slug }}">
                        <h6 class="fw-semibold mb-0"> {{ $listing->placename }}  <i class="bi bi-box-arrow-up-right text-primary"></i></h6>
                    </a>
                </td>
                <td class="border-bottom-0">
                    <h6 class="fw-semibold mb-0">{{ $comment->user->name }}</h6>
                </td>
                <td class="border-bottom-0">
                    <h6 class="fw-semibold mb-0">
                        {{ floor($comment->created_at->diffInDays(now())) }} days ago
                    </h6>
                </td>
                <td class="border-bottom-0">
                    <h6 class="fw-semibold mb-1">{{ $comment->comment_body }}</h6>
                    <span class="fw-normal"></span>                          
                </td>
              </tr> 
              @endif
             @endforeach
           @endforeach
                
                                        
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    @foreach ($listings as $item)
    
      <div class="col-sm-6 col-xl-3">
        <div class="card overflow-hidden rounded-2">
          <div class="position-relative">
            <a href="/detail/{{ $item->slug }}">
              @if ($item->image)
              <img src="{{ asset('storage/'.$item->image) }}" class="custom-block-image img-fluid rounded " alt="" />  
              @else
              <img src="{{ asset('assets/img/image-not-found.png') }}" class="custom-block-image img-fluid rounded" alt="..."></a>
              @endif
               <span class="bg-primary rounded-pill p-2 text-white d-inline-flex position-absolute bottom-0 end-0 mb-n3 me-3" ><i class="ti ti-basket fs-4"></i>{{ $item->available }} Tersedia</span>
  
            </a>
          </div>
          <div class="card-body pt-3 p-4">
            <h6 class="fw-semibold fs-4">{{ $item->placename }}</h6>
            <div class="d-flex align-items-center justify-content-between">
              <h6 class="fw-semibold fs-4 mb-0">Rp. {{ number_format($item->price, 0, ',', '.') }}/Bulan </h6>
            </div>
          </div>
        </div>
      </div>

      @endforeach
    </div>
  </div>
  <div class="py-6 px-6 text-center">
    <p class="mb-0 fs-4">Developed by <a href="https://ndfproject.my.id" target="_blank" class="pe-1 text-primary text-decoration-underline">NDFProject | Arabis Group</a> with &#10084; </p>
  </div>
</div>
@endsection