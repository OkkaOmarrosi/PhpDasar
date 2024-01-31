<?php

$name = ["okka", "Bimbi", "gata"];

for($i = 0;$i < count($name);$i++){
    echo "data ke $i = $name[$i]" . PHP_EOL;
}

foreach($name as $index => $names){
    echo "data ke $index => $names" . PHP_EOL;
}

$orang = [
    "okka" => "pertama",
    "bimbi" => "kedua",
    "gata" => "ketiga"
];

foreach($orang as $key => $value){
    echo "$key : $value" . PHP_EOL;
}