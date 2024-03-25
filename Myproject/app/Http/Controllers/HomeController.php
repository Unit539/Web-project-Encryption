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
                $encryptedValue = encryption($text, env("KEY"), env("SIX_IV"));
            }

            if($selector == "BLOWFISH"){
                $text = $request->encryption;
                $encryptedValue = encryptionB($text, env("KEY"), env("EIGHT_IV"));
            }

            if($selector == "BF"){
                $text = $request->encryption;
                $encryptedValue = encryptionBF($text, env("KEY"), env("EIGHT_IV"));
            }

            if($selector == "SM"){
                $text = $request->encryption;
                $encryptedValue = encryptionSM($text, env("KEY"), env("SIX_IV"));
            }

            if($selector == "CAMELLIA-128"){
                $text = $request->encryption;
                $encryptedValue = encryptionC($text, env("KEY"), env("SIX_IV"));
            }

            if($selector == "IDEA-CBC"){
                $text = $request->encryption;
                $encryptedValue = encryptionI($text, env("KEY"), env("EIGHT_IV"));
            }

            if($selector == "SEED-OFB"){
                $text = $request->encryption;
                $encryptedValue = encryptionS($text, env("KEY"), env("SIX_IV"));
            }

            if($selector == "CAST5-CFB"){
                $text = $request->encryption;
                $encryptedValue = encryptionC5($text, env("KEY"), env("EIGHT_IV"));
            }

            if($selector == "ARIA192"){
                $text = $request->encryption;
                $encryptedValue = encryptionAR($text, env("KEY"), env("SIX_IV"));
            }
        }

        return view('home', array('en'=>$encryptedValue));
    }
}
