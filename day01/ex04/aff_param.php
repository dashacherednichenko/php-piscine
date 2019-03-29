#!/usr/bin/php
<?php
$argc;
$argv;
if ($argc > 1)
{
    $i = 1;
    while ($argc > 1)
    {
        echo $argv[$i++]."\n";
        $argc--;
    }
}
?>