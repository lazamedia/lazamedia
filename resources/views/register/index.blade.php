@extends('dashboard.layouts.main')

@section('container')





<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Buat Akun Baru</h1>
  
</div>  
@if (session()->has('success'))
  <div class="alert alert-success col-lg-8" role="alert">
    {{ session('success') }}
  </div>
      
  @endif
  <div class="col-lg-8">
<form method="post" action="/dashboard/register" class="mb-5" enctype="multipart/form-data">
  @csrf
  <div class="form-floating">
    <input type="name" name="name" class="form-control rounded-top @error('name') is-invalid @enderror" id="name" placeholder="Name" required value="{{ old('name') }}">
    <label for="name">Nama</label>
    @error('name')
    <div  class="invalid-feedback">
      {{ $message }}
    </div>
    @enderror
  </div>
  <div class="form-floating mt-3">
    <input type="username" name="username" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="Username" required value="{{ old('username') }}">
    <label for="Username">Username</label>
    @error('username')
    <div  class="invalid-feedback">
      {{ $message }}
    </div>
    @enderror
  </div>
  <div class="form-floating mt-3">
    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" required value="{{ old('email') }}">
    <label for="email">Email address</label>
    @error('email')
    <div  class="invalid-feedback">
      {{ $message }}
    </div>
    @enderror
  </div>
  <div class="form-floating mt-3">
    <input type="password" name="password" class="form-control rounded-bottom @error('password') is-invalid @enderror" id="password" placeholder="Password" required >
    <label for="password">Password</label>
    @error('password')
    <div  class="invalid-feedback">
      {{ $message }}
    </div>
    @enderror
  </div>



  <button type="submit" class="btn btn-primary mt-4">Create</button>
</form>
  </div>



@endsection