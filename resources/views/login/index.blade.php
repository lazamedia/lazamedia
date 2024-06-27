@extends('layouts.main')

@section('container')


<style>
body {
    margin:0;
    padding:0;
    font-family: 'poppins';
    background: #e2e2e270;
  }
  .login-box {
    position: absolute;
    top: 50%;
    left: 50%;
    width: 400px;
    padding: 40px;
    transform: translate(-50%, -50%);
    background: rgb(250, 248, 248);
    box-sizing: border-box;
    box-shadow: 0 15px 25px rgba(0, 184, 174, 0.6);
    border-radius: 10px;
    border: 1px solid #004741;
    
  }
  
  .login-box h2 {
    margin: 0 0 30px;
    padding: 0;
    color: #004741;
    text-align: center;
  }
  
  .login-box .user-box {
    position: relative;
  }
  
  .login-box .user-box input {
    width: 100%;
    padding: 10px 0;
    font-size: 16px;
    color: #004741;
    margin-bottom: 30px;
    border: none;
    border-bottom: 1px solid #004741;
    outline: none;
    background: transparent;
    margin-left: 5px;
  }
  .login-box .user-box label {
    position: absolute;
    top:0;
    left: 0;
    padding: 10px 0;
    font-size: 13px;
    color: #004741;
    pointer-events: none;
    transition: .5s;
    margin-left: 10px;
  }
  
  .login-box .user-box input:focus ~ label,
  .login-box .user-box input:valid ~ label {
    top: -20px;
    left: 0;
    color: #004741;
    font-size: 12px;
  }
  
  .login-box form button {
    position: relative;
    display: inline-block;
    padding: 10px 20px;
    color: #004741;
    font-size: 16px;
    text-decoration: none;
    text-transform: uppercase;
    overflow: hidden;
    transition: .5s;
    margin-top: 40px;
    letter-spacing: 4px;
    
  }
  .login-box button:hover {
    background: #004741;
    color: #fff;
    border-radius: 5px;
    box-shadow: 0 0 5px #004741,
                0 0 25px #004741,
                0 0 50px #004741,
                /* 0 0 100px #004741; */
  }
  
  .login-box button span {
    position: absolute;
    display: block;
  }
  
  .login-box button span:nth-child(1) {
    top: 0;
    left: -100%;
    width: 100%;
    height: 2px;
    background: linear-gradient(90deg, transparent, #004741);
    animation: btn-anim1 1s linear infinite;
  }
  @keyframes btn-anim1 {
    0% {
      left: -100%;
    }
    50%,100% {
      left: 100%;
    }
  }
  
  .login-box button span:nth-child(2) {
    top: -100%;
    right: 0;
    width: 2px;
    height: 100%;
    background: linear-gradient(180deg, transparent, #004741);
    animation: btn-anim2 1s linear infinite;
    animation-delay: .25s
  }
  
  @keyframes btn-anim2 {
    0% {
      top: -100%;
    }
    50%,100% {
      top: 100%;
    }
  }
  
  .login-box button span:nth-child(3) {
    bottom: 0;
    right: -100%;
    width: 100%;
    height: 2px;
    background: linear-gradient(270deg, transparent, #004741);
    animation: btn-anim3 1s linear infinite;
    animation-delay: .5s
  }
  
  @keyframes btn-anim3 {
    0% {
      right: -100%;
    }
    50%,100% {
      right: 100%;
    }
  }
  
  .login-box a span:nth-child(4) {
    bottom: -100%;
    left: 0;
    width: 2px;
    height: 100%;
    background: linear-gradient(360deg, transparent, #004741);
    animation: btn-anim4 1s linear infinite;
    animation-delay: .75s
  }
  
  @keyframes btn-anim4 {
    0% {
      bottom: -100%;
    }
    50%,100% {
      bottom: 100%;
    }
  }
</style>


<div class="login-box">
  @if(session()->has('loginError'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('loginError') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

  <h2>Login</h2>
  <form action="/login" method="post">
    @csrf
    <div class="user-box">
      <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="" autofocus required value="{{ old('email') }}">
      @error('email')
      <div class="invalid-feedback">
          {{ $message }}
      </div>
      @enderror
      <label>Username</label>
    </div>
    <div class="user-box">
      <input type="password" name="password" class="form-control" id="password" placeholder="" required>
      <label>Password</label>
    </div>
    {{-- <a type="submit">
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      Submit
    </a> --}}
    <button class="btn " type="submit"><span></span>
      <span></span>
      <span></span>
      <span></span>Login</button>
  </form>
</div>



@endsection
