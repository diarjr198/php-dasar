<?php

    $a = 10;
    $b = 20;
    $c = 30;
    $d = 10;

    if($a == $d && $b < $c) {
        echo "a sama dengan d dan b kurang dari c";
    } else {
        echo "a tidak sama dengan d atau b lebih besar dari c";
    }

    echo "<br />";

    if($a == $d || $d > $c) {
        echo "a sama dengan d atau d lebih besar dari c";
    } else {
        echo "a tidak sama dengan d atau d kurang dari c";
    }