@extends('dashboard.layouts.main')
@section('container')
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
                            <th>#</th>
                            <th>Title</th>
                            <th>Genre</th>
                            <th>Year Published</th>
                            <th>Creator</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($novels as $novel)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $novel->title }}</td>
                            <td>{{ $novel->genre->name }}</td>
                            <td>{{ $novel->year_published }}</td>
                            <td>{{ $novel->creator }}</td>
                            <td class="text-center">
                                <button class="btn label"><img src="/assets/eye-i.svg" alt=""></button>
                                                  <!-- Modal -->
                  <div class="modal fade" id="exampleModal2-{{ $novel->slug }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Edit Data Novel</h5>
                        </div>
                        <div class="modal-body">
                          <form method="POST" action="/dashboard/novels/{{ $novel->slug }}"  enctype="multipart/form-data">
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
                                <label for="image" class="form-label">Image</label>
                                <input type="file" class="form-control @error('image') is-invalid @enderror" id="image" name="image"
                                required autofocus value="{{ old('image', $novel->image) }}">
                                @error('image')
                                    <div class="invalid-feedback">
                                      {{ $message }}
                                    </div>
                                @enderror
                              </div>
                            <div class="mb-3">
                                <label for="genre" class="form-label">Genre</label>
                                <select name="genre_id" id="">
                                    @foreach ($novel->genre as $genre)
                                    <option value="{{ $genre->id }}">{{ $genre->name }}</option>
                                    @endforeach
                                </select>
                                @error('genre')
                                    <div class="invalid-feedback">
                                      {{ $message }}
                                    </div>
                                @enderror
                              </div>
                            <div class="mb-3">
                                <label for="year_publised" class="form-label">year_publised</label>
                                <input type="text" class="form-control @error('year_publised') is-invalid @enderror" id="year_publised" name="year_publised"
                                required autofocus value="{{ old('year_publised', $novel->year_publised) }}">
                                @error('year_publised')
                                    <div class="invalid-feedback">
                                      {{ $message }}
                                    </div>
                                @enderror
                              </div>
                            <div class="mb-3">
                                <label for="creator" class="form-label">creator</label>
                                <input type="text" class="form-control @error('creator') is-invalid @enderror" id="creator" name="creator"
                                required autofocus value="{{ old('creator', $novel->creator) }}">
                                @error('creator')
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
                            <div class="button d-flex justify-content-between">
                
                            <button type="button" class="main-btn" data-bs-dismiss="modal"><i class="bi bi-x"></i></button>
                            <button type="submit" class="btn label"><img src="/assets/assets/pen.svg" alt=""></button>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                
                                <button class="btn label"><img src="/assets/pen-i.svg" alt=""></button>
                                                                  <!-- Modal -->
                  <div class="modal fade" id="exampleModal3-{{ $novel->slug }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header d-block">
                          <h5 class="modal-title" id="exampleModalLabel">Delete novel {{ $novel->name }}</h5>
                          <p class="text-muted">Are You Sure Delete This novel ?</p>
                        </div>
                        <div class="modal-body d-flex justify-content-between">
                          <button type="button" class="main-btn" data-bs-dismiss="modal"><i class="bi bi-x"></i></button>
                
                          <form action="/dashboard/novels/{{ $novel->slug }}" method="POST" class="d-inline">
                            @method('delete')
                            @csrf
                            <button class="btn label">
                              <img src="/assets/assets/trash.svg" alt="">
                            </button>
                            </form>
                        </div>
                      </div>
                    </div>
                  </div>
                                <button class="btn label"><img src="/assets/trash-i.svg" alt=""></button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>                                                  
            </div>
        </div>
    </div>
    
  <!-- Modal -->
  <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Create Data Room Category</h5>
        </div>
        <div class="modal-body">
          <form method="POST" action="/dashboard/categories" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
              <label for="name" class="form-label">Name</label>
              <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name"
              required autofocus value="{{ old('name') }}">
              @error('name')
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
            <div class="button d-flex justify-content-between">

              <button type="button" class="main-btn" data-bs-dismiss="modal"><i class="bi bi-x"></i></button>
              <button type="submit" class="main-btn active">Create New</button>
              </div>
          </form>
        </div>
 </div>
     </div>
   </div>
 </div>

   <!-- Modal -->
   <div class="modal fade" id="exampleModal4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Create Data Novel</h5>
        </div>
        <div class="modal-body">
          <form method="POST" action="/dashboard/facilities" enctype="multipart/form-data">
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
                required autofocus value="{{ old('description', $novel->description) }}">
                @error('description')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                @enderror
              </div>
            <div class="mb-3">
                <label for="image" class="form-label">Image</label>
                <input type="file" class="form-control @error('image') is-invalid @enderror" id="image" name="image"
                required autofocus value="{{ old('image') }}">
                @error('image')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                @enderror
              </div>
            <div class="mb-3">
                <label for="genre" class="form-label">Genre</label>
                <select name="genre_id" id="">
                    @foreach ($novel->genre as $genre)
                    <option value="{{ $genre->id }}">{{ $genre->name }}</option>
                    @endforeach
                </select>
                @error('genre')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                @enderror
              </div>
            <div class="mb-3">
                <label for="year_publised" class="form-label">year_publised</label>
                <input type="text" class="form-control @error('year_publised') is-invalid @enderror" id="year_publised" name="year_publised"
                required autofocus value="{{ old('year_publised') }}">
                @error('year_publised')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                @enderror
              </div>
            <div class="mb-3">
                <label for="creator" class="form-label">creator</label>
                <input type="text" class="form-control @error('creator') is-invalid @enderror" id="creator" name="creator"
                required autofocus value="{{ old('creator') }}">
                @error('creator')
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
@endsection