<?php

$data = [
    "nama" => "okka"
];

if(isset($data["nama"])){
    $ambil = $data["nama"];
}else{
    $ambil = "Ga ada";
}

echo $ambil . PHP_EOL;

$test = [
    "name" => "omar"
];
$action = $test["name"] ?? "ga ada";

echo $action ;