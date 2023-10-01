<?php

use src\Classes\Auth\User;


$result = new User();

if (isset($_POST['submit'])) {
    $result->registration($_POST);
}



if (isset($_POST['login'])) {
    $result->login($_POST);
}
