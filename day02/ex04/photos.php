#!/usr/bin/php
<?php
if ($argc != 2)
    exit (0);
$site = preg_replace("/^https?:\/\//", '', $argv[1]);
$c = curl_init($argv[1]);
curl_setopt($c, CURLOPT_RETURNTRANSFER, true);
$str = curl_exec($c);
if (($http_code = curl_getinfo($c, CURLINFO_HTTP_CODE)) == 200) {
    if (!(file_exists($site) && is_dir($site)))
        mkdir($site);;
}
else {
    echo "error with url\n";
    exit();
}
curl_close($c);
preg_match_all('/<img.*?src=\"(.*?[.jpg|.svg|.png|.gif|.webp|.jpeg|.PNG|.JPG|.SVG|.GIF|.WEBP|.JPEG])\".*?>/', $str, $images);
foreach ($images[1] as $img)
{
    $img = trim($img);
    if (!preg_match("/^https?:\/\//", $img))
    {
        if (!preg_match("/^\//", $img))
            $img = $argv[1]."/".$img;
        else
            $img = $argv[1].$img;
    }
    preg_match('/.*\/(.*[A-Za-z0-9]$)/', $img, $name);
    $c_img = curl_init($img);
    curl_setopt($c_img, CURLOPT_RETURNTRANSFER, true);
    $timg = curl_exec($c_img);
    if (($http_code_img = curl_getinfo($c_img, CURLINFO_HTTP_CODE)) == 200) {
        file_put_contents($site."/".$name[1], $timg);
    }
}
?>