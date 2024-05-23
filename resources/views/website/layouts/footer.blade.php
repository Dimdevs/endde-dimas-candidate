<!-- footer begin ============================-->

{{-- INITIAL VARIABEL --}}
<section class="bg-secondary">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-lg-5 mb-4 order-0 order-sm-0">
                <a class="d-flex gap-3 align-items-center text-decoration-none" href="{{ route('home') }}">

                    <img class="my-auto" src="{{ isset($logos) ? $logos->logo_single : asset('template/base-website/assets/img/logo/logo-ipb-icas.png') }}" class="mb-5" height="80" alt="logo-ipb-icas.png" />
                    <div class="d-block">
                        <p class="logo-desc-top m-0 fs-1 fw-bold d-flex align-items-start" style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; color: #FFCA46; line-height: 100%;"> The {{ isset($logos) ? $logos->sort : '3' }}<span style="font-size: 12px; line-height: 100%;">{{ isset($logos) ? $logos->ordional : 'rd' }}</span></p>

                        <img src="{{ isset($logos) ? $logos->logo_text : asset('template/base-website/assets/img/logo/name-ipb-icas.png') }}" height="58" width="171" alt="logo" style="width: 100%; object-fit: cover;" />

                        <p class="logo-desc-top m-0 fw-bold" style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; color: {{isset($logos) ? $logos->color_one : '#63AE1C' }}; font-size: small; line-height: 110%;">
                            {{isset($logos) ? $logos->fragment_one : 'Internasional Conference' }} <br>
                            <span style="color: {{ isset($logos) ? $logos->color_two : '#3DB6E1' }}; font-weight:700;">{{isset($logos) ? $logos->fragment_two : 'On Applied Sciences' }}</span>
                            <span style="color: #F6227F; font-weight:700;">2024</span>
                        </p>
                    </div>
                </a>
                <div class="d-flex">
                    <p class="text-light my-4">
                        <i class="fas fa-map-marker-alt me-3"></i>
                    </p>
                    <p class="text-light my-4">
                        <span class="text-light">{!! isset($Informations) ? $Informations->location : 'Gedung Zeta Sekolah Vokasi IPB &nbsp;</span><br />West Java, Indonesia' !!}
                    </p>
                </div>
                <p class="text-light">
                    <i class="fas fa-envelope me-3"> </i>
                    <a class="text-light" href="mailto:{!! isset($informations) ? $informations->email : 'info@ipb.com' !!}">{!! isset($informations) ? $informations->email : 'info@ipb.com ' !!}</a>
                </p>
                <p class="text-light">
                    <i class="fas fa-phone-alt me-3"></i>
                    @php
$phone = isset($informations) ? $informations->phone : '+6289516116280';
                    @endphp
                    @if (Str::startsWith($phone, '+62'))
                        <a class="text-light" href="tel:{{ $phone }}"> {{ $phone }} (Support)</a>
                    @else
                        <a class="text-light" href="tel:#">{{ $phone }} (Support)</a>
                    @endif
                </p>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                <h5 class="text-start fw-bold mb-4 text-light font-sans-serif">Navigation</h5>
                <ul class="list-unstyled mb-md-4 mb-lg-0">
                    <li class="lh-lg"><a class="text-200" href="{{ route('home') }}">Home</a></li>
                    <li class="lh-lg"><a class="text-200" href="{{ route('conference') }}">Conference</a></li>
                    <li class="lh-lg"><a class="text-200" href="{{ route('committees') }}">Committees</a></li>
                    <li class="lh-lg"><a class="text-200" href="{{ route('guidelines') }}">Guidlines</a></li>
                    <li class="lh-lg"><a class="text-200" href="{{ route('submissions') }}">Submissions</a></li>
                    <li class="lh-lg"><a class="text-200" href="{{ route('document') }}">Download</a></li>
                    <li class="lh-lg"><a class="text-200" href="{{ route('live') }}">Live </a></li>
                </ul>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 mb-5 pb-3">
                <h5 class="text-start fw-bold mb-4 text-light font-sans-serif">Cooperation</h5>
                <div class="row">
                    @if(isset($cooperations))
                        @foreach ($cooperations as $coop)
                            @if(isset($coop->image) && Str::startsWith($coop->image, ['http://', 'https://']))
                            <div class="col-6 text-center text-lg-start mb-3">
                            <a href="{{ $coop->link }}" target="_blank">
                                <img src="{{ $coop->image }}" alt="{{ basename($coop->image) }}" style="max-width: 100px; object-fit: cover">
                                </a>
                            </div>
                            @else
                            <div class="col-6 text-center text-lg-start mb-3">
                                <a href="{{ $coop->link }}" target="_blank">
                                    <img src="{{ asset($coop->image) }}" alt="{{ basename($coop->image) }}" style="max-width: 100px; object-fit: cover">
                                </a>
                            </div>
                            @endif
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
    <!-- end of .container-->
</section>
<!-- footer close ============================-->

<section class="py-0" style="margin-top: -5.8rem;">
    <div class="container bg-primary">
        <div class="row justify-content-md-between justify-content-evenly py-4">
            <div class="col-12 col-sm-8 col-md-6 col-lg-auto text-center text-md-start">
                <p class="fs--1 my-2 fw-bold">All rights Reserved &copy; ICAS, 2024</p>
            </div>
            <div class="col-12 col-sm-8 col-md-6">
                <p class="fs--1 my-2 text-center text-md-end"> Made with&nbsp;
                    <svg class="bi bi-suit-heart-fill" xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                        fill="#EB6453" viewBox="0 0 16 16">
                        <path
                            d="M4 1c2.21 0 4 1.755 4 3.92C8 2.755 9.79 1 12 1s4 1.755 4 3.92c0 3.263-3.234 4.414-7.608 9.608a.513.513 0 0 1-.784 0C3.234 9.334 0 8.183 0 4.92 0 2.755 1.79 1 4 1z">
                        </path>
                    </svg>&nbsp;by&nbsp;<a class="fw-bold text-900" href="https://dimdevs.github.io/portfolio/"
                        target="_blank">Dimdevs & Dimas Maulana Person</a>
                </p>
            </div>
        </div>
    </div>
</section>
