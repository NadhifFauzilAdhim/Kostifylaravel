<aside class="left-sidebar">
    <div>
      <div class="brand-logo d-flex align-items-center justify-content-center">
      
          <img src="{{ asset('assets/img/Kostify.png') }}" width="130" alt="" class="mt-4" />
       
        <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer mt-4" id="sidebarCollapse">
          <i class="bi bi-x-lg fs-6"></i>
        </div>
      </div>
      <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
        <ul id="sidebarnav">
          <li class="nav-small-cap">
            
            <span class="hide-menu">Home</span>
          </li>
          <li class="sidebar-item">
            <a class="sidebar-link" href="/" aria-expanded="false">
              <span>
                <i class="bi bi-house"></i>
              </span>
              <span class="hide-menu">Home</span>
            </a>
          </li>
          <li class="sidebar-item">
            <a class="sidebar-link" href="/dashboard" aria-expanded="false">
              <span>
                <i class="bi bi-bookmark-check"></i>
              </span>
              <span class="hide-menu">Dashboard</span>
            </a>
          </li>
          @can('owner')
          <li class="nav-small-cap">
            <span class="hide-menu">Owner</span>
          </li>
          <li class="sidebar-item">
            <a class="sidebar-link" href="/dashboard/overview" aria-expanded="false">
              <span>
                <i class="bi bi-clipboard-data"></i>
              </span>
              <span class="hide-menu">Overview</span>
            </a>
          </li>
          <li class="sidebar-item">
            <a class="sidebar-link" href="/dashboard/posts" aria-expanded="false">
              <span>
                <i class="bi bi-postcard"></i>
              </span>
              <span class="hide-menu">My Post</span>
            </a>
          </li>
          <li class="sidebar-item">
            <a class="sidebar-link" href="/" aria-expanded="false">
              <span>
                <i class="bi bi-cash-stack"></i>
              </span>
              <span class="hide-menu">Transactions</span>
            </a>
          </li>
          @endcan
          <li class="nav-small-cap">
            <span class="hide-menu">Resident</span>
          </li>
          <li class="sidebar-item">
            <a class="sidebar-link" href="/" aria-expanded="false">
              <span>
                <i class="bi bi-cash-stack"></i>
              </span>
              <span class="hide-menu">Payment</span>
            </a>
          </li>
        </ul>
      </nav>
    </div>
  </aside>