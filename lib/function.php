<?php


function hello(string $firsname, string $umur): string {
    return "hello $firstname umur saya $umur";
}


function test(){
    for($a=1; $a<=20; $a++){
        if($a % 2==1 ){
            echo "Ini bilangan ganjil: ". $a . PHP_EOL;
        }
    }
}
