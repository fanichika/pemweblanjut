<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class BeritaController extends Controller
{
    public function index()
    {
        $beritas = Berita::with('kategori')->where('user_id', Auth::id())->get();
        return view('berita.index', compact('beritas'));
    }

    public function create()
    {
       if (!in_array(auth()->user()->role, ['wartawan', 'admin'])) {
       abort(403, 'Hanya wartawan atau admin yang boleh menyimpan berita.');
    }


        $kategoris = Kategori::all();
        return view('berita.create', compact('kategoris'));
    }

    public function store(Request $request)
    {
       if (!in_array(auth()->user()->role, ['wartawan', 'admin'])) {
        abort(403, 'Hanya wartawan atau admin yang boleh menyimpan berita.');
    }


        $request->validate([
            'judul' => 'required',
            'isi' => 'required',
            'kategori_id' => 'required',
            'gambar' => 'image|mimes:jpg,png,jpeg,gif|max:2048'
        ]);

        $gambarPath = null;
        if ($request->hasFile('gambar')) {
            $gambarPath = $request->file('gambar')->store('gambar', 'public');
        }

        Berita::create([
            'judul' => $request->judul,
            'isi' => $request->isi,
            'kategori_id' => $request->kategori_id,
            'user_id' => auth()->id(),
            'gambar' => $gambarPath,
            'status' => 'draft'
        ]);

        return redirect()->route('berita.index')->with('success', 'Berita berhasil disimpan sebagai draft.');
    }


    // edit, update, destroy menyusul jika kamu ingin
}
