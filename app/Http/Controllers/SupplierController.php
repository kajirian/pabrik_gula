<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    public function cetak(){
        $supplier = DB::table('data_supplier')->get();
        return view('supplier.cetak-supplier',compact('supplier'));
    }
    public function index()
    {
        $supplier = DB::table('data_supplier')->get();
        return view('supplier.supplier', compact('supplier'));
    }
    public function create()
    {
        $gul = DB::table('data_gula')->select('id_gula')->get();
        return view('supplier.create-supplier',compact('gul'));
    }
    public function store(Request $request)
    {
        DB::table('data_supplier')->insert([
            'id_supplier' => $request->id_supplier,
            'nama_supplier' => $request->nama_supplier,
            'asal_supplier' => $request->asal_supplier,
            'id_gula' => $request->id_gula
        ]);
        return redirect('/supplier')->with('status','Data berhasil ditambah');
    }
    public function edit($id)
    {
        $sup = DB::table('data_supplier')->where('id_supplier',$id)->first();
        $gul = DB::table('data_gula')-> where('id_gula','!=',$sup->id_gula)->select('id_gula')->get();
        return view('supplier.edit-supplier', compact('sup','gul'));
    }
    public function update(Request $request, $id)
    {
        DB::table('data_supplier')->where('id_supplier',$id)
        ->update([
            'id_supplier' => $request->id_supplier,
            'nama_supplier' => $request->nama_supplier,
            'asal_supplier' => $request->asal_supplier,
            'id_gula' => $request->id_gula,
        ]);
        return redirect('/supplier')->with('status', 'Berhasil Update');
    }
    public function destroy($id)
    {
        $sup = Supplier::find($id)->delete();
        return redirect('/supplier');
    }
}
