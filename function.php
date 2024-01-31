<?php

function hello(){
    echo "Hello World" . PHP_EOL;
}

hello();

$test = true;

if($test){
    function hi(){
        echo "hello" . PHP_EOL;
    }
}


hi();
hi();
hi();