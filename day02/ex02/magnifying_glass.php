#!/usr/bin/php
<?php
if ($argc != 2 || file_exists($argv[1]) == 0)
    exit(0);
$fd = file_get_contents($argv[1]);
echo preg_replace_callback(
    "/<a [\w\W]*?<\/a>/i",
    function ($match) {
        $match = preg_replace_callback("/title[ ]?=[ ]?[\w\W]*?\"(.*?)\"/s",
            function ($matches) {
//            print_r($matches);
             return str_replace($matches[1] , strtoupper($matches[1]), $matches[0]);
            },$match);
        $match = preg_replace_callback("/>(.*?)</s",
            function($match) {
                return str_replace($match[1] , strtoupper($match[1]), $match[0]);
            }, $match);
        return str_replace($match[1] , strtoupper($match[1]), $match[0]);
        },
    $fd);
?>