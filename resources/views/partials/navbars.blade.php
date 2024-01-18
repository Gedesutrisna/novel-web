<nav class="navbar d-flex justify-content-between container align-content-center align-items-center">

    <div class="wrapper">
      <a href="/" class="text-decoration-none">
        <p class="title-web">Komiweb</p>
      </a>
    </div>

    <div class="navbar-menu d-flex">
      <p><a href="/"> Home</p></a>
      <p><a href="/novels"> Comic</p></a>
      <p><a href="/"> Genre List</p></a>
      <p><a href="/"> Contact Us</p></a>
    </div>

    <div class="search-bar">
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
  <img src="/asset-home/profile-page.svg" alt="">
</a>
</form>
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
<style>
  .btn-none{
    background: none;
    border: none;
}
</style>
