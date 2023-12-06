@extends('template')
@section('content')
<div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> Outlet</h4>
              </div>
              
              <div class="card-body">
                <div class="table-responsive">
                <div align="right"><a href="/create-outlet"><button type="submit" class="btn btn-success btn-round">Tambah</button></a>
                <a href="/cetak-outlet" target="_blank"><button type="submit" onclick="tableHtmlToExcel('data_outlet')" class="btn btn-warning btn-round">Cetak</button></a>
              </div>
                  <table class="table">
                    <thead class=" text-primary">
                      <th>Id Outlet</th>
                      <th>Nama Outlet</th>
                      <th>Alamat Outlet</th>
                      <th>Aksi</th>
                    </thead>
                    <tbody>
                    @foreach($outlet as $out)
                       <tr>
                        <td>{{$out->id_outlet}}</td>
                        <td>{{$out->nama_outlet}}</td>
                        <td>{{$out->alamat_outlet}}</td>
                        <td><a href="{{url('edit-outlet',$out->id_outlet)}}"><button type="submit" class="btn btn-primary btn-round">Edit</button></a>
                        <form action="{{url('delete-outlet/'.$out->id_outlet)}}" method="POST" onsubmit="return confirm('Are You Sure to Want Delete it ???')">
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