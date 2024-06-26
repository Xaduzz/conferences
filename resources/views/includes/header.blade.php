<header class="p-3 text-bg-dark">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        

        <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
          <input type="search" class="form-control form-control-dark text-bg-white" placeholder="Search..." aria-label="Search">
        </form>

        @guest
        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
          <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
        </a>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="{{route('contact')}}" class="nav-link px-2 text-white">Contact</a></li>
          <li><a href="{{route('conference-data')}}" class="nav-link px-2 text-white">All conferences</a></li>
        </ul>
        <div class="text-end">
          <a href="{{route('login-form')}}">
            <button type="button" class="btn btn-outline-light me-2">Login</button>
          </a>
        </div>
        @else
        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
          <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
        </a>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="{{route('mainpage')}}" class="nav-link px-2 text-white">AdminPanel</a></li>
          <li><a href="{{route('contact')}}" class="nav-link px-2 text-white">Contact</a></li>
          <li><a href="{{route('contact-data')}}" class="nav-link px-2 text-white">All messages</a></li>
          <li><a href="{{route('conference-data')}}" class="nav-link px-2 text-white">All conferences</a></li>
          <!--<li><a href="#" class="nav-link px-2 text-white">About</a></li>-->
        </ul>
        <div class="text-end">
          <a href="{{route('logout')}}">
            <button type="button" class="btn btn-outline-light me-2">Logout</button>
          </a>
        </div>
        @endguest

      </div>
    </div>
  </header>