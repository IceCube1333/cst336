<?php

function getDatabaseConnection()
{
    
    $host = "us-cdbr-iron-east-05.cleardb.net";
    $username = "b1846ceac5c213";
    $password = "d8b11969";
    $dbname = "heroku_b3293259bde7b6e";

// Create connection
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    return $conn;
    
  }

?>