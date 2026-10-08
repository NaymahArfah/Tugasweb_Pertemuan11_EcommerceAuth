<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Post</title>
</head>
<body>

    <h1>Edit Post</h1>

    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('posts.update', $post) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Judul</label>
        <br>
        <input
            type="text"
            name="title"
            value="{{ old('title', $post->title) }}"
        >

        <br><br>

        <label>Isi Post</label>
        <br>
        <textarea name="body">{{ old('body', $post->body) }}</textarea>

        <br><br>

        <button type="submit">Simpan Perubahan</button>
    </form>

    <br>

    <a href="{{ route('posts.index') }}">
        Kembali
    </a>

</body>
</html>