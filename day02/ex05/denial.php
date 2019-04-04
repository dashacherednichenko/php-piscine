#!/usr/bin/php
<?php
if ($argc != 3)
    exit();
if ($argv[1] != "data.csv")
    exit();
$data = fopen($argv[1], 'r');
$i = 0;
while ($data && !feof($data)) {
    $friends[$i++] = explode(";", fgets($data));
}
$some_titles = array_shift($friends);
foreach ($friends as $friend)
{
//    print_r($friend);
   foreach ($friend as $inf)
   {
       $friend["IP"] = $inf;
   }
//    exit();
}
//print_r($friends);
?>