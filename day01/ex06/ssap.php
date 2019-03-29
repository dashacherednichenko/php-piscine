#!/usr/bin/php
<?php
if ($argc > 1)
{
    $i = 0;
    unset($argv[0]);
    foreach ($argv as $el)
    {
        $elem = explode(' ', $el);
        foreach ($elem as $word) {
            $array[$i] = $word;
            $i++;
        }
    }
    sort($array);
    foreach ($array as $sort_word)
    {
        echo $sort_word."\n";
    }
}
?>