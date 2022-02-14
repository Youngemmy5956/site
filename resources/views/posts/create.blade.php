@extends('layouts.app')

@section('title', 'create the new post')

@section('content')

<form action="{{ route('posts.store')}}" method="POST">
    @csrf
    @include('posts.partials.form')
    <div>
        <input type="submit" value="create" class="btn btn-primary btn-block">
    </div>
</form>

@endsection


