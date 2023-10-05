            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block sidebar collapse position-fixed nav-custom d-flex justify-content-center align-items-center">
                <div class="py-3 px-2 sidebar-sticky sidebar custom d-flex flex-column mx-auto">
                    <a href="/" class="text-decoration-none mx-auto">
                        <h1 class="name mt-2 mb-5"><img src="/assets/icon.svg" alt="">Store</h1>
                    </a>
                <ul class="nav flex-column gap-3">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('dashboard') ? 'active' : '' }}" href="/dashboard">
                          <img class="me-2" src="{{ request()->is('dashboard') ? '/assets/assets/home-i-active.svg' : '/assets/assets/home-i.svg' }}" alt="">
                          Dashboard
                      </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('dashboard/novel') ? 'active' : '' }}" href="/novel">
                          <img class="me-2" src="{{ request()->is('dashboard/novel') ? '/assets/assets/home-i-active.svg' : '/assets/assets/home-i.svg' }}" alt="">
                          Novel
                      </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/product.html">
                            <img class="me-2" src="/assets/product-i.svg" alt="">
                            Product
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/promo.html">
                            <img class="me-2" src="/assets/promo-i.svg" alt="">
                            Promo
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/component.html">
                            <img class="me-2" src="/assets/component-i.svg" alt="">
                            Component
                        </a>
                    </li>
                </ul>
                <form class="mt-auto mx-auto" action="/logout" method="POST">
                    @csrf
                    <button class="mt-auto mx-auto border-0 bttn" type="submit">
                        <h1 class="nav-link"><img src="/assets/assets/logout-i.svg" alt=""> Log Out</h1>
                    </button>  
                </form>
                </div>
            </nav>