@extends('template')
@section('content')

<div class="content">
    <div class="card card-user">
        <div class="card-header">
            <h5 class="card-title">Edit Mutasi</h5>
        </div>
        <div class="card-body">
            <form action="/mutasi/{{$mut->id_mutasi}}" method="POST">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col">
                        <table class="table">
                           
                            <tr>
                                <td>ID gula</td>
                                <td>
                                    <select class="form-control" name="id_gula" id="">
                                        <option value="{{$mut->id_gula}}"></option>
                                        @foreach ($gul as $gula )
                                        <option value="{{$gula->id_gula}}">{{$gula->id_gula}}</option>
                                        @endforeach
                                    </select>
                                </td>
                            <tr>
                                <td>ID Pengiriman</td>
                                <td>
                                    <select class="form-control" name="id_pengiriman" id="">
                                        <option value="{{$mut->id_pengiriman}}"></option>
                                        @foreach ($peng as $pengiriman )
                                        <option value="{{$pengiriman->id_pengiriman}}">{{$pengiriman->id_pengiriman}}</option>
                                        @endforeach
                                    </select>
                                </td>
                            <tr>
                                <td>Jumlah Mutasi</td>
                                <td><input type="text" name="jumlah_mutasi" class="form-control" placeholder="Jumlah Mutasi" value="{{$mut->jumlah_mutasi}}"></td>
                            </tr>
                            <tr>
                                <td>Keterangan</td>
                                <td><input type="text" name="keterangan" class="form-control" placeholder="Keterangan" value="{{$mut->keterangan}}"></td>
                            </tr>
                            <tr>
                                <td>Tanggal Mutasi</td>
                                <td><input type="date" name="tgl_mutasi" class="form-control" placeholder="Tanggal Mutasi" value="{{$mut->tgl_mutasi}}"></td>
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