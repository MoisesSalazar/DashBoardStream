<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Account;
use App\Models\Supplier;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

class AccountController extends Controller
{
    public function index(){
        $Accounts = DB::table('accounts')
            ->join('suppliers', 'accounts.supplier_id', '=','suppliers.id')
            ->join('products', 'accounts.product_id', '=','products.id')
            ->select('accounts.*','suppliers.name as supplier','products.name as product')->get();
        $Suppliers = Supplier::all();
        $Products = Product::all();

        return view('Dashboard.Account.index', ['Accounts' => $Accounts, 'Suppliers' => $Suppliers, 'Products' => $Products]);
    }
    public function crear(request $request){
        $Cuenta = new Account();
        $Cuenta->email = $request->email;
        $Cuenta->password = $request->password;
        $Cuenta->date_create = $request->date_create;
        $Cuenta->date_expirate = $request->date_expirate;
        $Cuenta->supplier_id = $request->supplier_id;
        $Cuenta->product_id = $request->product_id;
        $Cuenta->date_create =  date("y-m-d", strtotime("now"));
        $Cuenta->date_expirate = date("y-m-d", strtotime("+30 day"));
        $Cuenta->status = "Sin Usar";
        $Cuenta->save();
        return redirect()->back();
    }
    public function editar(Request $request){
        $Cuenta = Account::find($request->id);
        $Cuenta->email = $request->email;
        $Cuenta->password = $request->password;
        $Cuenta->date_create = $request->date_create;
        $Cuenta->date_expirate = $request->date_expirate;
        $Cuenta->supplier_id = $request->supplier_id;
        $Cuenta->product_id = $request->product_id;
        $Cuenta->date_create =  $request->date_create;
        $Cuenta->date_expirate = $request->date_expirate;
        $Cuenta->save();
        return redirect()->back();
    }
    public function eliminar(request $request){
        $Cuenta = Account::find($request->id);
        $Cuenta->delete();
        return redirect()->back();
    }
}
