<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
                $encryptedValue = encryption($text, config('key.key'), config('key.six_iv'));
            }

            if($selector == "BLOWFISH"){
                $text = $request->encryption;
                $encryptedValue = encryptionB($text, config('key.key'), config('key.eight_iv'));
            }

            if($selector == "BF"){
                $text = $request->encryption;
                $encryptedValue = encryptionBF($text, config('key.key'), config('key.eight_iv'));
            }

            if($selector == "SM"){
                $text = $request->encryption;
                $encryptedValue = encryptionSM($text, config('key.key'), config('key.six_iv'));
            }

            if($selector == "CAMELLIA-128"){
                $text = $request->encryption;
                $encryptedValue = encryptionC($text, config('key.key'), config('key.six_iv'));
            }

            if($selector == "IDEA-CBC"){
                $text = $request->encryption;
                $encryptedValue = encryptionI($text, config('key.key'), config('key.eight_iv'));
            }

            if($selector == "SEED-OFB"){
                $text = $request->encryption;
                $encryptedValue = encryptionS($text, config('key.key'), config('key.six_iv'));
            }

            if($selector == "CAST5-CFB"){
                $text = $request->encryption;
                $encryptedValue = encryptionC5($text, config('key.key'), config('key.eight_iv'));
            }

            if($selector == "ARIA192"){
                $text = $request->encryption;
                $encryptedValue = encryptionAR($text, config('key.key'), config('key.six_iv'));
            }
        }

        return view('home', array('en'=>$encryptedValue));
    }
}
