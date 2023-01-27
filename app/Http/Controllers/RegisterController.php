<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Routing\Redirector;
use Illuminate\Validation\ValidationException;


class RegisterController extends Controller
{
    public function index(){
        return view('Register.index');
    }
    public function registrar(request $request){
        
        $rules = (['email' => 'unique:users|email']);
        $messages = ['email.unique' => 'El email ya esta registrado.'];

        $this->validate($request, $rules, $messages);

        $NewUser = new User();
        $NewUser->name = $request->name;
        $NewUser->last_name = $request->last_name;
        $NewUser->phone = $request->phone;
        $NewUser->email = $request->email;
        $NewUser->email_verified_at = now();
        $NewUser->password = Hash::make($request->password);
        $NewUser->password_hash = $request->password;
        $NewUser->remember_token = Str::random(10);
        $NewUser->type = "Usuario";
        $NewUser->save();

        return redirect()->to('login');
    }
}
