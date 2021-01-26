@extends('admin.layouts.app')

@section('title', 'Cadastra novo post')

@section('content')
    <h1>Cadastra novo post</h1>

    <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @include('admin.posts._partials.form')
    </form>
@endsection
