<?php

$host="127.0.0.1:3306";
$user="u382313631_l";
$pass="Log@2024";
$db="u382313631_log";
$conn=new mysqli($host,$user,$pass,$db);
if($conn->connect_error){
    echo "Failed to connect DB".$conn->connect_error;
}
?>