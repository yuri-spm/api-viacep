<?php

function is_email($mail)
{
    return filter_var($mail, FILTER_VALIDATE_EMAIL);
}

function validaCPF($cpf){
    $cpf = filter_var($cpf, FILTER_SANITIZE_STRIPPED);
    $cpf = preg_replace('/[^0-9]/' , '', $cpf  );

    $digitoA = 0;
    $digitoB = 0;

    for($i = 0, $x = 10; $i <= 8; $i++, $x--){
        $digitoA += $cpf[$i] * $x;
    }

    for($i = 0, $x = 11; $i <= 9; $i++, $x--){
        if(str_repeat($i, 11) == $cpf){
            return false;
        }
        $digitoB += $cpf[$i] * $x;
    }

    $somaA = (($digitoA % 11) < 2 ) ? 0 : 11 - ($digitoA % 11);
    $somaB =  (($digitoB % 11) < 2 ) ? 0 : 11 - ($digitoB % 11);

    if($somaA != $cpf[9] || $somaB != $cpf[10]){
        return false;
    }else
        return true;

}


function validaCep($cep)
{

       $str = filter_var($cep, FILTER_SANITIZE_STRIPPED);
       $str = preg_replace("/[^0-9]/", "", $cep);
       $url = "https://viacep.com.br/ws/$cep/json/";

       $cep = file_get_contents($url);
       $cep = json_decode($cep);
       return $cep;



}


function formatBrl($number)
{
    return number_format($number, "," ,".");
}