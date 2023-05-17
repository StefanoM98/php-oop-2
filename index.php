<?php

require_once __DIR__ . "/Models/Product.php";
require_once __DIR__ . "/Models/Category.php";
require_once __DIR__ . "/Models/CardProduct.php";


$product1 = new Product("https://encrypted-tbn2.gstatic.com/shopping?q=tbn:ANd9GcQ8Hso-S_1VVt6YCMfkHaM9EO8jTd4l7Fl0SENe0hK5X9P_iwysU5FLlhp9hDb4Iknwm2Br9qMD42CskH_riX-6WNbtDYpr5BjcXdJ2XcicXv0tD-uGJLfRgBjiBVfpWnfnKXU&usqp=CAc", 1, "Ciotola", 10, new Dogs(), "accessorio");
$product2 = new Product("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSjbbykhebiEYh1dAA6WK4eRH7qxKW3Et_o1w&usqp=CAU", 3, "Cuccia", 2.50, new Cats(), "accessorio");
$product3 = new Product("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSOovwg9a2Ezi9JxrCTpp2s6aPDUKB_nuAhWg&usqp=CAU", 10, "Croccantini", 11.49, new Cats(), "cibo");


$card1 = new CardProduct($product1);
$card2 = new CardProduct($product2);
$card3 = new CardProduct($product3);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MYSHOP</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <?php
    echo $card1->printCard();
    echo $card2->printCard();
    echo $card3->printCard();
    ?>
</body>

</html>