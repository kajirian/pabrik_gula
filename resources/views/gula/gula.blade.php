@extends('template')
@section('content')
<div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> Gula</h4>
              </div>
              
              <div class="card-body">
                <div class="table-responsive">
                <div align="right"><a href="/create-gula"><button type="submit" class="btn btn-success btn-round">Tambah</button></a>
                <a href="/cetak-gula" target="_blank"><button type="submit" onclick="tableHtmlToExcel('data_gula')" class="btn btn-warning btn-round">Cetak</button></a>
              </div>
                  <table class="table">
                    <thead class=" text-primary">
                      <th>Id Gula</th>
                      <th>Jenis Gula</th>
                      <th>Stok Gula</th>
                      <th>Id Gudang</th>
                      <th>Aksi</th>
                    </thead>
                    <tbody>
                    @foreach($gula as $gul)
                       <tr>
                        <td>{{$gul->id_gula}}</td>
                        <td>{{$gul->jenis_gula}}</td>
                        <td>{{$gul->stok_gula}}</td>
                        <td>{{$gul->id_gudang}}</td>
                        <td><a href="{{url('edit-gula',$gul->id_gula)}}"><button type="submit" class="btn btn-primary btn-round">Edit</button></a>
                        <form action="{{url('delete-gula/'.$gul->id_gula)}}" method="POST" onsubmit="return confirm('Are You Sure to Want Delete it ???')">
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