
@extends('template')
@section('content')

<div class="content">
    <div class="card card-user">
        <div class="card-header">
            <h5 class="card-title">Tambah Data Mutasi</h5>
        </div>
            <div class="card-body">
                <form action="/gudang" method="POST">
                    @csrf
                  <div class="row">
                    <div class="col">
                    <table class="table">
                        <tr>
                            <td>ID Gudang</td>
                            <td><input type="text" name="id_gudang" class="form-control" placeholder="ID Gudang"></td>
                        </tr>
                        <tr>
                            <td>Nama Gudang</td>
                            <td><input type="text" name="nama_gudang" class="form-control" placeholder="Nama Gudang"></td>
                        </tr>
                        <tr>
                            <td>Alamat Gudang</td>
                            <td><input type="text" name="alamat_gudang" class="form-control" placeholder="Alamat Gudang"></td>
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