@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Approval Berita (Editor)</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-striped">
        <thead>
            <tr><th>Judul</th><th>Penulis</th><th>Aksi</th></tr>
        </thead>
        <tbody>
            @forelse($beritas as $b)
                <tr>
                    <td>{{ $b->judul }}</td>
                    <td>{{ $b->user->name }}</td>
                    <td>
                        <form action="{{ route('approval.update', $b->id) }}" method="POST" class="d-inline">
                            @csrf @method('PATCH')
                            <button name="status" value="published" class="btn btn-sm btn-success">Publish</button>
                            <button name="status" value="draft" class="btn btn-sm btn-warning">Tolak</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr><td colspan="3">Tidak ada berita draft.</td></tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
