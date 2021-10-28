@extends('layouts.main')

@section('container')

<article>
<h1>{{ $post->title }}</h1>
<p>By. <a href="/author/{{ $posts->author->username }}" class="text-decoration-none">{{ $posts->author->username }}</a>
   <a href="/categories/{{ $posts->category->slug }}" class="text-decoration-none">{{ $posts->category->name }}</a></p>

<p>{{ !! $post->body !!}}</p>
</article>
    
<a href="/post" class="d-bloc mt-5">Back to Posts</a>
@endsection