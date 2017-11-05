<?php

function getDatabaseConnection()
{
    // $host = "us-cdbr-iron-east-05.cleardb.net";
    // $username = "b3d374bc5def80";
    // $password = "6038e853";
    // $dbname="heroku_876ef2f60b62635";
    
    // $dbConn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    // $dbConn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // return $dbConn;
    
    $host = "us-cdbr-iron-east-05.cleardb.net";
    $username = "b1846ceac5c213";
    $password = "d8b11969";
    $dbname = "heroku_b3293259bde7b6e";
    
    // $host = "localhost";
    // $username = "swiftpaws";
    // $password = "Maria100194";
    // $dbname="tech_devices_app";

// Create connection
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    return $conn;
    
  }

?>