<nav class="navbar navbar-expand-lg">
    <div class="container">
      <a class="navbar-brand" href="index.html">
        <img src="{{ asset('assets/img/Kostifyop.png') }}" alt="" width="100px" />
      </a>

      <div class="d-lg-none ms-auto me-4">
       
        <a href="/login" class="navbar-icon bi-person smoothscroll"></a>
      </div>

      <button
        class="navbar-toggler"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navbarNav"
        aria-controls="navbarNav"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-lg-5 me-lg-auto">
          <li class="nav-item">
            <a class="nav-link click-scroll" href="/">Home</a>
          </li>

          <li class="nav-item">
            <a class="nav-link click-scroll" href="#section_2">Cari</a>
          </li>

          <li class="nav-item">
            <a class="nav-link click-scroll" href="#section_4">FAQs</a>
          </li>
          

          <li class="nav-item dropdown">
            <a
              class="nav-link dropdown-toggle"
              href="#"
              id="navbarLightDropdownMenuLink"
              role="button"
              data-bs-toggle="dropdown"
              aria-expanded="false"
              >Pages</a
            >

            <ul
              class="dropdown-menu dropdown-menu-light"
              aria-labelledby="navbarLightDropdownMenuLink"
            >
              <li>
                <a class="dropdown-item" href="topics-listing.html"
                  >Topics Listing</a
                >
              </li>

              <li>
                <a class="dropdown-item" href="contact.html"
                  >Contact Form</a
                >
              </li>
            </ul>
          </li>
        </ul>
      
        <ul class="navbar-nav">
          @auth
          
           
              <li class="nav-item dropdown">
                <a
                  class="nav-link dropdown-toggle"
                  href="#"
                  id="navbarLightDropdownMenuLink"
                  role="button"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                  > Haiii {{ auth()->user()->username }}</a
                >
    
                <ul
                  class="dropdown-menu dropdown-menu-light"
                  aria-labelledby="navbarLightDropdownMenuLink"
                >
                  <li>
                    <a class="dropdown-item" href="/dashboard"
                      >dashboard</a
                    >
                  </li>
    
                  <li>
                    <form action="/logout" method="POST">
                      @csrf
                      <button type="submit" class="dropdown-item">Logout</button>
                    </form>
                  
                  </li>
                </ul>
               
                <img src="https://img.icons8.com/color/48/user-male-circle--v1.png" class="navbar-icon bi-person smoothscroll" alt="">
              </li>
              

          @else
          <li class="nav-item">
            <li class="nav-item">
              <a class="nav-link click-scroll" href="/login">Login</a>
              <a href="#" class="navbar-icon bi-person smoothscroll"></a>
            </li>
          </li>

          @endauth
          
        </ul>
       
      </div>
    </div>
  </nav>