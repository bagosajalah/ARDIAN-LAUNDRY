<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use Illuminate\Http\Request;

class PelangganController extends Controller
{
    public function index()
    {
        $pelanggan = Pelanggan::all();
        return view('pelanggan.index', compact('pelanggan'));
    }

    public function create()
    {
        return view('pelanggan.create');
    }

    public function store(Request $request)
    {
        Pelanggan::create([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'telepon' => $request->telepon
        ]);

        return redirect('/pelanggan');
    }

    public function edit($id)
{
    $pelanggan = Pelanggan::findOrFail($id);
    return view('pelanggan.edit', compact('pelanggan'));
}

public function update(Request $request, $id)
{
    $pelanggan = Pelanggan::findOrFail($id);

    $pelanggan->update([
        'nama' => $request->nama,
        'alamat' => $request->alamat,
        'telepon' => $request->telepon
    ]);

    return redirect('/pelanggan');
}

public function destroy($id)
{
    $pelanggan = Pelanggan::findOrFail($id);
    $pelanggan->delete();

    return redirect('/pelanggan');
}
}