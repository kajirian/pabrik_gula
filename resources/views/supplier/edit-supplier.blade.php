@extends('template')
@section('content')

<div class="content">
    <div class="card card-user">
        <div class="card-header">
            <h5 class="card-title">Edit Supplier</h5>
        </div>
        <div class="card-body">
            <form action="/supplier/{{$sup->id_supplier}}" method="POST">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col">
                        <table class="table">
                            <tr>
                                <td>ID Supplier</td>
                                <td><input type="text" name="id_supplier" class="form-control" placeholder="ID Supplier" value="{{$sup->id_supplier}}" readonly></td>
                            </tr>
                            <tr>
                                <td>Nama Supplier</td>
                                <td><input type="text" name="nama_supplier" class="form-control" placeholder="Nama Supplier" value="{{$sup->nama_supplier}}"></td>
                            </tr>
                            <tr>
                                <td>Asal Supplier</td>
                                <td><input type="text" name="asal_supplier" class="form-control" placeholder="Asal Supplier" value="{{$sup->asal_supplier}}"></td>
                            </tr>
                            <tr>
                                <td>ID Gula</td>
                                <td>
                                    <select class="form-control" name="id_gula" id="">
                                        <option value="{{$sup->id_gula}}">{{$sup->id_gula}}</option>
                                        @foreach ($gul as $gula )
                                        <option value="{{$gula->id_gula}}">{{$gula->id_gula}}</option>
                                        @endforeach
                                    </select>
                                </td> 
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