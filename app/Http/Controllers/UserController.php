<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Input;
use Auth;
use Redirect;

class UserController extends BaseController
{
    //
    public function postLogin(){
        $email=Input::get('email');
        $password=Input::get('password');

        if (Auth::attempt(array('email' => $email, 'password' => $password)))
        {
            //dd(Auth::user());
            return Redirect::route('index');
        }else{

            return Redirect::route('index')
                ->with('error','Please check your password & email');
        }
    }


    public function getLogout()
    {
        Auth::logout();
        return Redirect::route('index');
    }
}
