<?php

function nama($a, $b){
    echo "nama saya adalah $a umur saya adalah $b". PHP_EOL;
}

nama("okka",10);
nama("alex",11);


function sayname($a = "anonymus"){
    echo "nama saya adalah $a". PHP_EOL;
}

sayname();

function sum(int $a, int $b){
    $total = $a + $b;
    echo " total $a + $b = $total" . PHP_EOL;
}

sum(100,100);
sum("100","100");
sum(true,false);


function sumAll(...$value){
    $total = 0;
    foreach($value as $values){
        $total += $values;
    }
    echo "total" . implode(",", $value) . " = $total". PHP_EOL; // implode adalah merubah array menjadi string
}

$test = [1,2,3,4,5];

sumAll(1,2,3,4,5);
sumAll(...$test);


