#!/usr/bin/php
<?php
if ($argc > 1)
{
    $i = 0;
    $array = explode(' ', $argv[1]);
    foreach ($array as $word)
    {
        if ($word)
            $ar[$i++] = $word." ";
    }
    $ar[$i] = trim($ar[0]);
    $first = array_shift($ar);
    foreach ($ar as $word)
        echo $word;
    echo "\n";
}
?>