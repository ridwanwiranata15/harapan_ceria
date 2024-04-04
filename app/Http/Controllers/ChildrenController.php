<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Orang_tua;
use App\Models\Pasien;
use App\Models\Imunisasi;
use App\Models\Riwayat_kesehatan_anak;
use App\Models\Assesmen_gizi;
use App\Models\Pertumbuhan_dan_perkembangan;

use function Laravel\Prompts\error;

class ChildrenController extends Controller
{
    public function detail_child($id)
    {
        $child = Pasien::find($id);
        $parents = Orang_tua::where('pasien_id', $child->id)->get();
        $antiBody = Imunisasi::where('pasien_id', $child->id)->get();
        $history = Riwayat_kesehatan_anak::where('pasien_id', $child->id)->get();
        $assesment = Assesmen_gizi::where('id_pasien', $child->id)->get();
        $tumbuh = Pertumbuhan_dan_perkembangan::where('id_pasien', $child->id)->get();
        return view('detail-child',  ['child' => $child,
            'parent' => $parents,
            'antibody' => $antiBody,
            'history' => $history,
            'assesment' => $assesment,
            'tumbuh' => $tumbuh
    ]);
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
    public function edit_parent(Request $request, $id)
    {
        Orang_tua::find($id)->update([
            'pasien_id' => Pasien::find($id)->id,
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'tanggal_lahir' => $request->tanggal,
            'nomor_telepon' => $request->telepon,
            'hubungan_dengan_pasien' => $request->hubungan
        ]);
        return redirect()->back();
    }
    public function delete_parent($id){
        $parent = Orang_tua::find($id);
        $parent->delete();
        return redirect()->back();
    }
    public function add_antibody(Request $request, $id)
    {
       Imunisasi::create([
        'pasien_id' => Pasien::find($id)->id,
        'nama_imunisasi' => $request->name,
        'tanggal_pemberian' => $request->date,
        'dosis' => $request->dosis
       ]);
       return redirect()->back();
    }
    public function destroy_antibody($id){
        Imunisasi::find($id)->delete();
        return redirect()->back();

    }
    public function edit_antibody(Request $request, $id)
    {
        Imunisasi::find($id)->update([
            'pasien_id' => Pasien::find($id)->id,
        'nama_imunisasi' => $request->name,
        'tanggal_pemberian' => $request->date,
        'dosis' => $request->dosis
        ]);
        return redirect()->back();
    }
    public function Riwayat_kesehatan_anak(Request $request, $id)
    {
        Riwayat_kesehatan_anak::create([
            'pasien_id' => Pasien::find($id)->id,
            'penyakit' => $request->penyakit,
            'tanggal_diagnosis' => $request->tanggal,
            'pengobatan' => $request->pengobatan,
            'catatan' => $request->catatan
        ]
        );
        return redirect()->back();
    }
    public function edit_history($id,Request $request)
    {
       $history = Riwayat_kesehatan_anak::where('pasien_id', $id);
       $history->update([
        'pasien_id' => Pasien::find($id)->id,
            'penyakit' => $request->penyakit,
            'tanggal_diagnosis' => $request->tanggal,
            'pengobatan' => $request->pengobatan,
            'catatan' => $request->catatan
       ]);
       return redirect()->back();
    }
    public function delete_history($id)
    {
        $history = Riwayat_kesehatan_anak::find($id);
        $history->delete();
        return redirect()->back();
    }

    public function assesmen_gizi_create(Request $request, $id)
    {
        Assesmen_gizi::create([
            'id_pasien' => Pasien::find($id)->id,
            'tanggal_assesmen' => $request->tanggal,
            'IMT' => $request->imt,
            'status_gizi' => $request->status,
            'saran' =>$request->saran
        ]);
        return redirect()->back();
    }
    public function edit_nutrition(Request $request, $id){
        Assesmen_gizi::where('id_pasien', $id)->update([
            'id_pasien' => Pasien::find($id)->id,
            'tanggal_assesmen' => $request->tanggal,
            'IMT' => $request->imt,
            'status_gizi' => $request->status,
            'saran' =>$request->saran
        ]);
        return redirect()->back();
    }
    public function assesmen_gizi_destroy($id)
    {
        $Assesment = Assesmen_gizi::find($id);
        $Assesment->delete();
        return redirect()->back();
    }
    public function perkembangan_dan_pertumbuhan(Request $request,$id){
        Pertumbuhan_dan_perkembangan::create([
            'id_pasien' => Pasien::find($id)->id, 'usia' => $request->usia,
            'berat_badan' => $request->berat, 'tinggi_badan' => $request->tinggi, 'lingkar_kepala' =>$request->lingkar,
            'tahap_perkembangan' => $request->tahap
        ]);
        return redirect()->back();
    }
    public function edit_tumbuh(Request $request, $id)
    {
        Pertumbuhan_dan_perkembangan::where('id_pasien', $id)->update([
            'id_pasien' => Pasien::find($id)->id, 'usia' => $request->usia,
            'berat_badan' => $request->berat, 'tinggi_badan' => $request->tinggi, 'lingkar_kepala' =>$request->lingkar,
            'tahap_perkembangan' => $request->tahap
        ]);
        return redirect()->back();
    }

    public function tumbuh_destroy($id)
    {
        $Assesment = Pertumbuhan_dan_perkembangan::find($id);
        $Assesment->delete();
        return redirect()->back();
    }
}
