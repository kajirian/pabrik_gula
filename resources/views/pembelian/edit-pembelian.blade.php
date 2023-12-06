@extends('template')
@section('content')

<div class="content">
    <div class="card card-user">
        <div class="card-header">
            <h5 class="card-title">Edit Pembelian</h5>
        </div>
        <div class="card-body">
            <form action="/pembelian/{{$pem->id_transaksi}}" method="POST">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col">
                        <table class="table">
                            <tr>
                                <td>ID Transaksi</td>
                                <td><input type="text" name="id_transaksi" class="form-control" placeholder="ID Transaksi" value="{{$pem->id_transaksi}}" readonly></td>
                            </tr>
                            <tr>
                                <td>ID Outlet</td>
                                <td>
                                    <select class="form-control" name="id_outlet" id="">
                                        <option value="{{$pem->id_outlet}}">{{$pem->id_outlet}}</option>
                                        @foreach ($out as $outlet )
                                        <option value="{{$outlet->id_outlet}}">{{$outlet->id_outlet}}</option>
                                        @endforeach
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>ID Pengiriman</td>
                                <td>
                                    <select class="form-control" name="id_pengiriman" id="">
                                        <option value="{{$pem->id_pengiriman}}">{{$pem->id_pengiriman}}</option>
                                        @foreach ($peng as $pengiriman )
                                        <option value="{{$pengiriman->id_pengiriman}}">{{$pengiriman->id_pengiriman}}</option>
                                        @endforeach
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>ID Gula</td>
                                <td>
                                    <select class="form-control" name="id_gula" id="">
                                        <option value="{{$pem->id_gula}}">{{$pem->id_pengiriman}}</option>
                                        @foreach ($gul as $gula )
                                        <option value="{{$gula->id_gula}}">{{$gula->id_gula}}</option>
                                        @endforeach
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>ID Pegawai</td>
                                <td>
                                    <select class="form-control" name="id_pegawai" id="">
                                        <option value="{{$pem->id_pegawai}}">{{$pem->id_pengiriman}}</option>
                                        @foreach ($peg as $pegawai )
                                        <option value="{{$pegawai->id_pegawai}}">{{$pegawai->id_pegawai}}</option>
                                        @endforeach
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Jumlah Barang</td>
                                <td><input type="text" name="jumlah_barang" class="form-control" placeholder="Jumlah Barang" value="{{$pem->jumlah_barang}}"></td>
                            </tr>
                            <tr>
                                <td>Total Harga</td>
                                <td><input type="text" name="total_harga" class="form-control" placeholder="Total Harga" value="{{$pem->total_harga}}"></td>
                            </tr>
                            <tr>
                                <td>Keterangan</td>
                                <td><input type="text" name="keterangan" class="form-control" placeholder="Keterangan" value="{{$pem->keterangan}}"></td>
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