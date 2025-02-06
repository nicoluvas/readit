@extends('layouts.app')

@section('content')
    <h1>
        <b>
            {{ $post->title }}
        </b>
    </h1>

    <p>
        {{ $post->content }}
    </p>

    <p>
        <i>
            by {{ $post->author->name }}
        </i>
    </p>

    <button onclick="location.href='{{ route('answers.create', $post) }}'"
        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
        answer
    </button>
@endsection
