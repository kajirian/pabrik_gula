@extends('template')
@section('content')
<div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Supplier</h4>
              </div>
              
              <div class="card-body">
                <div class="table-responsive">
                <div align="right"><a href="/create-supplier"><button type="submit" class="btn btn-success btn-round">Tambah</button></a>
                <a href="/cetak-supplier" target="_blank"><button type="submit" onclick="tableHtmlToExcel('data_supplier')" class="btn btn-warning btn-round">Cetak</button></a>
            
              </div>
                  <table class="table">
                    <thead class=" text-primary">
                      <th>ID Supplier</th>
                      <th>Nama Supplier</th>
                      <th>Asal Supplier</th>
                      <th>ID Gula</th>
                      <th>Aksi</th>
                    </thead>
                    <tbody>
                    @foreach($supplier as $sup)
                       <tr>
                        <td>{{$sup->id_supplier}}</td>
                        <td>{{$sup->nama_supplier}}</td>
                        <td>{{$sup->asal_supplier}}</td>
                        <td>{{$sup->id_gula}}</td>
                        <td><a href="{{url('edit-supplier',$sup->id_supplier)}}"><button type="submit" class="btn btn-primary btn-round">Edit</button></a>
                        <form action="{{url('delete-supplier/'.$sup->id_supplier)}}" method="POST" onsubmit="return confirm('Are You Sure to Want Delete it ???')">
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