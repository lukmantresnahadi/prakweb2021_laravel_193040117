@extends('layouts.main')

@section('container')

<article>
<h1>{{ $post->title }}</h1>
<p>By. <a href="#" class="text-decoration-none">{{ $posts->user->name }}</a> <a href="/categories/{{ $posts->category->slug }}">{{ $post->category->name }}</a></p>

<p>{{ !! $post->body !!}}</p>
</article>
    
<a href="/post" class="d-bloc mt-5">Back to Posts</a>
@endsection