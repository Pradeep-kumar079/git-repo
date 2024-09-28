<?php

require_once 'vendor/autoload.php';


// init configuration
$clientID = '1025493432566-66lmmbate127tnfi43phuo81j340vtds.apps.googleusercontent.com';
$clientSecret = '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';
$redirectUri = 'https://chat.placementguido.com/welcome.php/';

// create Client Request to access Google API
$client = new Google_Client();
$client->setClientId($clientID);
$client->setClientSecret($clientSecret);
$client->setRedirectUri($redirectUri);
$client->addScope("email");
$client->addScope("profile");

// Connect to database
$hostname = "127.0.0.1:3306";
$username = "u382313631_Dh";
$password = "Dh@1234598";
$database = "u382313631_yougoog";

$conn = mysqli_connect($hostname, $username, $password, $database);
