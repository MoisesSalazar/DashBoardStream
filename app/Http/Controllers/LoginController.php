<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;                            //Usaremos el modelo User
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function index()
    {
        return view('Login.index');
    }
    public function autenticar(request $request)
    {

        $credenciales = $request->only('email', 'password');
        if (Auth::attempt($credenciales)) {
            $request->session()->regenerate();
            switch (Auth::user()->type) {
                case "Administrador":
                    return redirect()->route('dashboard.administrador.index');
                    break;
                case "Usuario":
                    return redirect()->route('dashboard.cliente.index');
                    break;
                default:
                    return redirect()->route('welcome');
            }
        }

        if (User::where('email', $request->email)->first() != null) {
            throw ValidationException::withMessages([
                'password' => 'Contraseña incorrecta.'
            ]);
        } else {
            throw ValidationException::withMessages([
                'email' => 'Correo invalido.',
            ]);
        }
    }
    public function logout(request $request, Redirector $redirect)
    {
        Auth::logout();
        Session::flush();
        $request->session()->invalidate();
        $request->session()->regenerate();
        return $redirect->to('login');
    }
}
