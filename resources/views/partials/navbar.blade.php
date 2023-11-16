<nav class="navbar d-flex justify-content-between container align-content-center align-items-center">

    <div class="wrapper">
        <p class="title-web">Komiweb</p>
    </div>

    <div class="navbar-menu d-flex">
      <p><a href="/"> Home</p></a>
      <p><a href="/novels"> Comic</p></a>
      <p><a href="/"> Genre List</p></a>
      <p><a href="/"> Popular</p></a>
      <p><a href="/"> Contact Us</p></a>
    </div>

    <div class="search-bar">
      <div class="position-relative">
        <input type="text" placeholder="Search your comic." class="search">
      </div>
      <div class="img-search position-absolute"><img src="/asset/Vector.svg" alt=""></div>
    </div>
@if (auth()->check())
<form action="/logout" role="search" method="POST">
  @csrf
  <button type="submit" class="btn-none">
    <img src="/asset-home/login.svg" alt="">

  </button>
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