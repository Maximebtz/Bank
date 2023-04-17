<?php

function kodex_random_string($length=30){
    $chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $string = '';
    for($i=0; $i<$length; $i++){
        $string .= $chars[rand(0, strlen($chars)-1) ];
    }
    return $string;
}

echo  kodex_random_string();
?>