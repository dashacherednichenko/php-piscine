#!/usr/bin/php
<?php
function ft_compare($a, $b)
{
    $i = 0;
    $cmp = "abcdefghijklmnopqrstuvwxyz0123456789!\"#$%&'()*+,-./:;<=>?@[\]^_`{|}~";
    $low_a = strtolower($a);
    $low_b = strtolower($b);
    while (($i < strlen($low_a)) || ($i < strlen($low_b)))
    {
        $a_index = strpos($cmp, $low_a[$i]);
        $b_index = strpos($cmp, $low_b[$i]);
        if ($a_index < $b_index)
            return (0);
        else if ($a_index > $b_index)
            return (1);
        $i++;
    }

}
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
    usort($array, "ft_compare");
    foreach ($array as $sort_word)
    {
        echo $sort_word."\n";
    }
}
?>