<?php



function getDatabaseConnection() {
    $host = "us-cdbr-iron-east-05.cleardb.net";
    $username = "bc72cd9f7b4a55";
    $password = "e91b1c70";
    $dbname = "heroku_4432619d892eb4f";
    
    // Create connection
    $dbConn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $dbConn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    return $dbConn; 
}



function getUsersThatMatchUserName() {
    
    $username = $_GET['username']; 

    
     $dbConn = getDatabaseConnection(); 

     $sql = "SELECT * from user WHERE username='$username'"; 
     
     $statement = $dbConn->prepare($sql); 
    
     $statement->execute(); 
     $records = $statement->fetchAll(); 
     echo json_encode($records); 
}

function validatePassword() {
    $username = $_GET['username'];
    $password = $_GET['password'];
    
}

if ($_GET['action'] == 'validate-username') {
    getUsersThatMatchUserName(); 
} else if ($_GET['action'] == 'validate-password' ) {
    
}



?>
