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
                            <form action="/delete-parent/{{ $item->id }}" method="post">
                                @csrf
                                @method('delete')
                                <button> <i class="fa-solid fa-user-xmark"></i>Delete</button>
                            </form>
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
                    @foreach ($antibody as $item)
                    <tr data-id="{{ $item->id }}">
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->nama_imunisasi }}</td>
                        <td>{{ $item->tanggal_pemberian }}</td>
                        <td>{{ $item->dosis }}</td>
                        <td><button onclick="OpenModalEditAntibody({{ $item->id }})">
                                <i class="fa-solid fa-user-pen"></i>
                            </button>
                           <form action="/imunisasi/delete/{{ $item->id }}" method="post">
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
                   @foreach ($history as $item)
                   <tr data-id="{{ $item->id }}">
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->penyakit }}</td>
                    <td>{{ $item->tanggal_diagnosis }}</td>
                    <td>{{ $item->pengobatan }}</td>
                    <td>{{ $item->catatan }}</td>
                    <td><button onclick="OpenEditHistory({{ $item->id }})">
                            <i class="fa-solid fa-user-pen"></i>
                        </button>
                        <form action="/history/delete/{{ $child->id }}" method="post">
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
                  @foreach ($assesment as $item)
                  <tr data-id="{{ $item->id }}">
                    <td></td>
                    <td>{{ $item->tanggal_assesmen }}</td>
                    <td>{{ $item->IMT }}</td>
                    <td>{{ $item->status_gizi }}</td>
                    <td>{{ $item->saran }}</td>
                    <td><button onclick="EditNutrition({{ $item->id }})">
                            <i class="fa-solid fa-user-pen"></i>
                        </button>
                        <form action="/assesmen_gizi/{{ $item->id }}/destroy" method="post">
                            @csrf
                            @method('delete')
                            <button><i class="fa-solid fa-user-xmark"></i></button>
                        </form>
                    </td>
                </tr>
                  @endforeach
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
                    @foreach ($tumbuh as $item)
                    <tr data-id="{{ $item->id }}">
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->usia }}</td>
                        <td>{{ $item->berat_badan }}</td>
                        <td>{{ $item->tinggi_badan }}</td>
                        <td>{{ $item->lingkar_kepala }}</td>
                        <td>{{ $item->tahap_perkembangan }}</td>
                        <td><button onclick="OpenModalEditTumbuh({{ $item->id }})">
                                <i class="fa-solid fa-user-pen"></i>
                            </button>
                            <form action="/tumbuh/{{ $item->id }}/destroy" method="post">
                                @csrf
                                @method('delete')
                                <button><i class="fa-solid fa-user-xmark"></i></button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
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
        <form action="/edit-parent/{{ $child->id }}" method="post">
            @csrf
            @method('patch')
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
            <div class="action-edit">
                <button>Ubah</button>
                <button onclick="Cancel()">Batal</button>
            </div>
        </form>
    </div>
</div>
<!-- modal untuk tambah Imunisasi -->
<div class="modal-create-antibody">
    <div class="content">
       <form action="/add_antibody/{{ $child->id }}}" method="post">
        @csrf
        <table>
            <tr>
                <td>Nama Imunisasi</td>
                <td>:</td>
                <td><input type="text" name="name" id=""></td>
            </tr>
            <tr>
                <td>Tanggal Pemberian</td>
                <td>:</td>
                <td><input type="date" name="date" id=""></td>
            </tr>
            <tr>
                <td>Dosis</td>
                <td>:</td>
                <td><input type="text" name="dosis" id=""></td>
            </tr>
        </table>
        <div class="action-create">
            <button>Tambah</button>
            <button onclick="CancelAntibodyCreate()">Batal</button>
        </div>
    </form>
    </div>
</div>
<!-- modal edit Imunisasi -->
<div class="modal-edit-antibody">
    <div class="content">
        <form action="/edit-antibody/{{ $child->id }}" method="post">
        @csrf
        @method('patch')
        <table>
            <tr>
                <td>Nama Imunisasi</td>
                <td>:</td>
                <td><input type="text" name="name" id=""></td>
            </tr>
            <tr>
                <td>Tanggal Pemberian</td>
                <td>:</td>
                <td><input type="date" name="date" id=""></td>
            </tr>
            <tr>
                <td>Dosis</td>
                <td>:</td>
                <td><input type="text" name="dosis" id=""></td>
            </tr>
        </table>
        <div class="action-edit">
            <button>Edit</button>
            <button onclick="CancelEditAntibody()">Batal</button>
        </div>
    </form>
    </div>
</div>
<!-- modal tambah riwayat kesehatan anak -->
<div class="modal-create-history">
    <div class="content">
        <form action="/history/{{ $child->id }}" method="post">
            @csrf
            <table>
                <tr>
                    <td>Penyakit</td>
                    <td>:</td>
                    <td><input type="text" name="penyakit" id=""></td>
                </tr>
                <tr>
                    <td>Tanggal Diagnosis</td>
                    <td>:</td>
                    <td> <input type="date" name="tanggal" id=""></td>
                </tr>
                <tr>
                    <td>Pengobatan</td>
                    <td>:</td>
                    <td><input type="text" name="pengobatan" id=""></td>
                </tr>
                <tr>
                    <td>Catatan</td>
                    <td>:</td>
                    <td><input type="text" name="catatan" id=""></td>
                </tr>
            </table>
            <div class="action-create">
                <button>Tambah</button>
                <button>Cancel</button>
            </div>
        </form>
    </div>
</div>
<div class="modal-edit-history">
    <div class="content">
        <form method="post" action="/edit-history/{{ $child->id }}">
            @csrf
            @method('patch');
            <table>
                <tr>
                    <td>Penyakit</td>
                    <td>:</td>
                    <td><input type="text" name="penyakit" id=""></td>
                </tr>
                <tr>
                    <td>Tanggal Diagnosis</td>
                    <td>:</td>
                    <td> <input type="date" name="tanggal" id=""></td>
                </tr>
                <tr>
                    <td>Pengobatan</td>
                    <td>:</td>
                    <td><input type="text" name="pengobatan" id=""></td>
                </tr>
                <tr>
                    <td>Catatan</td>
                    <td>:</td>
                    <td><input type="text" name="catatan" id=""></td>
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
        <form action="/assesmen_gizi/{{ $child->id }}" method="post">
            @csrf
            <table>
                <tr>
                    <td>Tanggal Assesmen</td>
                    <td>:</td>
                    <td><input type="date" name="tanggal" id=""></td>
                </tr>
                <tr>
                    <td>IMT</td>
                    <td>:</td>
                    <td> <input type="text" name="imt" id=""></td>
                </tr>
                <tr>
                    <td>Status Gizi</td>
                    <td>:</td>
                    <td><input type="text" name="status" id=""></td>
                </tr>
                <tr>
                    <td>Saran</td>
                    <td>:</td>
                    <td><input type="text" name="saran" id=""></td>
                </tr>
            </table>
            <div class="action-create">
                <button>Tambah</button>
                <button>Batal</button>
            </div>
        </form>
    </div>
</div>
<!-- modal edit nutrition -->
<div class="modal-edit-nutrition">
    <div class="content">
        <form action="/edit-nutrition/{{ $child->id }}" method="post">
            @csrf
            @method('patch')
            <table>
                <tr>
                    <td>Tanggal Assesmen</td>
                    <td>:</td>
                    <td><input type="date" name="tanggal" id=""></td>
                </tr>
                <tr>
                    <td>IMT</td>
                    <td>:</td>
                    <td> <input type="text" name="imt" id=""></td>
                </tr>
                <tr>
                    <td>Status Gizi</td>
                    <td>:</td>
                    <td><input type="text" name="status" id=""></td>
                </tr>
                <tr>
                    <td>Saran</td>
                    <td>:</td>
                    <td><input type="text" name="saran" id=""></td>
                </tr>
            </table>
        <div class="action-edit">
            <button>Ubah</button>
            <button>Batal</button>
        </div>
    </form>
    </div>
</div>
<!-- modal create tumbuh embangan_dan_pertumbuhan/{{ $child->id }}" method="post">
        @csrf
        <table>-->
<div class="modal-create-tumbuh">
    <div class="content">
      <form action="/perkembangan_dan_pertumbuhan/{{ $child->id }}" method="POST">
        @csrf
        <table>
            <tr>
                <td>Usia</td>
                <td>:</td>
                <td><input type="number" name="usia" id=""></td>
            </tr>
            <tr>
                <td>Berat badan</td>
                <td>:</td>
                <td> <input type="number" name="berat" id=""></td>
            </tr>
            <tr>
                <td>Tinggi badan</td>
                <td>:</td>
                <td><input type="number" name="tinggi" id=""></td>
            </tr>
            <tr>
                <td>Lingkar kepala</td>
                <td>:</td>
                <td><input type="number" name="lingkar" id=""></td>
            </tr>
            <tr>
                <td>Tahap perkembangan</td>
                <td>:</td>
                <td><input type="text" name="tahap" id=""></td>
            </tr>
        </table>
        <div class="action-create">
            <button>Tambah</button>
            <button>Batal</button>
        </div>
      </form>
    </div>
</div>
<!-- modal edit tumbuh -->
<div class="modal-edit-tumbuh">
    <div class="content">
        <form action="/edit-tumbuh/{{ $child->id }}" method="post">
            @csrf
            @method('patch')
            <table>
                <tr>
                    <td>Usia</td>
                    <td>:</td>
                    <td><input type="number" name="usia" id=""></td>
                </tr>
                <tr>
                    <td>Berat badan</td>
                    <td>:</td>
                    <td> <input type="number" name="berat" id=""></td>
                </tr>
                <tr>
                    <td>Tinggi badan</td>
                    <td>:</td>
                    <td><input type="number" name="tinggi" id=""></td>
                </tr>
                <tr>
                    <td>Lingkar kepala</td>
                    <td>:</td>
                    <td><input type="number" name="lingkar" id=""></td>
                </tr>
                <tr>
                    <td>Tahap perkembangan</td>
                    <td>:</td>
                    <td><input type="text" name="tahap" id=""></td>
                </tr>
            </table>
            <div class="action-edit">
                <button>Ubah</button>
                <button>Batal</button>
            </div>
        </form>
    </div>
</div>
@endsection
