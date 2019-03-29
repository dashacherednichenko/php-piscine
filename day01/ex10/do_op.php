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
    if ($sign == '-')
        $result = $a - $b;
    if ($sign == '*')
        $result = $a * $b;
    if ($sign == '/')
        $result = $a / $b;
    if ($sign == '%')
        $result = $a % $b;
    echo $result."\n";
}
?>