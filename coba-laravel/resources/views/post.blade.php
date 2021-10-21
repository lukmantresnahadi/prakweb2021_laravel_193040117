@extends('layouts.main')
    
@section('container')
    <article class="mb-5">
    @foreach ($post as $posts)
        <h2>
            <a href="/post/{{ $posts["id"] }}"> {{ $posts["title"] }}</a>
            </h2>
      
        <p>{{  $post->excerpt }}</p>
    </article>
    @endforeach

@endsection