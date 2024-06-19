@extends('dashboard.layouts.main')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit Jadwal</h1>
  </div>  

    <div class="col-lg-8">
  <form method="post" action="/dashboard/jadwalukm" class="mb-5" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
      <label for="name" class="form-label">Bulan</label>
      <input type="text" class="form-control @error ('name') is-invalid @enderror" id="name" name="name" required autofocus value="{{ old('name') }}">
      @error('name')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
      @enderror
      
    </div>

    <div class="mb-3">
      <label for="bulan" class="form-label">bulan</label>
      <input type="text" class="form-control @error ('bulan') is-invalid @enderror" id="bulan" bulan="bulan"  autofocus value="{{ old('bulan') }}">
      @error('bulan')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
      @enderror
      
    </div>

    
    
    <div class="mb-3">
        <label for="anggota" class="form-label">anggota</label>
        <input type="text" class="form-control @error ('anggota') is-invalid @enderror" id="anggota" name="anggota"  value="{{ old('anggota') }}">
        @error('anggota')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
      @enderror
    </div>
    {{-- <div class="mb-3">
      <label for="nama2" class="form-label">nama2</label>
      <input type="text" class="form-control @error ('nama2') is-invalid @enderror" id="nama2" name="nama2"  value="{{ old('nama2') }}">
      @error('nama2')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
    @enderror
  </div>
  <div class="mb-3">
    <label for="nama3" class="form-label">nama3</label>
    <input type="text" class="form-control @error ('nama3') is-invalid @enderror" id="nama3" name="nama3"  value="{{ old('nama3') }}">
    @error('nama3')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
  @enderror
</div>
<div class="mb-3">
  <label for="nama4" class="form-label">nama4</label>
  <input type="text" class="form-control @error ('nama4') is-invalid @enderror" id="nama4" name="nama4"  value="{{ old('nama4') }}">
  @error('nama4')
    <div class="invalid-feedback">
      {{ $message }}
    </div>
@enderror
</div>
<div class="mb-3">
  <label for="nama5" class="form-label">nama5</label>
  <input type="text" class="form-control @error ('nama5') is-invalid @enderror" id="nama5" name="nama5"  value="{{ old('nama5') }}">
  @error('nama5')
    <div class="invalid-feedback">
      {{ $message }}
    </div>
@enderror
</div>
<div class="mb-3">
  <label for="nama6" class="form-label">nama6</label>
  <input type="text" class="form-control @error ('nama6') is-invalid @enderror" id="nama6" name="nama6"  value="{{ old('nama6') }}">
  @error('nama6')
    <div class="invalid-feedback">
      {{ $message }}
    </div>
@enderror
</div> --}}

    
    
     




    <button type="submit" class="btn btn-primary">Create Post</button>
  </form>
    </div>

    

@endsection