<?php

function toMultiplyTbale(int $x) {

    $result ="";

    for($i = 1; $i <= 12; $i++) {
        $result .=  $x . "x" . $i . " = " . $x * $i . "<br>";
    }

  return $result;
}

$number = toMultiplyTbale(5);

echo $number;



