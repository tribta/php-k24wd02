<?
$a = 1234; // decimal 10
$a = 0123; // octal

$a = 0o123; // octal
$a = 0x1A; // hexadecimal 16

$a = 0b111111111; // binary 2

$a = 123_456_789; // decimal 10
echo $a  . "\n";

echo PHP_INT_MAX . "\n"; // giá trị cao nhất của integer tùy theo OS.
echo PHP_INT_MIN . "\n"; // giá trị thấp nhất của integer tùy theo OS.
echo PHP_INT_SIZE . "\n"; // giá trị lưu trữ của integer tùy theo OS.

echo PHP_INT_MAX + 1; // overflow => int > float

var_dump(25 / 7); // int/int = float
var_dump((int)25 / 7); // int/int = (int)(float)
var_dump(round(25 / 7)); // float(4)