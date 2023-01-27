<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function index()
    {
        $Productos = Product::all();
        return view('Dashboard.Producto.index', ['Productos' => $Productos]);
    }
    public function historial()
    {
        $Productos = Product::all();
        return view('Dashboard.Producto.historial', ['Productos' => $Productos]);
    }
    public function editar(request $request)
    {
        $imagen = $request->file('photo');

        $Producto = Product::find($request->id);
        $Producto->name = $request->name;
        $Producto->description = $request->description;
        $Producto->price_sale = $request->price_sale;
        $Producto->price_buy = $request->price_buy;

        if ($imagen) {
            $name = time() . '.' . $imagen->getClientOriginalExtension();
            $destino = public_path('photo/producto');
            $request->photo->move($destino, $name);
            $Producto->photo = "photo/producto" . "/" . $name;
        }

        $Producto->save();

        return redirect()->back();
    }
    public function crear(request $request)
    {
        $imagen = $request->file('photo');

        $name = time() . '.' . $imagen->getClientOriginalExtension();
        $destino = public_path('photo/producto');
        $request->photo->move($destino, $name);

        $Producto = new Product();
        $Producto->name = $request->name;
        $Producto->description = $request->description;
        $Producto->price_sale = $request->price_sale;
        $Producto->price_buy = $request->price_buy;
        $Producto->photo = "photo/producto" . "/" . $name;
        $Producto->save();

        return redirect()->back();
    }
    public function eliminar(request $request)
    {
        $Producto = Product::find($request->id);
        $Producto->delete();

        return redirect()->back();
    }
}
