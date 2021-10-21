@extends('layouts.main')
    
@section('container')
    <article class="mb-5">
    @foreach ($post as $posts)
        <h2>
            <a href="/post/{{ $posts["id"] }}"> {{ $posts["title"] }}</a>
            </h2>
            <p>by Lukman tresnahadi in <a href="/categories/"{{ $post->category->slug }}></a>
        <p>{{  $post->excerpt }}</p>
    </article>
    @endforeach

@endsection