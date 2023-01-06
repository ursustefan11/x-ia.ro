<nav class="navbar has-shadow is-transparent is-fixed-top" role="navigation" aria-label="main navigation">
  <div class="container">
    <div class="navbar-brand">
      <a class="navbar-item" href="{{route('home')}}">
        <img src="{{asset('images/exponential-logo.jpg')}}" alt="Exponential">
      </a>

      @if(Request::segment(1) == "manage")
      <a class="navbar-item is-hidden-desktop" id="admin-slideout-button">
        <span class="icon"><i class="far fa-arrow-alt-circle-right"></i></span>
      </a>
      @endif

      <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navMenu">
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
      </a>
    </div>
    <!--end of .navbar-brand-->

    <div id="navMenu" class="navbar-menu">
      <div class="navbar-start">
        <a href="/" class="navbar-item">Tehno-monitor</a>
        <a href="/consultanta" class="navbar-item">Consultanță</a>
        <a href="/resurse" class="navbar-item">Resurse</a>
        <a href="/cinesunt" class="navbar-item">Cine sunt?</a>
      </div>

      <div class="navbar-end">
        <a href="/contact" class="navbar-item">Contact</a>
        @if (Auth::check())
        <div class="navbar-item has-dropdown is-hoverable">
          <a class="navbar-link">
            Hey {{Auth::user()->first_name}}
          </a>
          <div class="navbar-dropdown is-right">
            <a href="#" class="dropdown-item">
              Profile
            </a>

            <a href="#" class="dropdown-item">
              Notifications
            </a>

            <a href="{{route('manage.dashboard')}}" class="dropdown-item">
              Manage
            </a>
            <hr class="navbar-divider">
            <a href="{{route('logout')}}" class="dropdown-item">
              Logout
            </a>
          </div>
          <!--end of navbar-dropdown-->
        </div>
        <!--end of navbar-item.has-dropdown-->
        @endif
      </div>
      <!--end of navbar-end-->
    </div>
    <!--end of navbar-menu-->
  </div>
  <!--end of .container-->
</nav>