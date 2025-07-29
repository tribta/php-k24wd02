<?php
// array(
// key => value,
// key => value,
// key => value,
//)

// cách 1:
$arr = array(
    "name" => "Julius Ceasar",
    "age" => 18,
);

// cách 2:
$arr2 = [
    "country" => "vietnam",
    "zip" => 7777
];

// override theo key:
$arr3 = array(
    "name" => "Julius Ceasar",
    "age" => 18,
    "country" => "vietnam",
    "zip" => 7777
);

$arr4 = array(
    "name" => "Harry Potter",
    "age" => 30,
    "country" => "UK",
    "zip" => 8888
);

var_dump($arr4);

$arr5 = array(
    "1" => 1, // 1 => 1
    1 => 2, // 1 => 2
    1.5 => 3, // 1 => 3
    true => "d" // 1 => "d"
);
var_dump($arr5); // [1]=>string(1) "d"

$arr6 = array("one", "two", "three", "four");
var_dump($arr6);
// array(4) {
//   [0]=>
//   string(3) "one"
//   [1]=>
//   string(3) "two"
//   [2]=>
//   string(5) "three"
//   [3]=>
//   string(4) "four"
// }

$arr7 = array("one", "key1" => "two", "key2" => "three", "four");
var_dump($arr7);

$arry8 = array(
    1 => "a",
    "1" => "b",
    1.5 => "c",
    -1 => "d",
    '01' => "e",
    '1.5' => "f",
    true => "g", // ghi đè 1
    false => "z", // không ghi đè
    '' => "y", // không ghi đè
    null => "o", // null là key rỗng, ghi đè ''
    "k", // không ghi đè [1, '', [2]]
    2 => "l" // ghi đè [2]
);

var_dump($arry8);

$arr9 = [];
$arr9[-9] = 1;
$arr9[] = 2; // +1 = -8

$arr10 = [1, 2, 3, 4, 5, 6, 7, 8, 9];
var_dump($arr10); // 

var_dump($arr9);

$arrayPerson = array(
    "name" => "Harry Potter",
    "age" => 30,
    "country" => ["city" => ["district" => 10]],
    "zip" => 8888
);
var_dump($arrayPerson["name"]);
var_dump($arrayPerson["age"]);
var_dump($arrayPerson["country"]["city"]["district"]);
var_dump($arrayPerson["zip"]);

//update name của $arrayPerson thành Voldermolt
$arrayPerson["name"] = "Voldermolt";
