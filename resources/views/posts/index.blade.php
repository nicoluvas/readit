@extends('layouts.app')

@section('content')
    <h1 class="mb-10 text-2xl">readit</h1>

    <form></form>

    <ul>
        @forelse ($posts as $post)
            <li class="mb-4">
                <div class="post-item">
                    <div class="flex flex-wrap items-center justify-between">
                        <div class="w-full flex-grow sm:w-auto">
                            <a href="{{ route('posts.show', $post) }}" class="post-title">{{ $post->title }}</a>
                            {{-- <span class="post-author">by {{ $post->author }}</span> --}}
                        </div>
                    </div>
                </div>
            </li>
        @empty
            <li class="mb-4">
                <div class="empty-post-item">
                    <p class="empty-text">no posts found</p>
                    <a href="{{ route('posts.index') }}" class="reset-link">reset criteria</a>
                </div>
            </li>
        @endforelse
    </ul>
@endsection
