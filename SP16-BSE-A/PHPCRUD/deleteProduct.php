<?php
/**
 * Created by PhpStorm.
 * User: Usman
 * Date: 3/15/2018
 * Time: 1:57 PM
 */

$id = $_REQUEST['id'];
include './products_model.php';
deleteProductById($id);
header('Location: index.php');