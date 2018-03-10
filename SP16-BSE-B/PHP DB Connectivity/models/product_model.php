<?php
/**
 * Created by PhpStorm.
 * User: Usman
 * Date: 3/9/2018
 * Time: 12:23 PM
 */

function getProducts(){
    $products = array();
$db = new mysqli('localhost:3306','root','','crashcourse');
if($db->connect_errno>0)
    die('Connection failed:'.$db->connect_error);
else echo 'connection created';
if(!$result = $db->query("select * from products order by name LIMIT 5"))
    die('Query is Wrong');
$i=0;
while($row=$result->fetch_assoc()){
    //print_r($row);
    $products[$i] = $row;
    $i++;
}
$db->close();
return $products;
}