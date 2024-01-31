<?php

$makan = "kenyang";

// $ask = null;

// if($makan == "kenyang"){
//     $ask = "Sudah Makan";
// }else{
//     $ask = "Belum Makan" ;
// }

$ask = $makan == "kenyang" ? "sudah makan" : "Belum makan";

echo $ask . PHP_EOL;