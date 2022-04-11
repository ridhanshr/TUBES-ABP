@extends('dashboard.layouts.main')

@section('content')
    <div class="d-flex justify-content-center">
        <h1>Data Posts</h1>
    </div>
    <div class="d-flex p-2">
        <a href="/dashboard/posts/create" class="btn btn-primary">Tambah Post</a>
    </div>
    @if(session()->has('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif
    <div class="table-responsive">
        <table class="table">
            <tr>
                <th></th>
                <th></th>
                <th>id</th>
                <th>Judul</th>
                <th>Kategori</th>
                <th>Lokasi</th>
                <th>Deskripsi</th>
            </tr>
            
            @foreach ($post as $posts)
            <tr>
                <td><a href="/dashboard/posts/{{ $posts->id }}/edit" class="btn btn-warning">Ubah</a></td>
                <form action="/dashboard/posts/{{ $posts->id }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <td><button type="submit" class="btn btn-danger" id="btnHapus" onclick="return confirm('Are you Sure ?');">Hapus</button></td>
                </form>
                <td>{{ $posts->id }}</td>
                <td>{{ $posts->judul }}</td>
                <td>{{ $posts->category->name }}</td>
                <td>{{ $posts->lokasi }}</td>
                <td>{{ $posts->deskripsi }}</td>
            </tr>
            @endforeach
        </table>
 
    </div>

    @yield('dashboard.posts.create')

    @yield('dashboard.posts.edit')
@endsection