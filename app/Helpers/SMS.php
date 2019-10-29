<?php
namespace App\Helpers;

class SMS { 



    public static function sendCod($number, $cod){
        $smsOptions = \App\Setting::find(1);
        if($smsOptions->sms_on == true){
            $token = $smsOptions->sms_token;
            $login = $smsOptions->sms_login;
            $msg = urlencode("Olá, seu código de login é : " . $cod);
            $number = preg_replace("/[^0-9]/", "", $number);
            $URL = "http://sms.kingtelecom.com.br/kingsms/api.php?acao=sendsms&login=". $login . "&token=" . $token . "&numero=$number&msg=$msg";
            $send = file_get_contents($URL); 
            return $send;
        }else{
            return false;
        }
    }
}

