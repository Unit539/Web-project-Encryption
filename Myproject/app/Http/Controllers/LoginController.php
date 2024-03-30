<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
require_once('.\..\app\Custom\keys.php');

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
            $request->session()->put('SecretKey', generateRandomString());
            $request->session()->put('SixIV', generateRandomSixIv());
            $request->session()->put('EightIV', generateRandomEightIv());
            return redirect()->intended(route('user.home'));
        }

        return redirect(route('user.login'))->withErrors([
            'login' => 'Не верный логин или пароль!'
        ]);
    }

}
