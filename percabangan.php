<?php

$alpro = 100;

if ($alpro >= 86 && $alpro <= 100){
    echo "NILAI ANDA A";
}elseif($alpro >= 78 && $alpro <= 86){
    echo "Nilai ANDA AB";
}else{
    echo "Maaf anda tidak lulus";
}

echo "\n";

$nilai = 75;
$a = 90;
$b = 88;
$c = 86;
$total = 0;
$total += $a;
$total += $b;
$total += $c;   

$rata = $total/3;

if($rata >= $nilai && $nilai <= 100){
    echo "Anda Lulus Nilai Rata Rata Anda : " . $rata;
}else{
    echo "anda tidak lulus";
}