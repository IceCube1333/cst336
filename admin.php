<?php
session_start();

if(!isset($_SESSION['username'])) { // checks if admin is logged in
    header("Location: index.php");
}

function userList() {
    include '../database.php';
    $conn = getDatabaseConnection();
    
    $sql = "SELECT *
            FROM User";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
   
//   print_r($records);
    return $records;
    
}

?>


<!DOCTYPE html>
<html>
    <head>
        <title>Admin Main Page </title>
    </head>
    <body>

            <h1> Admin Main </h1>
            <h2> Welcome <?=$_SESSION['adminName']?>!</h2>
            
            
            <form action="addUser.php">
                
                <input type="submit" value="Add new user">
                
            </form>
            
            
            <?php 
                Users: echo"<br>";
    
                $users = userList();
                
                foreach($users as $user) {
                
                    echo $user['firstName'] . " ". $user['lastName'];
                }
            ?>
    </body>
</html>