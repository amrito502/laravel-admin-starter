<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(){

        if(!empty(Auth::check())){
            return redirect("/panel/dashboard");
        }
        return view('login');
    }


    public function authLogin(Request $request){

        $remember = !empty($request->remember) ? true : false;

        if(Auth::attempt(['email' => $request->email, 'password' => $request->password], $remember))
        {
            return redirect('/panel/dashboard');
        }
        else
        {
            return redirect()->back()->with('error','Email and Password Wrong!');
        }
    }

    public function logout(){
        Auth::logout();
        return redirect('/');
    }










}