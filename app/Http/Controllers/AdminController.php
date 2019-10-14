<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    public function index(Request $request){
        $login = $request->session()->get('login');
        if($login == true){
            return view('layout.main');
        }else{
            return redirect('/login');
        }
    }

    public function detailFutsal(Request $request, $idFutsal){
        if (Session::get('id') == $request->uid_admin) {
            $login = $request->session()->get('login');
            if($login == true){
                return view('layout.manage', ['idFutsal'=>$idFutsal]);
            }else{
                return redirect('/login');
            }
        } else {
            return redirect('/admin');
        }
    }

    public function logout(Request $request)
    {
        $request->session()->flush();
        return redirect('/admin');
    }
}
