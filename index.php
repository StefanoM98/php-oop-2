<?php

require_once __DIR__ . "/Models/Product.php";

$first_product = new Product(249494, "ciotola", 2.4);

var_dump($first_product);
