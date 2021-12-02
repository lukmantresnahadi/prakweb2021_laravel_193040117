@extends('dashboard.layouts.main')

@section('container')

    
<div class="container">
  <div class="row my-3">
    <div class="col-lg-8">
      <h1 class="mb-3"{{ $posts->title }}></h1>
      

      <a href="/dashboard/posts" class="btn btn-success"><span data-fether="arrow-left" ></span> to all my posts</a>
      <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning"><span data-fether="edit" ></span>edit</a>
      <form action="/dashboard/posts{{ $post->slug }}" method="POST" class="d-inline">
                  @method('delete')
                  @csrf
                  <button class="btn btn-danger " onclick="return confirm('are you sure?')">
                    <span data-feather="x-circle"></span>Delete</button>
                </form>
      
      @if ($post->image)
          
      @else
          
      <img src="https://source.unsplash.com/500x400?{{ $post[0]->category->name }}" class="card-img-top" 
             alt="{{ $posts->category->name }}" class="img-fluid mt-3">
      @endif

        <article class="my-3 fs-5">
  <p>{{ !! $post->body !!}}</p>

   </article> 


    </div>
  </div>
</div> 
@endsection