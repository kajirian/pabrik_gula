@extends('template')
@section('content')
<div class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title"> Pengguna</h4>
        </div>

        <div class="card-body">
          <div class="table-responsive">
            <div align="right"><a href="/create-pengguna"><button type="submit" class="btn btn-success btn-round">Tambah</button></a>
            <a href="/cetak-pengguna" target="_blank"><button type="submit" onclick="tableHtmlToExcel('data_pengguna')" class="btn btn-warning btn-round">Cetak</button></a>
            </div>
            <table class="table">
              <thead class=" text-primary">
                <th>Id Pengguna</th>
                <th>Nama Pengguna</th>
                <th>Jabatan</th>
                <th>Aksi</th>
              </thead>
              <tbody>
                @foreach($pengguna as $peng)
                <tr>
                  <td>{{$peng->id_pengguna}}</td>
                  <td>{{$peng->nama}}</td>
                  <td>{{$peng->jabatan}}</td>
                  <td><a href="{{url('edit-pengguna',$peng->id_pengguna)}}"><button type="submit" class="btn btn-primary btn-round">Edit</button></a>
                    <form action="{{url('delete-pengguna/'.$peng->id_pengguna)}}" method="POST" onsubmit="return confirm('Are You Sure to Want Delete it ???')">
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