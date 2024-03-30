<?php
    function generateRandomString() {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < 25; $i++) {
            $randomString .= $characters[random_int(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    function generateRandomSixIv(){
        $bytes = random_bytes(8);
        return bin2hex($bytes);
    }

    function generateRandomEightIv(){
        $bytes = random_bytes(4);
        return bin2hex($bytes);
    }
?>