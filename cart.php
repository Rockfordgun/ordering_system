<?php
session_start();

//var_dump($_SESSION);
// Retrieve the selected value from the session
$donut = $_SESSION["donut"];
$filling = $_SESSION["filling"];

$quantity = $_SESSION["quantity"];
$cart = $_SESSION["cart"];

//Donut Selection & Price
if (isset($_SESSION['donut'])) {

    $donut = $_SESSION['donut'];

    // Product prices
    $plainDonutPrice = 10;
    $cakeDonutPrice = 15;
    $yeastDonutPrice = 20;


    $donutPrice = 0;
    switch ($donut) {
        case 'Plain Donut':
            $donutPrice = $plainDonutPrice;
            break;
        case 'Cake Donut':
            $donutPrice = $cakeDonutPrice;
            break;
        case 'Yeast Donut':
            $donutPrice = $yeastDonutPrice;
            break;
    }


    unset($_SESSION['product']);
} else {
    // No product selected, redirect back to shop.php
    header('Location: shop.php');
    exit();
}

//filling Selection & Price
if (isset($_SESSION['filling'])) {

    $filling = $_SESSION['filling'];

    // Product prices
    $noFillPrice = 0;
    $creamFillPrice = 5;
    $custardFillPrice = 10;
    $jellyFillPrice = 15;

    $fillingPrice = 0;
    switch ($filling) {
        case 'No Filling':
            $fillingPrice = $noFillPrice;
            break;
        case 'Cream Filling':
            $fillingPrice = $creamFillPrice;
            break;
        case 'Custard Filling':
            $fillingPrice = $custardFillPrice;
            break;
        case 'Jelly Filling':
            $fillingPrice = $jellyFillPrice;
            break;
    }


    unset($_SESSION['product']);
} else {
    // No product selected, redirect back to shop.php
    header('Location: shop.php');
    exit();
}

if (isset($_POST['checkout'])) {
    // Perform any necessary actions before redirecting
    header("Location: thankyou.php");
    exit();
}

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>The Donut Shop</title>
    <link rel="icon" type="image/x-icon" href="./img/favi.png" />
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
            <div>Grab It While Its Still Hot</div>
        </div>
    </section>



    <section class="product_center mt-5">



        <table class="table center">
            <thead class="">
                <tr>
                    <th scope="col">
                        <h3>Product</h3>
                    </th>
                    <th scope="col">
                        <h3>Donut</h3>
                    </th>
                    <th scope="col">
                        <h3>Topping</h3>
                    </th>
                    <th scope="col">
                        <h3>Filling</h3>
                    </th>
                    <th scope="col">
                        <h3>Quantity</h3>
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">


                        <img src="./img/Donutpreview.jpg" alt="">


                    </th>
                    <td>

                        <?php
                        echo $donut .
                            "&nbsp; R" . $donutPrice . "</p>";


                        ?>






                    <td>


                        <?php
                        if (isset($_SESSION['cart'])) {
                            $cart = $_SESSION['cart'];
                            $total = 0;
                            foreach ($cart as $item) {
                                echo $item['name'] .
                                    "&nbsp; R" . $item['price'] . "</p>";
                                $total += $item['price'];
                            }
                        } else {
                            echo "<p>Your cart is empty.</p>";
                        }
                        ?>


                    </td>
                    <td>



                        <?php
                        echo $filling .
                            "&nbsp; R" . $fillingPrice . "</p>";


                        ?>
                    </td>
                    <td>

                        <?php
                        echo $quantity;
                        ?>

                    </td>
                </tr>
                <tr>
                    <th scope="row"></th>
                    <td>
                        <?php
                        echo "<p>R" . $donutPrice;
                        ?>



                    </td>
                    <td>
                        <?php
                        echo "<p>R" .  $total;
                        ?>



                    </td>
                    <td>
                        <?php

                        echo "<p>R" . $fillingPrice;

                        ?>


                    </td>
                    <td>

                        <?php
                        echo $quantity;
                        ?>
                    </td>
                </tr>





                </td>



                </tr>


            </tbody>
        </table>



    </section>

    <section class="total_center">

        <table class="table center">

            <tbody>
                <tr>
                    <td>
                        <h3>SubTotal</h3>
                    </td>
                    <td>
                        <?php

                        $allTotal = $donutPrice + $total + $fillingPrice;
                        $subTotal =  $quantity * $allTotal;
                        echo "<p>R " . $subTotal;
                        ?>


                    </td>

                </tr>
                <tr>
                    <td>
                        <h3>Inc Tax</h3>
                    </td>
                    <td>

                        <?php

                        $taxTotal = $subTotal * .15;
                        echo "<p>R " . $taxTotal;


                        ?>

                    </td>

                </tr>
                <tr>
                    <td>
                        <h3>Total</h3>
                    </td>
                    <td> <?php

                            $finalTotal = $taxTotal + $subTotal;
                            echo "<p>R " . $finalTotal;


                            ?></td>
                </tr>
            </tbody>
        </table>

    </section>

    <section>

        <form method="POST" action="">
            <!-- Your form inputs and other elements -->
            <div class="form-group mt-3 mb-5">
                <button class="checkoutBTN" name="checkout">Check Out</button>
            </div>

        </form>

    </section>


    <?php
    include('./inc/footer.php');
    ?>