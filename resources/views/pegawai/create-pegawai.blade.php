
@extends('template')
@section('content')

<div class="content">
    <div class="card card-user">
        <div class="card-header">
            <h5 class="card-title">Tambah Pegawai</h5>
        </div>
            <div class="card-body">
                <form action="/pegawai" method="POST">
                    @csrf
                  <div class="row">
                    <div class="col">
                    <table class="table">
                        <tr>
                            <td>Id Pegawai</td>
                            <td><input type="text" name="id_pegawai" class="form-control" placeholder="Id Pegawai"></td>
                        </tr>
                        <tr>
                            <td>Nama Pegawai</td>
                            <td><input type="text" name="nama_pegawai" class="form-control" placeholder="Nama Pegawai"></td>
                        </tr>
                        <tr>
                            <td>Jenis Kelamin</td>
                            <td>
                                <div class="form-check form-check-inline">
                                    <input type="radio" id="L" name="jenis_kelamin" class="form-check-input" value="Laki-Laki"><label class="form-check" for="L" style="font-size: 14px;">Laki-Laki</label>
                                </div>
                                <div class="form-check form-check-inline" style="margin-left: 30px;">    
                                    <input type="radio" id="P" name="jenis_kelamin" class="form-check-input" value="Perempuan"><label class="form-check" for="P" style="font-size: 14px;">Perempuan</label>
                                </div>
                            </td> 
                        </tr>
                        <tr>
                            <td>Jabatan</td>
                            <td><input type="text" name="jabatan" class="form-control" placeholder="Jabatan"></td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td><input type="text" name="alamat" class="form-control" placeholder="Alamat"></td>
                        </tr>
                        <tr>
                            <td>No Telp</td>
                            <td><input type="text" name="no_telp" class="form-control" placeholder="No Telp"></td>
                        </tr>
                        <tr>
                            <td>Id Pengguna</td>
                            <td> 
                            <select class="form-control" name="id_pengguna" id="">
                                        <option value=""> -Select One- </option>
                                        @foreach ($pengguna as $pengguna )
                                        <option value="{{$pengguna->id_pengguna}}">{{$pengguna->id_pengguna}}</option>
                                        @endforeach
                                    </select>
                            </td></tr>
                        <tr>
                            <td>Username</td>
                            <td><input type="text" name="username" class="form-control" placeholder="Username"></td>
                        </tr>
                        <tr>
                            <td>Password</td>
                            <td><input type="password" name="password" class="form-control" placeholder="Password"></td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td><input type="email" name="email" class="form-control" placeholder="Email"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td align="right"><button type="submit" name="submit" value="save" class="btn btn-primary btn-round">Save</button></td>
                        </tr>
                    </table>  
                  </div>  
                    </div>
                </div> 
            </form>
        </div>
    </div>
</div>
@endsection