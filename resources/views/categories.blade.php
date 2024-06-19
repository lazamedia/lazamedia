@extends('layouts.main')

@section('container')
<link rel="stylesheet" href="{{ asset('css/category.css') }}">

<div class="container">
    <div class="content shadow p-3 mb-5 mt-5 bg-body-tertiary rounded">
        <h2 class="mb-3">KATEGORI</h2>
    </div>
</div>

<div class="container">
    <div class="row">
        @foreach ($categories as $category)
        <div class="col-md-4 mb-4">
            <a href="/posts?category={{ $category->slug }}">
                <div class="card text-white bg-dark category-card">
                    <div class="card-body d-flex justify-content-center align-items-center">
                        <h5 class="card-title m-0 text-decoration-none">{{ $category->name }}</h5>
                    </div>
                </div>
            </a>
        </div>
        @endforeach
    </div>
</div>

@endsection
