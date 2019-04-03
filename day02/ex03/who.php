#!/usr/bin/php
<?php
date_default_timezone_set("Europe/Kiev");
$filename = "/var/run/utmpx";
$fd = fopen($filename, "r");
while ($line = fread($fd, 628))
{
    $line = unpack("a256usr/a4id/a32cons/ipid/itype/Itime", $line);
    if ($line[type] == 7)
    {
        echo $line[usr]."   ".$line[cons]."  ".date('M', $line[time])."  "
            .date('j', $line[time])." "
            .date('H', $line[time]).":".date('i', $line[time])."\n";
    }
}
fclose($fd);
?>