@extends('layouts.app')

@section('title', $post->title)

@section('content')
{{-- @if ($post['is_new']) --}}
{{-- <div>A new blog post!!! Using if</div>
@else
<div>Not a new blog post!!! Using elseif/else</div>
@endif
@unless ($post['is_new'])
<div>Not a new blog post!!! Using unless</div>
@endunless --}}

<h1>{{ $post->title}}</h1>
<p>{{ $post->content }}</p>
{{--
@isset($post['has_comments'])
<div>The post has some comments!!! using issset</div>
@endisset --}}

<p>Added {{ $post->created_at->diffForHumans() }}</p>

@if(now()->diffInMinutes($post->created_at) < 5)
<div class="alert alert-info">New post!!</div>
@endif
@endsection
