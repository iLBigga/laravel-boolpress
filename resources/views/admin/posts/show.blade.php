@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-8">
            <h1>{{ $post->title }}</h1>
            <p>{{ $post->slug }}</p>


            @if ($post->cover)
            <div class="col-12">
                <img src=" {{ asset('storage/' . $post->cover) }}" width="400" alt="">
            </div> 
            @endif
            
            @if ($post->category)
                <p>Categoria: {{ $post->category->name }}</p>
            @endif
            <div>
                <p>Tags:</p>
            </div>
            <ul>
                @foreach ($post->tags as $tag)
                    <li>{{ $tag->name }}</li>
                @endforeach
            </ul>
            <ul>
                <li>{{ $post->created_at }}</li>
            </ul>
        </div>
        <div class="col-4 d-flex align-items-center justify-content-end">
            <a href="{{ route('admin.posts.edit', $post) }}" type="button" class="btn btn-primary btn-sm">Modifica</a>
            <form action="{{ route('admin.posts.destroy', $post) }}" method="POST">
                @csrf
                @method('DELETE')

                <input type="submit" value="Elimina" class="btn btn-danger btn-sm">
            </form>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-12">
            <p>
                {{ $post->content }}
            </p>
        </div>
    </div>
</div>

@endsection