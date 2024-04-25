<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
      <div class="sidebar-brand">
        <a href="index.html">scoop and skoops</a>
      </div>
      <div class="sidebar-brand sidebar-brand-sm">
        <a href="index.html">S&S</a>
      </div>
      <ul class="sidebar-menu">
        <li class="menu-header">Dashboard</li>
        <li class="dropdown">
            <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" href="/dashboard"><i
                    class="fas fa-fire"></i><span>Beranda</span></a>
        </li>

        <li class="dropdown">
            <a class="nav-link {{Request::is('photo-data') ? 'active' : ''}}" href="/dashboard/data-photo"><i class="fas fa-th-large"></i> <span>Data Foto</span></a>
        </li>
        <li class="dropdown">
            <a class="nav-link {{Request::is('album') ? 'active' : ''}}" href="/dashboard/data-album"><i class="fas fa-columns"></i> <span>Album</span></a>
        </li>
    </ul>

  </div>