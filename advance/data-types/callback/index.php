<?php
function isEven($n)
{
    return $n % 2 === 0;
}

$numbers = [1, 2, 3, 4, 5, 6];

$even = array_filter($numbers, "isEven");

print_r($even);

if (is_callable("isEven")) {
    print_r(("isEven is callable function"));
}
