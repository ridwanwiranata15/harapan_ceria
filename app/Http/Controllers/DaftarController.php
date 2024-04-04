<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pendaftaran;
use App\Models\Dokter;
use App\Models\Pasien;
use App\Models\Poliklinik;


use Mockery\Generator\StringManipulation\Pass\Pass;
use Carbon\Carbon;
use Illuminate\Queue\Jobs\RedisJob;
use Illuminate\Support\Facades\Redirect;

class DaftarController extends Controller
{
    public function index()
    {
        return view('daftar', [
            'pasien' => Pasien::all(),
            'dokter' => Dokter::all(),
            'poliklinik' => Poliklinik::all(),
            'daftar' => Pendaftaran::all()
        ]);
    }
    public function create(Request $request)
    {
        Pendaftaran::create([
            'pasien_id' => $request->pasien,
            'dokter_id' => $request->dokter,
            'poliklinik_id' => $request->poliklinik,
            'tanggal_pendaftaran' => Carbon::now()->toDateString(),
            'jam_pendaftaran' => Carbon::now('Asia/Jakarta')->toTimeString(),
            'keluhan' => $request->keluhan,
            'status' => $request->status
        ]);
        return redirect()->back();
    }
    public function edit(Request $request, $id)
    {
        Pendaftaran::find($id)->update([
            'pasien_id' => $request->pasien,
            'dokter_id' => $request->dokter,
            'poliklinik_id' => $request->poliklinik,
            'tanggal_pendaftaran' => Carbon::now()->toDateString(),
            'jam_pendaftaran' => Carbon::now('Asia/Jakarta')->toTimeString(),
            'keluhan' => $request->keluhan,
            'status' => $request->status
        ]);
        return redirect()->back();
    }
    public function delete($id)
    {
        Pendaftaran::find($id)->delete();
        return redirect()->back();
    }
}
