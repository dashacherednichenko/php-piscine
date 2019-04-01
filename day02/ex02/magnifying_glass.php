#!/usr/bin/php
<?php
if ($argc != 2 || file_exists($argv[1]) == 0)
    exit(0);
$fd = fopen($argv[1], 'r');
$new_fd = "";
while ($line = fgets($fd))
{
    $line = preg_replace_callback(
        "/<a(?:.|\n)+<\/a>/",
        function ($matches) {
//            print_r($matches);
            $matches[0] = preg_replace_callback(
                "/.*?(?:title=\"(.*?)\")/",
                function ($matches) {
//                    print_r($matches);
                        return str_replace($matches[1] , strtoupper($matches[1]), $matches[0]);
                },$matches[0]);
            $matches[0] = preg_replace_callback(
                "/(>)(.*?)(<)/",
                function($matches) {
//                    print_r($matches);
                    return str_replace($matches[2] , strtoupper($matches[2]), $matches[0]);
                }, $matches[0]);
            return str_replace($matches[1] , strtoupper($matches[1]), $matches[0]);
        },
        $line);
    $new_fd = $new_fd.$line;
}

fclose($fd);
echo $new_fd;
?>