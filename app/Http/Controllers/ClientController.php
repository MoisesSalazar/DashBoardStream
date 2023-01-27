<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\SaleAccount;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class ClientController extends Controller
{
    public function index(){
        $Cuentas = DB::table('sale_accounts')
            ->join('users', 'users.id','=', 'sale_accounts.user_id')
            ->join('accounts', 'accounts.id','=', 'sale_accounts.account_id')
            ->join('products', 'products.id','=','accounts.product_id')
            ->select('sale_accounts.*','accounts.email','accounts.password','accounts.date_expirate','products.name','products.photo')
            ->where('users.id','=',Auth::user()->id)->get();
        $Products = Product::all();
        return view('Dashboard.Usuario.index',['Products' => $Products, 'Cuentas' => $Cuentas]);
    }
    public function tienda(){
        $Products = Product::all();
        return view('Dashboard.Usuario.tienda',['Products' => $Products]);
    }
}
