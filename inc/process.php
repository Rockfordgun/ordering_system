<?php
session_start();


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION["filling"] = $_POST["filling"];
    $_SESSION["donut"] = $_POST["donut"];
    $_SESSION["quantity"] = $_POST["quantity"];
    $_SESSION["cart"] = $_POST["cart"];

    if (isset($_POST['toppings'])) {
        $selectedToppings = $_POST['toppings'];

        foreach ($selectedToppings as $topping) {
            if ($count < 3) {
                $toppingData = explode("|", $topping);
                $toppingName = $toppingData[0];
                $toppingPrice = $toppingData[1];

                $_SESSION['cart'][] = array(
                    'name' => $toppingName,
                    'price' => $toppingPrice
                );
                $count++;
            } else {
                break;
            }
        }
    }


    header("Location: ./../cart.php");
    exit();
}

//Donut Selection & Price
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Check if a product is selected
    if (isset($_POST['donut'])) {
        // Store the selected product in the session
        $_SESSION['donut'] = $_POST['donut'];
        header('Location: cart.php');
        exit();
    } else {
        // No product selected, redirect back to shop.php
        header('Location: login.php');
        exit();
    }
}

//Filling Selection & Price
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Check if a product is selected
    if (isset($_POST['filling'])) {
        // Store the selected product in the session
        $_SESSION['filling'] = $_POST['filling'];
        header('Location: cart.php');
        exit();
    } else {
        // No product selected, redirect back to shop.php
        header('Location: login.php');
        exit();
    }
}

//Filling Selection & Price
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Check if a product is selected
    if (isset($_POST['filling'])) {
        // Store the selected product in the session
        $_SESSION['filling'] = $_POST['filling'];
        header('Location: cart.php');
        exit();
    } else {
        // No product selected, redirect back to shop.php
        header('Location: login.php');
        exit();
    }
}

//Toppings Selection
