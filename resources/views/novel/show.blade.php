@extends('layouts.main')
@section('container')
@include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])
@include('sweetalert::alert')

    <!-- PAGE GENRE SECTION AND COMIC READ SECTION-->
    <div class="genre-title-section container p-3 mx-lg-5 d-flex text-white">
        <div class="genres d-flex align-items-center">
            <div class="d-flex align-items-center">
            <h1 class="genre-subtitle text-white mb-0">                  <a href="/novels">Genre</a>
            </h1>
            <i class='bx bx-chevron-right'></i>
            <h1 class="genre-title text-white mb-0">                  <a href="/novels?genre={{ $novel->genre->name }}">{{ $novel->genre->name }}</a>
            </h1>
            <i class='bx bx-chevron-right'></i>
            <h1 class="comic-title text-white mb-0">{{ $novel->title }}</h1>
            </div>
        </div>
    </div>

    <!-- COMIC READ SECTION -->
<section class="container">
<div class="bg-white d-flex p-2 align-content-center bg-read">
  <div class="img">
    <img src="{{ asset('storage/'.$novel->image) }}" alt="" style="width: 240px;height:280px;">
  </div>
  <div class="title m-4">
    <h1 class="fw-bolder">{{ $novel->title }}</h1>
    <p>{{ $novel->genre->name }} - {{ $novel->creator }}</p>
    <p>{{ $novel->description }}</p>
    <div class="d-flex gap-3">
      <form id="rating-form" action="{{ route('rating.store') }}" method="post">
        <div class="d-flex align-items-center gap-3">
          @csrf
          <input type="hidden" name="novel_id" value="{{ $novel->id }}">
          
          <div class="rating">
            <input type="radio" id="star5" name="grade" value="5"/>
            <label for="star5" title="5 stars"></label>
            <input type="radio" id="star4" name="grade" value="4"/>
            <label for="star4" title="4 stars"></label>
            <input type="radio" id="star3" name="grade" value="3"/>
            <label for="star3" title="3 stars"></label>
            <input type="radio" id="star2" name="grade" value="2"/>
            <label for="star2" title="2 stars"></label>
            <input type="radio" id="star1" name="grade" value="1"/>
            <label for="star1" title="1 star"></label>
          </div>
          <button type="submit" class="btn btn-success">Rating</button>
        </div>
        </form>
      {{-- <button type="button" class="btn btn-success">Read Now</button> --}}
      <form action="/addFavorite/create" method="POST">
        @csrf
        <input type="hidden" name="novel_id" value="{{ $novel->id }}">
        <button type="submit" class="btn btn-light btn-fav">Favorite</button>
      </form>
    </div>
  </div>
</div>
</section>

<!-- CHAPTER & COMMENT -->
<div class="read p-3 mx-lg-5 d-flex text-white">
  <h1>Chapters</h1>
</div>
<div class="bottom"></div>
<section class="container d-flex text-white chapter justify-content-between mb-2 pt-3 h-custom">
  <div class="row">
    @foreach ($novel->episode as $eps)
    
    <div class="col-3 mb-3">
<div class="d-flex gap-3">
  <div class="img">
    <a href="/novels/{{ $novel->slug }}/{{ $eps->name }}">
      <img src="{{ asset('storage/'.$eps->image) }}" alt="" class="img-fluid" style="width: 125px; height:80px;border-radius: 5px">
    </a>
  </div>
  <div class="chapter m-2">
    <h1>Ch. {{ $eps->number }}</h1>
    <h1>{{ $eps->release }}</h1>
  </div>

</div>
    </div>
    @endforeach 
  </div>
</section>

<div class="d-flex mx-xl-5 p-3 text-white fw-bold chptr">
  <h1>For You</h1>
</div>
<section class="container d-flex justify-content-between text-white read-comic">
  <div class="row justify-content-between">
  
    @foreach ($novels as $nvl)
    @if ($nvl->id !== $novel->id)
    <div class="col-lg-3 mb-3">
  
      <a href="/novels/{{ $nvl->slug }}">
        <img src="{{ asset('storage/'.$nvl->image) }}" alt="" class="">
      </a>
      <h1>{{ $nvl->title }}</h1>
      <p>{{ $nvl->genre->name }}</p>
    </div>
  @endif
  @endforeach
  </div>

</section>
<style>
    
  .star-rating {
      font-size: 2em;
      color: #ddd;
  }
  .star-rating .bi-star-fill {
      color: #FFD700;
  }
  .rating {
    direction: rtl;
    display: inline-block;
  }
  
  .rating input {
    display: none;
  }
  
  .rating label {
    display: inline-block;
    cursor: pointer;
    width: 1.1em;
    font-size: 1.5em;
  }
  
  .rating label:before {
    content: "\f005";
    font-family: "Font Awesome 5 Free";
    font-weight: 900;
    color: #ccc;
    -webkit-text-stroke: 1px #ccc;
  }
  
  .rating input:checked ~ label:before {
    color: #f8ce0b;
    -webkit-text-stroke: 1px #f8ce0b;
  }

  
.fa-heart {
  font-size: 20px;
  color: #ddd; 
  padding: 5px; 
  border-radius: 50%; 
  cursor: pointer;
  background-color: none;
}

.fa-heart:hover {
  color: #C09787;
}

.fa-heart.active {
  color: #fff;
  background-color: #C09787; 
  border: 1px solid #000;
}
  </style>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.10.2/umd/popper.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.min.js"></script>

@endsection