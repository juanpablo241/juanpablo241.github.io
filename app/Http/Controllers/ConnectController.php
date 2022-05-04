<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator, Hash, Auth;
use App\Models\User;


class ConnectController extends Controller
{

    public function __Construct(){
        $this->middleware('guest')->except(['getLogout']);
    }
    public function getLogin(){
        return view('connect.login');
    } 

    public function postLogin(Request $request){
        $rules = [
            'email' => 'required|email',
            'password' => 'required|min:8'
        ];

        $messages = [ 
            'email.required'=>'Su correo electrónico es requerido.',
            'email.email'=> 'El formato de su correo es invalido.',
            'password.required' =>'Por favor escriba una contraseña.',
            'password.min' => 'La contraseña debe de tener al menos 8 caracteres.'
        ];

        $validator = Validator::make($request->all(),$rules, $messages);
        if($validator->fails()):
             return back()->withErrors($validator)->with('message', 'Se ha producido un error')-> with('typealert', 'warning');
            else:
                if(Auth::attempt(['email' => $request->input('email'), 'password'=> $request->input('password')], true)):
                    return redirect('/');
                else:
                    return back()->with('message', 'Correo o Contraseña erronea')-> with('typealert', 'alert alert-secondary');
                endif;
        endif;
    }
    
    public function getRegister(){
        return view('connect.register');
    } 


    public function postRegister(Request $request ){
        $rules = [
            'name' => 'required',
            'email' => 'required|email|unique:App\Models\User,email',
            'password' => 'required|min:8',
            'area' => 'required'

        ];
        $messages = [ 
            'email.required'=>'Su correo electrónico es requerido.',
            'email.email'=> 'El formato de su correo es invalido.',
            'password.required' =>'Por favor escriba una contraseña.',
            'password.min' => 'La contraseña debe de tener al menos 8 caracteres.'
        ];
        $validator = Validator::make($request->all(),$rules, $messages);
        if($validator->fails()):
             return back()->withErrors($validator)->with('message', 'Se ha producido un error')-> with('typealert', 'warning');
            else:
                $user = new User;
                $user -> name = e($request->input('name'));
                $user -> email = e($request->input('email'));
                $user -> password = Hash::make($request->input('password')) ;
                $user -> area = e($request->input('area'));
                if($user->save()):
                    return redirect('/login');
                endif;


                
        endif;
    }
    
    public function getLogout(){
        Auth::logout();
        return redirect('/login');
    }

}
