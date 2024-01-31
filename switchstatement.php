<?php

$nilai = "E";

if($nilai == "A"){
    echo "Anda Lulus sangat baik". PHP_EOL;
}elseif($nilai == "B" || $nilai == "C"){
    echo "Anda Lulus". PHP_EOL;
}elseif($nilai == "D"){
    echo "Anda Tidak Lulus". PHP_EOL;
}else{
    echo "Semangat Belajar". PHP_EOL;
}

switch ($nilai){
    case "A":
        echo "Anda Lulus sangat baik". PHP_EOL;
        break;
    case "B":
    case "C":
        echo "Anda Lulus". PHP_EOL;
        break;
    case "D":
        echo "Semangat". PHP_EOL;
        break;
    default:
        echo "salah jurusan";
}