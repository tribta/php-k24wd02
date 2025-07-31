<?php

/**
 * ==============================
 * LESSON: Class
 * ==============================
 * Class là một "Khuôn" dùng để khởi tạo Object
 * 
 * Tên Class phải bắt đầu bằng chữ cái hoặc dấu _
 * ==============================
 */

class _Class_Name_
{
    // khai báo property
    // khai báo method
}

// NOTE: khai báo properties
class SimpleClass
{
    // property
    public $var = "default value";

    // method
    public function displayVar()
    {
        echo $this->var;
    }
}
