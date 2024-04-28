<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerBlog extends Controller

{
    public function index(Request $request){
        return view('acceuil');
    }

}
