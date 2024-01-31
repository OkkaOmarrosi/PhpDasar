<?php

// Array MAP

$data = [1,2,3,4,5,6,7,8,9,10];

$map = function($value){
    return $value*10;
};

$result = array_map($map, $data);
var_dump($result);

// Rsort Mengurutkan

rsort($data);
var_dump($data);

// mengambil key nya saja

var_dump(array_keys($data));

var_dump(array_values($data));