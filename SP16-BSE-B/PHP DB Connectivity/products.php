<?php
$db = new mysqli('localhost:3306','root','','crashcourse');
if($db->connect_errno>0)
    die('Connection failed:'.$db->connect_error);
else echo 'connection created';
if(!$result = $db->query("select * from products LIMIT 5"))
    die('Query is Wrong');
//print_r($result);
while($row=$result->fetch_assoc()){
    echo "<h2>".$row['name']."</h2>";
    echo "<p>".$row['description']."</p>";
}
$db->close();
?>