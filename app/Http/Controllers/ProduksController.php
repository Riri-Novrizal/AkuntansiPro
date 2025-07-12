<?php

namespace App\Http\Controllers;

use App\Models\Produks;
use Illuminate\Http\Request;

class ProduksController extends Controller
{
    public function index()
    {
        $produks = Produks::orderBy('nama')->get();
        return view('produks.index', compact('produks'));
    }

    public function create()
    {
        return view('produks.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'satuan' => 'required',
            'harga_beli' => 'required',
          
        ]);

        Produks::create($request->all());
        return redirect()->route('produks.index')->with('success', 'Produk berhasil ditambahkan');
    }

    public function show(string $id)
    {
        $produks = Produks::findOrFail($id);
        return view('produks.show', compact('produks'));
    }

    public function edit(string $id)
    {
        $produks = Produks::findOrFail($id);
        return view('produks.edit', compact('produks'));
    }

    public function update(Request $request, string $id)
    {
        $produks = Produks::findOrFail($id);

        $request->validate([
            'id' => 'required|unique:produks,id,' . $produks->id,
            'nama' => 'required',
            'satuan' => 'required',
            'harga_beli' => 'required'
        ]);

        $produks->update($request->all());
        return redirect()->route('produks.index')->with('success', 'Produk berhasil diperbarui');
    }

    public function destroy(string $id)
    {
        $produks = Produks::findOrFail($id);
        $produks->delete();

        return redirect()->route('produks.index')->with('success', 'Produk berhasil dihapus');
    }
}
