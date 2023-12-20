<?php

function fooBarService($number) {
    $result = "";
    // Looks if number is devidable by 3
    if ($number % 3 == 0) {
        $result .= "Foo, ";
    }
    // Looks if number is devidable by 5
    if ($number % 5 == 0) {
        $result .= "Bar, ";
    }
    // If no condition is met, return the original number
    if ($result === "") {
        $result = strval($number);
    }
    else
    {
        $result=substr($result, 0,-2);
    }
    return $result;
}
    
?>