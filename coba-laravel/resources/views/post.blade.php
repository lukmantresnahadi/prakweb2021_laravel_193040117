@extends('layouts.main')
    
@section('container')
<h1 class="mb-3">{{ $title }}</h1>
    
<div class="row justify-content-center mb-3">
    <div class="col-md-6">
        <form action="/post">
            @if (request('category'))
            <input type="hidden" name="category" value="{{ request('category') }}">
            @endif 
            @if (request('author'))
            <input type="hidden" name="author" value="{{ request('author') }}">
            @endif   
        <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="search.." name ="search" value=""{{ request('search') }}>
        <button class="btn btn-danger" type="submit">Button</button>
        </div>
    
        </form>
    </div>
    </div>

.

    @if ($post->count())
    
            <div class="card mb-3">
        @if ($posts[0]->image)

        <img src="{{ asset('storage/' .$posts[0]->image)}}" 
                alt="{{ $posts[0]->category->name }}" class="img-fluid">
        </div>
                @else
            
        <img src="https://source.unsplash.com/500x400?{{ $posts->category->name }}
    " class="card-img-top" alt="{{ $post[0]->category->name }}">
        @endif
    
  <div class="card-body text-center">
    <h3 class="card-title"><a href="/post/{{ $post[0]->slug }}" class="text-decoration-none text-dark">{{ $$pos[0]->title }}</h3></a>
    <p>
     <small class="text-muted"> 
         By. <a href="/post?author={{ $post->author->username }}" 
            class="text-decoration-none">{{ $post->author->name }}</a>in
         <a href="/post? category={{ $posts->category->slug }}"
            class="text-decoration-none">
                {{ $post[0]->category->name }}</a>{{ $post[0]->created_at->diffForHumans }}
            </small>
            </p>
           
    <p class="card-text">{{ $post[0]->excerpt }}</p>
    <a href="/post/{{ $post[0]->slug }}"class="text-decoration-none btn btn-primary">Read More</a>

    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
  </div>
</div>
   

    

    <div class="container">
        <div class="row">
            @foreach ($post->skip(1) as $posts)  
        <div class="col-md-4 mb-3">
        <div class="card" >
            <div class="position-absolute  px-3 py-2  " style="background-color: rgba(0, 0, 0, 7)">
                <a href="/post ? category= /{{ $post->category->slug}}" class="text-white text-decoration-none">
                    {{ $post->category->name }}</a></div>
         @if ($post->image)
      <img src="{{ asset('storage/' .$post->image)}}" 
        alt="{{ $posts->category->name }}" class="img-fluid ">
             @else
          
        <img src="https://source.unsplash.com/500x400?{{ $post[0]->category->name }}" class="card-img-top" 
        alt="{{ $posts->category->name }}">
      @endif
        <div class="card-body">
            <h5 class="card-title"> {{ $posts["title"] }}</h5>
            <p>
     <small class="text-muted"> 
         By. <a href="/post?author={{ $post->author->username }}" 
            class="text-decoration-none">{{ $post->author->name }}</a>
        </a>{{ $post[0]->created_at->diffForHumans }}
            </small>
            </p>
        <p class="card-text">{{  $post->excerpt }}</p>
     <a href="/post/{{ $posts->slug }}" class="btn btn-primary">Read More </a>
  </div>
 
</div>
    </div>

     @else
    <p class="text-center fs-4">No post found</p>
    @endif

    <div class="d-flexbox justify-content-end">
    {{  $post->links() }}
</div>
 @endforeach

    <article class="mb-5 border-bottom pb-4">
    @foreach ($post->skip(1) as $posts)
        <h2>
            <a href="/post/{{ $posts->slug }}" class="text-decoration-none"> {{ $posts["title"] }}</a>
            </h2>
            <p>By. <a href="/post?auhor={{ $posts->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> 
                <a href="/categories/{{ $posts->category->slug }}"class="text-decoration-none">
                {{ $post->category->name }}</a></p>
      
        <p>{{  $post->excerpt }}</p>

        <a href="/post/{{ $posts->slug }}"class="text-decoration-none">Read More</a>
    </article>

    
    @endforeach

@endsection