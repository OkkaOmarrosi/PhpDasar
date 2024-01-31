<?php

$nama = "Moh Okka Omarrosi";
// DOT OPRATOR
echo "Nama: ". $nama . PHP_EOL;
echo "Nama: ".$nama. "umur ". 100 . PHP_EOL;

// KONVERSI NUMBER DAN SEBALIKNYA
echo "\n";
$valuestring = (string)100;
var_dump($valuestring);
$valueInt = (int)"10";
var_dump($valueInt);

$valueFloat = (float)'10.1';
var_dump($valueFloat);

// Mengakses Karakter
echo "\n";
$name = "OKKA";

echo $name[0]. PHP_EOL;
echo $name[1]. PHP_EOL;

// Variabel Parsing
echo "\n";

echo "hallo, saya $name ";

// Curly Brace
echo "\n";

echo "hallo, saya JI{$name} ";




