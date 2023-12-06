@extends('template')
@section('content')
<div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Gudang</h4>
              </div>
              
              <div class="card-body">
                <div class="table-responsive">
                <div align="right"><a href="/create-gudang"><button type="submit" class="btn btn-success btn-round">Tambah</button></a>
                <a href="/cetak-gudang" target="_blank"><button type="submit" onclick="tableHtmlToExcel('data_gudang')" class="btn btn-warning btn-round">Cetak</button></a>
              </div>
                <table class="table">
                    <thead class=" text-primary">
                      <th>ID Gudang</th>
                      <th>Nama Gudang</th>
                      <th>Alamat Gudang</th>
                      </thead>
                    <tbody>
                    @foreach($gudang as $gud)
                       <tr>
                        <td>{{$gud->id_gudang}}</td>
                        <td>{{$gud->nama_gudang}}</td>
                        <td>{{$gud->alamat_gudang}}</td>
                        <td><a href="{{url('edit-gudang',$gud->id_gudang)}}"><button type="submit" class="btn btn-primary btn-round">Edit</button></a>
                        <form action="{{url('delete-gudang/'.$gud->id_gudang)}}" method="POST" onsubmit="return confirm('Are You Sure to Want Delete it ???')">
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