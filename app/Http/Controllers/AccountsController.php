<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountsController extends Controller
{
    //

    public function account(){

        return view ('pages/form');
    }
    public function register(Request $req){
        // $req->method();
        // $req->path();
        // $req->url();
        // $req->input();

        $req->validate([
            'email'=>'required | email ',
            'password'=> 'required |min:6 | max:12'
        ]);
        
        return $req->input();
    }
    
}
