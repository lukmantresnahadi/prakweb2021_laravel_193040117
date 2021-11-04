@extends('layouts.main')

@section('container')
<div class="row justify-content-center">
  <div class="col-md-4">

      @if(session)->has('success'))
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-class" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      @endif
   
          
      @endif

    <main class="form-signin">
      <h1 class="h3 mb-3 fw-normal text-center">Please Login</h1>
  <form action="/login" method="post">
    @csrf

    <div class="form-floating">
      <input type="email" name ="email"class="form-control  @error('email') @enderror is-invalid" id="email" placeholder="name@example.com" autofocus required>
      <label for="floatingInput">Email address</label>
      @error('email')
          <div class="invalid-feeback">
            {{ $message }}
          </div>
      @enderror
    </div>
    <div class="form-floating">
      <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
      <label for="floatingPassword">Password</label>
    </div>

    
    <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>

  </form>
  <small class="d-block text-center mt-3">not registered? <a href="/register">Register Now!</a></small>
</main>
  </div>
</div>
    

@endsection