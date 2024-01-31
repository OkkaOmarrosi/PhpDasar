<?php

$a = 1; 

while($a <= 10){
    echo $a . PHP_EOL;
    $a++;
}

// do while loop 

$b = 1; 

do{
    echo $b . PHP_EOL; // bisa di eksekusi terlebih dahulu
    $b++;
}while($b <= 10);


$counter = 1;

while(true){
    echo "perulangan ke-$counter" . PHP_EOL;
    $counter++;
    if($counter == 11){
        break;
    }
}

for($x=1; $x <= 100; $x++){
    if($x % 2 == 1){
        continue;
    }
    echo "angka $x" . PHP_EOL;
}