<?php

$hallo = function(string $okka){
    echo "hello $okka".PHP_EOL;
};

$hallo("okka");
$hallo("jihan");

function bye(string $name, $filter){
    $finalName = $filter($name);
    echo "Good Bye $finalName". PHP_EOL;
}

bye("okka", function(string $name): string{
    return strtoupper($name);
});

$uper = function(string $name): string{
return strtoupper($name);
};

bye("okka",$uper);

$fname = "okka";
$lname = "Omarrosi";

$anonymus = function() use ($fname, $lname): string {
    return "Hello $fname $lname" . PHP_EOL;
}; // ANONYMUS FUNCTION MENGAKSES VARIABEL YANG DI LUAR