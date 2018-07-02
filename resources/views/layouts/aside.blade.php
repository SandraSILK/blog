<aside class="col-md-4 aside-bar">
    <h4>Przydatne linki</h4>
    <ul>
        <li><a href="#">Odznaki materiały</a></li>
        <li><a href="#">Parkur trening</a></li>
        <li><a href="#">Archiwum aktualności</a></li>
        @if(!Route::is('main'))
            <li>
                <a href="#">Ekipa x BHT</a>
            </li>
        @endif
        <li>
            <a href="https://www.facebook.com/Black-Horse-Team-153023571480875/">
                <img src="{{ asset('images/facebook.svg') }}" style="height: 50px; margin-bottom: 30px;">
            </a>
            <div class="fb-like" data-href="https://wwzw.facebook.com/Black-Horse-Team-153023571480875/" data-layout="box_count" data-action="like" data-size="large" data-show-faces="true" data-share="false"></div>
        </li>
    </ul>
</aside>