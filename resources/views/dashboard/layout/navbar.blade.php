<div class="main-wrapper main-wrapper-1">
  <div class="navbar-bg"></div>
  <nav class="navbar navbar-expand-lg main-navbar">
    <form class="form-inline mr-auto">
      <ul class="navbar-nav mr-3">
        <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
      </ul>
    </form>
      <ul class="navbar-nav mr-3">
        <li><a href="/" class="nav-link nav-link-lg">Gallery</a></li>
      </ul>
    <ul class="navbar-nav navbar-right">
      <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
        <div class="d-sm-none d-lg-inline-block">Hai, {{ Auth::user()->namaLengkap }} </div></a>
        <div class="dropdown-menu dropdown-menu-right">
          <div class="dropdown-title"></div>
          <a href="/profile" class="dropdown-item has-icon">
            <i class="far fa-user"></i>Profile
          </a>
          <div class="dropdown-divider"></div>

          <form action="/logout" method="post">
            @csrf
          <button class="bg-white border-0"><a class="dropdown-item has-icon">
              <i class="bi bi-box-arrow-right"></i>Logout
            </a></button>  
          </form>
        </div>
      </li>
    </ul>
  </nav>
</div>
</div>