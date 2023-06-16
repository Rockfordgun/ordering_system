<?php

session_start();
require_once('./inc/config.php');

require_once('./inc/loginScript.php');
include('./inc/header.php');



if (is_user_authenticated()) {
    redirect('shop.php');
    die();
}

if (authenticate_user($email, $password)) {
    $_SESSION['email'] = $email;
    redirect('shop.php');
    die();
} else {
    $status = 'Please Use The Correct Email Adress';
}


?>


<h2 class="text-center">Login</h2>
<div class="container">
    <div class="row">
        <div class="">

            <div class="row mx-auto">

                <form action="" method="post">
                    <div class="form-group mt-3 w-100">

                        <input class="form-control form-control-lg " type="text" name="email" id="email" placeholder="enter your username">

                    </div>

                    <div class="form-group mt-3 w-100">

                        <input class="form-control text-box form-control-lg" type="password" name="password" id="password" placeholder="enter your password">

                    </div>


                    <div class="form-group mt-3">
                        <button class="loginBTN">Login</button>
                    </div>


                </form>

            </div>


        </div>
    </div>
    <div class="row text-success text-center ms-3 mt-5">
        <?php
        if (isset($status)) {
            echo $status;
        }
        ?>
    </div>
</div>










<?php
include('./inc/footer.php');



?>