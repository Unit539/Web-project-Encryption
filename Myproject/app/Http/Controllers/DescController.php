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
                $decryptionValue = decryption($text, config('key.key'), config('key.six_iv'));
            }

            if($selector == "BLOWFISH"){
                $text = $request->decryption;
                $decryptionValue = decryptionB($text, config('key.key'), config('key.eight_iv'));
            }

            if($selector == "BF"){
                $text = $request->decryption;
                $decryptionValue = decryptionBF($text, config('key.key'), config('key.eight_iv'));
            }

            if($selector == "SM"){
                $text = $request->decryption;
                $decryptionValue = decryptionSM($text, config('key.key'), config('key.six_iv'));
            }

            if($selector == "CAMELLIA-128"){
                $text = $request->decryption;
                $decryptionValue = decryptionC($text, config('key.key'), config('key.six_iv'));
            }

            if($selector == "IDEA-CBC"){
                $text = $request->decryption;
                $decryptionValue = decryptionI($text, config('key.key'), config('key.eight_iv'));
            }

            if($selector == "SEED-OFB"){
                $text = $request->decryption;
                $decryptionValue = decryptionS($text, config('key.key'), config('key.six_iv'));
            }

            if($selector == "CAST5-CFB"){
                $text = $request->decryption;
                $decryptionValue = decryptionC5($text, config('key.key'), config('key.eight_iv'));
            }

            if($selector == "ARIA192"){
                $text = $request->decryption;
                $decryptionValue = decryptionAR($text, config('key.key'), config('key.six_iv'));
            }
        }
    
        return view('decr', array('desc'=>$decryptionValue));
    }

}
