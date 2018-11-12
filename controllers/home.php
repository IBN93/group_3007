<?php
require_once "../models/user.php";
$users = getAllUsers();
var_dump($users);

require_once "../views/home.php";
