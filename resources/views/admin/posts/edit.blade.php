@extends('admin.layouts.app')

@section('title', 'Editar o Post')

@section('content')
    <h1>Editar o Post <strong>{{ $post->title }}</strong></h1>

    <form action="{{ route('posts.update', $post->id) }}" method="POST">
        @method('put')
        @include('admin.posts._partials.form')
    </form>
@endsection
