<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

class ApprovalController extends Controller
{
    public function index()
    {
        // izinkan editor dan admin
        if (!in_array(auth()->user()->role, ['editor', 'admin'])) {
            abort(403);
        }

        $beritas = Berita::where('status', 'draft')->get();
        return view('approval.index', compact('beritas'));
    }

    public function update(Request $request, Berita $berita)
    {
        // izinkan editor dan admin
        if (!in_array(auth()->user()->role, ['editor', 'admin'])) {
            abort(403);
        }

        $berita->update([
            'status' => $request->status,
        ]);

        return redirect()->route('approval.index')->with('success', 'Status berhasil diperbarui!');
    }
}
