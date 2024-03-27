@extends('layouts')
@section('title', 'Data Pasien')
@section('data')
<button id="create">Tambah Pasien</button>
    <div class="d-flex">
        <div class="dewasa">
            <input type="radio" name="payment" id="cash">
            <label for="cash" class="cash">Dewasa</label>
        </div>
        <div class="anak">
            <input type="radio" name="payment" id="credit">
            <label for="credit" class="cash">Anak Anak</label>
        </div>
    </div>
    <div class="modal-edit-adult">
        <div class="modal-edit-adult-content">
            <h1>Ubah Pasien</h1>
            <form action="" method="post">
                @method('patch')
                @csrf
                <table>
                    <tr>
                        <td>Nama</td>
                        <td>:</td>
                        <td><input type="text" name="nama" id=""></td>
                    </tr>
                    <tr>
                        <td>Jenis Kelamin</td>
                        <td>:</td>
                        <td>
                            <select name="jk" id="">
                                <option value="laki-laki">Laki laki</option>
                                <option value="perempuan">Perempuan</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Tanggal lahir</td>
                        <td>:</td>
                        <td><input type="date" name="tanggal" id=""></td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td>:</td>
                        <td><input type="text" name="alamat" id=""></td>
                    </tr>
                    <tr>
                        <td>Nomor Telepon</td>
                        <td>:</td>
                        <td><input type="text" name="nomor" id=""></td>
                    </tr>
                    <tr>
                        <td>Golongan Darah</td>
                        <td>:</td>
                        <td>
                        <select name="darah" id="">
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="AB">AB</option>
                            <option value="O">O</option>
                        </select></td>
                    </tr>
                    <tr>
                        <td>Status</td>
                        <td>:</td>
                        <td>
                            <select name="status" id="">
                                <option value="menikah">Menikah</option>
                                <option value="belum_menikah">Belum Menikah</option>
                                <option value="balita/anak">Balita / Anak</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Agama</td>
                        <td>:</td>
                        <td>
                            <select name="agama" id="">
                                <option value="islam">Islam</option>
                                <option value="Kristen">Kristen</option>
                                <option value="katolik">Katolik</option>
                                <option value="buddha">Buddha</option>
                                <option value="hindu">Hindu</option>
                                <option value="konghuchu">kong hu chu</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Pekerjaan</td>
                        <td>:</td>
                        <td><input type="text" name="kerja" id=""></td>
                    </tr>
                    <tr>
                        <td>Nama Asuransi</td>
                        <td>:</td>
                        <td><input type="text" name="asuransi" id=""></td>
                    </tr>
                    <tr>
                        <td>Nomor Asuransi</td>
                        <td>:</td>
                        <td><input type="text" name="nomor_asuransi" id=""></td>
                    </tr>
                </table>
            </form>
            <div class="action-edit">
                <button>Ubah</button>
                <button>Batal</button>
            </div>
        </div>
    </div>
    <div class="container-adult">
        <h1>Dewasa</h1>

        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>Tanggal lahir</th>
                    <th>Alamat</th>
                    <th>Nomor Telepon</th>
                    <th>Golongan Darah</th>
                    <th>Status Pernikahan</th>
                    <th>Agama</th>
                    <th>Pekerjaan</th>
                    <th>Nama Asuransi</th>
                    <th>Nomor Asuransi</th>
                    <th>Aksi</th>
                </tr>
            <tbody>

               @foreach ($patiens as $patien)
               <tr data-id="{{ $patien->id }}">
                <td>{{ $loop->iteration }}</td>
                <td>{{ $patien->nama }}</td>
                <td>{{ $patien->jenis_kelamin }}</td>
                <td>{{ $patien->tanggal_lahir }}</td>
                <td>{{ $patien->alamat }}</td>
                <td>{{ $patien->nomor_telepon }}</td>
                <td>{{ $patien->golongan_darah }}</td>
                <td>{{ $patien->status_pernikahan }}</td>
                <td>{{ $patien->agama }}</td>
                <td>{{ $patien->pekerjaan }}</td>
                <td>{{ $patien->nama_asuransi }}</td>
                <td>{{ $patien->nomor_assuransi }}</td>
                <td>
                    <button onclick="OpenEditAdult({{ $patien->id }})"><i class="fa-solid fa-user-pen"></i></button>
                    <button> <i class="fa-solid fa-user-xmark"></i></button>
                    <button onclick="Detail({{ $patien->id }})"> <i class="fa-solid fa-circle-info fa-lg"></i></button>
                </td>
            </tr>
               @endforeach
            </tbody>
            </thead>
        </table>
    </div>

    <div class="container-adult-create">
        <div class="container-adult-create-content">
            <h1>Tambah Pasien</h1>
           <form action="/create-patien" method="post">
            @csrf
            <table>
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td><input type="text" name="nama" id=""></td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>:</td>
                    <td>
                        <select name="jk" id="">
                            <option value="laki-laki">Laki laki</option>
                            <option value="perempuan">Perempuan</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Tanggal lahir</td>
                    <td>:</td>
                    <td><input type="date" name="tanggal" id=""></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td><input type="text" name="alamat" id=""></td>
                </tr>
                <tr>
                    <td>Nomor Telepon</td>
                    <td>:</td>
                    <td><input type="text" name="nomor" id=""></td>
                </tr>
                <tr>
                    <td>Golongan Darah</td>
                    <td>:</td>
                    <td>
                    <select name="darah" id="">
                        <option value="A">A</option>
                        <option value="B">B</option>
                        <option value="AB">AB</option>
                        <option value="O">O</option>
                    </select></td>
                </tr>
                <tr>
                    <td>Status</td>
                    <td>:</td>
                    <td>
                        <select name="status" id="status">
                            <option value="Menikah">Menikah</option>
                            <option value="belum">Belum Menikah</option>
                            <option value="balita">Balita / Anak</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Agama</td>
                    <td>:</td>
                    <td>
                        <select name="agama" id="">
                            <option value="islam">Islam</option>
                            <option value="kristen">Kristen</option>
                            <option value="katolik">Katolik</option>
                            <option value="buddha">Buddha</option>
                            <option value="hindu">Hindu</option>
                            <option value="konghuchu">kong hu chu</option>
                        </select>
                    </td>
                </tr>
                <tr id="pekerjaan_row">
                    <td>Pekerjaan</td>
                    <td>:</td>
                    <td><input type="text" name="kerja" id="pekerjaan"></td>
                </tr>
                <tr>
                    <td>Nama Asuransi</td>
                    <td>:</td>
                    <td><input type="text" name="asuransi" id=""></td>
                </tr>
                <tr>
                    <td>Nomor Asuransi</td>
                    <td>:</td>
                    <td><input type="text" name="nomor_asuransi" id=""></td>
                </tr>
            </table>
            <div class="action-create">
                <button type="submit">Tambah</button>
                <button type="button">Batal</button>
            </div>
        </form>
        </div>
    </div>
    <div class="container-child">
        <h1>Anak anak</h1>
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>Tanggal lahir</th>
                    <th>Alamat</th>
                    <th>Nomor Telepon</th>
                    <th>Golongan Darah</th>
                    <th>Status</th>
                    <th>Agama</th>
                    <th>Pekerjaan</th>
                    <th>Nama Asuransi</th>
                    <th>Nomor Asuransi</th>
                    <th>Aksi</th>
                </tr>
            <tbody>
                @foreach ($toddlers as $item)

                <tr data-id="{{ $item->id }}">
                    <td>{{ $loop->iteration }}</td>
                <td>{{ $item->nama }}</td>
                <td>{{ $item->jenis_kelamin }}</td>
                <td>{{ $item->tanggal_lahir }}</td>
                <td>{{ $item->alamat }}</td>
                <td>{{ $item->nomor_telepon }}</td>
                <td>{{ $item->golongan_darah }}</td>
                <td>{{ $item->status_pernikahan }}</td>
                <td>{{ $item->agama }}</td>
                <td>{{ $item->pekerjaan }}</td>
                <td>{{ $item->nama_asuransi }}</td>
                <td>{{ $item->nomor_assuransi }}</td>
                    <td>
                        <button onclick="EditChild({{ $item->id }})">
                            <i class="fa-solid fa-user-pen"></i>
                        </button>
                        <button>
                            <i class="fa-solid fa-user-xmark"></i>
                        </button>
                        <button onclick="DetailChild({{ $item->id }})">
                            <i class="fa-solid fa-circle-info fa-lg"></i>
                        </button>
                    </td>
                </tr>
                @endforeach
            </tbody>
            </thead>
        </table>
    </div>

    <!--Modal Detail Pasien-->
    <div class="modal-detail-patien">
        <div class="modal-detail-patien-content">
            <table>
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>:</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Tanggal lahir</td>
                    <td>:</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Nomor Telepon</td>
                    <td>:</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Golongan Darah</td>
                    <td>:</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Status</td>
                    <td>:</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Agama</td>
                    <td>:</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Pekerjaan</td>
                    <td>:</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Asuransi</td>
                    <td>:</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Nomor Asuransi</td>
                    <td>:</td>
                    <td>121907890</td>
                </tr>
            </table>
            <button>Keluar</button>
        </div>
    </div>
    <!-- modal edit child -->
    <div class="modal-edit-child">
        <div class="content">
           <form action="" method="post">
            @method('patch')
            @csrf
            <table>
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td><input type="text" name="nama" id=""></td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>:</td>
                    <td>
                        <select name="jk" id="">
                            <option value="">Laki laki</option>
                            <option value="">Perempuan</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Tanggal lahir</td>
                    <td>:</td>
                    <td><input type="date" name="tanggal" id=""></td>
                </tr>
                <tr>
                    <td>Alamat </td>
                    <td>:</td>
                    <td><input type="text" name="alamat" id=""></td>
                </tr>
                <tr>
                    <td>Golongan Darah</td>
                    <td>:</td>
                    <td>
                    <select name="darah" id="">
                        <option value="">A</option>
                        <option value="">B</option>
                        <option value="">AB</option>
                        <option value="">O</option>
                    </select></td>
                </tr>
                <tr>
                    <td>Agama</td>
                    <td>:</td>
                    <td>
                        <select name="agama" id="">
                            <option value="">Islam</option>
                            <option value="">Kristen</option>
                            <option value="">Katolik</option>
                            <option value="">Buddha</option>
                            <option value="">Hindu</option>
                            <option value="">kong hu chu</option>
                        </select>
                    </td>
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

