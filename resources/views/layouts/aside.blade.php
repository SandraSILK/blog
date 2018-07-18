<aside class="col-md-4 aside-bar">
    <h4>Przydatne linki</h4>
    <ul>
        <li><a href="#">Odznaki materiały</a></li>
        <li><a href="#">Parkur trening</a></li>
        @if(!Route::is('archives'))
            <li><a href="{{ route('archives') }}">Archiwum aktualności</a></li>
        @endif
        @if(!Route::is('team'))
            <li>
                <a href="{{ route('team') }}">Ekipa x BHT</a>
            </li>
        @endif
        <li>
            <a href="https://www.facebook.com/Black-Horse-Team-153023571480875/">
                <img src="{{ asset('images/facebook.svg') }}" class="fb">
            </a>
            <div class="fb-like" data-href="https://wwzw.facebook.com/Black-Horse-Team-153023571480875/" data-layout="box_count" data-action="like" data-size="large" data-show-faces="true" data-share="false"></div>
        </li>
    </ul>
</aside>