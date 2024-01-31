<?php
// operator aritmatika
$a = 10;
$b = 25;

$hasil = $a+$b;

var_dump($hasil);
var_dump(-$hasil);
var_dump(+$hasil);

$hasilmodulo = 45%7;
var_dump($hasilmodulo);


// Oprator Penugasan

$total = 0;

$bbm = 300000;
$gaji = 105000;
$mobil = 400000;

$total += $bbm;
$total += $gaji;
$total += $mobil;
echo "\n";
echo 'Oprator penugasan: ';
var_dump($total);

// Operator perbandingan

$x = "string";
$y = 6;
echo "\n";
var_dump($x==$y); // sama dengan
var_dump($x===$y); // identik
var_dump($x!=$y); // Tidak sama dengan
var_dump($x!==$y); // Tidak identik
var_dump($x>=$y); // Tidak identik


// Operator Logika
echo "\n";
var_dump(true && true); // and
var_dump(true && false); // and
echo "\n";
var_dump(true || true); // or
var_dump(true || false); // or
echo "\n";
var_dump(true xor true); // or
var_dump(true xor false); // or
echo "\n";
var_dump(!true); 
var_dump(!false); 

// Oprator Increment dan Decerment

$y = 10;
$z = ++$y; //dinaikan dlu ke z
$z = $y++; //yang di baca y nya dlu baru di naikan
var_dump($z);

