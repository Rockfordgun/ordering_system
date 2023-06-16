<?php
session_start();

require_once('./inc/config.php');

require_once('./inc/loginScript.php');
require('./inc/process.php');

ensure_user_is_authenticated();


?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>The Donut</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>

    <nav class="main_nav">
        <div class="nav_center">
            <div class="logo">
                <img src="./img/nav_logo.png">
            </div>
            <div class="menu">
                <ul>
                    <li><a href="#">Home</a></li>

                </ul>
            </div>
            <div class="user">
                <ul>
                    <li><a href="./cart.php">Cart</a></li>
                    <li> <a href="./logout.php">logout</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <section class="breadcrumb mt-3">
        <div class="nav_center">
            <div> buy a donut</div>
        </div>
    </section>

    <section class="singleProduct mt-5 mb-5">
        <div class="product_center">
            <div class="productImage">
                <img src="./img/donut_img.jpg" alt="" srcset="">
            </div>

            <div class="productDescription ms-5">
                <div class="row mx-auto">
                    <div class="form-group mt-3 w-100">

                        <form method="post" action="./inc/process.php">
                            <h3>Try The Best Donuts In The World</h3>
                            <p>Our delicious doughnuts are hand-crafted to perfection. Dipped, filled, dusted or powdered, there’s a sweet treat for everyone!
                                Or take your pick and try our simply irresistible hot beverages or chillers.</p>

                    </div>

                    <div class="form-group mt-3 w-100">

                        <h3>What Donut Would You Like</h3>

                        <div class="radioBTN d-flex">

                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="donut" value="Plain Donut">Plain Donut (R10)<br>
                            </div>


                            <div class="form-check ms-4">
                                <input class="form-check-input" type="radio" name="donut" value="Cake Donut">Cake Donut (R15)<br>
                            </div>


                            <div class="form-check ms-4">
                                <input class="form-check-input" type="radio" name="donut" value="Yeast Donut">Yeast Donut (R20)<br>
                            </div>

                        </div>


                    </div>

                    <div class="form-group mt-3 w-100">

                        <h3>What Toppings Are You Adding</h3>
                        <p class="productSelect">MAX 3 Toppings per Customer</p>

                        <div class="radioBTN d-flex">

                            <div class="form-check ">

                                <!-- topping start -->
                                <label class="form-check-label" for="topping1">
                                    <input class="form-check-input" type="checkbox" name="toppings[]" value="Mini M&M's|10" checked> Mini M&M's - R10
                                </label>
                                <br>
                            </div>

                            <!-- topping end -->

                            <div class="form-check ms-4">

                                <label class="form-check-label" for="topping2">
                                    <input class="form-check-input" type="checkbox" name="toppings[]" value="Crushed Oreos 2|15">Crushed Oreos - R15


                                </label>
                                <br>
                            </div>



                            <div class="form-check ms-4">

                                <label class="form-check-label" for="topping3">
                                    <input class="form-check-input" type="checkbox" name="toppings[]" value="Rainbow Sprikles 3|20">Rainbow Sprikles - R20


                                </label>
                                <br>
                            </div>

                            <div class="form-check ms-4">

                                <label class="form-check-label" for="topping4">
                                    <input class="form-check-input" type="checkbox" id="topping4" name="toppings[]" value="Topping 4|25">Peanut Butter - R25


                                </label>
                                <br>
                            </div>


                        </div>


                    </div>

                    <div class="form-group mt-3 w-100">

                        <h3>How About A Filling</h3>
                        <p class="productSelect">MAX 1 Filling per Donut</p>

                        <div class="radioBTN d-flex">


                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="filling" value="No Filling" checked> None <br>

                            </div>


                            <div class="form-check ms-4">
                                <input class="form-check-input" type="radio" name="filling" value="Cream Filling"> Cream Filling (R5)<br>

                            </div>


                            <div class="form-check ms-4">

                                <input class="form-check-input" type="radio" name="filling" value="Custard Filling"> Custard Filling (R10)<br>

                            </div>

                            <div class="form-check ms-4">

                                <input class="form-check-input" type="radio" name="filling" value="Jelly Filling"> Jelly Filling (R20) <br>

                            </div>

                        </div>


                    </div>

                    <div class="form-group mt-3 w-100">

                        <h3>Cmon Dont Be Shy!</h3>

                        <div class="radioBTN d-flex">

                            <div class="input-group mb-3" style="width: 150px">
                                <button class="input-group-text decrement-btn" type="button" onclick="decrement()"><i class="fa-solid fa-minus"></i></button>
                                <input type="text" class="form-control text-center" name="quantity" id="quantity" value="0" readonly>
                                <button class="input-group-text increment-btn" type="button" onclick="increment()"><i class="fa-solid fa-plus"></i></button>
                            </div>


                        </div>


                    </div>
                    <div class="form-group mt-3 mb-5">
                        <button class="cartBTN">Lock It In</button>
                    </div>
                    </form>

                </div>
            </div>
    </section>

    <script src="./scripts/script.js"></script>
    <?php
    include('./inc/footer.php');
    ?>