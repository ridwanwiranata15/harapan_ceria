@extends('layouts')
@section('title', 'poliklinik')
@section('data')
<button id="create">Tambah</button>
<div class="content">
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Lantai</th>
                <th>Ruangan</th>
                <th>Jam buka</th>
                <th>Jam tutup</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($poli as $item)
            <tr data-id="{{ $item->id }}">
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->nama }}</td>
                <td>{{ $item->lantai }}</td>
                <td>{{ $item->ruangan }}</td>
                <td>{{ $item->jam_buka }}</td>
                <td>{{ $item->jam_tutup }}</td>
                <td>
                    <button onclick="EditPoli({{ $item->id }})"> <i class="fa-solid fa-user-pen"></i></button>
                    <form action="/delete-poli/{{ $item->id }}" method="post">
                        @csrf
                        @method('delete')
                       <button type="submit">
                        <i class="fa-solid fa-user-xmark"></i>
                       </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
<div class="modal-create-poli">
    <div class="content">
       <form action="/create-poli" method="post">
            @csrf
            <table>
                <tr>
                    <td>Nama Poliklinik</td>
                    <td>:</td>
                    <td><input type="text" name="nama"></td>
                </tr>
                <tr>
                    <td>Lantai</td>
                    <td>:</td>
                    <td><input type="number" name="lantai"></td>
                </tr>
                <tr>
                    <td>Ruangan</td>
                    <td>:</td>
                    <td><input type="number" name="ruangan"></td>
                </tr>
                <tr>
                    <td>Jam buka</td>
                    <td>:</td>
                    <td><input type="time" name="buka"></td>
                </tr>
                <tr>
                    <td>Jam tutup</td>
                    <td>:</td>
                    <td><input type="time" name="tutup"></td>
                </tr>
            </table>
            <div class="action-create">
                <button>Tambah</button>
                <button type="button">Batal</button>
            </div>
       </form>
    </div>
</div>
<div class="modal-edit-poli">
    <div class="content">
       <form action="" method="post">
        @csrf
        <table>
            <tr>
                <td>Nama Poliklinik</td>
                <td>:</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Lantai</td>
                <td>:</td>
                <td><input type="number" name="lantai"></td>
            </tr>
            <tr>
                <td>Ruangan</td>
                <td>:</td>
                <td><input type="number" name="ruangan"></td>
            </tr>
            <tr>
                <td>Jam buka</td>
                <td>:</td>
                <td><input type="time" name="buka"></td>
            </tr>
            <tr>
                <td>Jam tutup</td>
                <td>:</td>
                <td><input type="time" name="tutup"></td>
            </tr>
        </table>
        @method('patch')
        <div class="action-edit">
            <button>Ubah</button>
            <button>Batal</button>
        </div>
       </form>
    </div>
</div>
@endsection
