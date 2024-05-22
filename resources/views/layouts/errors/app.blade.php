<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>ERROR - @yield('title')</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="{{ asset('template/base-admin/dist/assets/modules/bootstrap/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{ asset('template/base-admin/dist/assets/modules/fontawesome/css/all.min.css')}}">

  <!-- CSS Libraries -->

  <!-- Template CSS -->
  <link rel="stylesheet" href="{{ asset('template/base-admin/dist/assets/css/style.css')}}">
  <link rel="stylesheet" href="{{ asset('template/base-admin/dist/assets/css/components.css')}}">
<!-- Start GA -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-94034622-3');
</script>
<!-- /END GA --></head>

<body>
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        @yield('content')
        <div class="simple-footer mt-5" id="footer-year">
            Copyright &copy; Exenesia & Team <span id="current-year"></span>
        </div>
      </div>
    </section>
  </div>

  <!-- General JS Scripts -->
  <script src="{{ asset('template/base-admin/dist/assets/modules/jquery.min.js')}}"></script>
  <script src="{{ asset('template/base-admin/dist/assets/modules/popper.js')}}"></script>
  <script src="{{ asset('template/base-admin/dist/assets/modules/tooltip.js')}}"></script>
  <script src="{{ asset('template/base-admin/dist/assets/modules/bootstrap/js/bootstrap.min.js')}}"></script>
  <script src="{{ asset('template/base-admin/dist/assets/modules/nicescroll/jquery.nicescroll.min.js')}}"></script>
  <script src="{{ asset('template/base-admin/dist/assets/modules/moment.min.js')}}"></script>
  <script src="{{ asset('template/base-admin/assets/js/stisla.js')}}"></script>
    <script>
        var currentYearSpan = document.getElementById("current-year");
        var currentYear = new Date().getFullYear();
        currentYearSpan.textContent = currentYear;
    </script>
  <!-- JS Libraies -->

  <!-- Page Specific JS File -->

  <!-- Template JS File -->
  <script src="{{ asset('template/base-admin/assets/js/scripts.js')}}"></script>
  <script src="{{ asset('template/base-admin/assets/js/custom.js')}}"></script>
</body>
</html>
