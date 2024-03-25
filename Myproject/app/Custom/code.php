<?php
    function encryption($text, $key, $iv){
        $ciphering = "AES-128-CTR";
        $iv_length = openssl_cipher_iv_length($ciphering);
        $options = 0;
        $encryption_iv = $iv;
        $encryption_key = $key;
        $data = openssl_encrypt($text, $ciphering, $encryption_key, $options, $encryption_iv);
        return $data;
    }

    function decryption($text, $key, $iv){
        $ciphering = "AES-128-CTR";
        $iv_length = openssl_cipher_iv_length($ciphering);
        $options = 0;
        $decryption_iv = $iv;
        $decryption_key = $key;
        $data = openssl_decrypt($text, $ciphering, $decryption_key, $options, $decryption_iv);

        return $data;
    }

    function encryptionB($text, $key, $iv){
        $ciphering = "blowfish";
        $iv_length = openssl_cipher_iv_length($ciphering);
        $options = 0;
        $encryption_iv = $iv;
        $encryption_key = $key;
        $data = openssl_encrypt($text, $ciphering, $encryption_key, $options, $encryption_iv);
        return $data;
    }

    function decryptionB($text, $key, $iv){
        $ciphering = "blowfish";
        $iv_length = openssl_cipher_iv_length($ciphering);
        $options = 0;
        $decryption_iv = $iv;
        $decryption_key = $key;
        $data = openssl_decrypt($text, $ciphering, $decryption_key, $options, $decryption_iv);
        return $data;
    }

    function encryptionBF($text, $key, $iv){
        $ciphering = "bf-ofb";
        $iv_length = openssl_cipher_iv_length($ciphering);
        $options = 0;
        $encryption_iv = $iv;
        $encryption_key = $key;
        $data = openssl_encrypt($text, $ciphering, $encryption_key, $options, $encryption_iv);
        return $data;
    }

    function decryptionBF($text, $key, $iv){
        $ciphering = "bf-ofb";
        $iv_length = openssl_cipher_iv_length($ciphering);
        $options = 0;
        $decryption_iv = $iv;
        $decryption_key = $key;
        $data = openssl_decrypt($text, $ciphering, $decryption_key, $options, $decryption_iv);
        return $data;
    }

    function encryptionSM($text, $key, $iv){
        $ciphering = "sm4";
        $iv_length = openssl_cipher_iv_length($ciphering);
        $options = 0;
        $encryption_iv = $iv;
        $encryption_key = $key;
        $data = openssl_encrypt($text, $ciphering, $encryption_key, $options, $encryption_iv);
        return $data;
    }

    function decryptionSM($text, $key, $iv){
        $ciphering = "sm4";
        $iv_length = openssl_cipher_iv_length($ciphering);
        $options = 0;
        $decryption_iv = $iv;
        $decryption_key = $key;
        $data = openssl_decrypt($text, $ciphering, $decryption_key, $options, $decryption_iv);
        return $data;
    }

    function encryptionC($text, $key, $iv){
        $ciphering = "camellia128";
        $iv_length = openssl_cipher_iv_length($ciphering);
        $options = 0;
        $encryption_iv = $iv;
        $encryption_key = $key;
        $data = openssl_encrypt($text, $ciphering, $encryption_key, $options, $encryption_iv);
        return $data;
    }

    function decryptionC($text, $key, $iv){
        $ciphering = "camellia128";
        $iv_length = openssl_cipher_iv_length($ciphering);
        $options = 0;
        $decryption_iv = $iv;
        $decryption_key = $key;
        $data = openssl_decrypt($text, $ciphering, $decryption_key, $options, $decryption_iv);
        return $data;
    }

    function encryptionI($text, $key, $iv){
        $ciphering = "idea-cbc";
        $iv_length = openssl_cipher_iv_length($ciphering);
        $options = 0;
        $encryption_iv = $iv;
        $encryption_key = $key;
        $data = openssl_encrypt($text, $ciphering, $encryption_key, $options, $encryption_iv);
        return $data;
    }

    function decryptionI($text, $key, $iv){
        $ciphering = "idea-cbc";
        $iv_length = openssl_cipher_iv_length($ciphering);
        $options = 0;
        $decryption_iv = $iv;
        $decryption_key = $key;
        $data = openssl_decrypt($text, $ciphering, $decryption_key, $options, $decryption_iv);
        return $data;
    }

    function encryptionS($text, $key, $iv){
        $ciphering = "seed-ofb";
        $iv_length = openssl_cipher_iv_length($ciphering);
        $options = 0;
        $encryption_iv = $iv;
        $encryption_key = $key;
        $data = openssl_encrypt($text, $ciphering, $encryption_key, $options, $encryption_iv);
        return $data;
    }

    function decryptionS($text, $key, $iv){
        $ciphering = "seed-ofb";
        $iv_length = openssl_cipher_iv_length($ciphering);
        $options = 0;
        $decryption_iv = $iv;
        $decryption_key = $key;
        $data = openssl_decrypt($text, $ciphering, $decryption_key, $options, $decryption_iv);
        return $data;
    }

    function encryptionC5($text, $key, $iv){
        $ciphering = "cast5-cfb";
        $iv_length = openssl_cipher_iv_length($ciphering);
        $options = 0;
        $encryption_iv = $iv;
        $encryption_key = $key;
        $data = openssl_encrypt($text, $ciphering, $encryption_key, $options, $encryption_iv);
        return $data;
    }

    function decryptionC5($text, $key, $iv){
        $ciphering = "cast5-cfb";
        $iv_length = openssl_cipher_iv_length($ciphering);
        $options = 0;
        $decryption_iv = $iv;
        $decryption_key = $key;
        $data = openssl_decrypt($text, $ciphering, $decryption_key, $options, $decryption_iv);
        return $data;
    }

    function encryptionAR($text, $key, $iv){
        $ciphering = "aria192";
        $iv_length = openssl_cipher_iv_length($ciphering);
        $options = 0;
        $encryption_iv = $iv;
        $encryption_key = $key;
        $data = openssl_encrypt($text, $ciphering, $encryption_key, $options, $encryption_iv);
        return $data;
    }

    function decryptionAR($text, $key, $iv){
        $ciphering = "aria192";
        $iv_length = openssl_cipher_iv_length($ciphering);
        $options = 0;
        $decryption_iv = $iv;
        $decryption_key = $key;
        $data = openssl_decrypt($text, $ciphering, $decryption_key, $options, $decryption_iv);
        return $data;
    }
?>
