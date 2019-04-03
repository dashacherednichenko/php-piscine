#!/usr/bin/php
<?php
include("ft_is_sort.php");
$tab = array("!/@#;^", "42", "Hello World", "hi", "zZzZzZz");
$tab[] = "What are we doing now ?";
if (ft_is_sort(0))
    echo "The array is sorted\n"; else
    echo "The array is not sorted\n";
?>