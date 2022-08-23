<?php

    function aritmatika($nilai1, $nilai2, $tugas) {
        if($tugas == "+"){
            $hasil = $nilai1 + $nilai2;
        } else if($tugas == "-"){
            $hasil = $nilai1 - $nilai2;
        } else if($tugas == "*"){
            $hasil = $nilai1 * $nilai2;
        } else if($tugas == "/"){
            $hasil = $nilai1 / $nilai2;
        } else {
            $hasil = "Tugas tidak ditemukan";
        }
        return $hasil;
    }

    echo aritmatika(10, 20, "+");
    echo "<br />";
    echo aritmatika(19, 4, "-");
    echo "<br />";
    echo aritmatika(30, 20, "*");
    echo "<br />";
    echo aritmatika(28, 7, "/");