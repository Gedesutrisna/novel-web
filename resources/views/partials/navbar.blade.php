
<nav class="w-full h-full pb-5 flex justify-between items-center pt-[44px] z-[100]">
  <div class="container mx-auto flex justify-between items-center">
    <div class="flex items-center">
      <h1 class="font-Poppins text-[#09B451] text-[32px] font-semibold">
        <a href="/">
        Komiweb
        </a>
      </h1>
      <!-- Navbar Links (Hidden on small screens) -->
      <ul class="hidden lg:flex ms-[51px] space-x-[32px] font-Poppins text-[18px] text-[#9F9292] font-semibold">
        <li><a href="/">Home</li></a>
        <li><a href="/">Comic</li></a>
        <li><a href="/">Genre List</li></a>
        <li><a href="/">Contact Us</li></a>
      </ul>

      
      <form action="/novels" method="get" style="display: inline-block;">
        @if (request('genre'))
        <input type="hidden" name="genre" value="{{ request('genre') }}" >
    @endif 
    <div class="hidden w-[240px] h-[50px] bg-[#343434] xl:flex items-center mx-[30px] rounded-[10px]">
      <img src="/asset-home/search-img.svg" class="absolute ms-5">
      <input class="ms-12 outline-none outline text-white bg-transparent text-base font-normal " type="text" name="search" id="" placeholder="Search Your Comic">
    </div>
      </form>
    </div>


    @if (auth()->check())
    <a href="/profiles">
      <div class="hidden lg:flex items-center">
        <img class="ms-[51px]" src="/asset-home/profile-page.svg" alt="">
      </div>
    </a>
    @else
    <div class="lg:flex gap-2">
        <a href="/login">
            <button class="btn-navbar-1">Register</button>
        </a>
      <a href="/login">
          <button class="btn-navbar-2">Login</button>
      </a>
    </div>
        
    @endif
    

   


    <!-- Burger icon for small screens -->
    <div class="lg:hidden">
      <button id="burger-icon" class="text-white focus:outline-none me-[20px]">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
        </svg>
      </button>

    </div>

    
<!-- Sidebar (Hidden by default) -->
<div id="sidebar" class="lg:hidden fixed inset-0 bg-black bg-cover  z-50 hidden">
  <div class="flex justify-end p-4">
    <button id="close-icon" class="text-white focus:outline-none">
      <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
      </svg>
    </button>
  </div>

  <!-- Sidebar Links -->
  <div class="flex flex-col items-center space-y-[70px]">
    <a href="#" class="text-white text-[40px] font-Poppins font-bold" onclick="hideSidebar()">Home</a>
    <a href="#" class="text-[#C4C4C4] font-Poppins text-[40px] font-medium hover:text-white" onclick="hideSidebar()">Services</a>
    <a href="#" class="text-[#C4C4C4] font-Poppins text-[40px] font-medium hover:text-white" onclick="hideSidebar()">Find a Team</a>
    <a href="#" class="text-[#C4C4C4] font-Poppins text-[40px] font-medium hover:text-white" onclick="hideSidebar()">About Us</a>
    <a href="#" class="text-[#C4C4C4] font-Poppins text-[40px] font-medium hover:text-white" onclick="hideSidebar()">Articles</a>
    <a href="#" class="text-[#C4CKO4C4] font-Poppins text-[40px] font-medium hover:text-white" onclick="hideSidebar()">Portfolio</a>
    <a href="#" class="text-[#C4C4C4] font-Poppins text-[40px] font-medium hover:text-white" onclick="hideSidebar()">Contact Us</a>
  </div>
</div>

  </div>
</nav>

<style>
  .btn-navbar-1{
   padding: 12px 24px;
   border-radius: 5px;
   background: #FFF;
   color: #09B451;
   border: none;
   font-family: Poppins;
   font-size: 16px;
   font-style: normal;
   font-weight: 600;
   line-height: 20px; /* 125% */
}


.btn-navbar-2{
   padding: 12px 24px;
   border-radius: 5px;
   background: #09B451;
   border: none;
   color: #FFF;
   font-family: Poppins;
   font-size: 16px;
   font-style: normal;
   font-weight: 600;
   line-height: 20px;
}
</style>