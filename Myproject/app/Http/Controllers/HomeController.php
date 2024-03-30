<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
require_once (".\..\app\Custom\code.php");

class HomeController extends Controller
{
    //
    function index(Request $request){
        $selector = $request->selector; 
        $encryptedValue = '';
        if($request->filled('encryption')){
            if($selector == "AES-256"){
                $text = $request->encryption;
                $encryptedValue = encrypt($text);
            }

            if($selector == 'AES-128'){
                $text = $request->encryption;
                // $encryptedValue = encryption($text, config('key.key'), config('key.six_iv'));
                $encryptedValue = encryption($text, Session::get("SecretKey"), Session::get("SixIV"));
            }

            if($selector == "BLOWFISH"){
                $text = $request->encryption;
                $encryptedValue = encryptionB($text, Session::get("SecretKey"), Session::get("EightIV"));
            }

            if($selector == "BF"){
                $text = $request->encryption;
                $encryptedValue = encryptionBF($text, Session::get("SecretKey"), Session::get("EightIV"));
            }

            if($selector == "SM"){
                $text = $request->encryption;
                $encryptedValue = encryptionSM($text, Session::get("SecretKey"), Session::get("SixIV"));
            }

            if($selector == "CAMELLIA-128"){
                $text = $request->encryption;
                $encryptedValue = encryptionC($text, Session::get("SecretKey"), Session::get("SixIV"));
            }

            if($selector == "IDEA-CBC"){
                $text = $request->encryption;
                $encryptedValue = encryptionI($text, Session::get("SecretKey"), Session::get("EightIV"));
            }

            if($selector == "SEED-OFB"){
                $text = $request->encryption;
                $encryptedValue = encryptionS($text, Session::get("SecretKey"), Session::get("SixIV"));
            }

            if($selector == "CAST5-CFB"){
                $text = $request->encryption;
                $encryptedValue = encryptionC5($text, Session::get("SecretKey"), Session::get("EightIV"));
            }

            if($selector == "ARIA192"){
                $text = $request->encryption;
                $encryptedValue = encryptionAR($text, Session::get("SecretKey"), Session::get("SixIV"));
            }
        }

        return view('home', array('en'=>$encryptedValue));
    }
}
