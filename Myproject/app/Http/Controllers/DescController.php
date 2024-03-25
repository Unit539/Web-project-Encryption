<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\Encryption\DecryptException;
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
                $decryptionValue = decryption($text, env("KEY"), env("SIX_IV"));
            }

            if($selector == "BLOWFISH"){
                $text = $request->decryption;
                $decryptionValue = decryptionB($text, env("KEY"), env("EIGHT_IV"));
            }

            if($selector == "BF"){
                $text = $request->decryption;
                $decryptionValue = decryptionBF($text, env("KEY"), env("EIGHT_IV"));
            }

            if($selector == "SM"){
                $text = $request->decryption;
                $decryptionValue = decryptionSM($text, env("KEY"), env("SIX_IV"));
            }

            if($selector == "CAMELLIA-128"){
                $text = $request->decryption;
                $decryptionValue = decryptionC($text, env("KEY"), env("SIX_IV"));
            }

            if($selector == "IDEA-CBC"){
                $text = $request->decryption;
                $decryptionValue = decryptionI($text, env("KEY"), env("EIGHT_IV"));
            }

            if($selector == "SEED-OFB"){
                $text = $request->decryption;
                $decryptionValue = decryptionS($text, env("KEY"), env("SIX_IV"));
            }

            if($selector == "CAST5-CFB"){
                $text = $request->decryption;
                $decryptionValue = decryptionC5($text, env("KEY"), env("EIGHT_IV"));
            }

            if($selector == "ARIA192"){
                $text = $request->decryption;
                $decryptionValue = decryptionAR($text, env("KEY"), env("SIX_IV"));
            }
        }
    
        return view('decr', array('desc'=>$decryptionValue));
    }

}
