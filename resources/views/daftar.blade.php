@extends('layouts')
@section('title', 'Pendaftaran Pasien')
@section('data')
<button id="create">Tambah</button>
<div class="content">
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Pasien</th>
                <th>Nama Dokter</th>
                <th>Poli klinik</th>
                <th>Tanggal pendaftaran</th>
                <th>Jam pendaftaran</th>
                <th>Keluhan</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
           @foreach ($daftar as $item)
           <tr data-id="{{ $item->id }}">
            <td>{{$loop->iteration}}</td>
            <td>{{ $item->pasien->nama }}</td>
            <td>{{ $item->dokter->nama }}</td>
            <td>{{ $item->poliklinik->nama }}</td>
            <td>{{ $item->tanggal_pendaftaran}}</td>
            <td>{{ $item->jam_pendaftaran }}</td>
            <td>{{ $item->keluhan }}</td>
            <td>{{ $item->status }}</td>
            <td>
                <button onclick="EditDaftar({{ $item->id }})"><i class="fa-solid fa-user-pen"></i></button>
                <form action="/delete-daftar/{{$item->id}}" method="post">
                    @csrf
                    @method('delete')
                    <button>
                        <i class="fa-solid fa-user-xmark"></i>
                    </button>
                </form>
            </td>
            <td></td>
        </tr>
           @endforeach
        </tbody>
    </table>
</div>
<div class="modal-create-daftar">
    <div class="content">
        <form action="/create-daftar" method="post">
            @csrf
            <table>
                <tr>
                    <td>Nama Pasien</td>
                    <td>:</td>
                    <td>
                        <select name="pasien" id="">
                            @foreach ($pasien as $item)
                            <option value="{{ $item->id }}">{{ $item->nama }}</option>
                            @endforeach
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Nama Dokter</td>
                    <td>:</td>
                    <td>
                        <select name="dokter" id="">
                            @foreach ($dokter as $item)
                            <option value="{{ $item->id }}">{{ $item->nama }}</option>

                            @endforeach
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Poliklinik</td>
                    <td>:</td>
                    <td>
                        <select name="poliklinik" id="">
                            @foreach ($poliklinik as $item)
                            <option value="{{ $item->id }}">{{ $item->nama }}</option>
                            @endforeach
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Tanggal pendaftaran</td>
                    <td>:</td>
                    <td>
                        <input type="date" value="">
                    </td>
                </tr>
                <tr>
                    <td>Jam pendaftaran</td>
                    <td>:</td>
                    <td>
                        <input type="time" name="" id="">
                    </td>
                </tr>
                <tr>
                    <td>Keluhan</td>
                    <td>:</td>
                    <td>
                        <input type="text" name="keluhan">
                    </td>
                </tr>
                <tr>
                    <td>Status</td>
                    <td>:</td>
                    <td>
                        <input type="text" name="status" id="">
                    </td>
                </tr>
            </table>
            <div class="action-create">
                <button>Tambah</button>
                <button type="button">Cancel</button>
            </div>
        </form>
    </div>
</div>
<div class="modal-edit-daftar">
    <div class="content">
        <form action="" method="post">
            @csrf
            @method('patch')
            <table>
                <tr>
                    <td>Nama Pasien</td>
                    <td>:</td>
                    <td>
                        <select name="pasien" id="">
                            @foreach ($pasien as $item)
                            <option value="{{ $item->id }}">{{ $item->nama }}</option>
                            @endforeach
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Nama Dokter</td>
                    <td>:</td>
                    <td>
                        <select name="dokter" id="">
                            @foreach ($dokter as $item)
                            <option value="{{ $item->id }}">{{ $item->nama }}</option>

                            @endforeach
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Poliklinik</td>
                    <td>:</td>
                    <td>
                        <select name="poliklinik" id="">
                            @foreach ($poliklinik as $item)
                            <option value="{{ $item->id }}">{{ $item->nama }}</option>
                            @endforeach
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Tanggal pendaftaran</td>
                    <td>:</td>
                    <td>
                        <input type="date" value="">
                    </td>
                </tr>
                <tr>
                    <td>Jam pendaftaran</td>
                    <td>:</td>
                    <td>
                        <input type="time" name="" id="">
                    </td>
                </tr>
                <tr>
                    <td>Keluhan</td>
                    <td>:</td>
                    <td>
                        <input type="text" name="keluhan">
                    </td>
                </tr>
                <tr>
                    <td>Status</td>
                    <td>:</td>
                    <td>
                        <input type="text" name="status" id="">
                    </td>
                </tr>
            </table>
            <div class="action-edit">
                <button>Ubah</button>
                <button type="button">Cancel</button>
            </div>
        </form>
    </div>
</div>
@endsection
