@extends('template')
@section('content')

<div class="content">
    <div class="card card-user">
        <div class="card-header">
            <h5 class="card-title">Tambah Gula</h5>
        </div>
        <div class="card-body">
            <form action="/gula" method="POST">
                @csrf
                <div class="row">
                    <div class="col">
                        <table class="table">
                            <tr>
                                <td>Id Gula</td>
                                <td><input type="text" name="id_gula" class="form-control" placeholder="Id gula"></td>
                            </tr>
                            <tr>
                                <td>Jenis Gula</td>
                                <td><input type="text" name="jenis_gula" class="form-control" placeholder="Jenis gula"></td>
                            </tr>
                            <tr>
                                <td>Stok Gula</td>
                                <td><input type="text" name="stok_gula" class="form-control" placeholder="Stok gula"></td>
                            </tr>
                            <tr>
                                <td>Id Gudang</td>
                                <td>
                                    <select class="form-control" name="id_gudang" id="">
                                        <option value=""> -Select One- </option>
                                        @foreach ($gud as $gudang )
                                        <option value="{{$gudang->id_gudang}}">{{$gudang->id_gudang}}</option>
                                        @endforeach
                                    </select>
                                </td>
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