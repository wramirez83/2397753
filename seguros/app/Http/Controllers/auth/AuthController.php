<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $res){
        $remember = $res->remember ?: false;
        $credentials = [
            'email' => $res->username,
            'password' => $res->password
        ];
        if(Auth::attempt($credentials, $remember)){
            //Si paso la autenticacion.}
            //Auth
            return redirect()->route('dashboard');
        }else{
            //No pasó
            return redirect()->back()->withErrors(['error' => 'Las credenciales no corresponden']);
        }
       
    }

    
}
