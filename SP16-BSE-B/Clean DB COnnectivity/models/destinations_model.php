<?php
/**
 * Fetch All Destinations
 * @return array
 */
function getAllDestinations($limit=5){
    $destinations = array();
    $db = connectDB();
    if(!$result = $db->query("SELECT * FROM destinations limit $limit")){
        echo "Something Went Wrong";
    }

    while($row = $result->fetch_assoc()){
        //print_r($row);
        array_push($destinations,$row);
    }
    $db->close();
    return $destinations;
}

/**
 * Create Connection With DB
 * @return mysqli
 */
function connectDB(){
    $serverName = 'localhost';
    $db_user = 'root';
    $db_password = '';
    $db_name = 'flights';
    $db = new mysqli($serverName,$db_user,$db_password,$db_name);
    if($db->connect_errno>0)
        die('Some Error Occured:<br>'.$db->connect_error);
    //print_r($db);
    return $db;
}



?>