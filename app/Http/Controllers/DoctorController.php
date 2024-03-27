<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Dokter;

class DoctorController extends Controller
{
    public function Home()
    {
        $doctors = Dokter::all();
        return view('doctor', compact('doctors'));
    }
    public function create(Request $request)
    {
        $file = $request->file('foto');
        $path = date('Y-m-d') . '_' . $request->nama . '.' . $file->getClientOriginalExtension();
        Storage::disk('local')->put('public/' . $path, file_get_contents($file));

        Dokter::create([
            'nama' => $request->nama,
            'tanggal_lahir' => $request->tanggal,
            'nomor_telepon' => $request->telepon,
            'jenis_kelamin' => $request->jk,
            'spesialis' => $request->spesialis,
            'alamat' => $request->alamat,
            'nomor_SIP' => $request->sip,
            'email' => $request->email,
            'foto' => $path
        ]);
        return redirect()->back();
    }
    public function edit(Request $request, $id)
    {

        $file = $request->file('foto');
        $path = date('Y-m-d') . '_' . $request->nama . '.' . $file->getClientOriginalExtension();
        Storage::disk('local')->put('public/' . $path, file_get_contents($file));

        $doctor = Dokter::find($id);
        $doctor->update([
            'nama' => $request->nama,
            'tanggal_lahir' => $request->tanggal,
            'nomor_telepon' => $request->telepon,
            'jenis_kelamin' => $request->jk,
            'spesialis' => $request->spesialis,
            'alamat' => $request->alamat,
            'nomor_SIP' => $request->sip,
            'email' => $request->email,
            'foto' => $path
        ]);
        return redirect()->back();
    }
    public function delete($id)
    {
        $doctor = Dokter::find($id);
        $doctor->delete();
        return redirect()->back();
    }
}
