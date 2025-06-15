<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\ApprovalController;

Route::middleware(['auth'])->group(function () {
    Route::get('/approval', [ApprovalController::class, 'index'])->name('approval.index');
    Route::patch('/approval/{berita}', [ApprovalController::class, 'update'])->name('approval.update');
});

Route::middleware(['auth'])->group(function () {
    Route::resource('berita', BeritaController::class);
});

Route::get('/redirect', function () {
    $user = auth()->user();

    if ($user->role === 'admin') {
        return redirect('/admin');
    } elseif ($user->role === 'editor') {
        return redirect('/editor');
    } elseif ($user->role === 'wartawan') {
        return redirect('/wartawan');
    }

    return redirect('/dashboard');
})->middleware('auth');


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
