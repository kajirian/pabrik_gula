<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        table.static{
            position: relative;
            border : 1px solid #543535;
        }
    </style>
    
	<?php
	header("Content-type: application/vnd-ms-excel");
	header("Content-Disposition: attachment; filename=Data Pegawai.xls");
	?>
    <title>CETAK DATA Pegawai</title>
</head>
<body>
    <div class="form-group">
        <p align="center"><b>Laporan Data Pegawai</b></p>
        <table class="static" align="center" rules="all" border="1px" style="width:95%;">
        <thead class=" text-primary" align="center">
                      <th>ID Pegawam</th>
                      <th>Nama Pegawai</th>
                      <th>Jenis Kelamin</th>
                      <th>Jabatan</th>
                      <th>Alamat</th>
                      <th>No Telp</th>
                      <th>ID Pengguna</th>
                      <th>User</th>
                      <th>Password</th>
                      <th>Email</th>
                     </thead>
                    <tbody align="center">
                    @foreach($pegawai as $peg)
                       <tr>
                        <td>{{$peg->id_pegawai}}</td>
                        <td>{{$peg->nama_pegawai}}</td>
                        <td>{{$peg->jenis_kelamin}}</td>
                        <td>{{$peg->jabatan}}</td>
                        <td>{{$peg->alamat}}</td>
                        <td>{{$peg->no_telp}}</td>
                        <td>{{$peg->id_pengguna}}</td>
                        <td>{{$peg->username}}</td>
                        <td>{{$peg->password}}</td>
                        <td>{{$peg->email}}</td>
                         
                      </tr>
                    @endforeach
                    </tbody>
        </table>
    </div>
    <script type="text/javascript">
       $( document ).ready(function() {
       var a = document.createElement('a');
        //getting data from our div that contains the HTML table
        var data_type = 'data:application/vnd.ms-excel';
        var table_div = document.getElementById('divData');
        var table_html = table_div.outerHTML.replace(/ /g, '%20');
        a.href = data_type + ', ' + table_html;
        //setting the file name
        a.download = 'Cetak Data Pegawai.xls';
        //triggering the function
        a.click();
        //just in case, prevent default behaviour
        e.preventDefault(); 
        });
    </script>
</body>
</html>