#!/usr/bin/php
<?php
    date_default_timezone_set('Europe/Paris');
    function error(){
        echo "Wrong Format\n";
        exit(0);
    };
    if ($argc != 2)
        exit(0);
    $date = explode(" ", $argv[1]);
    count($date) !== 5 ? error() : 0;
    $date[4] = explode(":", $date[4]);
    count($date[4]) !== 3 ? error() : 0;
    $week = array(
        1 => lundi,
        2 => mardi,
        3 => mercredi,
        4 => jeudi,
        5 => vendredi,
        6 => samedi,
        7 => dimanche,
    );
    $months = array(
        1 => janvier,
        2 => février,
        3 => mars,
        4 => avril,
        5 => mai,
        6 => juin,
        7 => juillet,
        8 => août,
        9 => septembre,
        10 => octobre,
        11 => novembre,
        12 => décembre,
    );
    $day = array_search(lcfirst($date[0]), $week);
    $month = array_search(lcfirst($date[2]), $months);
    $day == FALSE || $month == FALSE
        || preg_match("/^[012]?[1-9]$|^[12]0$|^3[01]$/", $date[1]) === 0
        || preg_match("/^[0-9]{4}$/", $date[3]) === 0
        || preg_match("/^[0-1][0-9]$|^[2][0-3]$/", $date[4][0]) === 0
        || preg_match("/^[0-5][0-9]$/", $date[4][1]) === 0
        || preg_match("/^[0-5][0-9]$/", $date[4][2]) === 0 ? error() : 0;
    $print = mktime($date[4][0], $date[4][1], $date[4][2], $month, $date[1], $date[3]);
    if ($day != date("N", $print))
        error();
    echo $print."\n";
?>