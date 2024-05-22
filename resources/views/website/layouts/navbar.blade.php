<section class="bg-primary py-2 d-none d-sm-block">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-auto d-none d-lg-block">
                <p class="my-2 fs--1"><i class="fas fa-map-marker-alt me-3"></i><span>{{ isset($informations) ? $informations->location : 'Gedung Zeta Sekolah Vokasi IPB'  }}</span></p>
            </div>
            <div class="col-auto ms-md-auto order-md-2 d-none d-sm-block">
                <ul class="list-unstyled list-inline my-2">
                    @if(isset($informations->social_media))
                        @foreach ($informations->social_media as $medsos)
                        @php
                            $link = isset($medsos) ? $medsos->link : 'https://www.ipb.ac.id';
                        @endphp

                        @if (filter_var($link, FILTER_VALIDATE_URL))
                            <li class="list-inline-item"><a href="{{ $link }}" target="_blank" class="text-decoration-none"><i class="{{ isset($medsos) ? $medsos->icon : 'fab  fa-facebook' }} text-900"></i></a></li>
                        @else
                            @if (preg_match('/^\+?\d+$/', $link))
                                <li class="list-inline-item"><a href="tel:{{ $link }}" class="text-decoration-none"><i class="{{ isset($medsos) ? $medsos->icon : 'fab  fa-facebook' }} text-900"></i></a></li>
                            @else
                                <li class="list-inline-item"><a href="https://www.ipb.ac.id" target="_blank" class="text-decoration-none"><i class="{{ isset($medsos) ? $medsos->icon : 'fab fa-facebook' }} text-900"></i></a></li>
                            @endif
                        @endif
                            @endforeach
                        @endif
                </ul>
            </div>
            <div class="col-auto">
                <p class="my-2 fs--1">
                    <i class="fas fa-envelope me-3"></i>
                    <a class="text-900" href="mailto:{{ isset($informations) ? $informations->email : 'ipb@info.com' }}">{{ isset($informations) ? $informations->email : 'ipb@info.com' }}</a>
                </p>
            </div>
        </div>
    </div>
    <!-- end of .container-->
</section>

<nav class="navbar navbar-expand-lg navbar-dark navbar-cs sticky-top py-2 d-block"
    data-navbar-on-scroll="data-navbar-on-scroll">
    <div class="container">
        <a class="navbar-brand d-flex gap-2 align-items-center" href="{{ route('home') }}">

            <img src="{{ isset($logos) ? $logos->logo_single : asset('template/base-website/assets/img/logo/logo-ipb-icas.png') }}" height="50" alt="{{ isset($logos) ? basename($logos->logo_single) : 'logo-ipb-icas.png' }}" />

            <div class="d-block">
                <p class="logo-desc-top m-0 fs--2 fw-bold d-flex align-items-start"
                    style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; color: #FFCA46; line-height: 100%; transform: translateY(3px)">The {{ isset($logos) ? basename($logos->sort) : '3' }}
                    <span style="font-size: 8px; line-height: 100%;">{{ isset($logos) ? basename($logos->ordional) : 'th' }}</span></p>
                    <img src="{{ isset($logos) ? $logos->logo_text : asset('template/base-website/assets/img/logo/name-ipb-icas.png') }}" height="30" width="90" style="transform: translateY(-2px); width: 100%; object-fit: cover;" alt="{{ isset($logos) ? basename($logos->logo_text) : 'ipb-icas.png' }}" />
                    <p class="logo-desc-top m-0 fw-bold" style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; color: {{isset($logos) ? $logos->color_one : '#63AE1C' }}; font-size:7px; line-height: 110%; transform: translateY(-3px)">
                        {{isset($logos) ? $logos->fragment_one : 'Internasional Conference' }} <br>
                        <span style="color: {{isset($logos) ? $logos->color_two : '#3DB6E1' }}; font-weight:700;">{{isset($logos) ? $logos->fragment_two : 'On Applied Sciences' }}</span>
                        <span style="color: #F6227F; font-weight:700;">{{ isset($logos) ? basename($logos->year) : '2024' }}</span>
                    </p>
            </div>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse border-top border-lg-0 mt-4 mt-lg-0" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto pt-2 pt-lg-0 font-base">
                <li class="nav-item px-2">
                    <a class="nav-link text-white fs--1 {{ request()->is('/') ? 'active-menus' : '' }}" aria-current="page" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item px-2">
                    <a class="nav-link text-white fs--1 {{ request()->is('conferences' , 'event-detail/*') ? 'active-menus' : '' }}" aria-current="page" href="{{ route('conference') }}">Conference</a>
                </li>
                <li class="nav-item px-2">
                    <a class="nav-link text-white fs--1 {{ request()->is('committees') ? 'active-menus' : '' }}" aria-current="page" href="{{ route('committees') }}">Committees</a>
                </li>
                <li class="nav-item px-2">
                    <a class="nav-link text-white fs--1 {{ request()->is('guidelines', 'guidelines-detail/*') ? 'active-menus' : '' }}" aria-current="page" href="{{ route('guidelines') }}">Guidelines</a>
                </li>
                <li class="nav-item px-2">
                    <a class="nav-link text-white fs--1 {{ request()->is('submissions') ? 'active-menus' : '' }}" aria-current="page" href="{{ route('submissions') }}">Submissions</a>
                </li>
                <li class="nav-item px-2">
                    <a class="nav-link text-white fs--1 {{ request()->is('download') ? 'active-menus' : '' }}" aria-current="page" href="{{ route('document') }}">Download</a>
                </li>
                <li class="nav-item px-2">
                    <a class="nav-link text-white fs--1 {{ request()->is('live-stream') ? 'active-menus' : '' }}" aria-current="page" href="{{ route('live') }}">Live</a>
                </li>
                <li class="nav-item px-2">
                    <a href="{{ route('admin.login') }}" target="_blank" class="fw-semi-bold btn btn-primary text-decoration-none text-white fs--1 {{ request()->is('admin*') ? 'active' : '' }}" aria-current="page">Admin</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
