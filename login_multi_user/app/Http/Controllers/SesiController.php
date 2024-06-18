<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Contracts\Service\Attribute\Required;

class SesiController extends Controller
{
    function index(){
        return view ('login.login');
    }

    function login(Request $request){
        $request->validate([
            'email'=> 'required',
            'password'=> 'required',
        ],[
            'email.required'=> 'Email Wajib Diisi',
            'password.required'=> 'Password Wajib Diisi',

        ]);

        $infologin = [
            'email'=> $request->email,
            'password'=> $request->password,
        ];
        if(Auth::attempt($infologin)){
            echo"sukses";exit() ;
        }else{
            return redirect("")->withErrors('Username Dan Password Tidak Sesuai')->withInput() ;
        }
    }
}
