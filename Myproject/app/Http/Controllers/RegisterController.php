<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;


class RegisterController extends Controller
{
    //
    function register(Request $request){
        if(Auth::check()){
            return redirect(route('user.home'));
        }

        $messages = [
            'name.required' => 'Требуется логин!',
            'email.required' => 'Требуется почта!',
            'password.required' => 'Требуется пароль!',
            'name.min' => 'Имя должно содержать не менее 5 символов!',
            'password.min' => 'Имя должно содержать не менее 3 символов!',
            'name.max' => 'Длина имени не должна превышать 25 символов!',
            'email.max' => 'Длина почты не должна превышать 35 символов!',
            'password.max' => 'Длина пароля не должна превышать 35 символов!',
            'name.unique' => 'Имя уже занято!',
            'email.unique' => 'Почта уже существует!',
            'email.email' => 'Неверный адрес почты!'
        ];

        $validateFields = $request->validate([
            'name' => 'required|min:5|max:25|unique:users',
            'email' => 'required|max:35|unique:users|email',
            'password' => 'required|min:3|max:35',
        ], $messages);

        
        $user = User::create($validateFields);
        if($user){
            return redirect(route('user.login'));
        }

        return redirect(route('register'))->wirhErrors([
            'formError' => 'Ошибка регистрации!'
        ]);
    }

}
