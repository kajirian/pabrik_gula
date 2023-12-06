@extends('template')
@section('content')

<div class="content">
    <div class="card card-user">
        <div class="card-header">
            <h5 class="card-title">Tambah Supplier</h5>
        </div>
        <div class="card-body">
            <form action="/supplier" method="POST">
                @csrf
                <div class="row">
                    <div class="col">
                        <table class="table">
                        <tr>
                                <td>ID Supplier</td>
                                <td><input type="text" name="id_supplier" class="form-control" placeholder="ID Supplier" ></td>
                            </tr>
                            <tr>
                                <td>Nama Supplier</td>
                                <td><input type="text" name="nama_supplier" class="form-control" placeholder="Nama Supplier" ></td>
                            </tr>
                            <tr>
                                <td>Asal Supplier</td>
                                <td><input type="text" name="asal_supplier" class="form-control" placeholder="Asal Supplier" ></td>
                            </tr>
                            <tr>
                                <td>ID Gula</td>
                                <td> 
                            <select class="form-control" name="id_gula" id="">
                                        <option value=""> -Select One- </option>
                                        @foreach ($gul as $gula )
                                        <option value="{{$gula->id_gula}}">{{$gula->id_gula}}</option>
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