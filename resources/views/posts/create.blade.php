<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Post</title>
</head>
<body>

    <h1>Tambah Post</h1>

    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('posts.store') }}" method="POST">
        @csrf

        <label>Judul</label>
        <br>
        <input type="text" name="title" value="{{ old('title') }}">

        <br><br>

        <label>Isi Post</label>
        <br>
        <textarea name="body">{{ old('body') }}</textarea>

        <br><br>

        <button type="submit">Simpan</button>
    </form>

    <br>

    <a href="{{ route('posts.index') }}">
        Kembali
    </a>

</body>
</html>