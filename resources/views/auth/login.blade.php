@extends ('layouts.app')

@section('content')
    <form action="{{ route('login') }}" method="POST">
        @csrf
        <input type="text" name="email" placeholder="email">
        <input type="password" name="password" placeholder="password">
        <button type="submit">login</button>
    </form>
    <a href="{{ route('register') }}">register instead</a>
    @if ($errors->any())
        <div class="">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
@endsection