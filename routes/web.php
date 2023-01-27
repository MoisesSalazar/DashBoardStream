<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\Dashboard\AdministradorController;
use App\Http\Controllers\Dashboard\ProductoController;
use App\Http\Controllers\Dashboard\AccountController;
use App\Http\Controllers\Dashboard\SupplierController;
use App\Http\Controllers\Dashboard\SaleAccountController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// Home Routes
Route::get('/',[HomeController::class, 'index'])->name('welcome');

// Login Routes
Route::get('login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('autenticar', [LoginController::class, 'autenticar'])->name('autenticar');
Route::get('logout', [LoginController::class, 'logout'])->name('logout');

// Register Routes
Route::get('register', [RegisterController::class, 'index'])->name('register')->middleware('guest');
Route::post('registrar', [RegisterController::class, 'registrar'])->name('registrar');


Route::middleware(['auth'])->group(function () {
    Route::middleware(['admin'])->group(function () {
        //Dashboard HOME
        Route::get('dashboard/administrador', [AdministradorController::class, 'index'])->name('dashboard.administrador.index');
        //Dashboard Product
        Route::get('dashboard/producto/crud', [ProductoController::class, 'index'])->name('dashboard.administrador.producto');
        Route::get('dashboard/producto/historial', [ProductoController::class, 'historial'])->name('dashboard.administrador.producto.historial');
        Route::post('dashboard/producto/crear', [ProductoController::class, 'crear'])->name('dashboard.administrador.producto.crear');
        Route::post('dashboard/producto/editar', [ProductoController::class, 'editar'])->name('dashboard.administrador.producto.editar');
        Route::delete('dashboard/producto/eliminar', [ProductoController::class, 'eliminar'])->name('dashboard.administrador.producto.eliminar');
        //Dashboard Account
        Route::get('dashboard/account', [AccountController::class, 'index'])->name('dashboard.administrador.account.index');
        Route::post('dashboard/account/crear', [AccountController::class, 'crear'])->name('dashboard.administrador.account.crear');
        Route::post('dashboard/account/editar', [AccountController::class, 'editar'])->name('dashboard.administrador.account.editar');
        Route::delete('dashboard/account/eliminar', [AccountController::class, 'eliminar'])->name('dashboard.administrador.account.eliminar');
        //Dashboard Supplier
        Route::get('dashboard/supplier', [SupplierController::class, 'index'])->name('dashboard.administrador.supplier.index');
        Route::post('dashboard/supplier/crear', [SupplierController::class, 'crear'])->name('dashboard.administrador.supplier.crear');
        Route::post('dashboard/supplier/editar', [SupplierController::class, 'editar'])->name('dashboard.administrador.supplier.editar');
        Route::delete('dashboard/supplier/eliminar', [SupplierController::class, 'eliminar'])->name('dashboard.administrador.supplier.eliminar');
        //Dashboard Sale Account
        Route::get('dashboard/sale', [SaleAccountController::class, 'index'])->name('dashboard.administrador.saleaccount.index');
        Route::post('dashboard/sale/crear', [SaleAccountController::class, 'crear'])->name('dashboard.administrador.saleaccount.crear');
        Route::post('dashboard/sale/editar', [SaleAccountController::class, 'editar'])->name('dashboard.administrador.saleaccount.editar');
        Route::delete('dashboard/sale/eliminar', [SaleAccountController::class, 'eliminar'])->name('dashboard.administrador.saleaccount.eliminar');
    });
    //Dashboard Client
    Route::middleware(['client'])->group(function () {
        Route::get('dashboard/cliente/home', [ClientController::class, 'index'])->name('dashboard.cliente.index');
        Route::get('dashboard/cliente/tienda', [ClientController::class, 'tienda'])->name('dashboard.cliente.tienda');
    });
});
