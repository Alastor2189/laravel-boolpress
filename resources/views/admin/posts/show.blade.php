@extends('layouts.dashboard')

@section('content')
    <h1> {{ $post->title }} </h1>
    <p>Slug: {{ $post->slug }}</p>
    <p>Categoria: {{ $category ? $category->name : 'nessuna categoria' }}</p>
    <p><strong>Tags: </strong>

        @forelse ($post->tags as $tag)
            {{ $tag->name }}{{ $loop->last ? '' : ', ' }}
        @empty
            nessuno
        @endforelse
    </p>
    <p>{{ $post->content }}</p>

    <div class="d-flex justify-content-between" style="max-width: 150px; min-width: 120px">
        <div class="d-flex">
            <a class="btn btn-primary" href="{{ route('admin.posts.edit', ['post' => $post->id]) }}">Modifica</a>
    
            <form action="{{ route('admin.posts.destroy', ['post' => $post->id]) }}" method="post">
                @csrf
                @method('DELETE')
    
                <button class="btn btn-danger" type="submit">Cancella</button>
            </form>
        </div>
        <form action="{{ route('admin.posts.destroy', ['post' => $post->id]) }}" method="post">
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-danger" onclick="return confirm('Do you confirm?')">Cancella</button>
        </form>
    </div>
@endsection