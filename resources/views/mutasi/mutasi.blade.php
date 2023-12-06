@extends('template')
@section('content')
<div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Mutasi</h4>
              </div>
              
              <div class="card-body">
                <div class="table-responsive">
                <div align="right"><a href="/create-mutasi"><button type="submit" class="btn btn-success btn-round">Tambah</button></a>
                <a href="/cetak-mutasi" target="_blank"><button type="submit" onclick="tableHtmlToExcel('data_mutasi_stok')" class="btn btn-warning btn-round">Cetak</button></a>
              </div>
                  <table class="table">
                    <thead class=" text-primary">
                      <th>ID Mutasi</th>
                      <th>ID Gula</th>
                      <th>ID Pengiriman</th>
                      <th>Jumlah Mutasi</th>
                      <th>Keterangan</th>
                      <th>Tanggal Mutasi</th>
                    </thead>
                    <tbody>
                    @foreach($mutasi as $mut)
                       <tr>
                        <td>{{$mut->id_mutasi}}</td>
                        <td>{{$mut->id_gula}}</td>
                        <td>{{$mut->id_pengiriman}}</td>
                        <td>{{$mut->jumlah_mutasi}}</td>
                        <td>{{$mut->keterangan}}</td>
                        <td>{{$mut->tgl_mutasi}}</td>
                        <td><a href="{{url('edit-mutasi',$mut->id_mutasi)}}"><button type="submit" class="btn btn-primary btn-round">Edit</button></a>
                        <form action="{{url('delete-mutasi/'.$mut->id_mutasi)}}" method="POST" onsubmit="return confirm('Are You Sure to Want Delete it ???')">
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