@extends('template')
@section('content')

<div class="content">
    <div class="card card-user">
        <div class="card-header">
            <h5 class="card-title">Edit Gudang</h5>
        </div>
        <div class="card-body">
            <form action="/gudang/{{$gud->id_gudang}}" method="POST">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col">
                        <table class="table">
                            <tr>
                                <td>ID Gudang</td>
                                <td><input type="text" name="id_gudang" class="form-control" placeholder="ID Gudang" value="{{$gud->id_gudang}}" readonly></td>
                            </tr>
                            <tr>
                                <td>Nama Gudang</td>
                                <td><input type="text" name="nama_gudang" class="form-control" placeholder="Nama Gudang" value="{{$gud->nama_gudang}}"></td>
                            </tr>
                            <tr>
                                <td>Alamat Gudang</td>
                                <td><input type="text" name="alamat_gudang" class="form-control" placeholder="Alamat Gudang" value="{{$gud->alamat_gudang}}"></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td align="right"><button type="submit" value="save" class="btn btn-primary btn-round">Save</button></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection