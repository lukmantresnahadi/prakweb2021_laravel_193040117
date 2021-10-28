@extends('layouts.main')
    
@section('container')
<h1 class="mb-5"> Post Categories</h1>

<div class="container">
  <div class="row">
    <div class="colom-md-4">
      <a href="/categories/{{ $category->slug }}">
      @foreach ($categories as $category)
          
      <div class="card bg-dark text-white">
  <img src="https://source.unsplash.com/500x400?{{ $category->name }}" class="card-img" 
     alt="$category->name">
  <div class="card-img-overlay d-flex align-item-center p-0">
    <h5 class="card-title text-center flex-fill p-4 fs-3" style="background-color: rgba(0,0,0, 7)">{{ $category->name }}</h5>
  </div>
</div>
</a>
    </div> 
    @endforeach
  </div>
</div>


@endsection