@extends('template')
@section('content')

<div class="content">
    <div class="card card-user">
        <div class="card-header">
            <h5 class="card-title">Tambah Pengiriman</h5>
        </div>
        <div class="card-body">
            <form action="/pengiriman" method="POST">
                @csrf
                <div class="row">
                    <div class="col">
                        <table class="table">
                        <tr>
                                <td>ID Pengiriman</td>
                                <td><input type="text" name="id_pengiriman" class="form-control" placeholder="ID Pengiriman" ></td>
                            </tr>
                            <tr>
                                <td>Tanggal Pengiriman</td>
                                <td><input type="date" name="tgl_pengiriman" class="form-control" placeholder="Tanggal Pengiriman" ></td>
                            </tr>
                            <tr>
                                <td>Total Berat Gula</td>
                                <td><input type="text" name="total_berat_gula" class="form-control" placeholder="Total Berat Gula" ></td>
                            </tr>
                            <tr>
                                <td>ID Pegawai</td>
                                <td> 
                            <select class="form-control" name="id_pegawai" id="">
                                        <option value=""> -Select One- </option>
                                        @foreach ($peg as $pegawai )
                                        <option value="{{$pegawai->id_pegawai}}">{{$pegawai->id_pegawai}}</option>
                                        @endforeach
                                    </select>
                            </td>
                            </tr>
                            <tr>
                                <td>ID Outlet</td>
                                <td> 
                            <select class="form-control" name="id_outlet" id="">
                                        <option value=""> -Select One- </option>
                                        @foreach ($out as $outlet )
                                        <option value="{{$outlet->id_outlet}}">{{$outlet->id_outlet}}</option>
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