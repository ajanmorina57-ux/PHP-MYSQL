<?php
$emri = "Ajan";

print_r($emri);

echo "<br>";

echo gettype($emri);

echo "<br>";

function displaytext(){
    echo "Hello World";

}

displaytext();
echo "<br>";

function shuma1(){
    echo 5 + 10;
}

shuma1();

function shuma2($a, $b){
    echo $a + $b;
}

shuma2(5, 10);


function zbritja($a, $b){
    echo $a - $b;
}

zbritja(10, 5);
echo "<br>";


function minimum($x, $y){
    if ($x < $y){
        echo "$x is the minimum";
    } else {
        echo "$y is the minimum";
    }
}


$a = 5;
$b = 10;

minimum($a, $b);


function even_or_odd($num){
    if ($num % 2 == 0){
        echo "$num is even";
    } else {
        echo "$num is odd";
    }
}
$mosha = 16;
echo "<br>";
echo even_or_odd($mosha);




?>