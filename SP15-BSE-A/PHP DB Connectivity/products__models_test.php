<?php

function getAllProducts($records = 10,$order='ID'){
    //return 'test';
    $products = array();
    $db = new mysqli('localhost:3306','root','','crashcourse');
    if($db->connect_errno>0)
        die('Some Error Occured:<br>'.$db->connect_error);
    echo "Connection Created<br>";
    if(!$result = $db->query("SELECT * FROM products ORDER BY $order LIMIT $records")){
        echo "Something Went Wrong";
    }
    $i = 0;
    while($row = $result->fetch_assoc()){
        $products[$i] = $row;
        $i++;
    }
    $db->close();
    return $products;
}