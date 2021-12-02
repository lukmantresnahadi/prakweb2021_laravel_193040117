@extends('layouts.main')

@section('container')

<div class="container">
  <div class="row mb-5">
    <div class="col-md-8">
      <h1 class="mb-3"{{ $posts->title }}></h1>
      

<p>By. <a href="/author/{{ $posts->author->username }}" class="text-decoration-none">{{ $posts->author->username }}</a>
   <a href="/posts?categorty={{ $posts->category->slug }}" class="text-decoration-none">{{ $posts->category->name }}</a></p>
  @if ($post->image)
      <div style="max-height:350px; overflow:hidden;">
      <img src="{{ asset('storage/' .$post->image)}}" 
             alt="{{ $posts->category->name }}" class="img-fluid ">
      </div>
             @else
          
      <img src="https://source.unsplash.com/500x400?{{ $post[0]->category->name }}" 
             alt="{{ $posts->category->name }}" class="img-fluid ">
      @endif

        <article class="my-3 fs-5">
  <p>{{ !! $post->body !!}}</p>

   </article> 
<a href="/post" class="d-bloc mt-5">Back to Posts</a>
@endsection
    </div>
  </div>
</div>

<article>
