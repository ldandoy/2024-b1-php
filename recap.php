<?php

$variable1 = true;

$variable1 = "toto";

echo $variable1."<br />";

// for ($i=0;$i<10;$i=$i+2) {
for ($i=0;$i<10;$i++) {
    if ($i % 2 == 0) {
        echo $i . "<br />";
    }
}

echo "fin";