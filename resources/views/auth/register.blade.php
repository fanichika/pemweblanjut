@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <h3 class="mb-4 text-center">Register</h3>
            <div class="card shadow">
                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <!-- Name -->
                        <div class="mb-3">
                            <label for="name" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required>
                            @error('name') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>

                        <!-- Email -->
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required>
                            @error('email') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>

                        <!-- Role -->
                        <div class="mb-3">
                            <label for="role" class="form-label">Daftar Sebagai</label>
                            <select id="role" name="role" class="form-select" required>
                                <option value="">-- Pilih Role --</option>
                                <option value="admin">Admin</option>
                                <option value="editor">Editor</option>
                                <option value="wartawan">Wartawan</option>
                            </select>
                            @error('role') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>

                        <!-- Password -->
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                            @error('password') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>

                        <!-- Confirm Password -->
                        <div class="mb-3">
                            <label for="password_confirmation" class="form-label">Konfirmasi Password</label>
                            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
                        </div>

                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary">Register</button>
                        </div>

                        <div class="mt-3 text-center">
                            <a href="{{ route('login') }}">Sudah punya akun? Login</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
