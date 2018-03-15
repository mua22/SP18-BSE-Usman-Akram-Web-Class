<?php
/**
 * Created by PhpStorm.
 * User: Usman
 * Date: 3/9/2018
 * Time: 3:35 PM
 */

require ("products__models_test.php");
//die(getAllProducts());
foreach (getAllProducts(10,'NAME') as $p){
    echo "<h3>{$p['name']}</h3>";
    echo "<a href='delete.php?id={$p['id']}'>Delete</a>";
    echo "<p>{$p['description']}</p>";
    echo "<hr>";
}