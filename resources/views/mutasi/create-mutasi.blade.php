
@extends('template')
@section('content')

<div class="content">
    <div class="card card-user">
        <div class="card-header">
            <h5 class="card-title">Tambah Data Mutasi</h5>
        </div>
            <div class="card-body">
                <form action="/mutasi" method="POST">
                    @csrf
                  <div class="row">
                    <div class="col">
                    <table class="table">
                        <tr>
                            <td>Id Mutasi</td>
                            <td><input type="text" name="id_mutasi" class="form-control" placeholder="Id Mutasi"></td>
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
                            <td>Id Pengiriman</td>
                            <td> 
                            <select class="form-control" name="id_pengiriman" id="">
                                        <option value=""> -Select One- </option>
                                        @foreach ($peng as $pengiriman )
                                        <option value="{{$pengiriman->id_pengiriman}}">{{$pengiriman->id_pengiriman}}</option>
                                        @endforeach
                                    </select>
                            </td></tr>
                        <tr>
                            <td>Jumlah Mutasi</td>
                            <td><input type="text" name="jumlah_mutasi" class="form-control" placeholder="Jumlah Mutasi"></td>
                        </tr>
                        <tr>
                            <td>Keterangan</td>
                            <td><input type="text" name="keterangan" class="form-control" placeholder="Keterangan"></td>
                        </tr>
                        <tr>
                            <td>Tanggal Mutasi</td>
                            <td><input type="date" name="tgl_mutasi" class="form-control" placeholder="Tanggal Mutasi"></td>
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