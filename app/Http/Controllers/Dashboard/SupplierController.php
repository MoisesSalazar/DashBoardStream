<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Supplier;
class SupplierController extends Controller
{
    public function index(){
        $Suppliers = Supplier::all();
        return view('Dashboard.Supplier.index', ['Suppliers' => $Suppliers]);
    }
    public function crear(request $request){
        $Proovedor = new Supplier();
        $Proovedor->name = $request->name;
        $Proovedor->phone = $request->phone;
        $Proovedor->yape = $request->yape;
        $Proovedor->plin = $request->plin;
        $Proovedor->save();
        return redirect()->back();
    }
    public function editar(request $request){
        $Proovedor = Supplier::find($request->id);
        $Proovedor->name = $request->name;
        $Proovedor->phone = $request->phone;
        $Proovedor->yape = $request->yape;
        $Proovedor->plin = $request->plin;
        $Proovedor->save();
        return redirect()->back();
    }
    public function eliminar(request $request){
        $Proovedor = Supplier::find($request->id);
        $Proovedor->delete();
        return redirect()->back();
    }
}
