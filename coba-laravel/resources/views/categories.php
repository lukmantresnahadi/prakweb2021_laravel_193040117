@extends('layouts.main')
    
@section('container')
<h1 class="mb-5"> Post Categories</h1>

    @foreach ($categories as $category)
      <ul>
        <li>

        </li>
      </ul>
      <a href="/categories/{{ $category->slug }}"> {{ $category->name] }}</a>
              </h2>
              <p>by Lukman tresnahadi in <a href="/categories/"{{ $posts->categ
        <h2>
          ory->slug }}></a>
       
    </article>
    @endforeach

@endsection