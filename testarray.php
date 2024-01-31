<?php

$x = array(1,2,3,4, 4.5);
var_dump($x);

$y = ["okka", "jihan", "ashifa", 100];
var_dump($y);

// Operasi array

var_dump($y[1]); //mengambil index

$y[2] = "hakim"; // merubah index data
var_dump($y);

unset($y[2], $y[1]); // menghapus index data
var_dump($y);

$y[] = "alex"; // menambah data dalam array
var_dump($y);

var_dump(count($y)); // menghitung index array


// di php map bisa di gantikan array, array dan map samaa jika di PHP

$okka = array(
    "id"=>1,
    "name"=>"okka",
    "age"=>20
); // map key dan value

var_dump($okka);

// mengambil index di map
var_dump($okka["name"]);

$jihan = [
    "id"=>2,
    "name"=>"jihan",
    "age"=>20
]; // map key dan value

var_dump($jihan);
var_dump($jihan['id']);


// array dalam array
$rosi = array(
    "id"=>3,
    "name"=>"okka",
    "age"=>20,
    "alamat" => array(
        "city" => "Surabaya",
        "provinsi" => "Jawa Timur"
    )

); // map key dan value

var_dump($rosi);
echo "\n";
// mengambil index di map
echo "Mengambil kota: ";
var_dump($rosi["alamat"]["city"]);

echo "\n";

$jihanasf = [
    "id"=>4,
    "name"=>"jihan",
    "age"=>20,
    "alamat"=>[
        "city" => "Surabaya",
        "provinsi" => "Jawa Timur"
    ]
]; // map key dan value

var_dump($jihanasf);
var_dump($jihanasf['alamat']['provinsi']);








