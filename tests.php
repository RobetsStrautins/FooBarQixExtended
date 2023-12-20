

<?php
require 'index.php';
function test1()
{
    echo "test1";
    $number= 3;
    $result=fooBarService($number);
    if($result === "Foo")
        echo "Viss ok";
    else
        echo "Error";
    echo "<br>";
}
function test2()
{
    echo "test2";
    $number= 5;
    $result=fooBarService($number);
    if($result === "Bar")
        echo "Viss ok";
    else
        echo "Error";
    echo "<br>";
}
function test3()
{
    echo "test3";
    $number= 7;
    $result=fooBarService($number);
    if($result === "7")
        echo "Viss ok";
    else
        echo "Error";
    echo "<br>";
}
function test4()
{
    echo "test4";
    $number= 15;
    $result=fooBarService($number);
    if($result === "Foo, Bar")
        echo "Viss ok";
    else
        echo "Error";
    echo "<br>";
}

test1();
test2();
test3();
test4();
?>