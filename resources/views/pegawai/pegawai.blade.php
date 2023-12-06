@extends('template')
@section('content')
<div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> Pegawai</h4>
              </div>
              
              <div class="card-body">
                <div class="table-responsive">
                <div align="right"><a href="/create-pegawai"><button type="submit" class="btn btn-success btn-round">Tambah</button></a>
                <a href="/cetak-pegawai" target="_blank"><button type="submit" onclick="tableHtmlToExcel('data_pegawai')" class="btn btn-warning btn-round">Cetak</button></a>
             </div>
                  <table class="table">
                    <thead class=" text-primary">
                      <th>Id Pegawai</th>
                      <th>Nama Pegawai</th>
                      <th>Jenis Kelamin</th>
                      <th>Jabatan</th>
                      <th>Alamat</th>
                      <th>No Telp</th>
                      <th>Id Pengguna</th>
                      <th>Username</th>
                      <th>Password</th>
                      <th>Email</th>
                    </thead>
                    <tbody>
                    @foreach($pegawai as $peg)
                       <tr>
                        <td>{{$peg->id_pegawai}}</td>
                        <td>{{$peg->nama_pegawai}}</td>
                        <td>{{$peg->jenis_kelamin}}</td>
                        <td>{{$peg->jabatan}}</td>
                        <td>{{$peg->alamat}}</td>
                        <td>{{$peg->no_telp}}</td>
                        <td>{{$peg->id_pengguna}}</td>
                        <td>{{$peg->username}}</td>
                        <td>{{$peg->password}}</td>
                        <td>{{$peg->email}}</td>
                        <td><a href="{{url('edit-pegawai',$peg->id_pegawai)}}"><button type="submit" class="btn btn-primary btn-round">Edit</button></a>
                        <form action="{{url('delete-pegawai/'.$peg->id_pegawai)}}" method="POST" onsubmit="return confirm('Are You Sure to Want Delete it ???')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-round">Hapus</button>
                        </form></td>
                      </tr>
                    @endforeach
                    </tbody>
                  </table>
                 
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

@endsection