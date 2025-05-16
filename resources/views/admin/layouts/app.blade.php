<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title', 'Elegant Dashboard')</title>
  <!-- Favicon -->
  <link rel="shortcut icon" href="{{ asset('img/svg/logo.svg') }}" type="image/x-icon">
  
  <!-- Custom styles -->
  <link rel="stylesheet" href="{{ asset('admin/css/style.min.css') }}">
  @stack('styles')
</head>
<body>
  <div class="layer"></div>
  <a class="skip-link sr-only" href="#skip-target">Skip to content</a>
  <div class="page-flex">
    @include('admin.partials.sidebar')
    <div class="main-wrapper">
      @include('admin.partials.navbar')
      <main>
        @yield('content')
      </main>
      @include('admin.partials.footer')
    </div>
  </div>
  <!-- Scripts -->
  <script src="{{ asset('admin/plugins/chart.min.js') }}"></script>
  <script src="{{ asset('admin/plugins/feather.min.js') }}"></script>
  <script src="{{ asset('admin/js/script.js') }}"></script>
  @stack('scripts')
</body>
</html>