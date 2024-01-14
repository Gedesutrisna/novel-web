@extends('layouts.main-home')
@section('container')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">

    <main class="hero-section container">
        <div class="row">
          <div class="col-4">
            <p class="main-genre">
              @foreach ($genres->take(4) as $genre)
              {{ $genre->name }},
              @endforeach
            </p>
            <p class="title-hero">Demon Slayer : <br> Kimetsu No Yaiba</p>
            <div class="d-flex rating-section">
              <div class="">
                <p class="rating-text">9,5</p>
              </div>
              <div class="ms-3">
                <div class="d-flex gap-1">
                  <img src="/asset-home/star.svg" alt="">
                  <img src="/asset-home/star.svg" alt="">
                  <img src="/asset-home/star.svg" alt="">
                  <img src="/asset-home/star.svg" alt="">
                  <img src="/asset-home/star.svg" alt="">
                </div>
                <p class="text-white pt-3">100 Review</p>
              </div>
            </div>
          </div>
  
          <div class="img-hero col-4">
            <img src="/asset-home/img-hero.svg" alt="">
          </div>
  
          <div class="right-main-wrapper col">
            <p class="right-main">Forem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eu turpis molestie, dictum est a mattis tellus.Sed dignissim,metus nec fringill <span class="text-hidden">risus sem Maecenas eget condimentum velit, sit amet feugiat lectus.torquent per conubia nostra.</span></p>
            <div class="d-flex gap-4">
              <button class="button-right-main1">Read Now</button>
              <button class="button-right-main2"><img src="/asset-home/book.svg" alt=""> CH 204</button>
            </div>
          </div>
  
        </div>
  
      </main>
      <!-- Hero end -->
  
      <section class="about-section container">
        <div class="row">
        <div class="col-6" data-aos="fade-right" data-aos-delay="200">
          <h1 class="about-title">About Our Project</h1>
          <p class="about-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eu turpis molestie, dictum est a, mattis tellus. Sed dignissim, metus nec fringilla accumsan, 
          </p>
          <button class="button-about">Read Now</button>
        </div>
        <div class="col-5 offset-1"><img src="/asset-home/img-right-about.svg" alt=""></div>
      </div>
  </section>
  
  <section class="popular-comic container">
  
  <div class="d-flex justify-content-between">
    <p class="popular-text">Popular</p>
    <div class="d-flex position-relative">
      <button class="swiper-button-before button-before"><img src="/asset-home/button-before.svg" alt=""></button>
      <button class="swiper-button-after button-after"><img src="/asset-home/button-after.svg" alt=""></button>
    </div>
  </div>
  
  
  <div class="swiper mySwiper">
  <div class="swiper-wrapper d-flex mt-4">
  @foreach ($novels as $novel)
      {{-- @if ($novel->favorite->count() > 1) --}}
          
          
      <div class="swiper-slide">
        <div class="d-flex">
          <div class=""><img src="{{ asset('storage/' . $novel->image) }}" alt="" class="w-100"></div>
          <div class="d-flex align-items-center">
              <div class="d-block ms-4">
          <p class="title-genre-comic">{{ $novel->genre->name }}</p>
          <p class="text-uppercase text-title-comic">{{ $novel->title }}</p>
          <div class="d-flex gap-2">
            
            @for ($i = 1; $i <= 5; $i++)
            @if ($i <= $novel->averageRating($novel->id))
            <img src="/asset-home/star.svg" alt="">
            @else
            @endif
            @endfor
            {{-- <p class="text-description">
              {{  $novel->averageRating($novel->id) }}
            </p> --}}
          </div>
          <p class="publisher">{{ $novel->creator }}</p>
        <a href="/novels/{{ $novel->slug }}" class="readmore">Read more <span class="ms-2"><img src="/asset-home/Icon-button.svg" alt=""></span></a>
    </div>
</div>
</div>
</div>
{{-- @endif --}}
@endforeach
  
    
    <div class="swiper-slide hidden-swiper">
      <div class="d-flex">
        <div class=""><img src="/asset-home/batman.svg" alt=""></div>
        <div class="d-flex align-items-center">
          <div class="d-block ms-4">
          <p class="title-genre-comic">Adventure</p>
          <p class="text-uppercase text-title-comic">Batman</p>

          <p class="publisher">DC Comics</p>
          <a href="#" class="readmore">Read more <span class="ms-2"><img src="/asset-home/Icon-button.svg" alt=""></span></a>
        </div>
      </div>
      </div>
    </div>
  
  </div>  
  </div>
  </section>
  
  <section class="popular-genre container">
    <div class="wrapper-genre d-flex justify-content-between mt-5">
      <p class="popular-text mt-5">Popular Genre</p>
      <div class="d-flex position-relative">
        <button class="swiper-button-before-2 button-before"><img src="/asset-home/button-before.svg" alt=""></button>
        <button class="swiper-button-after-2 button-after"><img src="/asset-home/button-after.svg" alt=""></button>
      </div>
    </div>
  
    <div class="swiper mySwiper2 mt-5">
    <div class="swiper-wrapper d-flex">
      @foreach ($genres as $genre)
          
      <div class="swiper-slide wrapper-popular text-center">
          <img src="{{ asset('storage/'. $genre->novels->first()->image) }}" alt="" class="w-100">
          <div class="">
              <p class="text-genre text-center mt-2 ms-4">{{ $genre->name }}</p>
            </div>
        </div>
        @endforeach
  
    </div>
    </div>
  </section>
  
  <section class="banner">
  <div class="text-wrapper-banner">
    <p class="information-text text-center">Enter your email address for to get information</p>
  </div>
  <div class="wrapper-input mx-auto">
    <div class="d-flex justify-content-between mt-5">
       <input type="text" class="input-text" placeholder="Drop your email address here..">
       <div class="">
          <img class="line" src="/asset-home/line.svg" alt="">
         <button class="button-search">Subscribe</button> 
       </div>
    </div>
  </div>
  </section>
  
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  @if(session('toast_success'))
<script>
    // Tampilkan SweetAlert dengan pesan sukses
    Swal.fire({
        icon: 'success',
        title: 'Success!',
        text: '{{ session('toast_success') }}',
        timer: 3000 // Atur timer 3000 milidetik (3 detik)
    });
    
</script>
@endif
@endsection