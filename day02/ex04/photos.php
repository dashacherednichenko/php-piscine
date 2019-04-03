#!/usr/bin/php
<?php
if ($argc != 2)
    exit (0);
$site = preg_replace("/^http.*?:\/\//", '', $argv[1]);
//if (!(file_exists($site) && is_dir($site)))
//    mkdir($site);
//echo $site."\n";

$c = curl_init($argv[1]);
//echo $c."\n";
$str = get_conte($c);
if (!curl_errno($c)) {
    switch ($http_code = curl_getinfo($c, CURLINFO_HTTP_CODE)) {
        case 200:  # OK
            if (!(file_exists($site) && is_dir($site)))
                mkdir($site);;

    }
}
curl_close($c);
//echo $str;
?>