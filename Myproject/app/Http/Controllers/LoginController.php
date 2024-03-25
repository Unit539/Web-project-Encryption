<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    //
    function login(Request $request){
        if(Auth::check()){
            return redirect()->intended(route('user.home'));
        }

        $messages = [
            'name.required' => 'Требуется логин!',
            'password.required' => 'Требуется пароль!'
        ];

        $loginValid = $request->validate([
            'name' => ['required'],
            'password' => ['required'],
        ], $messages);

        if(Auth::attempt($loginValid)){
            $request->session()->put('User', $request->name);
            return redirect()->intended(route('user.home'));
        }

        return redirect(route('user.login'))->withErrors([
            'login' => 'Не верный логин или пароль!'
        ]);
    }

}
