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
                            <th>No</th>
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
                            <td>
                                <button class="btn label"><img src="/assets/eye-i.svg" alt=""></button>
                                
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
                  @foreach ($genres as $genre)
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

<form action="/dashboard/novels/{{ $novel->slug }}" method="POST" class="d-inline mb-0">
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
                required autofocus value="{{ old('description') }}">
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
                    @foreach ($genres as $genre)
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