<?php

namespace App\Http\Controllers;

use App\Models\Obat;
use Illuminate\Http\Request;

class ObatController extends Controller
{
    public function index()
    {
        $obat  = Obat::all();
        return view('obat', ['obat' => $obat]);
    }
    public function create(Request $request)
    {
        Obat::create([
            'nama' => $request->nama,
            'dosis' => $request->dosis,
            'aturan_pakai' => $request->aturan,
            'kategori' => $request->kategori,
            'stok' => $request->stok,
            'harga' => $request->harga,
        ]);
        return redirect()->back();
    }
    public function edit(Request $request, $id)
    {
        Obat::find($id)->update([
            'nama' => $request->nama,
            'dosis' => $request->dosis,
            'aturan_pakai' => $request->aturan,
            'kategori' => $request->kategori,
            'stok' => $request->stok,
            'harga' => $request->harga
        ]);
        return redirect()->back();
    }
    public function destroy($id)
    {
        Obat::find($id)->delete();
        return redirect()->back();
    }
}
