<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rawat_inap;
use App\Models\Dokter;
use App\Models\Pasien;



class RawatController extends Controller
{
    public function index()
    {
        $dokter = Dokter::all();
        $pasien = Pasien::all();
        $rawat = Rawat_inap::all();
        return view('rawat', ['dokter' => $dokter, 'pasien' => $pasien, 'rawat' => $rawat]);
    }
     public function create(Request $request)
     {
        Rawat_inap::create([
            'pasien_id' => $request->pasien,
            'dokter_id' => $request->dokter,
            'tanggal_masuk' => $request->masuk,
            'tanggal_keluar' => $request->keluar,
            'kelas' => $request->kelas,
            'diagnosis' => $request->diagnosis,
            'tindakan' => $request->tindakan,
            'ruangan' => $request->ruangan,
        ]);
        return redirect()->back();
     }
     public function edit(Request $request, $id)
     {
        Rawat_inap::find($id)->update([
            'pasien_id' => $request->pasien,
            'dokter_id' => $request->dokter,
            'tanggal_masuk' => $request->masuk,
            'tanggal_keluar' => $request->keluar,
            'ruangan' => $request->ruangan,
            'kelas' => $request->kelas,
            'diagnosis' => $request->diagnosis,
            'tindakan' => $request->tindakan
        ]);
        return redirect()->back();
     }
     public function delete($id)
     {
        Rawat_inap::find($id)->delete();
        return redirect()->back();
     }
}
