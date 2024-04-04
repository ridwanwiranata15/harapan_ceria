@extends('layouts')
@section('data')
@section('title', 'Rekam Medis')
<button id="create">Tambah</button>
<div class="content">
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nomor pendaftaran</th>
                <th>Anamnesis</th>
                <th>Pemeriksaan fisik</th>
                <th>Diagnosis</th>
                <th>Tindakan</th>
                <th>Resep obat</th>
                <th>Pronogsis</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($medis as $item)
            <tr data-id="{{ $item->id }}">
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->pendaftaran->pasien->nama }}</td>
                <td>{{ $item->anamnesis}}</td>
                <td>{{ $item->pemeriksaan_fisik }}</td>
                <td>{{ $item->diagnosis }}</td>
                <td>{{ $item->tindakan }}</td>
                <td>{{ $item->resep_obat }}</td>
                <td>{{ $item->pronogsis }}</td>
                <td>
                    <button onclick="EditMedis({{ $item->id }})">
                        <i class="fa-solid fa-user-pen"></i>

                    </button>
                    <form action="/delete-medis/{{ $item->id }}" method="post">
                        @csrf
                        @method('delete')
                        <button>
                            <i class="fa-solid fa-user-xmark"></i>

                        </button>
                    </form>
                </td>
            </tr>

            @endforeach
        </tbody>
    </table>
</div>
<div class="modal-create-medis">
    <div class="content">
        <form method="post" id="CreateMedis">
            @csrf
            <table>
                <tr>
                    <td>Anamnesis</td>
                    <td>:</td>
                    <td>
                       <input type="text" name="anamesis" id="">
                    </td>
                </tr>
                <tr>
                    <td>Pemeriksaan fisik</td>
                    <td>:</td>
                    <td>
                       <input type="text" name="fisik" id="">
                    </td>
                </tr>
                <tr>
                    <td>Diagnosis</td>
                    <td>:</td>
                    <td>
                       <input type="text" name="diagnosis" id="">
                    </td>
                </tr>
                <tr>
                    <td>Tindakan</td>
                    <td>:</td>
                    <td>
                       <input type="text" name="tindakan" id="">
                    </td>
                </tr>
                <tr>
                    <td>Resep Obat</td>
                    <td>:</td>
                    <td>
                       <input type="text" name="obat" id="">
                    </td>
                </tr>
                <tr>
                    <td>Pronogsis</td>
                    <td>:</td>
                    <td>
                       <input type="text" name="pronogsis" id="">
                    </td>
                </tr>
            </table>
            <div class="action-create">
                <button onclick="Create()">Tambah</button>
                <button type="button">Batal</button>
            </div>
        </form>
    </div>
</div>
<div class="modal-edit-medis">
    <div class="content">
        <form method="post">
            @csrf
            @method('patch')
            <table>
                <tr>
                    <td>Nomor Pendaftaran</td>
                    <td>:</td>
                    <td>
                        <input type="text" name="" id="">
                    </td>
                </tr>
                <tr>
                    <td>Anamnesis</td>
                    <td>:</td>
                    <td>
                       <input type="text" name="anamesis" id="">
                    </td>
                </tr>
                <tr>
                    <td>Pemeriksaan fisik</td>
                    <td>:</td>
                    <td>
                       <input type="text" name="fisik" id="">
                    </td>
                </tr>
                <tr>
                    <td>Diagnosis</td>
                    <td>:</td>
                    <td>
                       <input type="text" name="diagnosis" id="">
                    </td>
                </tr>
                <tr>
                    <td>Tindakan</td>
                    <td>:</td>
                    <td>
                       <input type="text" name="tindakan" id="">
                    </td>
                </tr>
                <tr>
                    <td>Resep Obat</td>
                    <td>:</td>
                    <td>
                       <input type="text" name="obat" id="">
                    </td>
                </tr>
                <tr>
                    <td>Pronogsis</td>
                    <td>:</td>
                    <td>
                       <input type="text" name="pronogsis" id="">
                    </td>
                </tr>
            </table>
            <div class="action-edit">
                <button onclick="EditChange()">Edit</button>
                <button type="button">Batal</button>
            </div>
        </form>

    </div>
</div>
@endsection
