<?
var_dump("0E1" == "000"); // true 0 * 10^1 = 0 == 0
echo var_dump("000");
echo var_dump("0E1");

var_dump("2E1" == "020"); // 20 == 20
echo var_dump("2E1");
echo var_dump("020");

var_dump("0D1" == "000");
echo var_dump("0D1");
echo var_dump("000");

$a = 1 + "10.5"; // 11.5
$b = 1 + "1e62"; // float
// $c = 1 + "bob-1.3e3"; // error
// $d = 1 + "1.3e3-bob"; // error
// $e = 4 + "10 apples"; // error
// $f = "10.0 apples" + 1; //  error
// $g = "10.0 apples" + 1.1; // error
// echo $f;
// echo $g;

var_dump(is_numeric("123")); // true
var_dump(is_numeric("12.34")); // true
var_dump(is_numeric("12 apples")); // false
var_dump(is_numeric("apples + 12")); // false
var_dump(is_numeric("   -1.2  ")); // true
var_dump(is_numeric("   0x123 ")); // false
var_dump(is_numeric("   0b111 ")); // false
var_dump(is_numeric(0b111)); // true
