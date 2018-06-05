<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}" / >
        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
        @include('layouts.nav')
        <header>
            <div class="hero hero-main text-center">
                <h1>Black Horse Team</h1>
                <a href="#">Poznaj nas</a>
            </div>
        </header>
        <nav>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6 col-md-3 offer">                        
                        <a href="{{ route('team') }}"><img src="{{ asset('images/team.jpg') }}" class="box"></a>
                        <h6 class="font-weight-bold">Ekipa BHT</h6>
                    </div>
                    <div class="col-sm-6 col-md-3 offer">
                        <a href="{{ route('stable') }}"><img src="{{ asset('images/stable.jpg') }}" class="box"></a>
                        <h6 class="font-weight-bold">Pensjonat dla koni</h6>
                    </div>
                    <div class="col-sm-6 col-md-3 offer">
                        <a href="{{ route('riding') }}"><img src="{{ asset('images/horse-riding.jpg') }}" class="box"></a>
                        <h6 class="font-weight-bold">Jazda konna</h6>
                    </div>
                    <div class="col-sm-6 col-md-3 offer">
                        <a href="{{ route('club') }}"><img src="{{ asset('images/club.jpg') }}" class="box"></a>
                        <h6 class="font-weight-bold">Klub jeździecki BHT</h6>
                    </div>
                    <div class="col-sm-6 col-md-3 offer">
                        <a href="{{ route('transport') }}"><img src="{{ asset('images/transport.jpg') }}" class="box"></a>
                        <h6 class="font-weight-bold">Transport koni</h6>
                    </div>
                    <div class="col-sm-6 col-md-3 offer">
                        <img src="{{ asset('images/bht.jpg') }}" class="box">
                    </div>
                    <div class="col-sm-6 col-md-3 offer">
                        <a href="{{ route('training') }}"><img src="{{ asset('images/training.jpg') }}" class="box"></a>
                        <h6 class="font-weight-bold">Treningi</h6>
                    </div>
                    <div class="col-sm-6 col-md-3 offer">
                        <a href="{{ route('contact') }}"><img src="{{ asset('images/contact.jpg') }}" class="box"></a>
                        <h6 class="font-weight-bold">Kontakt</h6>
                    </div>
                </div>
            </div>
        </nav>

        <section>
            <div class="container main">
                <div class="row">
                    <main class="col-md-8 posts">
                        <h1>Aktualności</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </main>
                    <aside class="col-md-4">
                        <h4>Przydatne linki</h4>
                        <ul>
                            <li><a href="#">Odznaki materiały</a></li>
                            <li><a href="#">Parkur trening</a></li>
                            <li><a href="#">Archiwum aktualności</a></li>
                            <li>
                                <a href="https://www.facebook.com/Black-Horse-Team-153023571480875/">
                                    <img src="{{ asset('images/facebook.svg') }}" style="height: 50px; margin-bottom: 30px;">
                                </a>
                                <div class="fb-like" data-href="https://wwzw.facebook.com/Black-Horse-Team-153023571480875/" data-layout="box_count" data-action="like" data-size="large" data-show-faces="true" data-share="false"></div>
                            </li>
                        </ul>
                    </aside>
                </div>
            </div>
        </section>

        @include('layouts.footer')

        <div id="fb-root"></div>
        <script>
            (function(d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) return;
                js = d.createElement(s); js.id = id;
                js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0';
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));
        </script>
        <script src="{{ mix('js/app.js') }}"></script>
    </body>
</html>
