@extends('layouts');
@section('title', 'Rawat inap');
@section('data')
<button id="create">Tambah</button>
<div class="content">
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Pasien</th>
                <th>Nama Dokter</th>
                <th>Tanggal masuk</th>
                <th>Tanggal keluar</th>
                <th>Ruangan</th>
                <th>Kelas</th>
                <th>Diagnosis</th>
                <th>Tindakan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($rawat as $item)
            <tr data-id="{{ $item->id }}">
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->pasien->nama }}</td>
                <td>{{ $item->dokter->nama }}</td>
                <td>{{ $item->tanggal_masuk }}</td>
                <td>{{ $item->tanggal_keluar }}</td>
                <td>{{ $item->ruangan }}</td>
                <td>{{ $item->kelas }}</td>
                <td>{{ $item->diagnosis }}</td>
                <td>{{ $item->tindakan }}</td>
                <td>
                    <button onclick="EditRawat({{ $item->id }})"><i class="fa-solid fa-user-pen"></i></button>
                    <button>
                        <form action="delete-rawat/{{ $item->id }}" method="post">
                            @csrf
                            @method('delete');
                            <button><i class="fa-solid fa-user-xmark"></i></button>
                        </form>
                    </button>
                </td>
            </tr>

            @endforeach
        </tbody>
    </table>
</div>
<div class="modal-create-rawat">
    <div class="content">
        <form  method="post">
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
                        <option value="{{$item->id}}">{{ $item->nama }}</option>

                        @endforeach
                      </select>
                    </td>
                </tr>
                <tr>
                    <td>Tanggal masuk</td>
                    <td>:</td>
                    <td>
                       <input type="date" name="masuk" id="">
                    </td>
                </tr>
                <tr>
                    <td>Tanggal keluar</td>
                    <td>:</td>
                    <td>
                       <input type="date" name="keluar" id="">
                    </td>
                </tr>
                <tr>
                    <td>Ruangan</td>
                    <td>:</td>
                    <td>
                        <select name="ruangan" id="">
                            <option value="1">1</option>
                          </select>
                    </td>
                </tr>
                <tr>
                    <td>Kelas</td>
                    <td>:</td>
                    <td>
                        <select name="kelas" id="">
                            <option value="vip">1</option>
                          </select>
                    </td>
                </tr>
                <tr>
                    <td>Diagnosis</td>
                    <td>:</td>
                    <td>
                        <select name="diagnosis" id="">
                            <option value="1">VIP</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Ruangan</td>
                    <td>:</td>
                    <td>
                        <select name="ruangan" id="">
                            <option value="1">VIP</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Tindakan</td>
                    <td>:</td>
                    <td>
                       <input type="text" name="tindakan" id="">
                    </td>
                </tr>
            </table>
            <div class="action-create">
                <button type="button">Tambah</button>
                <button type="button">Batal</button>
            </div>
        </form>
    </div>
</div>
<div class="modal-edit-rawat">
    <div class="content">
        <form method="post">
            @csrf
            @method('patch')
            <table>
                <tr>
                    <td>Nama Pasien</td>
                    <td>:</td>
                    <td>Dede</td>
                    <td id="pasien">
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
                    <td></td>
                    <td>
                      <select name="dokter" id="">
                        @foreach ($dokter as $item)
                        <option value="{{$item->id}}">{{ $item->nama }}</option>

                        @endforeach
                      </select>
                    </td>
                </tr>
                <tr>
                    <td>Tanggal masuk</td>
                    <td>:</td>
                    <td></td>
                    <td>
                       <input type="date" name="masuk" id="">
                    </td>
                </tr>
                <tr>
                    <td>Tanggal keluar</td>
                    <td>:</td>
                    <td></td>
                    <td>
                       <input type="date" name="keluar" id="">
                    </td>
                </tr>
                <tr>
                    <td>Ruangan</td>
                    <td>:</td>
                    <td></td>
                    <td>
                        <select name="ruangan" id="">
                            <option value="1">1</option>
                          </select>
                    </td>
                </tr>
                <tr>
                    <td>Kelas</td>
                    <td>:</td>
                    <td></td>
                    <td>
                        <select name="kelas" id="">
                            <option value="vip">1</option>
                          </select>
                    </td>
                </tr>
                <tr>
                    <td>Diagnosis</td>
                    <td>:</td>
                    <td></td>
                    <td>
                        <select name="diagnosis" id="">
                            <option value="1">VIP</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Tindakan</td>
                    <td>:</td>
                    <td></td>
                    <td>
                       <input type="text" name="tindakan" id="">
                    </td>
                </tr>
            </table>
            <div class="action-edit">
                <button type="submit">Ubah</button>
                <button>Batal</button>
            </div>
        </form>
    </div>
</div>
@endsection
