<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Poliklinik;

class PoliController extends Controller
{
    public function index()
    {
        return view('poli', ['poli' => Poliklinik::all()]);
    }
    public function create(Request $request)
    {
        Poliklinik::create([
            'nama' => $request->nama,
            'lantai' => $request->lantai,
            'ruangan' => $request->ruangan,
            'jam_buka' => $request->buka,
            'jam_tutup' => $request->tutup
        ]);
        return redirect()->back();
    }
    public function edit(Request $request, $id)
    {
    Poliklinik::find($id)->update([
        'nama' => $request->nama,
        'lantai' => $request->lantai,
        'ruangan' => $request->ruangan,
        'jam_buka' => $request->buka,
        'jam_tutup' => $request->tutup
    ]);
    return redirect()->back();
    }
    public function destroy($id)
    {
        Poliklinik::find($id)->delete();
        return redirect()->back();
    }
}
