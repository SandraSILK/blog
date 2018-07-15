@extends('layouts.app')
@section('title', 'Black Horse Team - Archiwum Aktualności')
@section('content')
<header>
        <img src="{{ asset('images/hero-main.jpg') }}" class="hero-page">
    </header>
    <div class="container m-top-80">
        <section>
            <div class="row">
                <main class="col-md-8 posts">
                	<h1 class="main-title">Archiuwm Aktualności</h1>
                	@foreach($posts as $post)
                		<div>
                            <p class="font-weight-bold title">{{ $post->title }}</p>
                            <p class="data">data: {{ $post->created_at->format('d.m.Y') }}</p>
                            <p>{{ $post->content }}</p>
                        </div>
                	@endforeach
                	{{ $posts->links() }}
                </main>
                @include('layouts.aside')
            </div>
        </section>
    </div>
@endsection