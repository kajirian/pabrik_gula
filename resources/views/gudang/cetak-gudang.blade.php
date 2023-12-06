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
	header("Content-Disposition: attachment; filename=Data Gudang.xls");
	?>
    <title>CETAK DATA Gudang</title>
</head>
<body>
    <div class="form-group">
        <p align="center"><b>Laporan Data Gudang</b></p>
        <table class="static" align="center" rules="all" border="1px" style="width:95%;">
        <thead class=" text-primary" align="center">
                      <th>ID Gudang</th>
                      <th>Nama gudang</th>
                      <th>Alamat gudang</th>
                     </thead>
                    <tbody align="center">
                    @foreach($gudang as $gud)
                       <tr>
                        <td>{{$gud->id_gudang}}</td>
                        <td>{{$gud->nama_gudang}}</td>
                        <td>{{$gud->alamat_gudang}}</td>
                       
                        
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
        a.download = 'Cetak Data Gudang.xls';
        //triggering the function
        a.click();
        //just in case, prevent default behaviour
        e.preventDefault(); 
        });
    </script>
</body>
</html>