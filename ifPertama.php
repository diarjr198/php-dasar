<?php

    $a = 10;
    $b = 20;
    $c = 30;
    $d = 10;

    if($a == $d) {
        echo "a sama dengan d";
    } else {
        echo "a tidak sama dengan d";
    }

    echo "<br />";

    if($a != $c) {
        echo "a tidak sama dengan c";
    } else {
        echo "a sama dengan c";
    }

    echo "<br />";

    if ($a > $c) {
        echo "a lebih besar dari c";
    } else {
        echo "a kurang dari c";
    }

    echo "<br />";

    if($a >= $d) {
        echo "a lebih besar atau sama dengan d";
    } else {
        echo "a kurang dari d";
    }