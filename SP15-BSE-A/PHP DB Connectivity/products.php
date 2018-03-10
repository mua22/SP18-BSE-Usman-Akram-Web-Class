<?php
$db = new mysqli('localhost:3306','root','','crashcourse');
if($db->connect_errno>0)
    die('Some Error Occured:<br>'.$db->connect_error);
echo "Connection Created<br>";
if(!$result = $db->query("SELECT * FROM products ORDER BY ID LIMIT 5,5")){
    echo "Something Went Wrong";
}
while($row = $result->fetch_assoc()){
    $name = $row['name'];
    echo "<h3>{$row['id']}: $name</h3>";
    echo "<p>{$row['description']}</p>";
    echo "<hr>";
}
$db->close();
?>