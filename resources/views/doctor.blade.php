@extends('layouts')
@section('title', 'Data Dokter')
@section('create')
<button id="create">Tambah Dokter</button>
<div class="modal-create">
    <div class="modal-create-content">
        <form action="/create-doctor" method="post" enctype="multipart/form-data">
            @csrf
            <ul>
                <li>
                    <label for="" class="doctor">Nama Dokter</label>
                    <input type="text" name="nama">
                </li>
                <li>
                    <label for="" class="doctor">Spesialis</label>
                    <select name="spesialis" id="">
                        <option value="umum" >Umum</option>
                        <option value="anak">Anak</option>
                        <option value="bedah">Bedah</option>
                        <option value="kandungan">Kandungan</option>
                        <option value="penyakit_dalam">Penyakit Dalam</option>
                        <option value="mata">Mata</option>
                        <option value="kelamin">Kelamin</option>
                        <option value="jantung">Jantung</option>
                        <option value="saraf">Saraf</option>
                    </select>
                </li>
                <li>
                    <label for="" class="doctor">Alamat</label>
                    <input type="text" name="alamat">
                </li>
                <li>
                    <label for="">Tanggal lahir</label>
                    <input type="date" name="tanggal">
                </li>
                <li>
                    <label for="">Jenis Kelamin</label>
                    <label><input type="radio" name="jk" id="" value="laki-laki">Laki laki</label>
                    <label><input type="radio" name="jk" id="" value="perempuan">Perempuan</label>
                </li>
                <li>
                    <label for="">Nomor Telepon</label>
                    <input type="text" name="telepon">
                </li>
                <li>
                    <label for="">Nomor SIP</label>
                    <input type="text" name="sip">
                </li>
                <li>
                    <label for="">Email</label>
                    <input type="text" name="email">
                </li>
                <li>
                    <label for="">Foto</label>
                    <input type="file" name="foto">
                </li>
            </ul>
            <button id="tambah">Tambah</button>
            <button id="batal">Batal</button>
        </form>
    </div>
</div>
@endsection
@section('data')
<div class="doctor">
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Spesialis</th>
                <th>Alamat</th>
                <th>Tanggal lahir</th>
                <th>Jenis Kelamin</th>
                <th>Nomor Telepon</th>
                <th>Nomor SIP</th>
                <th>Email</th>
                <th>Foto</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($doctors as $doctor)
            <tr data-id="{{ $doctor->id }}">
                <td>{{ $loop->iteration }}</td>
                <td>{{ $doctor->nama }}</td>
                <td>{{ $doctor->spesialis }}</td>
                <td>{{ $doctor->alamat }}</td>
                <td>{{ $doctor->tanggal_lahir }}</td>
                <td>{{ $doctor->jenis_kelamin }}</td>
                <td>{{ $doctor->nomor_telepon }}</td>
                <td>{{ $doctor->nomor_SIP }}</td>
                <td>{{ $doctor->email }}</td>
                <td><img src="{{url('storage/'.$doctor->foto)}}" alt=""></td>
                <td>
                    <button onclick="OpenDetail({{ $doctor->id }})">
                        <i class="fa-solid fa-circle-info fa-lg"></i>

                    </button>
                    <button onclick="OpenEdit({{ $doctor->id }})">
                        <i class="fa-solid fa-user-pen"></i>

                    </button>
                    <form action="/delete-doctor/{{ $doctor->id }}" method="post">
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
@endsection
@section('detail')
<div class="modal-detail">
    <div class="modal-detail-main">
        <div class="content">
            <img src="../img/jpeg-optimizer_RIDWAN WIRANATA.jpeg" alt="">
            <div class="data">
                <table>
                    <tr>
                        <td>Nama Dokter</td>
                        <td>:</td>
                        <td>Nama Dokter</td>
                    </tr>
                    <tr>
                        <td>Spesialis</td>
                        <td>:</td>
                        <td>Nama Dokter</td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td>:</td>
                        <td>Nama Dokter</td>
                    </tr>
                    <tr>
                        <td>Tanggal lahir</td>
                        <td>:</td>
                        <td>Nama Dokter</td>
                    </tr>
                    <tr>
                        <td>Jenis Kelamin</td>
                        <td>:</td>
                        <td>Nama Dokter</td>
                    </tr>
                    <tr>
                        <td>Nomor Telepon</td>
                        <td>:</td>
                        <td>Nama Dokter</td>
                    </tr>
                    <tr>
                        <td>Nomor SIP</td>
                        <td>:</td>
                        <td>Nama Dokter</td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>:</td>
                        <td>Nama Dokter</td>
                    </tr>
                </table>
                <button>Close</button>
            </div>
        </div>
    </div>
</div>
@endsection
@section('edit')
<div class="show-edit">
    <div class="show-edit-content">
        <form method="post" enctype="multipart/form-data">
            @csrf
            @method('patch')
            <div class="image-upload">
                <ul>
                    <li>
                        <img src="" alt="">
                    </li>
                    <li>
                        <input type="file" name="foto" id="">
                    </li>
                </ul>
            </div>
            <div class="table-doctor">
                <table>
                    <tr>
                        <td>Nama Dokter</td>
                        <td>:</td>
                        <td><input type="text" name="nama" id=""></td>
                    </tr>
                    <tr>
                        <td>Spesialis</td>
                        <td>:</td>
                        <td>
                            <select name="spesialis" id="">
                                <option value="umum" >Umum</option>
                                <option value="anak">Anak</option>
                                <option value="bedah">Bedah</option>
                                <option value="kandungan">Kandungan</option>
                                <option value="penyakit_dalam">Penyakit Dalam</option>
                                <option value="mata">Mata</option>
                                <option value="kelamin">Kelamin</option>
                                <option value="jantung">Jantung</option>
                                <option value="saraf">Saraf</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td>:</td>
                        <td><input type="tel" name="alamat" id=""></td>
                    </tr>
                    <tr>
                        <td>Tanggal lahir</td>
                        <td>:</td>
                        <td><input type="date" name="tanggal" id=""></td>
                    </tr>
                    <tr>
                        <td>Jenis Kelamin</td>
                        <td>:</td>
                        <td>
                            <label><input type="radio" name="jk" id="" value="laki-laki">Laki laki</label>
                            <label><input type="radio" name="jk" id="" value="perempuan">Perempuan</label>
                        </td>
                    </tr>
                    <tr>
                        <td>Nomor Telepon</td>
                        <td>:</td>
                        <td><input type="text" name="telepon" id=""></td>
                    </tr>
                    <tr>
                        <td>Nomor SIP</td>
                        <td>:</td>
                        <td><input type="text" name="sip" id=""></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>:</td>
                        <td><input type="email" name="email" id=""></td>
                    </tr>
                </table>
                <div class="button-action">
                    <button>Update</button>
                    <button type="button">Cancel</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
