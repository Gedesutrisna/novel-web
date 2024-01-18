<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Profile</title>
    <link rel="stylesheet" href="/css/style-edit.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  </head>
  <body class="bg-black">
    <!-- NAVBAR SECTION -->
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

    <!-- END OF NAVBAR SECTION -->

    <!-- ---------------------------->

    <!-- SIDEBAR PROFILE SECTION -->
    <section>
        <div class="container">
            <div class="row">
            <div class="col-3">
                <section class="container m-lg-5">
                    <div class="sidebar-profile text-white">
                        <h1>Hello {{ auth()->user()->name }}</h1>
                        <p>Welcome to your Account</p>
                    </div>
                
                    <div class="sidebar-btn text-white d-flex flex-column gap-4">
                        <a href="/profiles" class="text-white text-decoration-none">
                            <li><i class='bx bx-heart'></i>&nbsp;Favorite</li>
                        </a>
                        <a href="/profiles/edit" class="text-white text-decoration-none">
                            <li><i class='bx bx-user'></i>&nbsp;My info</li>
                        </a>
                        <a class="text-white text-decoration-none">
                            <li>
                                <form action="/logout" role="search" method="POST">
                                    @csrf
                                    <button type="submit" class="btn-none">
                                        
                                        <i class='bx bx-log-out' ></i>&nbsp; Sign out
                                    </button>
                                  </form>

                            </li>
                        </a>
                    </div>
                </section>
            </div>
            <!-- END OF SIDEBAR PROFILE SECTION -->

            <!-- ---------------------------->

            <!-- EDIT PROFIL SECTION -->
            <div class="col-9">
                <section class="favorite m-lg-5">
                    <div class="title-edit text-white my-3">
                        <h1>My info &nbsp;<i class='bx bx-edit'></i></h1>
                        <h2>Contact Details</h2>
                    </div>
                    <div class="edit-form text-white">
                        <form action="/profiles/update" method="POST">
                            @csrf
                            @method('put')
                            <div class="">
                                <p>Username</p>
                                  <input type="text" class="field-edit w-100" name="name" id="" placeholder="Username" value="{{ auth()->user()->name }}">    
                                  <div class="border-bottom"></div>
                                
                            </div>
                            <div class="">
                                <p class="pt-3">Email Address</p>
                                  <input type="email" class="field-edit w-100" name="email" id="" placeholder="Username@gmail.com" value="{{ auth()->user()->email }}">
                                  <div class="border-bottom"></div>
                                
                            </div>
                            <div class="">
                                <p class="pt-3">Password</p>
                                  <input type="password" class="field-edit w-100" name="password" id="" placeholder="Enter your password" value="">
                                  <div class="border-bottom"></div>
                                
                            </div>
                        </div>
                        <div class="btn-edit pt-3 float-end">
                            <button type="submit" class="btn btn-success pt">Save</button>
                        </div>
                    </form>
                </section>
                <!-- END OF FAVORITE SECTION -->
            </div>
        </div>
    </div>
</section>
            <!-- END OF EDIT PROFIL SECTION -->

    <!-- FOOTER SECTION -->
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
      <!-- END OF FOOTER SECTION -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>