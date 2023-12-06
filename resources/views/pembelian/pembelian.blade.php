@extends('template')
@section('content')
<div class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title"> Pembelian</h4>
        </div>

        <div class="card-body">
          <div class="table-responsive">
            <div align="right"><a href="/create-pembelian"><button type="submit" class="btn btn-success btn-round">Tambah</button></a>
            <a href="/cetak-pembelian" target="_blank"><button type="submit" onclick="tableHtmlToExcel('data_pembelian')" class="btn btn-warning btn-round">Cetak</button></a>
            </div>
            <table class="table">
              <thead class=" text-primary">
                <th>ID Transaksi</th>
                <th>ID Outlet</th>
                <th>ID Pengiriman</th>
                <th>ID Gula</th>
                <th>ID Pegawai</th>
                <th>Jumlah Barang</th>
                <th>Total Harga</th>
                <th>Keterangan</th>
                <th>Aksi</th>
              </thead>
              <tbody>
                @foreach($pembelian as $pem)
                <tr>
                  <td>{{$pem->id_transaksi}}</td>
                  <td>{{$pem->id_outlet}}</td>
                  <td>{{$pem->id_pengiriman}}</td>
                  <td>{{$pem->id_gula}}</td>
                  <td>{{$pem->id_pegawai}}</td>
                  <td>{{$pem->jumlah_barang}}</td>
                  <td>{{$pem->total_harga}}</td>
                  <td>{{$pem->keterangan}}</td>
                  <td><a href="{{url('edit-pembelian',$pem->id_transaksi)}}"><button type="submit" class="btn btn-primary btn-round">Edit</button></a>
                    <form action="{{url('delete-pembelian/'.$pem->id_transaksi)}}" method="POST" onsubmit="return confirm('Are You Sure to Want Delete it ???')">
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