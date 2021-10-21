@extends('layouts.main')
    
@section('container')
    <article class="mb-5">
    @foreach ($post as $posts)
        <h2>
            <a href="/post/{{ $posts["slug"] }}"> {{ $posts["title"] }}</a>
            </h2>
        <h5>by: {{ $post["author"] }}</h5>
        <p>{{  $post["body"] }}</p>
    </article>
    @endforeach

@endsection