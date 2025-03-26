<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  

   







</head>
<body>
    <div class="container">
        <!-- Aside esquerdo -->
        @include('partials.aside-left')

        <!-- Conteúdo principal -->
        <main>
            @yield('content')
        </main>

        <!-- Aside direito -->
        @include('partials.aside-right')
    </div>

    <script src="{{ asset('assets/js/orders.js') }}"></script>
    <script src="{{ asset('assets/js/index.js') }}"></script>
    
    

</body>
</html>
