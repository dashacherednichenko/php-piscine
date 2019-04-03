#!/usr/bin/php
<?php
if ($argc < 3) {
    exit();
}
$mykey = $argv[1];
$i = 2;
$array = array();
while ($i < $argc)
{
    $el = explode(':', $argv[$i]);
    if (count($el) != 2)
        exit();
    $array[$el[0]] = $el[1];
    $i++;
}
print_r($array);
if (array_key_exists($mykey, $array) == FALSE)
    exit();
foreach ($array as $key => $value)
{
    if ($mykey == $key)
        echo $key = $value."\n";
}
?>