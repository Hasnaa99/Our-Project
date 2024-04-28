<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class ControllerLogin extends Controller

{
    public function show(){
        return view('Login.show');
    }
    public function login(Request $request){
        $credentials = $request->only('email','password');
        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            return to_route('homePage')->with('success','Vous êtes bien connecté');
        }else{
            return back()->withErrors([
                'email'=>'Email ou mot de pass incorrecte ! '
            ])->onlyInput('input');

        }
    }
    public function logout(){
        Session::flush();
        Auth::logout();
        return to_route('login');
    }


}