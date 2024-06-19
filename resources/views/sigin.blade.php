@extends('layouts.main')

@section('container')

<style>
  body{
    background-color: aquamarine;
    background: url('https://c4.wallpaperflare.com/wallpaper/444/1020/910/abstract-blue-smoke-light-wallpaper-preview.jpg') no-repeat center center/cover;

  }

.benefit {
    display: flex;
    background-color: #b1dffd00;
    flex-wrap: wrap;
    justify-content: space-around;
    width: 100%;
    margin: auto;
    margin-top: 50px;
    transform: translateY(20px);
    transition: all 0.5s ease-in-out;
    align-items: center;
}

.benefit-box {
  background: linear-gradient(to bottom, #ac66f2, #5bafcb);
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(6, 254, 237, 0.1);
    padding: 20px;
    height: 320px;
    text-align: center;
    margin: 30px;
    width: 28%;
    transition: transform 0.3s;       
}

.benefit h2, p {
  color: rgb(0, 0, 0);
  margin-top: 20px;
  margin-bottom: 30px;
}

/* .benefit-box:hover {
  transform: translateY(-10px);
} */

.icon-benefit {
  font-size: 40px;
  color: #ffffff;
  margin-bottom: 10px;
}
.textbox {
            margin-bottom: 30px;
        }

        .textbox input {
            width: 100%;
            padding: 10px;
            border-radius: 10px;
            border: 1px solid #c1c1c1;
            outline: none;
            margin-top: 10px;
        }

        .btn {
            width: 100%;
            padding: 10px;
            border: none;
            background: #5500aa;
            color: #fff;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 5px;
        }

        @media screen and (max-width: 768px) {

.benefit {
  flex-direction: column;
  width: 80%;
}

.benefit-box {
 width: 80%;
}
        }
</style>

<section class="benefit">

    <div class="benefit-box">
        @if(session()->has('loginError'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('loginError') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        <h2>Login</h2>
        <form action="/login" method="post">
            @csrf
            <div class="textbox">
                {{-- <label for="email">Email address</label> --}}
                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Email" autofocus required value="{{ old('email') }}">
                @error('email')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="textbox">
                {{-- <label for="password">Password</label> --}}
                <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
            </div>
            <button class="btn btn-primary w-100 py-2" type="submit">Login</button>
        </form>
    </div>

  
</section>

@endsection
