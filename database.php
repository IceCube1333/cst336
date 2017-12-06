<?php   
    
    function getDatabaseConnection() {
        
        // make new database
        $host = "us-cdbr-iron-east-05.cleardb.net";
        $username = "bc72cd9f7b4a55";
        $password = "e91b1c70";
        $dbname = "heroku_4432619d892eb4f";
        
        // Create connection
        $dbConn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        $dbConn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
        return $dbConn; 
    }
    
?>