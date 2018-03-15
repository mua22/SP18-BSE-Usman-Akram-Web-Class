<?php
/**
 * Created by PhpStorm.
 * User: Usman
 * Date: 3/14/2018
 * Time: 1:39 PM
 */

//Delete a Record

$id = $_REQUEST['id'];

echo $id;

$db = new mysqli('localhost:3306','root','','crashcourse');
if($db->connect_errno>0)
    die('Some Error Occured:<br>'.$db->connect_error);
echo "Connection Created<br>";
if(!$result = $db->query("delete  FROM products where id=$id")){
    echo "Something Went Wrong";
}

$db->close();

header('Location: index.php');