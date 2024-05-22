<div class="navbar-bg"></div>
<nav class="navbar navbar-expand-lg main-navbar">
    <form class="form-inline mr-auto">
        <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
        </ul>
        <div class="search-element">
            <h6 class="text-white mb-0">Welcome {{ Str::limit(auth()->user()->name, 11, '...') }} !</h6>
        </div>
    </form>
    <ul class="navbar-nav navbar-right">
        <li class="dropdown"><a href="#" data-toggle="dropdown"
                class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                <img src="{{ !empty($cms_dashboard) && !empty($cms_dashboard->logo_single) ? (Str::startsWith($cms_dashboard->logo_single, ['http://', 'https://']) ? $cms_dashboard->logo_single : asset($cms_dashboard->logo_single)) : asset('template/base-admin/dist/assets/figma-assets/logo-profil.png') }}" class="rounded-circle mr-1 bg-light" alt="logo-profil.png">
                <div class="d-sm-none d-lg-inline-block">Hi, {{ Str::limit(Auth::user()->name, 11, '...') }}</div>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
                <a href="{{ route('admin.logout') }}" class="dropdown-item has-icon text-danger">
                    <i class="fas fa-sign-out-alt"></i> Logout
                </a>
            </div>
        </li>
    </ul>
</nav>
