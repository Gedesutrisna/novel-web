@extends('layouts.main')
@section('container')

    <!-- PAGE GENRE SECTION AND COMIC READ SECTION-->
    <div class="genre-title-section container p-3 mx-lg-5 d-flex text-white">
        <div class="genres d-flex align-items-center">
            <div class="d-flex align-items-center">
            <h1 class="genre-subtitle text-white mb-0">Genre</h1>
            <i class='bx bx-chevron-right'></i>
            <h1 class="genre-title text-white mb-0">Action</h1>
            <i class='bx bx-chevron-right'></i>
            <h1 class="comic-title text-white mb-0">Inuyashiki Last Hero</h1>
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
    <h1 class="fw-bolder">Inuyashiki Last Hero</h1>
    <p>Action - Inuyashiki</p>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut labore nostrum voluptatum culpa, odit praesentium dolorem magni beatae doloribus minima magnam doloremque a repellendus minus est amet maiores provident iusto.</p>
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
  <div class="img">
    <img src="/asset/img/comic-chapter-1.svg" alt="">
  </div>
  <div class="chapter m-2">
    <h1>Ch. 1</h1>
    <h1>2023-10-18</h1>
  </div>
  <div class="img">
    <img src="/asset/img/comic-chapter-2.svg" alt="">
  </div>
  <div class="chapter m-2">
    <h1>Ch. 1</h1>
    <h1>2023-10-18</h1>
  </div>
  <div class="img">
    <img src="/asset/img/comic-chapter-3.svg" alt="">
  </div>
  <div class="chapter m-2">
    <h1>Ch. 1</h1>
    <h1>2023-10-18</h1>
  </div>
  <div class="img">
    <img src="/asset/img/comic-chapter-4.svg" alt="">
  </div>
  <div class="chapter m-2">
    <h1>Ch. 1</h1>
    <h1>2023-10-18</h1>
  </div>
</section>

<!-- CARD COMIC SECTION -->
<section class="container d-flex text-white justify-content-between chapter">
  <div class="img">
    <img src="/asset/img/comic-chapter-5.svg" alt="">
  </div>
  <div class="chapter m-2">
    <h1>Ch. 1</h1>
    <h1>2023-10-18</h1>
  </div>
  <div class="img">
    <img src="/asset/img/comic-chapter-6.svg" alt="">
  </div>
  <div class="chapter m-2">
    <h1>Ch. 1</h1>
    <h1>2023-10-18</h1>
  </div>
  <div class="img">
    <img src="/asset/img/comic-chapter-7.svg" alt="">
  </div>
  <div class="chapter m-2">
    <h1>Ch. 1</h1>
    <h1>2023-10-18</h1>
  </div>
  <div class="img">
    <img src="/asset/img/comic-chapter-8.svg" alt="">
  </div>
  <div class="chapter m-2">
    <h1>Ch. 1</h1>
    <h1>2023-10-18</h1>
  </div>
</section>

<div class="d-flex mx-xl-5 p-3 text-white fw-bold chptr">
  <h1>For You</h1>
</div>
<section class="container d-flex justify-content-between text-white read-comic">
  <div class="image-comic">
    <a href="">
      <img src="/asset/img/comic-1.svg" alt="" class="">
    </a>
    <h1>Darkman</h1>
    <p>Action</p>
  </div>
  <div class="image-comic">
    <a href="">
      <img src="/asset/img/comic-2.svg" alt="" class="">
    </a>
    <h1>Darkman</h1>
    <p>Action</p>
  </div>
  <div class="image-comic">
    <a href="">
      <img src="/asset/img/comic-3.svg" alt="" class="">
    </a>
    <h1>Darkman</h1>
    <p>Action</p>
  </div>
  <div class="image-comic">
    <a href="">
      <img src="/asset/img/comic-4.svg" alt="" class="">
    </a>
    <h1>Darkman</h1>
    <p>Action</p>
  </div>
</section>
<section class="container d-flex justify-content-between pt-3 text-white read-comic">
  <div class="image-comic">
    <a href="">
      <img src="/asset/img/comic-5.svg" alt="">
    </a>
    <h1>Darkman</h1>
    <p>Action</p>
  </div>
  <div class="image-comic">
    <a href="">
      <img src="/asset/img/comic-6.svg" alt="">
    </a>
    <h1>Darkman</h1>
    <p>Action</p>
  </div>
  <div class="image-comic">
    <a href="">
      <img src="/asset/img/comic-7.svg" alt="">
    </a>
    <h1>Darkman</h1>
    <p>Action</p>
  </div>
  <div class="image-comic">
    <a href="">
      <img src="/asset/img/comic-8.svg" alt="">
    </a>
    <h1>Darkman</h1>
    <p>Action</p>
  </div>
</section>
<!-- END OF COMIC CARD SECTION -->

@endsection