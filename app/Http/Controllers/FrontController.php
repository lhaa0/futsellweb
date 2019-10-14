<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class FrontController extends Controller
{
    public function index(Request $request){
        $login = $request->session()->get('login');
        if($login == true){
            return redirect('/admin');
        }else{
            return view('login');
        }
    }

    public function loginAuth(Request $request)
    {
        $name = $request->name;
        $email = $request->email;
        $id = $request->id;

        Session::put('name', $name);
        Session::put('email', $email);
        Session::put('id', $id);
        Session::put('login', TRUE);
    }
}
