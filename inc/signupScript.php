<?php

//Validation
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $password = $_POST['password'];



    if ($email == false) {
        $status = 'Please enter a valid email adress';
    } else {
        $status = 'Thank You For Signing Up';
    }
}

function authenticate_user($email, $password)
{
    return $email == USER_NAME && $password == PASSWORD;
}

function redirect($url)
{
    header("Location: $url");
}
