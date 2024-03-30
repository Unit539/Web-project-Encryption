<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Support\Facades\Session;
require_once(".\..\app\Custom\code.php");


class DescController extends Controller
{
    //
    function index(Request $request){
        $selector = $request->selector;
        $decryptionValue = '';
        if($request->filled('decryption')){
            if($selector == "AES-256"){
                try{
                    $text = $request->decryption;
                    $decryptionValue = decrypt($text);
                }catch(DecryptException $e){
                    return back()->withErrors([
                        'decryption' => 'Не верный формат расшифровки!',
                    ]);
                }
            }

            if($selector == 'AES-128'){
                $text = $request->decryption;
                // $decryptionValue = decryption($text, config('key.key'), config('key.six_iv'));
                $decryptionValue = decryption($text, Session::get("SecretKey"), Session::get("SixIV"));
            }

            if($selector == "BLOWFISH"){
                $text = $request->decryption;
                $decryptionValue = decryptionB($text, Session::get("SecretKey"), Session::get("EightIV"));
            }

            if($selector == "BF"){
                $text = $request->decryption;
                $decryptionValue = decryptionBF($text, Session::get("SecretKey"), Session::get("EightIV"));
            }

            if($selector == "SM"){
                $text = $request->decryption;
                $decryptionValue = decryptionSM($text, Session::get("SecretKey"), Session::get("SixIV"));
            }

            if($selector == "CAMELLIA-128"){
                $text = $request->decryption;
                $decryptionValue = decryptionC($text, Session::get("SecretKey"), Session::get("SixIV"));
            }

            if($selector == "IDEA-CBC"){
                $text = $request->decryption;
                $decryptionValue = decryptionI($text, Session::get("SecretKey"), Session::get("EightIV"));
            }

            if($selector == "SEED-OFB"){
                $text = $request->decryption;
                $decryptionValue = decryptionS($text, Session::get("SecretKey"), Session::get("SixIV"));
            }

            if($selector == "CAST5-CFB"){
                $text = $request->decryption;
                $decryptionValue = decryptionC5($text, Session::get("SecretKey"), Session::get("EightIV"));
            }

            if($selector == "ARIA192"){
                $text = $request->decryption;
                $decryptionValue = decryptionAR($text, Session::get("SecretKey"), Session::get("SixIV"));
            }
        }
    
        return view('decr', array('desc'=>$decryptionValue));
    }

}
