#!/usr/bin/php
<?php
    if ($argc == 1)
        exit (0);
    $str = trim(preg_replace("/\s+/", " ", $argv[1]));
echo $str."\n";
?>