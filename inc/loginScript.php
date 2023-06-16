<?php

//Validation
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $password = $_POST['password'];



    if ($email == false) {
        $status = 'Please enter a valid email adress';
    } else {
        $status = 'Type In The Correct Email Adress';
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

function is_user_authenticated()
{
    return isset($_SESSION['email']);
}


function ensure_user_is_authenticated()
{
    if (!is_user_authenticated()) {
        redirect('login.php');
        die();
    }
}
