@extends('layouts.admin')

@section('title', 'Daftar Berita')

@section('content')
<h1 class="h3 mb-4 text-gray-800">Daftar Berita</h1>

<a href="{{ route('berita.create') }}" class="btn btn-primary mb-3">Tambah Berita</a>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>Judul</th>
            <th>Status</th>
            <th>Kategori</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($beritas as $berita)
        <tr>
            <td>{{ $berita->judul }}</td>
            <td>{{ $berita->status }}</td>
            <td>{{ $berita->kategori->nama }}</td>
            <td>
                <a href="{{ route('berita.edit', $berita->id) }}" class="btn btn-warning btn-sm">Edit</a>
                <form action="{{ route('berita.destroy', $berita->id) }}" method="POST" class="d-inline">
                    @csrf @method('DELETE')
                    <button class="btn btn-danger btn-sm">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
