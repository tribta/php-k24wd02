<?php
function printValue(mixed $value)
{
    if (is_array($value)) {
        echo "Array: " . implode(', ', $value) . "<br>";
    } else if (is_int($value)) {
        echo "Integer: " . $value . "<br>";
    } else if (is_string($value)) {
        echo "String: " . $value . "<br>";
    } else {
        echo "Other<br>";
    }
};

printValue([1, 2, 3]);
printValue(9999);
printValue("One");
