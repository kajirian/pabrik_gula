@extends('template')
@section('content')
<div class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title"> Pengiriman</h4>
        </div>

        <div class="card-body">
          <div class="table-responsive">
            <div align="right"><a href="/create-pengiriman"><button type="submit" class="btn btn-success btn-round">Tambah</button></a>
            <a href="/cetak-pengiriman" target="_blank"><button type="submit" onclick="tableHtmlToExcel('data_pengiriman')" class="btn btn-warning btn-round">Cetak</button></a>
          </div>
            <table class="table">
              <thead class=" text-primary">
                <th>ID Pengiriman</th>
                <th>Tanggal Pengiriman</th>
                <th>Total Berat Gula</th>
                <th>ID Pegawai</th>
                <th>ID Outlet</th>
                <th>Aksi</th>
              </thead>
              <tbody>
                @foreach($pengiriman as $man)
                <tr>
                  <td>{{$man->id_pengiriman}}</td>
                  <td>{{$man->tgl_pengiriman}}</td>
                  <td>{{$man->total_berat_gula}}</td>
                  <td>{{$man->id_pegawai}}</td>
                  <td>{{$man->id_outlet}}</td>
                  <td><a href="{{url('edit-pengiriman',$man->id_pengiriman)}}"><button type="submit" class="btn btn-primary btn-round">Edit</button></a>
                    <form action="{{url('delete-pengiriman/'.$man->id_pengiriman)}}" method="POST" onsubmit="return confirm('Are You Sure to Want Delete it ???')">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="btn btn-danger btn-round">Hapus</button>
                    </form>
                  </td>
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