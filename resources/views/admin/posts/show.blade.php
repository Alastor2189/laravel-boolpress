@extends('layouts.dashboard')

@section('content')
    <h1> {{ $post->title }} </h1>
    <p>Slug: {{ $post->slug }}</p>
    <p>{{ $post->content }}</p>

    <div class="d-flex justify-content-between" style="max-width: 150px; min-width: 120px">
        <a class="btn btn-primary" href="{{ route('admin.posts.edit', ['post' => $post->id]) }}">Modifica
        </a>
        <form action="{{ route('admin.posts.destroy', ['post' => $post->id]) }}" method="post">
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-danger" onclick="return confirm('Do you confirm?')">Cancella</button>
        </form>
    </div>
@endsection