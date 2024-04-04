@extends('layouts')
@section('title', 'Data jadwal pertemuan')
@section('data')
<button id="create">Tambah Jadwal</button>
<table>
    <thead>
        <th>No</th>
        <th>Nama Dokter</th>
        <th>Poliklinik</th>
        <th>Pasien</th>
        <th>Hari</th>
        <th>Jam buka</th>
        <th>Jam tutup</th>
        <th>Aksi</th>
    </thead>
    <tbody>
        @foreach ($jadwal as $item)
        <tr data-id="{{ $item->id }}">
            <td>{{ $loop->iteration }}</td>
            <td>{{ $item->dokter->nama }}</td>
            <td>{{ $item->poli->nama}}</td>
            <td>{{ $item->pasien->nama }}</td>
            <td>{{ $item->hari }}</td>
            <td>{{ $item->jam_buka }}</td>
            <td>{{ $item->jam_tutup }}</td>
            <td>
                <button onclick="OpenEditSchedule({{ $item->id }})"><i class="fa-solid fa-user-pen"></i>
                    </button>
                <form action="/delete-jadwal/{{ $item->id }}" method="post">
                    @csrf
                    @method('delete')
                    <button type="submit"> <i class="fa-solid fa-user-xmark"></i></button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
<div class="modal-edit-schedule">
    <div class="content">
        <form action="" method="POST">
            @csrf
            @method('patch');
            <table>
                <tr>
                    <td>Pilih Dokter</td>
                    <td>:</td>
                    <td name="dokter"></td>
                    <td>
                        <select name="dokter" id="">
                            @foreach ($dokter as $item)
                                 <option value="{{ $item->id }}">{{ $item->nama }}</option>
                            @endforeach
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Pilih Poliklinik</td>
                    <td>:</td>
                    <td name="poli">Saraf</td>
                    <td>
                        <select name="poli" id="">
                            @foreach ($poli as $item)
                            <option value="{{ $item->id }}">{{ $item->nama }}</option>

                            @endforeach
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Pilih Pasien</td>
                    <td>:</td>
                    <td name="pasien"></td>
                    <td>
                        <select name="pasien" id="">
                            <option value="">Pilih Pasien</option>
                            @foreach ($pasien as $item)
                                 <option value="{{ $item->id }}">{{ $item->nama }}</option>
                            @endforeach
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Pilih hari</td>
                    <td>:</td>
                    <td name="hari">Senin</td>
                    <td><select name="hari" id="">
                            <option value="senin">Senin</option>
                            <option value="selasa">Selasa</option>
                            <option value="rabu">Rabu</option>
                            <option value="kamis">Kamis</option>
                            <option value="jumat">Jumat</option>
                            <option value="sabtu">Sabtu</option>
                            <option value="ahad">Ahad</option>
                        </select>
                    </td>

                </tr>

                <tr>
                    <td>Jam buka</td>
                    <td>:</td>
                    <td name="buka">12:23</td>
                    <td><input type="time" name="buka" id=""></td>
                </tr>
                <tr>
                    <td>Jam tutup</td>
                    <td>:</td>
                    <td name="tutup"></td>
                    <td><input type="time" name="tutup" id=""></td>
                </tr>
            </table>
            <div class="action-edit">
                <button>Ubah</button>
                <button type="button">Cancel</button>
            </div>
        </form>
    </div>
</div>
<div class="modal-create-schedule">
    <div class="content">
        <form action="/create-jadwal" method="post">
            @csrf
            <table>
                <tr>
                    <td>Pilih Dokter</td>
                    <td>:</td>
                    <td>
                        <select name="dokter" id="">
                            <option value="">Pilih Dokter</option>
                            @foreach ($dokter as $item)
                                 <option value="{{ $item->id }}">{{ $item->nama }}</option>
                            @endforeach

                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Pilih Poliklinik</td>
                    <td>:</td>
                    <td>
                        <select name="poli" id="">
                            <option value="">Pilih Poliklinik</option>
                            @foreach ($poli as $item)
                            <option value="{{ $item->id }}">{{ $item->nama }}</option>

                            @endforeach
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Pilih Pasien</td>
                    <td>:</td>
                    <td>
                        <select name="pasien" id="">
                            <option value="">Pilih Pasien</option>
                            @foreach ($pasien as $item)
                                 <option value="{{ $item->id }}">{{ $item->nama }}</option>
                            @endforeach
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Pilih hari</td>
                    <td>:</td>
                    <td><select name="hari" id="">
                            <option value="senin">Senin</option>
                            <option value="selasa">Selasa</option>
                            <option value="rabu">Rabu</option>
                            <option value="kamis">Kamis</option>
                            <option value="jumat">Jumat</option>
                            <option value="sabtu">Sabtu</option>
                            <option value="ahan">Ahad</option>
                        </select>
                    </td>

                </tr>
                <tr>
                    <td>Jam buka</td>
                    <td>:</td>

                    <td><input type="time" name="buka" id=""></td>
                </tr>
                <tr>
                    <td>Jam tutup</td>
                    <td>:</td>

                    <td><input type="time" name="tutup" id=""></td>
                </tr>
            </table>
            <div class="action-create">
                <button type="submit">Tambah</button>
                <button type="button">Cancel</button>
            </div>
        </form>
    </div>
</div>
@endsection
