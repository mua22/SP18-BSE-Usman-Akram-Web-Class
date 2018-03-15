<?php
/**
 * Created by PhpStorm.
 * User: Usman
 * Date: 3/15/2018
 * Time: 1:52 PM
 */

include "./products_model.php";
foreach (getAllProducts(8,'name') as $product){
    echo "<div class='col-sm-6'>";
    echo "<h4>{$product['name']} <span class='pull-right'><a class='btn btn-danger btn-sm' href='deleteProduct.php?id={$product['id']}'>Delete</a></span></h4>";
    echo "";
    echo "<p>{$product['description']}</p>";
    echo "</div>";
}