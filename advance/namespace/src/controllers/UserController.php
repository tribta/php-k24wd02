<?php

namespace App\controllers;

use App\models\User;

class UserController
{
    public function showProfile($username)
    {
        $user = new User($username);
        echo "Good Evening, " . $user->name;
    }
}
