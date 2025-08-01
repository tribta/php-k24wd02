<?php

/**
 * ==============================
 * LESSON: Object
 * ==============================
 * Để khởi tạo được Object thì dùng class và keyword new
 * ==============================
 */
class Person
{
    function walk()
    {
        echo "I'm walking 10 km/ day";
    }
}

// khởi tạo instance/object
$person = new Person;

// -> dùng để truy xuất method/properties bên trong một object
// $person->walk();

// NOTE: Object type casting
echo PHP_EOL; // "\n"
$obj1 = new Person();
$obj2 = (object)$obj1;
var_dump($obj1 === $obj2); // expect = true

// NOTE: ARRAY -> OBJECT type-casting.
echo PHP_EOL; // "\n"
$arr = ["name" => "Harry Potter", "age" => 18];
$obj3 = (object)$arr;
// {name : "Harry Potter", age : 18}
echo $obj3->name;
echo PHP_EOL;
echo $obj3->age;
echo PHP_EOL;
print_r($obj3);

// IMPORTANT: ARRAY -> OBJECT type-casting (key = "numeric").
echo PHP_EOL; // "\n"
$arr1 = [1 => "Harry Potter", 2 => 18];
$obj4 = (object)$arr1;
// {name : "Harry Potter", age : 18}
var_dump(isset($obj4->{1}));
echo PHP_EOL;
print_r($obj4->{1});
echo PHP_EOL;
echo get_class($obj1); // Person
echo PHP_EOL;
echo get_class($obj2); // Person
echo PHP_EOL;
echo get_class($obj3); // stdClass
echo PHP_EOL;

var_dump(is_object($obj1)); // true
var_dump(is_object($obj2)); // true
var_dump(is_object($obj3)); // true
