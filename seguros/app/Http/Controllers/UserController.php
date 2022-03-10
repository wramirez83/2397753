<?php

namespace App\Http\Controllers;

use App\Facade\VerifyCode;
use App\Models\User;
use Illuminate\Http\Request;
use \Illuminate\Database\QueryException;

class UserController extends Controller
{
    public function index(Request $res){
       $users = User::all();
       return view('users.list', compact('users'));
    }

    public function storage(Request $res){
        return view('users.form-user');
    }
    public function save(Request $res){
        if(User::whereEmail($res->email))
            return redirect()->back()->withErrors(['error' => 'El usuario ya existe en la base de datos con el correo '. $res->email]);
        try{

            $fields = [
                'name' => $res->nameuser,
                'email' => $res->email,
                'password' => bcrypt($res->password),
                'verify_code' => VerifyCode::generate()
            ];
           
            User::create($fields);
            return redirect()->route('listUser');
        }catch(QueryException $e){
        
            return redirect()->back()->withErrors(['error' => 'Error al Insertar el usuario']);
        }
    }

    public function update(Request $res){

    }

}
