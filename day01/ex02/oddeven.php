#!/usr/bin/php
<?php
$stdin = fopen('php://stdin', 'r');
$nb;
$oddeven;
while ($stdin)
{
    echo "Enter a number: ";
    $nb = str_replace("\n", "", fgets($stdin));
    if (feof($stdin))
    {
        echo "\n";
        exit (0);
    }
    if (is_numeric($nb) == 0) {
        echo "'".$nb."' is not a number\n";
    }
    else {
        if ($nb[strlen($nb) - 1] % 2 == 0)
            $oddeven = "even";
        else
            $oddeven = "odd";
        echo "The number ".$nb." is ".$oddeven."\n";
    }
}
fclose($stdin);
?>