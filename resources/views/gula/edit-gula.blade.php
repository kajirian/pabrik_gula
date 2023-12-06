@extends('template')
@section('content')

<div class="content">
    <div class="card card-user">
        <div class="card-header">
            <h5 class="card-title">Edit Gula</h5>
        </div>
        <div class="card-body">
            <form action="/gula/{{$gul->id_gula}}" method="POST">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col">
                        <table class="table">
                            <tr>
                                <td>Id Gula</td>
                                <td><input type="text" name="id_gula" class="form-control" placeholder="Id gula" value="{{$gul->id_gula}}" readonly></td>
                            </tr>
                            <tr>
                                <td>Jenis Gula</td>
                                <td><input type="text" name="jenis_gula" class="form-control" placeholder="Nama gula" value="{{$gul->jenis_gula}}"></td>
                            </tr>
                            <tr>
                                <td>Stok Gula</td>
                                <td><input type="text" name="stok_gula" class="form-control" placeholder="Alamat" value="{{$gul->stok_gula}}"></td>
                            </tr>
                            <tr>
                                <td>Id Gudang</td>
                                <td>
                                    <select class="form-control" name="id_gudang" id="">
                                        <option value="{{$gul->id_gudang}}">{{$gul->id_gudang}}</option>
                                        @foreach ($gud as $gudang )
                                        <option value="{{$gudang->id_gudang}}">{{$gudang->id_gudang}}</option>
                                        @endforeach
                                    </select></td>
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