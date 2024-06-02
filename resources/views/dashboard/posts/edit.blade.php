@extends('dashboard.layouts.main')
@section('container')
<div class="container-fluid">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title fw-semibold mb-4">Edit Post</h5>
        <div class="card">
          <div class="card-body">
            <form method="POST" action="/dashboard/posts/{{ $post->slug }}" enctype="multipart/form-data">
              @method('put')
                @csrf
              <div class="mb-3">
                <label for="placename" class="form-label">Nama Tempat</label>
                <input type="text" class="form-control @error('placename') is-invalid @enderror" id="placename" name="placename" placeholder="Nama Tempat Tinggal anda" value="{{ old('placename',$post->placename) }}" required autofocus>
                @error('placename')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror 
              </div>
              <div class="mb-3">
                <div class="input-group">
                  <span class="input-group-text" id="basic-addon3">https://kostify.my.id/detail/</span>
                <input type="text" class="form-control  @error('slug') is-invalid @enderror" id="slug" name="slug" placeholder="link post akan tampil disini" value="{{ old('slug',$post->slug) }}" required >  
                @error('slug')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror 
                </div>
            </div>
              <div class="mb-3">
                <label for="category_id" class="form-label">Jenis Tempat Tinggal</label>
                <select id="disabledSelect" class="form-select" name="category_id">
                    @foreach ($categories as $item)
                     @if (old('category_id',$post->category_id)==$item->id)
                     <option value="{{ $item->id }}" selected>{{ $item->name }}</option>
                     @else
                     <option value="{{ $item->id }}" >{{ $item->name }}</option>
                     @endif
                    @endforeach
                </select>
              </div>
              <div class="mb-3">
                <label for="forgender" class="form-label">Jenis</label>
                <select id="disabledSelect" class="form-select @error('forgender') is-invalid @enderror" name="forgender">
                    <option>Putra</option>
                    <option>Putri</option>
                    <option>Campur</option>
                </select>
                @error('forgender')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror 
              </div>
              <div class="mb-3">
                <label for="available" class="form-label">Available</label>
                <input type="text" class="form-control  @error('available') is-invalid @enderror" id="available" name="available" placeholder="Jumlah Kamar Tersedia"  value="{{ old('available',$post->available) }}" required >  
                @error('available')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror 
            </div>
              <div class="mb-3">
                <label for="price" class="form-label">Harga / Bulan</label>
                <input type="text" class="form-control  @error('price') is-invalid @enderror" id="price" name="price" placeholder="Harga yang anda tawarkan" value="{{ old('price',$post->price) }}" required>  
                @error('price')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror 
            </div>
              <div class="mb-3">
                <label for="region" class="form-label">Kota</label>
                <select id="disabledSelect" class="form-select" name="region">
                  <option>Aceh</option><option>Sumatera Utara</option><option>Sumatera Barat</option><option>Riau</option><option>Jambi</option><option>Sumatera Selatan</option><option>Bengkulu</option><option>Lampung</option><option>Kepulauan Bangka Belitung</option><option>Kepulauan Riau</option><option>Dki Jakarta</option><option>Jawa Barat</option><option>Jawa Tengah</option><option>Di Yogyakarta</option><option>Jawa Timur</option><option>Banten</option><option>Bali</option><option>Nusa Tenggara Barat</option><option>Nusa Tenggara Timur</option><option>Kalimantan Barat</option><option>Kalimantan Tengah</option><option>Kalimantan Selatan</option><option>Kalimantan Timur</option><option>Kalimantan Utara</option><option>Sulawesi Utara</option><option>Sulawesi Tengah</option><option>Sulawesi Selatan</option><option>Sulawesi Tenggara</option><option>Gorontalo</option><option>Sulawesi Barat</option><option>Maluku</option><option>Maluku Utara</option><option>Papua Barat</option><option>Papua</option>
                </select>
              </div>
              <div class="mb-3">
                <label for="location" class="form-label">Alamat Lengkap</label>
                <input type="text" class="form-control  @error('location') is-invalid @enderror" id="location" name="location" placeholder="Masukan alamat lengkap"  value="{{ old('location',$post->location)  }}" required>  
                @error('location')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror 
            </div>
              <div class="mb-3">
                <label for="facility" class="form-label">Tulis tentang tempat tinggal</label>
                <input id="facility" type="hidden" name="facility" value="{{ old('facility',$post->facility) }}">
                <trix-editor input="facility"></trix-editor>
              </div>
              <div class="mb-3">
                <div class="container mt-5">
                  <div class="card">
                      <div class="card-body">
                        <label for="image" class="form-label">Update Gambar Poster (max 2 mb)</label>
                        <input type="hidden" name="oldImagePoster" value="{{ $post->image }}">
                        @if ($post->image)
                        <img class="img-preview img-fluid mb-3 col-sm-6 d-block" src="{{ asset('storage/'.$post->image) }}" alt="">
                        @else
                        <img class="img-preview img-fluid mb-3 col-sm-6 d-block" src="" alt="">
                        @endif
                        
                        <input class="form-control  @error('image') is-invalid @enderror" type="file" id="image" name="image" onchange="previewImage()">
                        @error('image')
                          <div class="invalid-feedback">
                               {{ $message }}
                           </div>
                         @enderror 
                      </div>
                  </div>
              </div>
              </div>
              <button type="submit" class="btn btn-primary">Update Post</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script>
const placename = document.querySelector('#placename');
const slug = document.querySelector('#slug');
placename.addEventListener('change',function(){
console
fetch('/dashboard/posts/checkSlug?placename=' + placename.value).then(response => response.json()).then(data => slug.value = data.slug)
});
  </script>
  <script src="{{ asset('/js/imgprev.js') }}"></script>
@endsection