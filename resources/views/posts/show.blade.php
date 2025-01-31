@extends('layouts.app')

@section('content')
    <h1>
        {{ $post->title }}
    </h1>
    
    <p>
        {{ $post->content }}
    </p>

    <p>
        by {{ $post->author->name }}
    </p>
@endsection
