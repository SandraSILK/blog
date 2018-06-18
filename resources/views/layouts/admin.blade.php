<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Black Horse Team - Panel Administracyjny</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <div class="container-fluid admin">
            <div class="row">
                <header class="col-12 text-right">
                    @include('layouts.header-admin')
                </header>
                <nav class="col-lg-2">
                    @include('layouts.navbar-admin')
                </nav>
                <main class="col-lg-10 admin-content">
                    @yield('content')
                </main>
            </div>
        </div>
    </div>
    
    <script src="{{ mix('js/app.js') }}"></script>
    <script src="{{ mix('js/admin/admin.js') }}"></script>
    <script src="{{ mix('tinymce/js/tinymce/tinymce.min.js') }}"></script>
    <script src="{{ mix('js/admin/tinymce-script.js') }}"></script>
    @stack('scripts')
</body>
</html>
