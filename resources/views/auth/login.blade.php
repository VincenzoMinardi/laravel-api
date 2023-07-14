@extends('Guest.layouts.base')

@section('contents')
<form method="post" action="{{ route('login') }}">
    @csrf
    <div class="mb-3">
        
      <label 
      for="exampleInputEmail1" class="form-label">Email address</label>
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
      <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Password</label>
      <input type="password" class="form-control" id="exampleInputPassword1" name="password"  
      required autocomplete="current-password">
    </div>
    <div class="mb-3 form-check">
      <input type="checkbox" class="form-check-input" id="exampleCheck1">
      <label class="form-check-label" for="remember" name="remember">Remember Me</label>
    </div>
    <a href="{{ route('password.request') }}">
             {{ __('Forgot your password?') }}
    </a>
    <button type="submit" class=" ms-3 btn btn-primary">Login in</button>
  </form>
    
@endsection