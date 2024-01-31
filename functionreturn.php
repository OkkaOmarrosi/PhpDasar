<?php

function sum($a,$b) : int
{
    return $a + $b;
}

$a = sum(10,11);
var_dump($a);


function ceknilai(int $a, int $b, int $c) : string
{
    $value = $a + $b +$c;
    $total = $value / 3;
    if($total >= 86 && $total <= 100){
        return "Selamat Kamu Dapat Nilai A";
    }elseif($total >= 60 && $total <= 86){
        return "KAMU DAPAT NILAI B";
    }elseif($total >= 40 && $total <= 60){
        return "KAMU DAPAT NILAI C";
    }else{
        return "SEMANGAT BELAJAR";
    }
}

$cek = ceknilai(16,46,88);
var_dump($cek);







