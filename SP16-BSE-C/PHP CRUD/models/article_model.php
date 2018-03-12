<?php
/**
 * Created by PhpStorm.
 * User: Usman
 * Date: 3/12/2018
 * Time: 12:14 PM
 */

function getArticles($noOfRecords = 10)
{
    $articles = array();
    $i=0;
    $db = new mysqli('localhost', 'root', '', 'phpcrud');
    if ($db->connect_errno)
        die('Unable to connect to database [' . $db->connect_error);
    $sql = "select * from articles Limit $noOfRecords";
    echo "<h5>$sql</h5>";
    if (!$result = $db->query($sql)) {
        die('There was an error running the query [' . $db->error . ']');
    }
    //echo 'Database Connected!.<hr>';
    while ($row = $result->fetch_assoc()) {
        $articles[$i] = $row;
        $i++;
    }
    return $articles;
}
function deleteArticle($id)
{
    $db = new mysqli('localhost', 'root', '', 'phpcrud');
    if ($db->connect_errno)
        die('Unable to connect to database [' . $db->connect_error);
    $sql = "delete from articles where id=$id";
    echo "<h5>$sql</h5>";
    if (!$result = $db->query($sql)) {
        die('There was an error running the query [' . $db->error . ']');
    }
}