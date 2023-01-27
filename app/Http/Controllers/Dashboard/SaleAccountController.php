<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Account;
use App\Models\SaleAccount;
use Illuminate\Support\Facades\DB;

class SaleAccountController extends Controller
{
    public function index(){
        $SaleAccounts = DB::table('sale_accounts')
            ->join('users','users.id','=','sale_accounts.user_id')
            ->join('accounts','accounts.id','=','sale_accounts.account_id')
            ->join('products','products.id','=','accounts.product_id')
            ->select('sale_accounts.*','users.name','users.email as email_user','accounts.email','products.name as product')->get();
        $Users = User::Where('type','Usuario')->get();
        $Accounts = DB::table('accounts')
            ->join('products', 'products.id','=','accounts.product_id')
            ->select('accounts.*', 'products.name as product')
            ->where('status','=','Sin Usar')->get();
        return view('dashboard.SaleAccount.index',['SaleAccounts' => $SaleAccounts, 'Users' => $Users, 'Accounts' => $Accounts]);
    }
    public function crear(request $request){
        $Venta = new SaleAccount();
        $Venta->proffile = $request->proffile;
        $Venta->pin = $request->pin;
        $Venta->user_id = $request->user_id;
        $Venta->account_id = $request->account_id;
        $Venta->save();
        return redirect()->back();
    }
    public function editar(request $request){
        $Venta = SaleAccount::find($request->id);
        $Venta->proffile = $request->proffile;
        $Venta->pin = $request->pin;
        $Venta->user_id = $request->user_id;
        $Venta->account_id = $request->account_id;
        $Venta->save();
        return redirect()->back();
    }
    public function eliminar(request $request){
        $Venta = SaleAccount::find($request->id);
        $Venta->delete();
        return redirect()->back();
    }
}
