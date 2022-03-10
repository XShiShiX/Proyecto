
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <title>Dashmix - Bootstrap 5 Admin Template &amp; UI Framework</title>

    <meta name="description" content="Dashmix - Bootstrap 5 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
    <meta name="author" content="pixelcave">
    <meta name="robots" content="noindex, nofollow">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Icons -->
    <link rel="shortcut icon" href="{{ asset('media/favicons/favicon.png') }}">
    <link rel="icon" sizes="192x192" type="image/png" href="{{ asset('media/favicons/favicon-192x192.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('media/favicons/apple-touch-icon-180x180.png') }}">

    <!-- Fonts and Styles -->
    @yield('css_before')
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap">
    <link rel="stylesheet" id="css-main" href="{{ mix('css/dashmix.css') }}">

    <!-- You can include a specific file from public/css/themes/ folder to alter the default color theme of the template. eg: -->
    <!-- <link rel="stylesheet" id="css-theme" href="{{ mix('css/themes/xwork.css') }}"> -->
    @yield('css_after')

    <!-- Scripts -->
    <script>
      window.Laravel = {!! json_encode(['csrfToken' => csrf_token()]) !!};
    </script>
    <title>@yield('tittle') - Laravel App</title>
</head>
<body class="bg-gray-100 text-gray-800">

    <div class="block-content block-content-sm block-content-full bg-body">
        <span class="text-uppercase fs-sm fw-bold">Mi Aplicacion</span>
      </div>
      <div class="block-content block-content-full">
        <div class="row g-sm text-center">
          <div class="col-6 mb-1">
            <a href= "(( route('login.index') ))" class="d-block py-3 bg-body-dark fw-semibold text-dark" data-toggle="layout" data-action="sidebar_style_dark">Login</a>
          </div>
          <div class="col-6 mb-1">
            <a class="d-block py-3 bg-body-dark fw-semibold text-dark" data-toggle="layout" data-action="sidebar_style_light" href="(( route('register.index')))">Register</a>
          </div>
        </div>
      </div>

@yield('content')

</body>
</html>


<!--<ul class="">
    <li>
  <a href="(( route('login.index')))">Log In</a>
    </li>
    <li>
  <a href="(( route('register.index')))">register</a>
    </li>
</ul>
