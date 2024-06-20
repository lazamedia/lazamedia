@extends('layouts.main')

@section('container')
<h1>Articles</h1>
    <a href="{{ route('articles.create') }}">Create New Article</a>
    <ul>
        @foreach ($articles as $article)
            <li>
                <a href="{{ route('articles.show', $article->id) }}">{{ $article->title }}</a>
                <a href="{{ route('articles.edit', $article->id) }}">Edit</a>
                <form action="{{ route('articles.destroy', $article->id) }}" method="POST" style="display:inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>

@endsection