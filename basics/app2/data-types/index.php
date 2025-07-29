<?php
// khai báo một số base-type
$a_bool = true; // bool
$a_str = "string"; // string
$a_str2 = "string"; // string
$an_int = 12; // int

echo get_debug_type($a_bool), "\n";
echo get_debug_type($a_str), "\n";

// typeOf x === "number"
if (is_int($an_int)) : $an_int += 4;
else: var_dump($an_int);
endif;

echo $an_int . "\n";

if (is_string($a_bool)) {
    echo "String: $a_bool";
}else{
    echo "$a_bool is not a String type";
}
