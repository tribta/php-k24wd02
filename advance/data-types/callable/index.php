<?php
$numbers = [1, 2, 3, 4, 5, 6];

$odd = array_filter($numbers, function ($n) {
    return $n % 2 === 1;
});

print_r($odd);
echo '<br>';

class Math
{
    static function isPositive($n)
    {
        return $n > 0;
    }
};
$nums = [-1, 2, -3, 4, 5];
$positive = array_filter($nums, ['Math', 'isPositive']);
print_r($positive);
