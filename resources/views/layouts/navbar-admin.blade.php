@if (Auth::check())
    <h6 class="font-weight-bold"><a class="logo" href="{{ route('admin.admin') }}">Panel Administracyjny</a></h6>
    <ul>
        <li>
            <a href="{{ route('admin.posts.index') }}" class="btn basic-btn {{ Route::is('admin.posts.*') ? 'btn-active' : '' }}">Wszystkie wpisy</a>
            @if(Route::is('admin.posts.*'))
                <ul>
                    <li>
                        <a href="{{ route('admin.posts.create') }}" class="btn basic-btn{{ Route::is('admin.posts.create') ? 'btn-active' : '' }} ">Dodaj wpis</a>
                    </li>
                </ul>
            @endif
        </li>
    </ul>
@endif