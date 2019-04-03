#!/usr/bin/php
<?php
if ($argc != 4)
    echo "Incorrect Parameters\n";
else
{
    $a = trim($argv[1]);
    $sign = trim($argv[2]);
    $b = trim($argv[3]);
    $result;
    if ($sign == '+')
        $result = $a + $b;
    else if ($sign == '-')
        $result = $a - $b;
    else if ($sign == '*')
        $result = $a * $b;
    else if ($sign == '/') {
        if ($a == 0 && $b == 0)
            $result = "NAN";
        else if ($a != 0 && $b == 0)
            $result = "INF";
        else
            $result = $a / $b;
    }
    else if ($sign == '%'){
        if ($a == 0 && $b == 0)
            $result = "NAN";
        else if ($a != 0 && $b == 0)
            $result = "INF";
        else
            $result = $a % $b;
    }
    echo $result."\n";
}
?>