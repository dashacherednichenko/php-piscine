#!/usr/bin/php
<?php
if ($argc == 2)
{
    $array = explode(' ', $argv[1]);
    foreach ($array as $word)
    {
        if ($word)
        {
            $str = $str.$word." ";
        }
    }
    echo trim($str)."\n";
}
?>