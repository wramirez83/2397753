<?php

namespace App\Facade;
use Illuminate\Support\Str;


class VerifyCode{
    public static function generate(int $length = 8){
        $code = '';
        for($i = 0; $i <= $length; $i++){
            $upper = rand(0,3);
            if($upper == 0){
                $code .= chr(rand(65, 90));
            }elseif($upper == 1){
                $code .= chr(rand(97, 122));
            }elseif($upper == 2){
                $code .= chr(rand(48, 57));
            }elseif($upper == 3){
                $code .= chr(rand(35, 43));
            }
        }
        return $code;
    }

    public static function generateFacade(int $length = 8){
        return Str::random($length);
    }
}