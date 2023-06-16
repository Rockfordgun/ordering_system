<!DOCTYPE html>
<html>

<head>
  <title>Product Selection Result</title>
</head>

<body>
  <?php
  if (isset($_POST['donut'])) {
    $selectedProduct = $_POST['donut'];
    list($productName, $price) = explode('|', $selectedProduct);
    echo "Selected Product: " . $productName . "<br>";
    echo "Price: " . $price . "<br>";
  }
  ?>
</body>

</html>