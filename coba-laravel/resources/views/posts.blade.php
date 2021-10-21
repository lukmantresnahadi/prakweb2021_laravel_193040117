@extends('layouts.main')

@section('container')

<article>
<h1>{{ $post->title }}</h1>

<p>{{ !! $post->body !!}}</p>
</article>
    
<a href="/post">Back to Posts</a>
@endsection