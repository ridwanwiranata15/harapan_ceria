<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rekam_medis;
use App\Models\Pendaftaran;
use LDAP\Result;

class MedisController extends Controller
{
    public function index()
    {
        $daftar = Pendaftaran::all();
        $medis = Rekam_medis::all();
        return view('medis', ['daftar' => $daftar, 'medis' => $medis]);
    }
    public function create(Request $request)
    {
        Rekam_medis::create([
            'id_pendaftaran' => $request->daftar,
            'anamnesis' => $request->anamesis,
            'pemeriksaan_fisik' => $request->fisik,
            'diagnosis' => $request->diagnosis,
            'tindakan' => $request->tindakan,
            'resep_obat' => $request->obat,
            'pronogsis' => $request->pronogsis
        ]);
        return redirect()->back();
    }
    public function edit(Request $request, $id)
    {
        Rekam_medis::find($id)->update([
            'anamnesis' => $request->anamesis,
            'pemeriksaan_fisik' => $request->fisik,
            'diagnosis' => $request->diagnosis,
            'tindakan' => $request->tindakan,
            'resep_obat' => $request->obat,
            'pronogsis' => $request->pronogsis
        ]);
        return redirect()->back();
    }
    public function destroy($id)
    {
        Rekam_medis::find($id)->delete();
        return redirect()->back();
    }
}
