<?php

// /**
//  * ==============================
//  * LESSON: Class
//  * ==============================
//  * Class là một "Khuôn" dùng để khởi tạo Object
//  * 
//  * Tên Class phải bắt đầu bằng chữ cái hoặc dấu _
//  * ==============================
//  */

// class _Class_Name_
// {
//     // khai báo property
//     // khai báo method
// }

// // NOTE: khai báo properties
// class SimpleClass
// {
//     // property
//     public $var = "default value";

//     // method
//     public function displayVar()
//     {
//         echo $this->var;
//     }
// }

// $a = new SimpleClass();
// $a->displayVar();

// // có thể sử dụng tên class để tạo instance
// $instance_01 = new SimpleClass();

// $className = "SimpleClass";
// $instance_02 = new $className();

// /** @var SimpleClass $instance_02 */
// $instance_02->displayVar();

// echo "\n";

// $instance_01->displayVar();


/**
 * ==============================
 * LESSON: Readonly Class
 * ==============================
 * mọi properties đều là readonly
 * ==============================
 */

/* readonly */ class X
{
    public int $bar;
}

// kiểm tra tham chiếu scope của properties.
$ins = new X();
$assigned = $ins; // 2 biến cùng trỏ về 1 object
$ref = &$ins; // cùng trỏ về 1 object.

$ins->bar = 99;

$ins = null;

var_dump($ins); // NULL
var_dump($assigned); // object(X)#1 (1) {["bar"]=>int(99)}
var_dump($ref); // NULL

/**
 * ==============================
 * LESSON: EXTENDS (Inheritance)
 * ==============================
 */
class Animal
{
    public $name;
    public function move()
    {
        echo "he is moving!\n";
    }
}

// inheritance
class Dog extends Animal
{
    public function move()
    {
        echo "he is running!\n";
        parent::move(); // call parent's methods.
    }
}

// instance 
$dog = new Dog();
$dog->name = "Tommy";
$dog->move();

echo Dog::class;
