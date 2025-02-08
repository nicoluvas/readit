@extends ('layouts.app')

@section('content')
    <form action="{{ route('register') }}" method="POST">
        @csrf
        <input type="text" name="name" placeholder="name">
        <input type="text" name="email" placeholder="email">
        <input type="password" name="password" placeholder="password">
        
        <button type="submit">register</button>
    </form>

    <a href="{{ route('login') }}">login instead</a>
@endsection