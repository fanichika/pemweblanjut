@extends('layouts.admin')

@section('title', 'Edit Profil')

@section('content')
<div class="row">
    <div class="col-lg-8">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Edit Profil</h6>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('profile.update') }}">
                    @csrf
                    @method('PATCH')

                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" name="name" class="form-control" value="{{ old('name', auth()->user()->name) }}">
                        @error('name') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>

                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control" value="{{ old('email', auth()->user()->email) }}">
                        @error('email') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>

                    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
