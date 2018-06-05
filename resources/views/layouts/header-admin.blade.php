 @if (Auth::check())
    {{ Form::open(['route' => 'logout']) }}
        <span>Witaj {{ Auth::user()->name }}!</span>
        {{ Form::submit('wyloguj', [
        	'class' => 'basic-btn',
        ]) }}
    {{ Form::close() }}
@else 
    <p style="font-size: 17px;"><strong>Panel Administracyjny</strong></p>
@endif