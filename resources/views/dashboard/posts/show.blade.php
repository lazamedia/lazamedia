@extends('dashboard.layouts.main')

@section('container')

<div class="container">
    <div class="row my-3">
        <div class="col-lg-9">
            <h1 class="mb-2">{{ $post->title }}</h1>
            <article>
               
                <a href="/dashboard/posts" class="btn btn-success">Back to my Post</a>
                <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning"><i class="bi bi-pencil-square"></i> Edit</a>
                

                <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
                    @method ('delete')
                    @csrf
                    <button class="btn btn-danger " onclick="return confirm('Apakah Kamu Ingin Hapus?')"><i class="bi bi-x-circle"></i> Delete</button>
                  </form>
                    @if ($post->image)
                        <div style="max-height:auto; max-with:300px; overflow:hidden;">
                            <img src="{{ asset('storage/' . $post->image) }}" class="img-fluid mt-3" alt="{{ $post->category->name }}">
                        </div>
                          
                      @else
                         <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid mt-3">
                     @endif
                                    
                    <article class="my-3 fs-5">
                        {!! $post ->body !!}
                    </article>
                
        
            </article>
        
            
        </div>
    </div>
</div>

@endsection