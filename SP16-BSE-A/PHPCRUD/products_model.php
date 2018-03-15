<?php
/**
 * Created by PhpStorm.
 * User: Usman
 * Date: 3/15/2018
 * Time: 1:20 PM
 */

/**
 * Creates Connection
 * @return mysqli
 */
function connectDB(){
    $serverName = 'localhost';
    $db_user = 'root';
    $db_password = '';
    $db_name = 'crashcourse';
    $db = new mysqli($serverName,$db_user,$db_password,$db_name);
    if($db->connect_errno>0)
        die('Some Error Occured:<br>'.$db->connect_error);
    //print_r($db);
    return $db;
}

/**
 * returns All products
 */
function getAllProducts($limit=4,$order = 'id'){
    $db = connectDB();
    $products = array();
    if(!$result = $db->query("SELECT * FROM products  order by $order limit $limit")){
        echo "Something Went Wrong";
    }

    while($row = $result->fetch_assoc()){
        //print_r($row);
    array_push($products,$row);
    }
    $db->close();
    return $products;
}

function deleteProductById($id ){
    $db = connectDB();

    if(!$result = $db->query("delete from products where id=$id")){
        echo "Something Went Wrong";
    }
    $db->close();
}