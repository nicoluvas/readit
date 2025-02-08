<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>readit</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio"></script>
</head>

<nav class="mb-4 absolute right-0 top-0">
    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit">
            logout
        </button>
    </form>
</nav>

<body class="container mx-auto mt-10 mb-10 max-w-3xl dark:scheme-dark">
    @yield('content')
</body>

</html>
