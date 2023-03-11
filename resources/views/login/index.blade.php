@extends('layouts.main')

@section('container')

<div class="row justify-content-center">
    <div class="col-md-8">
      @if (session()->has('success'))
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            {{ session('success') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      @endif
      @if (session()->has('loginError'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('loginError') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      @endif
        <main class="form-signin">
            <h1 class="h3 mb-3 fw-normal text-center">Please login</h1>
            <form action="/login" method="POST">
              @csrf
              {{-- <img class="mb-4" src="../assets/brand/bootstrap-logo.svg" alt="" width="72" height="57"> --}}
          
              <div class="form-floating">
                <input type="email" autofocus required name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" value="{{ old('email') }}">
                <label for="email">Email address</label>
                @error('email')
                  <div class="invalid-feedback">
                   {{ $message }}
                  </div>
                @enderror
              </div>
              <div class="form-floating">
                <input type="password" required name="password" class="form-control" id="password" placeholder="Password">
                <label for="password">Password</label>
              </div>
          
              
              <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
              
            </form>
            <small class="d-block text-center mt-3">Not Registered? <a href="/register">Register Now!</a></small>
          </main>

        
    </div>    
</div>    
    
@endsection