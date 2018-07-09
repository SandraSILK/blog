@extends('layouts.app')
@section('title', 'Black Horse Team - Jazda Konna - Owczarnia')
@section('content')
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
                    <h1 class="main-title">Aktualności</h1>
                    @foreach($posts as $post)
                        <div>
                            <p class="font-weight-bold title" style="background: #e8eaf6">{{ $post->title }}</p>
                            <p class="data">data: {{ $post->created_at->format('d.m.Y') }}</p>
                            <p>{{ $post->content }}</p>
                        </div>
                    @endforeach
                </main>
                @include('layouts.aside')
            </div>
        </div>
    </section>

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
@endsection
