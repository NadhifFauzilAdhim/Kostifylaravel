@extends('dashboard.layouts.main')
@section('container')
<div class="container-fluid">   
  <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteModalLabel">Apakah Anda yakin ingin menghapus post ini?</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p class="text-center"><strong>Aksi ini akan menghapus</strong> </p>
                <p class="text-center"><i class="bi bi-x-circle text-danger"></i> Menghapus <strong class="text-danger">Postingan</strong></p>
                <p class="text-center"><i class="bi bi-x-circle text-danger"></i> Menghapus <strong class="text-danger">Komentar</strong></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <button type="button" class="btn btn-danger" id="confirmDelete">Hapus</button>
            </div>
        </div>
    </div>
</div>
  <div class="row">
      <div class="container-fluid">
        <div class="card">
          <div class="card-body">
            @if (session()->has('success'))
            <div class="alert alert-success text-center" role="alert">
                {{ session('success') }}
            </div>
            @endif
            <a href="/dashboard/posts/create" class="btn btn-info mb-4"><i class="bi bi-send-plus"></i> Buat Post Baru</a>     
            <div class="row">
            @foreach ($listing as $item)
            <div class="col-md-4">
                <h5 class="card-title fw-semibold mb-4 text-center">{{ $item->placename }}</h5>
                <div class="card">
                   @if ($item->image)
                  <img src="{{ asset('storage/'.$item->image) }}" class="custom-block-image img-fluid rounded " alt="" />  
                   @else
                   <img src="{{ asset('assets/img/image-not-found.png') }}" class="custom-block-image img-fluid rounded" alt="..."></a>
                   @endif
               
                  <div class="card-body">
                    <h5 class="card-title">Rp. {{ number_format($item->price, 0, ',', '.') }}/Bulan </h5>
                    <p class="card-text">{{ $item->location }}</p>
                    <div class=" d-flex justify-content-center ">
                        <a href="/dashboard/posts/{{ $item->slug}}/edit" class="btn btn-warning"><i class="bi bi-pencil-square"></i> Edit</a> 
                        <a href="/dashboard/posts/{{ $item->slug}}" class="btn btn-info mx-1"><i class="bi bi-eye"></i> Detail</a> 
                        <form action="/dashboard/posts/{{ $item->slug }}" method="POST" id="deleteForm">
                            @method('delete')
                            @csrf
                            <button class="btn btn-danger" type="button" data-bs-toggle="modal" data-bs-target="#deleteModal"><i class="bi bi-trash"></i> Hapus</button>
                        </form>     
                    </div>
                  </div>
                </div>
              </div>
            @endforeach
            </div>
          </div>
        </div>
      </div>

  </div>
  <div class="py-6 px-6 text-center">
    <p class="mb-0 fs-4">Developed by <a href="https://ndfproject.my.id" target="_blank" class="pe-1 text-primary text-decoration-underline">NDFProject | Arabis Group</a> with &#10084; </p>
  </div>
</div>

<script>
  // Tambahkan event listener untuk tombol "Hapus" di dalam modal
  document.getElementById('confirmDelete').addEventListener('click', function() {
      // Submit form penghapusan
      document.getElementById('deleteForm').submit();
  });
</script>

@endsection