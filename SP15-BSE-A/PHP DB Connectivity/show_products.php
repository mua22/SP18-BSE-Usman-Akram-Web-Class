<?php
/**
 * Created by PhpStorm.
 * User: Usman
 * Date: 3/9/2018
 * Time: 3:35 PM
 */

require ("products__models_test.php");
//die(getAllProducts());
foreach (getAllProducts(2,'NAME') as $p){
    echo "<h3>{$p['name']}</h3>";
    echo "<p>{$p['description']}</p>";
    echo "<hr>";
}