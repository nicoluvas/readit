<form action="{{ route('answers.store', $post) }}" method="POST">
    @csrf
    <input type="text" name="title" placeholder="title">
    <input type="text" name="content" placeholder="content">
    <button type="submit">submit</button>
</form>