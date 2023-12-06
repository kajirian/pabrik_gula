@extends('template')
@section('content')

<div class="content">
    <div class="card card-user">
        <div class="card-header">
            <h5 class="card-title">Tambah Pengguna</h5>
        </div>
        <div class="card-body">
            <form action="/pengguna" method="POST">
                @csrf
                <div class="row">
                    <div class="col">
                        <table class="table">
                            <tr>
                                <td>Id Pengguna</td>
                                <td><input type="text" name="id_pengguna" class="form-control" placeholder="Id Pengguna"></td>
                            </tr>
                            <tr>
                                <td>Nama Pengguna</td>
                                <td><input type="text" name="nama" class="form-control" placeholder="Nama Pengguna"></td>
                            </tr>
                            <tr>
                                <td>Jabatan</td>
                                <td><input type="text" name="jabatan" class="form-control" placeholder="Jabatan"></td>
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