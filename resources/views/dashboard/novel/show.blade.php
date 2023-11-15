@extends('dashboard.layouts.main')
@section('container')
@include('sweetalert::alert')

@if(session()->has('update'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('update') }}
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
@if(session()->has('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('success') }}
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
@if(session()->has('delete'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('delete') }}
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
<section>
    <div class="row">
        <div class="col-lg-12">                        
            <div class="box h-100">
                <div class="d-flex justify-content-between mb-3">
                    <h1 class="box-title mb-0">Novel {{ $novel->title }} </h1>
                    <button class="main-btn active" data-bs-toggle="modal" data-bs-target="#exampleModal">Create</button>
                </div>
                <table class="table table-bordered" id="myTable">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Number</th>
                            <th>Release</th>
                            <th>Image</th>
                             <!-- Genre -->
                            <th>File</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($novel->episode as $eps)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $eps->name }}</td>
                            <td>{{ $eps->number }}</td>
                            <td>{{ $eps->release }}</td>
                            <td>
                               <img style="height: 100px;" src="{{asset('storage/'. $eps->image)}} " alt="">
                            </td>
                            <td>
                              <iframe class="file-preview" id="file-preview" src="{{ asset('storage/'.$eps->file_pdf) }}" frameborder="0"></iframe>

                            </td>
                            
                            <td>
                                <button class="btn label"><img src="/assets/eye-i.svg" alt=""></button>
                                
                                <button class="btn label" data-bs-toggle="modal" data-bs-target="#exampleModal2-{{ $eps->id }}"><img src="/assets/pen-i.svg" alt=""></button>
                                <!-- Modal -->
<div class="modal fade" id="exampleModal2-{{ $eps->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Data Episode {{ $eps->name }}</h5>
      </div>
      <div class="modal-body">
      <!-- FORM EDIT -->
        <form method="POST" action="/dashboard/novel/show/update/{{$eps->id}}"  enctype="multipart/form-data">
          @csrf
          <div class="mb-3">
                <label for="title" class="form-label">Name</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="title" name="name"
                required autofocus value="{{ old('name', $eps->name) }}">
                @error('name')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                @enderror
              </div>
              
              <div class="mb-3">
                <label for="title" class="form-label">Number</label>
                <input type="text" class="form-control @error('number') is-invalid @enderror" id="number" name="number"
                required autofocus value="{{ old('number', $eps->number) }}">
                @error('number')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                @enderror
              </div>
              <div class="mb-3">
                <label for="title" class="form-label">Release</label>
                <input type="date" class="form-control @error('release') is-invalid @enderror" id="release" name="release"
                required autofocus value="{{ old('release', $eps->release) }}">
                @error('release')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                @enderror
              </div>
              <div class="mb-3">
                  <label for="image" class="form-label">File</label>
                  <input type="file" class="form-control mb-3 @error('file_pdf') is-invalid @enderror" id="file_pdf" name="file_pdf" onchange="previewFile()" value="{{ old('file_pdf',$eps->file_pdf) }}">
                  @if($eps->file_pdf)
                  <iframe class="file-preview" id="file-preview" src="{{ asset('storage/'.$eps->file_pdf) }}" frameborder="0"></iframe>
                  @else
                  <iframe class="file-preview" id="file-preview" src="" frameborder="0"></iframe>
                  @endif
                  @error('file_pdf')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                  @enderror
                </div>

              <div class="mb-3">
              <label for="image" class="form-label">Image</label>
              <input type="file" class="form-control mb-3 @error('image') is-invalid @enderror" id="image" name="image" onchange="previewImage()" value="{{ old('image',$eps->image) }}">
              @if($eps->image)
              <img class="img-preview" style="height: 200px;" src="{{asset('storage/'. $eps->image)}} " alt="">
              @else
              <img class="img-preview" src="" style="height: 200px;" />
              @endif
              @error('image')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
              @enderror
            </div>


           <input type="hidden" value="{{$novel->id}}" name="novel_id">

           
            
           
              <div class="mb-3">
                <input type="hidden" class="form-control"  name="admin_id" required autofocus value="1">
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
<h5 class="modal-title" id="exampleModalLabel">Delete Data Episode {{ $eps->name }}</h5>
<p class="text-muted">Are You Sure Delete This novel ?</p>
</div>
<div class="modal-body d-flex justify-content-between align-items-center">
<button type="button" class="main-btn" data-bs-dismiss="modal"><i class="bi bi-x"></i></button>

<form action="/dashboard/novel/show/delete/{{$eps->id}}" method="POST" class="d-inline mb-0">
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
          <h5 class="modal-title" id="exampleModalLabel">Create Data Episode</h5>
        </div>
        <div class="modal-body">
          <form method="POST" action="{{route('create.episode')}}" enctype="multipart/form-data">
            @csrf

            <div class="mb-3">
                <label for="title" class="form-label">Name</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="title" name="name"
                required autofocus value="{{ old('name') }}">
                @error('name')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                @enderror
              </div>
              
              <div class="mb-3">
                <label for="title" class="form-label">Number</label>
                <input type="text" class="form-control @error('number') is-invalid @enderror" id="number" name="number"
                required autofocus value="{{ old('number') }}">
                @error('number')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                @enderror
              </div>
              <div class="mb-3">
                <label for="title" class="form-label">Release</label>
                <input type="date" class="form-control @error('release') is-invalid @enderror" id="release" name="release"
                required autofocus value="{{ old('release') }}">
                @error('release')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                @enderror
              </div>
              
              <div class="mb-3">
                <label for="image" class="form-label">File</label>
                <input type="file" class="form-control mb-3 @error('file_pdf') is-invalid @enderror" id="file_pdfs" name="file_pdf" onchange="previewFiles()" value="">
                <iframe class="file-previews" id="file-previews" src="" frameborder="0"></iframe>
                @error('file_pdf')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>
              <div class="mb-3">
              <label for="image" class="form-label">Image</label>
              <input type="file" class="form-control mb-3 @error('image') is-invalid @enderror" id="images" name="image" onchange="previewImages()" value="">
              <img class="img-previews" id="img-preview" src=""/>

              @error('image')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
              @enderror
            </div>

           <input type="hidden" value="{{$novel->id}} " name="novel_id">
      
          
              <div class="">
                <input type="hidden" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug"
                required value="{{ old('slug') }}">
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

// var loadFile = function(event) {
//     var reader = new FileReader();
//     reader.onload = function(){
//       var output = document.getElementById('output');
//       output.src = reader.result;
//     };
//     reader.readAsDataURL(event.target.files[0]);
//   };
  function previewFile(){
      const file = document.querySelector('#file_pdf');
      const filePreview = document.querySelector('#file-preview');

      filePreview.style.display = 'block';
      filePreview.style.height = '200px';

      
      const blob = URL.createObjectURL(file.files[0]);
filePreview.src = blob;
}
  function previewFiles(){
      const file = document.querySelector('#file_pdfs');
      const filePreviews = document.querySelector('#file-previews');

      filePreviews.style.display = 'block';
      filePreviews.style.height = '200px';

      
      const blob = URL.createObjectURL(file.files[0]);
filePreviews.src = blob;
}


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