@extends('template')
@section('content')

<div class="content">
    <div class="card card-user">
        <div class="card-header">
            <h5 class="card-title">Tambah Pengguna</h5>
        </div>
        <div class="card-body">
            <form action="/pembelian" method="POST">
                @csrf
                <div class="row">
                    <div class="col">
                        <table class="table">
                        <tr>
                                <td>ID Transaksi</td>
                                <td><input type="text" name="id_transaksi" class="form-control" placeholder="ID Transaksi" ></td>
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
                                <td>ID Pengiriman</td>
                                <td> 
                            <select class="form-control" name="id_pengiriman" id="">
                                        <option value=""> -Select One- </option>
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
                                        <option value=""> -Select One- </option>
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
                                        <option value=""> -Select One- </option>
                                        @foreach ($peg as $pegawai )
                                        <option value="{{$pegawai->id_pegawai}}">{{$pegawai->id_pegawai}}</option>
                                        @endforeach
                                    </select>
                            </td>
                            </tr>
                            <tr>
                                <td>Jumlah Barang</td>
                                <td><input type="text" name="jumlah_barang" class="form-control" placeholder="Jumlah Barang" ></td>
                            </tr>
                            <tr>
                                <td>Total Harga</td>
                                <td><input type="text" name="total_harga" class="form-control" placeholder="Total Harga" ></td>
                            </tr>
                            <tr>
                                <td>Keterangan</td>
                                <td><input type="text" name="keterangan" class="form-control" placeholder="Keterangan" ></td>
                            </tr>
                            <tr>
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