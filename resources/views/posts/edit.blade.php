@extends('layouts.app')

@section('title', 'update the new post')

@section('content')

<form action="{{ route('posts.update', ['post' => $post->id])}}" method="POST">
    @csrf
    @method('PUT')
    @include('posts.partials.form')
    <div>
        <input type="submit" value="update" class="btn btn-primary btn-block">
    </div>
</form>

@endsection
