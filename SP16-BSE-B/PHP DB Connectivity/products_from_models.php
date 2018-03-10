<?php
    include './models/product_model.php';
    //$pros = getProducts();

    //print_r($pros);
    foreach (getProducts() as $product){
        echo "<h2>{$product['name']}</h2>";
        echo "<h2>{$product['id']}</h2>";
        echo "<p>{$product['description']}</p>";
    }
?>