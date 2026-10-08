<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Post</title>
</head>
<body>

    <h1>Daftar Post</h1>

    <a href="{{ route('posts.create') }}">Tambah Post</a>

    <hr>

    @if (session('success'))
        <p>{{ session('success') }}</p>
    @endif

    @forelse ($posts as $post)

        <h2>{{ $post->title }}</h2>

        <p>{{ $post->body }}</p>

        <p>
            Dibuat oleh: {{ $post->user->name }}
        </p>

        @can('update', $post)
            <a href="{{ route('posts.edit', $post) }}">
                Update
            </a>
        @endcan

        @can('delete', $post)
            <form action="{{ route('posts.destroy', $post) }}"
                  method="POST"
                  style="display:inline;">
                @csrf
                @method('DELETE')

                <button type="submit">
                    Hapus
                </button>
            </form>
        @endcan

        <hr>

    @empty

        <p>Belum ada post.</p>

    @endforelse

</body>
</html>