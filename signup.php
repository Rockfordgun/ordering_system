<?php

session_start();

$_POST = array();
$_SESSION['POST'] = serialize($_POST);

print_r($_SESSION['POST']);


require_once('./inc/config.php');

require_once('./inc/signupScript.php');
include('./inc/header.php');


$username = [''];
print_r($username);



?>

<div class="container">
    <div class="row">
        <div class="">

            <div class="row">
                <form action="" method="post">
                    <div class="form-group mt-3 w-25">

                        <label for="email">Email:</label>
                        <input class="form-control" type="text" name="email" id="email">

                    </div>

                    <div class="form-group mt-3 w-25">

                        <label for="password">Password:</label>
                        <input class="form-control" type="password" name="password" id="password">

                    </div>

                    <div class="form-group mt-3 w-25">
                        <input type="submit" value="Signup">
                    </div>


                </form>
            </div>


        </div>
    </div>
    <div class="row text-success ms-3 mt-3">
        <?php
        if (isset($_POST["email"])) {
            echo $status;
        }






        ?>


        <?php



        ?>


    </div>
</div>










<?php
include('./inc/footer.php');



?>