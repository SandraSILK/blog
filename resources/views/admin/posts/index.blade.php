@extends('layouts.admin')
@section('content')
    <h4 class="font-weight-bold">Wszystkie wpisy</h4>
    @include('flash::message')
    <table class="table table-hover table-striped mt-30">
        <thead>
            <tr>
                <th>Lp.</th>
                <th>Data utworzenia</th>
                <th>Tytuł</th>
                <th>Akcja</th>
            </tr>
        </thead>
        <tbody>
            @foreach($posts as $post)
                <tr>
                    <td>{{ $loop->iteration}}</td>
                    <td>{{ $post->created_at }}</td>
                    <td>{{ $post->title }}</td>
                    <td>
                        <a href="#" class="btn btn-danger" title="usuń"><img src="{{ asset('images/garbage.svg') }}" class="btn-img"></a>
                        <a href="{{ route('admin.posts.edit', $post) }}" class="btn btn-success" title="edytuj"><img src="{{ asset('images/edit.svg') }}" class="btn-img"></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
{{-- <div>Icons made by <a href="https://www.flaticon.com/authors/smashicons" title="Smashicons">Smashicons</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></div> --}}
{{-- <div>Icons made by <a href="https://www.flaticon.com/authors/smashicons" title="Smashicons">Smashicons</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></div> --}}
@endsection
