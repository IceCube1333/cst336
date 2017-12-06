<?php   
    
    function getDatabaseConnection() {
        
        // make new database
        $host = "us-cdbr-iron-east-05.cleardb.net";
        $username = "b38412b4d2cec8";
        $password = "8b8683b0";
        $dbname = "heroku_62ec3967cd64e9c";
        
        // Create connection
        $dbConn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        $dbConn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
        return $dbConn; 
    }
    
?>