@extends('layouts')
@section('title', 'Data obat')
@section('data')
<button id="create">Tambah</button>
<div class="content">
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Obat</th>
                <th>Dosis</th>
                <th>Aturan Pakai</th>
                <th>Kategori</th>
                <th>Stok</th>
                <th>Harga</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
           @foreach ($obat as $item)
           <tr data-id="{{ $item->id }}">
            <td>{{ $loop->iteration }}</td>
            <td>{{$item->nama}}</td>
            <td>{{$item->dosis}}</td>
            <td>{{ $item->aturan_pakai }}</td>
            <td>{{ $item->kategori }}</td>
            <td>{{ $item->stok }}</td>
            <td>{{ $item->harga }}</td>
            <td>
                <button onclick="EditObat({{ $item->id }})">
                    <i class="fa-solid fa-user-pen"></i>
                </button>
                <form action="/delete-obat/{{ $item->id }}" method="post">
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
<div class="modal-create-obat">
    <div class="content">
        <form action="" method="post" id="addCreate">
            @csrf
            <table>
                <tr>
                    <td>Nama Obat</td>
                    <td>:</td>
                    <td>
                        <input type="text" name="nama">
                    </td>
                </tr>
                <tr>
                    <td>Dosis</td>
                    <td>:</td>
                    <td>
                       <input type="text" name="dosis" id="">
                    </td>
                </tr>
                <tr>
                    <td>Aturan pakai</td>
                    <td>:</td>
                    <td>
                       <input type="text" name="aturan" id="">
                    </td>
                </tr>
                <tr>
                    <td>Kategori</td>
                    <td>:</td>
                    <td>
                       <input type="text" name="kategori" id="">
                    </td>
                </tr>
                <tr>
                    <td>Stok</td>
                    <td>:</td>
                    <td>
                       <input type="text" name="stok" id="">
                    </td>
                </tr>
                <tr>
                    <td>Harga</td>
                    <td>:</td>
                    <td>
                       <input type="text" name="harga" id="">
                    </td>
                </tr>
            </table>
            <div class="action-create">
                <button onclick="SubmitCreate()">Tambah</button>
                <button>Batal</button>
            </div>
        </form>
    </div>
</div>
<div class="modal-edit-obat">
    <div class="content">
        <form method="post">
            @csrf
            @method('patch')
            <table>
                <tr>
                    <td>Nama Obat</td>
                    <td>:</td>
                    <td>
                        <input type="text" name="nama">
                    </td>
                </tr>
                <tr>
                    <td>Dosis</td>
                    <td>:</td>
                    <td>
                       <input type="text" name="dosis" id="">
                    </td>
                </tr>
                <tr>
                    <td>Aturan pakai</td>
                    <td>:</td>
                    <td>
                       <input type="text" name="aturan" id="">
                    </td>
                </tr>
                <tr>
                    <td>Kategori</td>
                    <td>:</td>
                    <td>
                       <input type="text" name="kategori" id="">
                    </td>
                </tr>
                <tr>
                    <td>Stok</td>
                    <td>:</td>
                    <td>
                       <input type="text" name="stok" id="">
                    </td>
                </tr>
                <tr>
                    <td>Harga</td>
                    <td>:</td>
                    <td>
                       <input type="text" name="harga" id="">
                    </td>
                </tr>
            </table>
            <div class="action-edit">
                <button type="button">Ubah</button>
                <button type="button">Batal</button>
            </div>
        </form>
    </div>
</div>
@endsection
