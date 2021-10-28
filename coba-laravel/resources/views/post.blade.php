@extends('layouts.main')
    
@section('container')
<h1 class="mb-5">Halaman Blog Post</h1>
    <article class="mb-5 border-bottom pb-4">
    @foreach ($post as $posts)
        <h2>
            <a href="/post/{{ $posts->slug }}" class="text-decoration-none"> {{ $posts["title"] }}</a>
            </h2>
            <p>By. <a href="/authors/{{ $posts->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> <a href="/categories/{{ $posts->category->slug }}"class="text-decoration-none">
                {{ $post->category->name }}</a></p>
      
        <p>{{  $post->excerpt }}</p>

        <a href="/post/{{ $posts->slug }}"class="text-decoration-none">Read More</a>
    </article>
    @endforeach

@endsection