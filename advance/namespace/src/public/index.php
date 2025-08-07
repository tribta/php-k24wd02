<?php
include_once "../controllers/UserController.php";
include_once "../models/User.php";
include_once "../../../alias/src/Helpers/StringHelper.php";

use App\controllers\UserController;
use Lib\Helpers\StringHelper as SH;

$controller = new UserController();
$controller->showProfile("Harry Potter");

echo SH::upper("Vordermolt");
