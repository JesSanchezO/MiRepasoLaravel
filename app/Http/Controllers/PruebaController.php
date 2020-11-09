<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PruebaController extends Controller
{
    public function welcome(){
        return redirect()->action('PruebaController@plantilla');
    }
    public function pintores(){
        return view('pintores', ['dato'=>'Es un dato']);
    }
    public function frida(){
        return view('frida');
    }
    public function gustav(){
        return view('gustav');
    }
    public function salvador(){
        return view('salvador');
    }
    public function vicent(){
        return view('vicent');
    }


    public function login(){
        return view('admon.login');
    }
    
    public function validarLogin(Request $request){
        $user = $request->input('user');
        $pass = $request->input('password');
        $key = Hash::make($request->input('key'));
        
        if ($user === 'jessica.sanchez'){
            $url='admnon.dashboard';
        } else{
            $url='admon.login';
        }
    
    
    
    
        return view('admon.dashboard', [
            'user'=>$request->input('user'),
            'key'=>$key
        ]);
    }
}
