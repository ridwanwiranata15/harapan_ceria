<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pasien;
use App\Models\Orang_tua;
use Illuminate\Support\Facades\Redirect;

class PatienController extends Controller
{
    public function index()
    {
        $patiens = Pasien::all();
        $toddler = Pasien::where('status_pernikahan', 'balita')->get();
        $adults = Pasien::whereIn('status_pernikahan', ['menikah', 'belum'])->get();

        return view('patien',
            ['patiens' => $adults],
            ['toddlers' => $toddler]
        );
    }
    public function create(Request $request)
    {
        Pasien::create([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'tanggal_lahir' => $request->tanggal,
            'nomor_telepon' => $request->nomor,
            'jenis_kelamin' => $request->jk,
            'golongan_darah' => $request->darah,
            'status_pernikahan' => $request->status,
            'agama' => $request->agama,
            'pekerjaan' => $request->kerja,
            'nama_asuransi' => $request->asuransi,
            'nomor_assuransi' => $request->nomor_asuransi,
        ]);
        return redirect()->back();
    }
    public function edit(Request $request, $id)
    {
        $pasien = Pasien::find($id);
        $pasien->update([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'tanggal_lahir' => $request->tanggal,
            'nomor_telepon' => $request->nomor,
            'jenis_kelamin' => $request->jk,
            'golongan_darah' => $request->darah,
            'status_pernikahan' => $request->status,
            'agama' => $request->agama,
            'pekerjaan' => $request->kerja,
            'nama_asuransi' => $request->asuransi,
            'nomor_assuransi' => $request->nomor_asuransi,
        ]);
        return redirect()->back();
    }
    public function detail_child($id)
    {
        $child = Pasien::find($id);

        $parents = Orang_tua::where('pasien_id', $child->id)->get();
        return view('detail-child', ['child' => $child], ['parent' => $parents]);
    }
    public function create_parent(Request $request, $id)
    {
        Orang_tua::create([
            'pasien_id' => Pasien::find($id)->id,
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'tanggal_lahir' => $request->tanggal,
            'nomor_telepon' => $request->telepon,
            'hubungan_dengan_pasien' => $request->hubungan
        ]);
        return redirect()->back();
    }
}
