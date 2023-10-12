<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {


    $a = $_POST["primo"];
    $b = $_POST["secondo"];
    $mcm;
    $MCD;


    if ($a !== $b) {
        if ($a > $b) {


            $q = $a / $b;
            $r = $a % $b;
            if ($r < $b) {
                if ($r == 0) {
                    $MCD = $b;

                    echo "Il Massimo Comun Divisore tra $a e $b e uguale a : $MCD <br><br>";

                    $mcm = $a * $b / $MCD;

                    echo "Il minimo comune multiplo e: $mcm";
                }
            }
        }
    }
}
