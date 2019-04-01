#!/usr/bin/php
<?php
if ($argc != 2)
{
    echo "Incorrect Parameters\n";
    exit(0);
};
function error(){
    echo "Syntax Error\n";
    exit(0);
}
$str = str_replace(" ", "", $argv[1]);
$i = 0;
while ($i < strlen($str))
{
    if (is_numeric($str[$i]))
        $a = $a.$str[$i];
    else if ($i != 0 && ($str[$i] == '+' || $str[$i] == '-' || $str[$i] == '/' || $str[$i] == '%' || $str[$i] == '*'))
    {
        $sign = $str[$i++];
        if ($i == strlen($str))
            error();
        while ($i < strlen($str))
        {
            if (is_numeric($str[$i]))
                $b = $b.$str[$i];
            else
                error();
            $i++;
        }
    }
    else
        error();
    $i++;
}
if ($sign == '+')
    $result = $a + $b;
else if ($sign == '-')
    $result = $a - $b;
else if ($sign == '*')
    $result = $a * $b;
else if ($sign == '/')
    $result = $a / $b;
else if ($sign == '%')
    $result = $a % $b;
else
    error();
echo $result."\n";
?>