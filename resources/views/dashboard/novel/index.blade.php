@extends('dashboard.layouts.main')
@section('container')


@if(session()->has('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('success') }}
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif



@if(session()->has('hapus'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('hapus') }}
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
<section>
    <div class="row">
        <div class="col-lg-12">                        
            <div class="box h-100">
                <div class="d-flex justify-content-between mb-3">
                    <h1 class="box-title mb-0">Novel</h1>
                    <button class="main-btn active" data-bs-toggle="modal" data-bs-target="#exampleModal">Create</button>
                </div>
                <table class="table table-bordered" id="myTable">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Title</th>
                            <th>Genre</th>
                            <th>Image</th>
                             <!-- Genre -->
                            <th>Creator</th>
                            <th>Year Publised</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($novels as $novel)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $novel->title }}</td>
                            
                            <td>{{ $novel->genre->name }}</td>
                            <td>
                                  <img style="height: 50px;" src=" {{asset('uploads/novel/'. $novel->image)}} " alt="">
                            </td>
                            <td>{{ $novel->creator }}</td>
                            <td>{{ $novel->year_published }}</td>
                            <td>
                              <a href="/dashboard/novel/{{ $novel->slug }}" class="text-decoration-none">
                                <button class="btn label"><img src="/assets/eye-i.svg" alt=""></button>
                              </a>
                                
                                <button class="btn label" data-bs-toggle="modal" data-bs-target="#exampleModal2-{{ $novel->slug }}"><img src="/assets/pen-i.svg" alt=""></button>
                                <!-- Modal -->
<div class="modal fade" id="exampleModal2-{{ $novel->slug }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Data Novel</h5>
      </div>
      <div class="modal-body">
      <!-- FORM EDIT -->
        <form method="POST" action="/dashboard/novel/update/{{ $novel->id }}"  enctype="multipart/form-data">
          @method('put')
          @csrf
          <div class="mb-3">
              <label for="title" class="form-label">Title</label>
              <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title"
              required autofocus value="{{ old('title', $novel->title) }}">
              @error('title')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
              @enderror
            </div>
          <div class="mb-3">
              <label for="description" class="form-label">Description</label>
              <input type="text" class="form-control @error('description') is-invalid @enderror" id="description" name="description"
              required autofocus value="{{ old('description', $novel->description) }}">
              @error('description')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
              @enderror
            </div>
        
          
          <div class="mb-3">
              <label for="year_published" class="form-label">Year Published</label>

              <input type="date" class="form-control @error('year_published') is-invalid @enderror" id="year_published" name="year_published"
              required autofocus value="{{ old('year_published', date('Y-m-d'), $novel->year_published) }}">
              @error('year_published')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
              @enderror
            </div>
          <div class="mb-3">
              <label for="creator" class="form-label">Creator</label>
              <input type="text" class="form-control @error('creator') is-invalid @enderror" id="creator" name="creator"
              required autofocus value="{{ old('creator', $novel->creator) }}">
              @error('creator')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
              @enderror
            </div>

            <div class="mb-3">
              <label for="genre" class="form-label">Genre</label>
              <select name="genre_id" class="form-control" id="">
                <option value="">Select Genre</option>
                @foreach ($genres as $genre)
                @if (old('genre_id', $novel->genre_id) == $genre->id)
                <option @selected(old('genre_id') == $genre->id) value="{{ $genre->id }}" selected>{{ $genre->name}}</option>    
                @else
                    <option value="{{ $genre->id }}">{{ $genre->name}}</option>
                  @endif
                  @endforeach
              </select>
              @error('genre')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
              @enderror
            </div>

            <div class="mb-3">
              <label for="image" class="form-label">Image</label>
              <input type="file" class="form-control mb-3 @error('image') is-invalid @enderror" id="image" name="image" onchange="previewImage()" value="{{ old('image',$novel->image) }}">
              @if($novel->image)
              <img class="img-preview" style="height: 200px;" src="{{asset('uploads/novel/'. $novel->image)}} " alt="">
              @else
              <img class="img-preview" src="" style="height: 200px;" />
              @endif
              @error('image')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
              @enderror
            </div>
            <div class="mb-3">
              <input type="hidden" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug"
              required value="{{ old('slug', $novel->slug) }}">
              @error('slug')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
              @enderror
            </div>
            <hr>
          <div class="button d-flex justify-content-between align-items-center">

          <button type="button" class="main-btn" data-bs-dismiss="modal"><i class="bi bi-x"></i></button>
          <button type="submit" class="main-btn active">Update Data</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

                                <button class="btn label" data-bs-toggle="modal" data-bs-target="#exampleModal3-{{ $novel->slug }}"><img src="/assets/trash-i.svg" alt=""></button>
                                <!-- Modal -->
<div class="modal fade" id="exampleModal3-{{ $novel->slug }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header d-block">
<h5 class="modal-title" id="exampleModalLabel">Delete novel {{ $novel->name }}</h5>
<p class="text-muted">Are You Sure Delete This novel ?</p>
</div>
<div class="modal-body d-flex justify-content-between align-items-center">
<button type="button" class="main-btn" data-bs-dismiss="modal"><i class="bi bi-x"></i></button>

<form action="/dashboard/novel/delete/{{ $novel->id }}" method="POST" class="d-inline mb-0">
  @method('delete')

@csrf
<button type="submit" class="main-btn active">Delete Data</button>
</form>
</div>
</div>
</div>
</div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>                                                  
            </div>
        </div>
    </div>
    

   <!-- Modal -->
   <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Create Data Novel</h5>
        </div>
        <div class="modal-body">
          <form method="POST" action="{{route('create.novel')}}" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title"
                required autofocus value="{{ old('title') }}">
                @error('title')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                @enderror
              </div>
              <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <input type="text" class="form-control @error('description') is-invalid @enderror" id="description" name="description"
                required autofocus value="{{ old('description') }}">
                @error('description')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                @enderror
              </div>
          
            
            <div class="mb-3">
                <label for="year_published" class="form-label">Year Published</label>
                <input type="date" class="form-control @error('year_published') is-invalid @enderror" id="year_published" name="year_published" required autofocus value="{{ old('year_published', date('Y-m-d')) }}">
                @error('year_published')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                @enderror
              </div>
            <div class="mb-3">
                <label for="creator" class="form-label">Creator</label>
                <input type="text" class="form-control @error('creator') is-invalid @enderror" id="creator" name="creator"
                required autofocus value="{{ old('creator') }}">
                @error('creator')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                @enderror
              </div>

              <div class="mb-3">
                <label for="genre" class="form-label">Genre</label>
                <select name="genre_id" class="form-control" id="" >
                  <option value="">Select Genre</option>
                    @foreach ($genres as $genre)
                    <option @selected(old('genre_id') == $genre->id) value="{{ $genre->id }}">{{ $genre->name }}</option>
                    @endforeach
                </select>
                @error('genre')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                @enderror
              </div>

              <div class="mb-3">
                <label for="image" class="form-label">Image</label>
                <input type="file" class="form-control mb-3 @error('image') is-invalid @enderror" id="images" name="image"
                onchange="previewImages()" value="">

                <img class="img-previews" id="img-preview" src=""/>
               @error('image')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                @enderror
              </div>

              <div class="mb-3">
                <input type="hidden" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug"
                required value="{{ old('slug') }}">
                @error('slug')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                @enderror
              </div>
              <hr>
            <div class="button d-flex justify-content-between">

              <button type="button" class="main-btn" data-bs-dismiss="modal"><i class="bi bi-x"></i></button>
              <button type="submit" class="main-btn active">Create New</button>
              </div>
          </form>
        </div>
 </div>
     </div>
   </div>
</section>
<script>
const titleInput = document.querySelector('#title');
const slugInput = document.querySelector('#slug');

titleInput.addEventListener('change', function() {
  const titleValue = titleInput.value.toLowerCase().trim().replace(/\s+/g, '-');
  slugInput.value = titleValue;
});

function previewImage(){
      const image = document.querySelector('#image');
      const imgPreview = document.querySelector('.img-preview');

      imgPreview.style.display = 'block';
      imgPreview.style.height = '200px';

      const blob = URL.createObjectURL(image.files[0]);
imgPreview.src = blob;


      }
function previewImages(){
      const image = document.querySelector('#images');
      const imgPreviews = document.querySelector('#img-preview');

      imgPreviews.style.display = 'block';
      imgPreviews.style.height = '200px';

      const blob = URL.createObjectURL(image.files[0]);
imgPreviews.src = blob;

      }
</script>
@endsection