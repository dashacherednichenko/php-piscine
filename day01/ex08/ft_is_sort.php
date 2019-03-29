<?php
function ft_is_sort($tab)
{
$a = $tab;
$sort_a = $tab;
sort($sort_a);
if ($a == $sort_a)
    return (1);
else
    return (0);
}
?>