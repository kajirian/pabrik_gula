@extends('template')
@section('content')

<div class="content">
    <div class="card card-user">
        <div class="card-header">
            <h5 class="card-title">Tambah Outlet</h5>
        </div>
        <div class="card-body">
            <form action="/outlet" method="POST">
                @csrf
                <div class="row">
                    <div class="col">
                        <table class="table">
                            <tr>
                                <td>Id Outlet</td>
                                <td><input type="text" name="id_outlet" class="form-control" placeholder="Id outlet"></td>
                            </tr>
                            <tr>
                                <td>Nama Outlet</td>
                                <td><input type="text" name="nama_outlet" class="form-control" placeholder="Nama outlet"></td>
                            </tr>
                            <tr>
                                <td>Alamat Outlet</td>
                                <td><input type="text" name="alamat_outlet" class="form-control" placeholder="Alamat Outlet"></td>
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