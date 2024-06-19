
@extends ('layouts.main')

@section('container')

    <div class="container">
        <div class="row justify-content-left mb-5">
            <div class="col-md-9">
                <h1 class="mb-2">{{ $post->title }}</h1>
                <article>
                          
                    <p>by. <a href="/posts?author={{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> - <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>    
                    
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
            
                <a href="/posts" class="mt-3 text-decoration-none btn btn-primary">Kembali</a>
                
            </div>
        </div>
    </div>


    
@endsection
