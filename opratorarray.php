<?php

$first = [
    'nama' => "okka"
];

$last = [
    'nama' => "bud",
    "last_nama"=> "omarrosi"
];

$lengkap = $first + $last;
var_dump($lengkap);

$a = [
    "nama" => "okka",
    "last_nama"=> "omarrosi"
];

$b = [
    "last_nama"=> "omarrosi",
    "nama" => "okka"
];

var_dump($a==$b);
var_dump($a===$b);
var_dump($a!=$b);
var_dump($a!==$b);

