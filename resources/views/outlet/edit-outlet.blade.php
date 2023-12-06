@extends('template')
@section('content')

<div class="content">
    <div class="card card-user">
        <div class="card-header">
            <h5 class="card-title">Edit Outlet</h5>
        </div>
        <div class="card-body">
            <form action="/outlet/{{$out->id_outlet}}" method="POST">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col">
                        <table class="table">
                            <tr>
                                <td>Id outlet</td>
                                <td><input type="text" name="id_outlet" class="form-control" placeholder="Id outlet" value="{{$out->id_outlet}}" readonly></td>
                            </tr>
                            <tr>
                                <td>Nama outlet</td>
                                <td><input type="text" name="nama_outlet" class="form-control" placeholder="Nama outlet" value="{{$out->nama_outlet}}"></td>
                            </tr>
                            <tr>
                                <td>Alamat Outlet</td>
                                <td><input type="text" name="alamat_outlet" class="form-control" placeholder="Alamat" value="{{$out->alamat_outlet}}"></td>
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