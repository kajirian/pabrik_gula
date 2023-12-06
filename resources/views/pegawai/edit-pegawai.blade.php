@extends('template')
@section('content')

<div class="content">
    <div class="card card-user">
        <div class="card-header">
            <h5 class="card-title">Edit Pegawai</h5>
        </div>
        <div class="card-body">
            <form action="/pegawai/{{$peg->id_pegawai}}" method="POST">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col">
                        <table class="table">
                            <tr>
                                <td>Id Pegawai</td>
                                <td><input type="text" name="id_pegawai" class="form-control" placeholder="Id Pegawai" value="{{$peg->id_pegawai}}" readonly></td>
                            </tr>
                            <tr>
                                <td>Nama Pegawai</td>
                                <td><input type="text" name="nama_pegawai" class="form-control" placeholder="Nama Pegawai" value="{{$peg->nama_pegawai}}"></td>
                            </tr>
                            <tr>
                                <td>Jenis Kelamin</td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input type="radio" id="L" name="jenis_kelamin" class="form-check-input" value="Laki-Laki" {{$peg->jenis_kelamin=='Laki-Laki'?'checked':''}}><label class="form-check" for="L" style="font-size: 14px;">Laki-Laki</label>
                                    </div>
                                    <div class="form-check form-check-inline" style="margin-left: 30px;">
                                        <input type="radio" id="P" name="jenis_kelamin" class="form-check-input" value="Perempuan" {{$peg->jenis_kelamin=='Perempuan'?'checked':''}}><label class="form-check" for="P" style="font-size: 14px;">Perempuan</label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Jabatan</td>
                                <td><input type="text" name="jabatan" class="form-control" placeholder="Jabatan" value="{{$peg->jabatan}}"></td>
                            </tr>
                            <tr>
                                <td>Alamat</td>
                                <td><input type="text" name="alamat" class="form-control" placeholder="Alamat" value="{{$peg->alamat}}"></td>
                            </tr>
                            <tr>
                                <td>No Telp</td>
                                <td><input type="text" name="no_telp" class="form-control" placeholder="No Telp" value="{{$peg->no_telp}}"></td>
                            </tr>
                            <tr>
                                <td>Id Pengguna</td>
                                <td>
                                    <select class="form-control" name="id_pengguna" id="">
                                        <option value="{{$peg->id_pengguna}}">{{$peg->id_pengguna}}</option>
                                        @foreach ($pengguna as $pengguna )
                                        <option value="{{$pengguna->id_pengguna}}">{{$pengguna->id_pengguna}}</option>
                                        @endforeach
                                    </select>
                                </td> 
                            </tr>
                            <tr>
                                <td>Username</td>
                                <td><input type="text" name="username" class="form-control" placeholder="Username" value="{{$peg->username}}"></td>
                            </tr>
                            <tr>
                                <td>Password</td>
                                <td><input type="text" name="password" class="form-control" placeholder="Password" value="{{$peg->password}}"></td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td><input type="email" name="email" class="form-control" placeholder="Email" value="{{$peg->email}}"></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td align="right"><button type="submit" value="save" class="btn btn-primary btn-round">Save</button></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection