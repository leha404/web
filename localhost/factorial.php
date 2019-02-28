<?php
    function getFactorial($n) {
        $res = 1;
        
        for ($i = 1; $i < $n; $i++)
            $res *= $i;

        return $res;
    }
?>