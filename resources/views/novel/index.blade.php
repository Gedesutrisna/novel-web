<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Komiweb</title>
    <link rel="stylesheet" href="/css/style-a.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  </head>
  <body class="overflow-x-hidden">

    <section class="container-fluid d-flex">

        <div class="sidebar">
          <div class="sidebar-wrapper d-flex justify-content-center">
            <div class="text-center">
              <h1 class="genre-text">GENRE</h1>
              <p><a href="/novels">ALL</a></p>
              @foreach ($genres as $genre)
              <p class="text-decoration-none">

                  <a href="/novels?genre={{ $genre->name }}">{{ $genre->name }}</a>
              </p>
              @endforeach
            </div>
            </div>
        </div>

        <div class="">
            
    <!-- Navbar Start -->

    <nav class="ms-5 container navbar d-flex justify-content-start container align-content-center align-items-center">


      <div class="navbar-menu d-flex gap-4 mx-3">
        <p><a href="/"> Home</p></a>
        <p><a href="/novels"> Comic</p></a>
      </div>

      <div class="search-bar mx-5">
          <div class="position-relative">
            <form action="/novels" method="get" style="display: inline-block;">
              @if (request('genre'))
              <input type="hidden" name="genre" value="{{ request('genre') }}" >
          @endif 
          <input type="text" placeholder="Search your comic." name="search" class="search">
            </form>
          </div>
          <div class="img-search position-absolute"><img src="/asset/Vector.svg" alt=""></div>
        </div>
      @if (auth()->check())
      <a href="/profiles">
        <img src="/asset-home/login.svg" alt="">
      </a>
      @else
<div class="d-flex gap-2">
    <a href="/login">
        <button class="btn-navbar-1">Register</button>
    </a>
  <a href="/login">
      <button class="btn-navbar-2">Login</button>
  </a>
</div>
    
@endif
  </nav>
  
  <!-- Navbar End -->

  {{-- <div class="d-flex ms-5 filter-text">
    <p>Filter By:</p>
    <button class="btn-filter-1 ms-3">All</button>
    <button class="btn-filter-2 ms-3">Popular</button>
    <button class="btn-filter-3 ms-3">Latest Update</button>
    <button class="btn-filter-4 ms-3">Newest</button>
  </div>

   --}}
<!-- CARD COMIC SECTION -->
<section class="container  justify-content-between text-white read-comic ms-5 mt-5">

  <div class="row">
    @foreach ($novels as $novel)
    <div class="image-comic col-4 mb-3">
      <a href="/novels/{{ $novel->slug }}">
        <img src="{{ asset('storage/'. $novel->image) }}" alt="" class="">
      </a>
      <h1>{{ $novel->title }}</h1>
      <p>{{ $novel->genre->name }}</p>
    </div>
        
    @endforeach

</div>
</section>


<!-- END OF COMIC CARD SECTION -->
        </div>
    </section>
    


    

<footer class="container">
  <div class="">
    <div class="row">
      <div class="col-3">
        <h1 class="text-title">Komiweb</h1>
        <p class="text-description">Lorem ipsum dolor sit amet consectetur. Scelerisque vitae et vitae suspendisse vulputate vestibulum tortor nisl cursus. Egestas nulla in </p>
        <img class="mt-2" src="/assets/icon.svg" alt="">
      </div>
      <div class="col offset-1">
        <h1 class="text-title">Genre</h1>
        <div class="genre-p">
          <p>Mystery</p>
          <p>Super Hero</p>
          <p>Action</p>
          <p>Adventure</p>
        </div>
       
      </div>
      <div class="col">
        <h1 class="text-title">Resources</h1>
        <div class="resource-p">
          <p>Moderation Team</p>
          <p>Comic Content</p>
          <p>Comic book</p>
          <p>Security</p>
        </div>
      </div>

      <div class="col">
        <h1 class="text-title">Contact Information</h1>
        <div class="komiweb-contact">
          <div class="d-flex"><img class="me-3" src="/assets/email.svg" alt=""> komiwebsupport@gmail.com</div>
          <div class="d-flex"><img class="me-3" src="/assets/phone.svg" alt=""> +012 3456 7890</div>
          <div class="d-flex"><img class="me-3" src="/assets/location.svg" alt=""> Lorem Ipsum Dummy text </div>
        </div>

      </div>
    </div>
  </div>
</footer> 



<script src="/js/script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>