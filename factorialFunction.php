<?php

function factorialLoop(int $value): int {
    $total = 1;

    for($i = 1; $i <= $value; $i++){
        $total *= $i;
    }
    return $total;
}

var_dump(factorialLoop(5));


function factorialRecusive(int $value): int{
    if ($value == 1){
        return 1;
    }else{
        return $value * factorialRecusive($value - 1); //bisa memanggil dirinya sendiri
    }
}

var_dump(factorialRecusive(5));