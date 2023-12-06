@extends('template')
@section('content')

<div class="content">
    <div class="card card-user">
        <div class="card-header">
            <h5 class="card-title">Edit Pengguna</h5>
        </div>
        <div class="card-body">
            <form action="/pengguna/{{$peng->id_pengguna}}" method="POST">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col">
                        <table class="table">
                            <tr>
                                <td>Id Pengguna</td>
                                <td><input type="text" name="id_pengguna" class="form-control" placeholder="Id pengguna" value="{{$peng->id_pengguna}}" readonly></td>
                            </tr>
                            <tr>
                                <td>Nama Pengguna</td>
                                <td><input type="text" name="nama" class="form-control" placeholder="Nama Pengguna" value="{{$peng->nama}}"></td>
                            </tr>
                            <tr>
                                <td>Jabatan</td>
                                <td><input type="text" name="jabatan" class="form-control" placeholder="Jabatan" value="{{$peng->jabatan}}"></td>
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