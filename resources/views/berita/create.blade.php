@extends('master')

@section('title', 'Tambah Berita')

@section('content')
    <h1 class="h3 mb-4 text-gray-800">Tambah Berita</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Ups!</strong> Ada masalah dengan inputan kamu:<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('berita.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
            <label for="judul">Judul Berita</label>
            <input type="text" name="judul" class="form-control" value="{{ old('judul') }}" required>
        </div>

        <div class="form-group">
            <label for="isi">Isi Berita</label>
            <textarea name="isi" class="form-control" rows="5" required>{{ old('isi') }}</textarea>
        </div>

        <div class="form-group">
            <label for="kategori_id">Kategori</label>
            <select name="kategori_id" class="form-control" required>
                <option value="">-- Pilih Kategori --</option>
                @foreach($kategoris as $kategori)
                    <option value="{{ $kategori->id }}">{{ $kategori->nama }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="gambar">Unggah Gambar</label>
            <input type="file" name="gambar" class="form-control-file">
        </div>

        <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Simpan sebagai Draft</button>
    </form>
@endsection
