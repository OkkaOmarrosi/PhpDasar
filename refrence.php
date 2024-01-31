<?php

$name = "okka";

$namalain = &$name;
$namalain = "gata";

echo $name, PHP_EOL;


function increment(int &$value){
    $value++;
}

$nilai = 1;
increment($nilai);

echo $nilai;


function &getValue(){
    static $value = 100;
    return $value;
}

$a = &getValue();
$a =  200;
echo $a, PHP_EOL;

$b = getValue();
echo $b, PHP_EOL;

$this->
