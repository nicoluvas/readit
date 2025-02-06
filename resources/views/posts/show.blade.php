@extends('layouts.app')

@section('content')
<div class="post mb-6">
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
        answer it
    </button>
</div>

    <div>
        <h1 class="mb-4 text-4xl font-bold">answers</h1>
        @forelse ($post->answers as $answer)
            <div class="mb-4 answer border p-2">
                <b> {{ $answer->title }}</b>
                <p> {{ $answer->content }} </p>
                <i>by {{ $answer->author->name }}</i>
            </div>
            <br>
        @empty
            no answers by now
        @endforelse
    </div>
@endsection
