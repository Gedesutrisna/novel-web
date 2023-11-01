@extends('layouts.main')
@section('container')

    <!-- PAGE GENRE SECTION AND COMIC READ SECTION-->
    <div class="genre-title-section container p-3 mx-lg-5 d-flex text-white">
        <div class="genres d-flex align-items-center">
            <div class="d-flex align-items-center">
            <h1 class="genre-subtitle text-white mb-0">Genre</h1>
            <i class='bx bx-chevron-right'></i>
            <h1 class="genre-title text-white mb-0">{{ $novel->genre->name }}</h1>
            <i class='bx bx-chevron-right'></i>
            <h1 class="comic-title text-white mb-0">{{ $novel->title }}</h1>
            </div>
        </div>
    </div>

    <!-- COMIC READ SECTION -->
<section class="container">
<div class="bg-white d-flex p-2 align-content-center bg-read">
  <div class="img">
    <img src="/asset/img/comic-read-1.svg" alt="">
  </div>
  <div class="title m-4">
    <h1 class="fw-bolder">{{ $novel->title }}</h1>
    <p>{{ $novel->genre->name }} - {{ $novel->creator }}</p>
    <p>{{ $novel->description }}</p>
    <button type="button" class="btn btn-success">Read Now</button>
    <button type="button" class="btn btn-light btn-fav">Favorite</button>
  </div>
</div>
</section>

<!-- CHAPTER & COMMENT -->
<div class="read p-3 mx-lg-5 d-flex text-white">
  <h1>Chapters</h1>
</div>
<div class="bottom"></div>
<section class="container d-flex text-white chapter justify-content-between mb-2 pt-3">
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
  
      <a href="/novels/{{ $nvl->id }}/{{ $nvl->genre->id }}">
        <img src="{{ asset('storage/'.$nvl->image) }}" alt="" class="">
      </a>
      <h1>{{ $nvl->title }}</h1>
      <p>{{ $nvl->genre->name }}</p>
    </div>
  @endif
  @endforeach
  </div>

</section>
<!-- END OF COMIC CARD SECTION -->

@endsection