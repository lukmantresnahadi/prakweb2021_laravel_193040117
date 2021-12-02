@extends('dashboard.layouts.main')

@section('container')

    
<div class="container">
  <div class="row my-3">
    <div class="col-lg-8">
      <h1 class="mb-3"{{ $posts->title }}></h1>
      

      <a href=".dashboard/posts" class="btn btn-success"><span data-fether="arrow-left" ></span> to all my posts</a>
      <a href="" class="btn btn-warning"><span data-fether="edit" ></span>edit</a>
      <a href="" class="btn btn-danger"><span data-fether="x-circle" ></span>delete</a>
      
 <img src="https://source.unsplash.com/500x400?{{ $post[0]->category->name }}" class="card-img-top" 
        alt="{{ $posts->category->name }}" class="img-fluid mt-3">

        <article class="my-3 fs-5">
  <p>{{ !! $post->body !!}}</p>

   </article> 


    </div>
  </div>
</div> 
@endsection