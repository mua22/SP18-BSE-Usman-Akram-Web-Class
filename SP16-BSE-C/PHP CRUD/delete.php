<?php
/**
 * Created by PhpStorm.
 * User: Usman
 * Date: 3/12/2018
 * Time: 12:04 PM
 */

$id = $_REQUEST['id'];
include './models/article_model.php';
deleteArticle($id);
header('Location: articles.php');