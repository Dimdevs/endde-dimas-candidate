<!DOCTYPE html>
<html lang="en">

<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- ========== Page Title ========== -->
    <title>ICAS 2024 - Admin - Login</title>

    <!--    Favicons-->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ !empty($cms_dashboard) && !empty($cms_dashboard->logo_single) ? (Str::startsWith($cms_dashboard->logo_single, ['http://', 'https://']) ? $cms_dashboard->logo_single : asset($cms_dashboard->logo_single)) : asset('template/base-website/assets/img/favicons/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ !empty($cms_dashboard) && !empty($cms_dashboard->logo_single) ? (Str::startsWith($cms_dashboard->logo_single, ['http://', 'https://']) ? $cms_dashboard->logo_single : asset($cms_dashboard->logo_single)) : asset('template/base-website/assets/img/favicons/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ !empty($cms_dashboard) && !empty($cms_dashboard->logo_single) ? (Str::startsWith($cms_dashboard->logo_single, ['http://', 'https://']) ? $cms_dashboard->logo_single : asset($cms_dashboard->logo_single)) : asset('template/base-website/assets/img/favicons/favicon-16x16.png') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ !empty($cms_dashboard) && !empty($cms_dashboard->logo_single) ? (Str::startsWith($cms_dashboard->logo_single, ['http://', 'https://']) ? $cms_dashboard->logo_single : asset($cms_dashboard->logo_single)) : asset('template/base-website/assets/img/favicons/favicon.ico') }}">
    <link rel="manifest" href="{{ !empty($cms_dashboard) && !empty($cms_dashboard->logo_single) ? (Str::startsWith($cms_dashboard->logo_single, ['http://', 'https://']) ? $cms_dashboard->logo_single : asset($cms_dashboard->logo_single)) : asset('template/base-website/assets/img/favicons/manifest.json') }}">
    <meta name="msapplication-TileImage" content="{{ !empty($cms_dashboard) && !empty($cms_dashboard->logo_single) ? (Str::startsWith($cms_dashboard->logo_single, ['http://', 'https://']) ? $cms_dashboard->logo_single : asset($cms_dashboard->logo_single)) : asset('template/base-website/assets/img/favicons/mstile-150x150.png') }}">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('template/base-website/assets/vendor/aos/aos.css') }}" rel="stylesheet" />
    <link href="{{ asset('template/base-website/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('template/base-website/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}"rel="stylesheet" />
    <link href="{{ asset('template/base-website/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('template/base-website/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('template/base-website/assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet" />
    <link href="{{ asset('template/base-website/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet" />

    <!-- Template Main CSS File -->
    <link href="{{ asset('template/base-website/assets/css/auth.css') }}" rel="stylesheet" />
    <link href="{{ asset('template/base-website/assets/css/auth-responsive.css') }}" rel="stylesheet" />
    {{-- <link href="{{ asset('template/base-website/assets/css/style.css') }}" rel="stylesheet" /> --}}

    {{-- <link rel="stylesheet" href="{{ asset('vendor/sweetalert2/sweetalert2.min.css') }}"> --}}
</head>

<body class="auth-body" oncontextmenu="return false">
    @include('sweetalert::alert')

    <!-- Main Content -->
    <div class="container-fluid">
        <div class="row no-gutter">

            <!-- The content half -->
            <div class="col-md-6" style="background-color: #fff;">
                <div class="auth-content d-flex align-items-center py-5">

                    <!-- Demo content-->
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-10 col-xl-9 mx-auto">
                                <div class="auth-title text-center">
                                    <img src="{{ !empty($cms_dashboard) && !empty($cms_dashboard->logo_text) ? (Str::startsWith($cms_dashboard->logo_text, ['http://', 'https://']) ? $cms_dashboard->logo_text : asset($cms_dashboard->logo_text)) : asset('template/base-admin/dist/assets/figma-assets/LOGO.png') }}" width="200" class="rounded p-3" alt="">
                                    <h3>{{ isset($cms_dashboard) ? $cms_dashboard->title_auth : 'Welcome' }}</h3>
                                    <p>{{ isset($cms_dashboard) ? $cms_dashboard->description_auth : 'Please log in to ICAS Internal Conference' }}</p>
                                </div>
                                <form class="auth-form" id="xss-validation" action="{{ route('admin.login.store') }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group mb-3">
                                        <label class="form-label" for="email">Email</label>
                                        <input type="email" name="email" id="email" class="form-control"
                                            placeholder="Enter your email" />
                                        @error('email')
                                        <p class="text-danger fw-bold mt-1">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="form-group mb-3">
                                        <label class="form-label" for="password">Password</label>
                                        <div style="position: relative;">
                                            <i onclick="togglePassword('password', 'eye-icon-password')"
                                                id="eye-icon-password" class="bi bi-eye-fill"
                                                style="color: #9D9D9D; position: absolute; top: 54%; transform: translateY(-50%); right: 20px; cursor: pointer;"></i>
                                            <input type="password" name="password" id="password" class="form-control"
                                                name="password" placeholder="Enter your password" />
                                        </div>
                                        @error('password')
                                        <p class="text-danger fw-bold mt-1">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div class="form-group mb-4">
                                        {!! NoCaptcha::display(['data-theme' => 'dark']) !!}
                                        {!! NoCaptcha::renderJs() !!}
                                        @error('g-recaptcha-response')
                                            <p class="text-danger fw-bold mt-1">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div class="text-center">
                                        <button type="submit" class="btn btn-block mb-3 confirm-btn">Login</button>
                                        {{-- <a class="btn w-100 text-center back-btn" href="{{ route('home') }}">Back</a> --}}
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div><!-- End -->

                </div>
            </div><!-- End -->

            <!-- The image half -->
            <div class="col-md-6 d-none d-md-flex bg-image" style="background-image: url('{{ isset($cms_dashboard) && !empty($cms_dashboard->banner_auth) ? (Str::startsWith($cms_dashboard->banner_auth, ['http://', 'https://']) ? $cms_dashboard->banner_auth : asset($cms_dashboard->banner_auth)) : asset('template/base-admin/dist/assets/figma-assets/content.jpg')}}')"></div>

        </div>
    </div>

    <!-- General JS Scripts -->
    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('template/base-website/assets/vendor/aos/aos.js') }}"></script>
    {{-- <script src="{{ asset('vendor/sweetalert2/sweetalert2.min.js') }}"></script> --}}
    <script src="{{ asset('template/base-website/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('template/base-website/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('template/base-website/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('template/base-website/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('template/base-website/assets/vendor/waypoints/noframework.waypoints.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('template/base-website/assets/js/main.js') }}"></script>

    <script>
        document.getElementById('xss-validation').addEventListener('submit', function(event) {
            var inputs = this.querySelectorAll('input, textarea');
            var isValid = true;

            for (var i = 0; i < inputs.length; i++) {
                if (inputs[i].tagName.toLowerCase() === 'textarea' && inputs[i].classList.contains('summernote')) {
                    continue;
                }

                if (containsScriptOrHtml(inputs[i].value)) {
                    Swal.fire({
                        icon: 'warning',
                        title: 'Oops...',
                        text: '(hacker detection) Please enter valid input',
                    });
                    isValid = false;
                    event.preventDefault();
                    break;
                }
            }

            function containsScriptOrHtml(value) {
                var scriptOrHtmlPattern = /<\s*[^>]*?>/i;
                return scriptOrHtmlPattern.test(value);
            }

            return isValid;
        });
    </script>

    <script>
        // Eye for password
        function togglePassword(inputId, eyeIconId) {
            const passwordInput = document.getElementById(inputId);
            const eyeIcon = document.getElementById(eyeIconId);
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                eyeIcon.classList.remove('bi-eye-fill');
                eyeIcon.classList.add('bi-eye-slash-fill');
            } else {
                passwordInput.type = 'password';
                eyeIcon.classList.remove('bi-eye-slash-fill');
                eyeIcon.classList.add('bi-eye-fill');
            }
        }
        // End Eye Function
        </script>

</body>

</html>
