<?php

/**
 * ==============================
 * LESSON: Reference Array
 * ==============================
 */
// $arr1 = array(2, 3); // arr1=[2,3]
// $arr2 = $arr1; // arr2=arr1=[2,3]
// $arr2[] = 4; // arr2=[2,3,4]

// $arr3 = &$arr1; // $arr3 = [2,3]
// $arr3[] = 5; // $arr3 = [2,3,5] // arr1=[2,3,5]

// var_dump($arr1, $arr2, $arr3);

/**
 * ==============================
 * LESSON: Spread Operator (...)
 * ==============================
 */

$arr01 = [1, 2, 3];
$arr02 = array_merge($arr01);

// echo ($arr02[0]) . "\n";
// var_dump($arr02) . "\n";
// print_r($arr01);

// NOTE: Spread Operators (...)
$arr03 = [1, 2, 3];
$arr04 = [...$arr03]; // [1,2,3]
$arr05 = [0, ...$arr03]; // [0,1,2,3]
$arr06 = [...$arr03, ...$arr04, 9_999]; // [1,2,3,1,2,3,9_999]
$arr07 = [...$arr01, ...$arr01]; // [123123]

function getArr()
{
    return ['a', 'b'];
}
$arr08 = [...getArr(), 'c' => 'd']; // ['0' => 'a', '1' => 'b', 'c' => 'd']

// var_dump($arr08) . "\n";
// print_r($arr08);

// NOTE: Function print all array:
function printAllArrays()
{
    for ($i = 1; $i < 9; $i++) {
        global ${"arr0$i"};
        echo "\$arr0$i = ";
        print_r(${"arr0$i"});
        echo PHP_EOL; // "\n"
    }
}

printAllArrays();
