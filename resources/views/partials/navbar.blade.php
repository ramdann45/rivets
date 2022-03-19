  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container-fluid container-xxl d-flex align-items-center row m-auto">

      <div id="logo" class="me-auto col">
        <a href="/" class="scrollto">
          <img src="../../img/logo-rivets.png" alt="logo-rivets" title="logo-rivets">
        </a>
      </div>

      {{-- navbar --}}
      <div id="navbar" class="col col-md-6">
        <nav class="nav" id="nav-menu">
          <div class="nav__content bd-grid m-auto">
              <a href="" class="nav__perfil">
                  <div class="nav__img">
                      <img src="../../img/logo-rivets.png" alt="logo-rivets" title="logo-rivets">
                  </div>
              </a>

              <div class="nav__menu">
                  <ul class="nav__list">
                      <li class="nav__item">
                        <a href="/" class="nav__link {{ $title == "Home" ? 'active' : '' }}"><i class="bi bi-house-door"></i> Home</a>
                      </li>

                      <li class="nav__item">
                        <a href="/shop" class="nav__link {{ Request::is('shop') ? 'active' : '' }}"><i class="bi bi-bag"></i> Shop
                        </a>
                      </li>

                      <li class="nav__item">
                        <a href="/contact" class="nav__link {{ Request::is('contact') ? 'active' : '' }}"><i class="bi bi-telephone-inbound"></i> Contact Us</a>
                      </li>
                  </ul>
              </div>
          </div>
          {{-- close bottom mobile nav --}}
          <i class="bi bi-x x-nav"></i>
          {{--  --}}
        </nav>
      </div>
      <!-- end navbar -->


      <div class="col d-flex p-0" id="icon">
        <button class="search scrollto">
          <i class="bi bi-search"></i>
        </button>
        <button class="cart scrollto">
          <i class="bi bi-cart"></i>
        </button>
        {{-- <button class="login scrollto">
          <i class="bi bi-person-circle"></i>
        </button> --}}
        <button class="x-mobile scrollto">
          <i class="bi bi-list mobile-nav-toggle header__toggle" id="header-toggle"></i>
        </button>
      </div>
  </div>
</header>
<!-- End Header -->


{{-- navbar --}}

  {{-- <nav id="navbar" class="navbar order-last order-lg-0 col">
          <ul class="m-auto">
            <li>
              <a class="nav-link scrollto {{ $title == "Home" ? 'active' : '' }}" href="/">Home</a>
            </li>
            <li>
              <a class="nav-link scrollto {{ Request::is('shop') ? 'active' : '' }}" href="/shop">Shop</a>
            </li>
            <li>
              <a class="nav-link scrollto {{ Request::is('contact') ? 'active' : '' }}" href="/contact">Contact Us</a>
            </li>
          </ul>
        </nav> --}}

  {{-- dropdown --}}
  {{-- <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
        </li> --}}