@extends('layouts.admin')
@section('content')
	<h4 class="font-weight-bold">Dodaj wpis</h4>

	{{ Form::model($post, [
		'route'  => ['admin.posts.update', $post],
		'files'  => true,
		'method' => 'PUT',
	]) }}
		{{ Form::label('title', 'Tytuł wpisu', [
			'class' => 'mt-30',
		]) }}
		{{ Form::text('title', null, [
			'class'    => 'form-control',
			'required' => 'required,'
		]) }}

		{{ Form::label('text', 'Treść wpisu', [
			'class' => 'mt-30',
		]) }}
		{{ Form::textarea('text', null, [
			'class'    => 'form-control js-textarea',
			'required' => 'required,'
		]) }}

		{{ Form::label('file', 'Grafika', [
			'class' => 'mt-30',
		]) }}
		{{ Form::file('file', null, [
			'class'    => 'form-control d-block',
		]) }}

		{{  Form::submit('dodaj', [
			'class' => 'btn btn-outline-success w-100 mt-30'
		]) }}
	{{ Form::close() }}
@endsection