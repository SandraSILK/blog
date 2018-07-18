@extends('layouts.app')
@section('title', 'Black Horse Team - Ekipa')
@section('content')
    <header>
        <img src="{{ asset('images/team-hero.jpg') }}" class="hero-page">
    </header>
    <div class="container m-top-80">
        <section>
            <div class="row">
                <main class="col-md-8 content-area">
                    <h1 class="main-title">Ekipa Black Horse Team</h1>
                    <div class="js-gallery text-center">
                        <h5 class="title">Dotii</h5>
                        <img class="js-img" src="http://stajniabht.pl/grafika/dotti1.jpg">
                        <img class="js-img" src="http://stajniabht.pl/grafika/dotti2.jpg">
                        <h5 class="title">Olga Furgo</h5>
                        <img class="js-img" src="http://stajniabht.pl/grafika/olaf1.jpg">
                        <img class="js-img" src="http://stajniabht.pl/grafika/olaf2.jpg">
                        <img class="js-img" src="http://stajniabht.pl/grafika/olaf3.jpg">
                        <h5 class="title">Marcin Wnuczko</h5>
                        <img class="js-img" src="http://stajniabht.pl/grafika/marcinw1.jpg">
                        <img class="js-img" src="http://stajniabht.pl/grafika/marcinw2.jpg">
                        <h5 class="title">Aga Trzcińska</h5>
                        <img class="js-img" src="http://stajniabht.pl/grafika/adat1.jpg">
                        <img class="js-img" src="http://stajniabht.pl/grafika/adat2.jpg">
                    </div>
                </main>
                @include('layouts.aside')
            </div>
        </section>
    </div>
    <div class="js-body-gallery d-none">
        <span id="js-prev"><img src="{{ asset('images/arrow.png') }}"></span>
        <span id="js-next"><img src="{{ asset('images/arrow.png') }}"></span>
        <span id="js-close"><img src="{{ asset('images/close.png') }}"></span>
    </div>
@endsection

@push('scripts')
    <script src={{ mix('js/gallery-script.js') }}></script>
@endpush