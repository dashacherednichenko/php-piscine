<?php
function ft_split($s)
{
    $result = explode(' ', $s);
    sort($result);
    return ($result);
}
?>