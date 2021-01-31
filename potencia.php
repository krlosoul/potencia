<?php

    function potencia($base, $exponent)
    {
        $result = 1;
        for ($i = 0; $i < $exponent; $i++) {
            $tmp = 0;
            for ($x = 0; $x < $result; $x++) {
                $tmp += $base;
            }
            $result = $tmp;
            $tmp = 0;
        }

        return $result;
    }

    echo potencia(2, 3);
    
?>