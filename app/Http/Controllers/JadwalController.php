<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dokter;
use App\Models\Poliklinik;
use App\Models\Jadwal;
use App\Models\Pasien;
use Mockery\Generator\StringManipulation\Pass\Pass;

class JadwalController extends Controller
{
    public function index()
    {
        $dokter = Dokter::all();
        $poli = Poliklinik::all();
        $pasien = Pasien::all();
        $jadwal = Jadwal::all();
        return view('jadwal', ['dokter' => $dokter, 'poli' => $poli, 'pasien' => $pasien, 'jadwal' => $jadwal]);
    }
    public function create(Request $request)
    {
        Jadwal::create([
            'id_dokter' => $request->dokter,
            'id_pasien' => $request->pasien,
            'id_poliklinik' => $request->poli,
            'hari' => $request->hari,
            'jam_buka' => $request->buka,
            'jam_tutup' => $request->tutup
        ]);
        return redirect()->back();
    }
    public function edit(Request $request, $id)
    {
        Jadwal::find($id)->update([
            'id_dokter' => $request->dokter,
            'id_pasien' => $request->pasien,
            'id_poliklinik' => $request->poli,
            'hari' => $request->hari,
            'jam_buka' => $request->buka,
            'jam_tutup' => $request->tutup
        ]);
        return redirect()->back();
    }
    public function destroy($id)
    {
        Jadwal::find($id)->delete();
        return redirect()->back();
    }
}
