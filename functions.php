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
    
    function oneRoll() {
    
    // $username = $_GET['username']; 
    
     $dbConn = getDatabaseConnection(); 
     $sql = "SELECT * from grandheroes ORDER BY RAND() LIMIT 10"; 
     
     $statement = $dbConn->prepare($sql); 
    
     $statement->execute(); 
     $records = $statement->fetchAll(); 
     echo json_encode($records); 
}

    function tenRoll() {
    
    // $username = $_GET['username']; 
    
     $dbConn = getDatabaseConnection(); 
     $sql = "SELECT * from grandheroes ORDER BY RAND() LIMIT 10"; 
     
     $statement = $dbConn->prepare($sql); 
    
     $statement->execute(); 
     $records = $statement->fetchAll(); 
     echo json_encode($records); 
}

    function oneRollR() {
    
    // $username = $_GET['username']; 
    
     $dbConn = getDatabaseConnection(); 
     $sql = "SELECT * from royals ORDER BY RAND() LIMIT 10"; 
     
     $statement = $dbConn->prepare($sql); 
    
     $statement->execute(); 
     $records = $statement->fetchAll(); 
     echo json_encode($records); 
}

    function tenRollR() {
    
    // $username = $_GET['username']; 
    
     $dbConn = getDatabaseConnection(); 
     $sql = "SELECT * from royals ORDER BY RAND() LIMIT 10"; 
     
     $statement = $dbConn->prepare($sql); 
    
     $statement->execute(); 
     $records = $statement->fetchAll(); 
     echo json_encode($records); 
}

    function oneRollAd() {
    
    // $username = $_GET['username']; 
    
     $dbConn = getDatabaseConnection(); 
     $sql = "SELECT * from angelsdemons ORDER BY RAND() LIMIT 10"; 
     
     $statement = $dbConn->prepare($sql); 
    
     $statement->execute(); 
     $records = $statement->fetchAll(); 
     echo json_encode($records); 
}

    function tenRollAd() {
    
    // $username = $_GET['username']; 
    
     $dbConn = getDatabaseConnection(); 
     $sql = "SELECT * from angelsdemons ORDER BY RAND() LIMIT 10"; 
     
     $statement = $dbConn->prepare($sql); 
    
     $statement->execute(); 
     $records = $statement->fetchAll(); 
     echo json_encode($records); 
}
    
    if ($_GET['action'] == 'oneRoll') {
        oneRoll();
    }
    if ($_GET['action'] == 'tenRoll') {
        tenRoll();
    }
    
    if ($_GET['action'] == 'oneRollR') {
        oneRollR();
    }
    if ($_GET['action'] == 'tenRollR') {
        tenRollR();
    }
    if ($_GET['action'] == 'oneRollAd') {
        oneRollAd();
    }
    if ($_GET['action'] == 'tenRollAd') {
        tenRollAd();
    }
    
    
?>