@extends('layouts')
@section('title', 'data Anak')
@section('data')
<div class="container">
    <div class="child">
        <table>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td>{{ $child->nama }}</td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td>{{ $child->jenis_kelamin }}</td>
            </tr>
            <tr>
                <td>Tanggal lahir</td>
                <td>:</td>
                <td>{{ $child->tanggal_lahir }}</td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td>{{ $child->alamat }}</td>
            </tr>
            <tr>
                <td>Golongan Darah</td>
                <td>:</td>
                <td>{{ $child->golongan_darah }}</td>
            </tr>
            <tr>
                <td>Agama</td>
                <td>:</td>
                <td>{{ $child->agama }}</td>
            </tr>
        </table>
    </div>
    <div class="more">
        <div class="parent">
            <div class="title">
                <h2>Orang tua Wali</h2>
                <div class="button">
                    <button>Tambah</button>
                </div>
            </div>
            <table>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Wali</th>
                        <th>Alamat Wali</th>
                        <th>Tanggal lahir</th>
                        <th>Nomor Telepon</th>
                        <th>Hubungan dengan pasien</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($parent as $item)
                    <tr data-id="{{ $item->id }}">
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->nama }}</td>
                        <td>{{ $item->alamat }}</td>
                        <td>{{ $item->tanggal_lahir }}</td>
                        <td>{{ $item->nomor_telepon }}</td>
                        <td>{{ $item->hubungan_dengan_pasien }}</td>
                        <td>
                            <button onclick="OpenModalEditParent({{ $item->id }})"> <i
                                    class="fa-solid fa-user-pen"></i>Edit</button>
                            <button> <i class="fa-solid fa-user-xmark"></i>Delete</button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="imunitation">
            <div class="title">
                <h2>Imunisasi yang telah di berikan</h2>
                <div class="button">
                    <button>Tambah</button>
                </div>
            </div>
            <table>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Imunisasi</th>
                        <th>Tanggal pemberian</th>
                        <th>Dosis</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr data-id="1">
                        <td>1</td>
                        <td>Campak</td>
                        <td>12 desember</td>
                        <td>none</td>
                        <td><button onclick="OpenModalEditAntibody(1)">
                                <i class="fa-solid fa-user-pen"></i>
                            </button>
                            <button>
                                <i class="fa-solid fa-user-xmark"></i>
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="history">
            <div class="title">
                <h2>Riwayat Kesehatan Anak</h2>
                <div class="button">
                    <button>Tambah</button>
                </div>
            </div>
            <table>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Penyakit</th>
                        <th>Tanggal diagnosis</th>
                        <th>Pengobatan</th>
                        <th>Catatan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr data-id="1">
                        <td>1</td>
                        <td>Campak</td>
                        <td>12 desember</td>
                        <td>none</td>
                        <td>dede</td>
                        <td><button onclick="OpenEditHistory(1)">
                                <i class="fa-solid fa-user-pen"></i>
                            </button>
                            <button> <i class="fa-solid fa-user-xmark"></i></button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="nutrition">
            <div class="title">
                <h2>Assesmen Gizi</h2>
                <div class="button">
                    <button>Tambah</button>
                </div>
            </div>
            <table>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Tanggal Assesmen</th>
                        <th>IMT</th>
                        <th>Status Gizi</th>
                        <th>Saran</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr data-id="1">
                        <td>1</td>
                        <td>Campak</td>
                        <td>12 desember</td>
                        <td>none</td>
                        <td>abah</td>
                        <td><button onclick="EditNutrition(1)">
                                <i class="fa-solid fa-user-pen"></i>
                            </button>
                            <button><i class="fa-solid fa-user-xmark"></i></button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="tumbuh">
            <div class="title">
                <h2>Perkembangan dan pertumbuhan</h2>
                <div class="button">
                    <button>Tambah</button>
                </div>
            </div>
            <table>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Usia</th>
                        <th>Berat badan</th>
                        <th>Tinggi Badan</th>
                        <th>Lingkar Kepala</th>
                        <th>Tahap Perkembangan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr data-id="1">
                        <td>1</td>
                        <td>12</td>
                        <td>34</td>
                        <td>123</td>
                        <td>20</td>
                        <td>Baik</td>
                        <td><button onclick="OpenModalEditTumbuh(1)">
                                <i class="fa-solid fa-user-pen"></i>
                            </button>
                            <button> <i class="fa-solid fa-user-xmark"></i></button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- modal tambah data orang tua wali -->
<div class="modal-create-parent">
    <div class="content">
        <form action="/create-parent/{{ $child->id }}" method="post">
            @csrf
            <table>
                <tr>
                    <td>Nama Orang Tua Wali</td>
                    <td>:</td>
                    <td><input type="text" name="nama" id=""></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td><input type="text" name="alamat" id=""></td>
                </tr>
                <tr>
                    <td>Tanggal lahir</td>
                    <td>:</td>
                    <td><input type="date" name="tanggal" id=""></td>
                </tr>
                <tr>
                    <td>Nomor Telepon</td>
                    <td>:</td>
                    <td><input type="text" name="telepon" id=""></td>
                </tr>
                <tr>
                    <td>Hubungan dengan pasien</td>
                    <td>:</td>
                    <td>
                        <select name="hubungan" id="">
                            <option value="kandung">Kandung</option>
                            <option value="tiri">Tiri</option>
                            <option value="pengasuh">Pengasuh</option>
                        </select>
                    </td>
                </tr>
            </table>
            <div class="action-create">
                <button>Tambah</button>
                <button>Batal</button>
            </div>
        </form>
    </div>
</div>
<div class="modal-edit-parent">
    <div class="content">
        <table>
            <tr>
                <td>Nama Orang Tua Wali</td>
                <td>:</td>
                <td><input type="text" name="" id=""></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td><input type="text" name="" id=""></td>
            </tr>
            <tr>
                <td>Tanggal lahir</td>
                <td>:</td>
                <td><input type="date" name="" id=""></td>
            </tr>
            <tr>
                <td>Nomor Telepon</td>
                <td>:</td>
                <td><input type="text" name="" id=""></td>
            </tr>
            <tr>
                <td>Hubungan dengan pasien</td>
                <td>:</td>
                <td>
                    <select name="" id="">
                        <option value="">Kandung</option>
                        <option value="">Tiri</option>
                        <option value="">Pengasuh</option>
                    </select>
                </td>
            </tr>
        </table>
        <div class="action-edit">
            <button>Ubah</button>
            <button onclick="Cancel()">Batal</button>
        </div>
    </div>
</div>
<!-- modal untuk tambah Imunisasi -->
<div class="modal-create-antibody">
    <div class="content">
        <table>
            <tr>
                <td>Nama Imunisasi</td>
                <td>:</td>
                <td><input type="text" name="" id=""></td>
            </tr>
            <tr>
                <td>Tanggal Pemberian</td>
                <td>:</td>
                <td><input type="date" name="" id=""></td>
            </tr>
            <tr>
                <td>Dosis</td>
                <td>:</td>
                <td><input type="text" name="" id=""></td>
            </tr>
        </table>
        <div class="action-create">
            <button>Tambah</button>
            <button onclick="CancelAntibodyCreate()">Batal</button>
        </div>
    </div>
</div>
<!-- modal edit Imunisasi -->
<div class="modal-edit-antibody">
    <div class="content">
        <table>
            <tr>
                <td>Nama Imunisasi</td>
                <td>:</td>
                <td><input type="text" name="" id=""></td>
            </tr>
            <tr>
                <td>Tanggal Pemberian</td>
                <td>:</td>
                <td><input type="date" name="" id=""></td>
            </tr>
            <tr>
                <td>Dosis</td>
                <td>:</td>
                <td><input type="text" name="" id=""></td>
            </tr>
        </table>
        <div class="action-edit">
            <button>Edit</button>
            <button onclick="CancelEditAntibody()">Batal</button>
        </div>
    </div>
</div>
<!-- modal tambah riwayat kesehatan anak -->
<div class="modal-create-history">
    <div class="content">
        <table>
            <tr>
                <td>Penyakit</td>
                <td>:</td>
                <td><input type="text" name="" id=""></td>
            </tr>
            <tr>
                <td>Tanggal Diagnosis</td>
                <td>:</td>
                <td> <input type="date" name="" id=""></td>
            </tr>
            <tr>
                <td>Pengobatan</td>
                <td>:</td>
                <td><input type="text" name="" id=""></td>
            </tr>
            <tr>
                <td>Catatan</td>
                <td>:</td>
                <td><input type="text" name="" id=""></td>
            </tr>
        </table>
        <div class="action-create">
            <button>Tambah</button>
            <button>Cancel</button>
        </div>
    </div>
</div>
<div class="modal-edit-history">
    <div class="content">
        <form method="post">
            <table>
                <tr>
                    <td>Penyakit</td>
                    <td>:</td>
                    <td><input type="text" name="" id=""></td>
                </tr>
                <tr>
                    <td>Tanggal Diagnosis</td>
                    <td>:</td>
                    <td> <input type="date" name="" id=""></td>
                </tr>
                <tr>
                    <td>Pengobatan</td>
                    <td>:</td>
                    <td><input type="text" name="" id=""></td>
                </tr>
                <tr>
                    <td>Catatan</td>
                    <td>:</td>
                    <td><input type="text" name="" id=""></td>
                </tr>
            </table>
            <div class="action-edit">
                <button type="submit">Ubah</button>
                <button type="button">Cancel</button>
            </div>
        </form>
    </div>
</div>
<!-- modal create nutrition -->
<div class="modal-create-nutrition">
    <div class="content">
        <table>
            <tr>
                <td>Tanggal Assesmen</td>
                <td>:</td>
                <td><input type="date" name="" id=""></td>
            </tr>
            <tr>
                <td>IMT</td>
                <td>:</td>
                <td> <input type="text" name="" id=""></td>
            </tr>
            <tr>
                <td>Status Gizi</td>
                <td>:</td>
                <td><input type="text" name="" id=""></td>
            </tr>
            <tr>
                <td>Saran</td>
                <td>:</td>
                <td><input type="text" name="" id=""></td>
            </tr>
        </table>
        <div class="action-create">
            <button>Tambah</button>
            <button>Batal</button>
        </div>
    </div>
</div>
<!-- modal edit nutrition -->
<div class="modal-edit-nutrition">
    <div class="content">
        <table>
            <tr>
                <td>Tanggal Assesmen</td>
                <td>:</td>
                <td><input type="date" name="" id=""></td>
            </tr>
            <tr>
                <td>IMT</td>
                <td>:</td>
                <td> <input type="text" name="" id=""></td>
            </tr>
            <tr>
                <td>Status Gizi</td>
                <td>:</td>
                <td><input type="text" name="" id=""></td>
            </tr>
            <tr>
                <td>Saran</td>
                <td>:</td>
                <td><input type="text" name="" id=""></td>
            </tr>
        </table>
        <div class="action-edit">
            <button>Ubah</button>
            <button>Batal</button>
        </div>
    </div>
</div>
<!-- modal create tumbuh -->
<div class="modal-create-tumbuh">
    <div class="content">
        <table>
            <tr>
                <td>Usia</td>
                <td>:</td>
                <td><input type="number" name="" id=""></td>
            </tr>
            <tr>
                <td>Berat badan</td>
                <td>:</td>
                <td> <input type="number" name="" id=""></td>
            </tr>
            <tr>
                <td>Tinggi badan</td>
                <td>:</td>
                <td><input type="number" name="" id=""></td>
            </tr>
            <tr>
                <td>Lingkar kepala</td>
                <td>:</td>
                <td><input type="number" name="" id=""></td>
            </tr>
            <tr>
                <td>Tahap perkembangan</td>
                <td>:</td>
                <td><input type="text" name="" id=""></td>
            </tr>
        </table>
        <div class="action-create">
            <button>Tambah</button>
            <button>Batal</button>
        </div>
    </div>
</div>
<!-- modal edit tumbuh -->
<div class="modal-edit-tumbuh">
    <div class="content">
        <table>
            <tr>
                <td>Usia</td>
                <td>:</td>
                <td><input type="number" name="" id=""></td>
            </tr>
            <tr>
                <td>Berat badan</td>
                <td>:</td>
                <td> <input type="number" name="" id=""></td>
            </tr>
            <tr>
                <td>Tinggi badan</td>
                <td>:</td>
                <td><input type="number" name="" id=""></td>
            </tr>
            <tr>
                <td>Lingkar kepala</td>
                <td>:</td>
                <td><input type="number" name="" id=""></td>
            </tr>
            <tr>
                <td>Tahap perkembangan</td>
                <td>:</td>
                <td><input type="text" name="" id=""></td>
            </tr>
        </table>
        <div class="action-edit">
            <button>Ubah</button>
            <button>Batal</button>
        </div>
    </div>
</div>
@endsection
