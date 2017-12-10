<?php
    include 'database.php';
    $conn = getDatabaseConnection();
session_start();
    if (!isset($_SESSION['username'])) {
        
        header("Location: index.php");
        
    }
function getUserInfo() {
    global $conn;
    
    $sql = "SELECT *
            FROM grandheroes 
            WHERE itemName='" .$_GET['itemName']."'";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $records = $stmt->fetch(PDO::FETCH_ASSOC);
   
//   print_r($records);
    return $records;
    
}
    
    if(isset($_GET['updateUser'])) {
        // echo "Form has been submitted!";
        $sql = "UPDATE grandheroes
                SET itemName = :fName,
                    itemDescription = :lName,
                    rarity = :email,
                    costIfSold = :phone,
                WHERE itemName = :id";
        
        $np = array();
        $np[':fName'] = $_GET['firstName'];
        $np[':lName'] = $_GET['lastName'];
        $np[':email'] = $_GET['email'];
        $np[':phone'] = $_GET['phone'];
        $np[':id'] = $_GET['itemName'];
        
        
        $stmt = $conn->prepare($sql);
        $stmt->execute($np);
        
        echo "Record has been updated!";
    }
    
    if (isset($_GET['itemName'])) {
        $userInfo = getUserInfo();
    }
    
    if (isset($_GET['backButton'])) {
    header("Location: admin.php");
    }
?>



<html>
    <head>
        <title> Update User </title>
        <link rel="stylesheet" href="css/style.css" type="text/css" />
    </head>
    
    <body>
        
        <h1> Update User </h1>
    
    <h1> Tech Checkout System: Upating User's Info </h1>
        <form method="GET" id="update-page">
            <input type="hidden" name="itemName" value="<?=$userInfo['itemName']?>" />
            Item Name:<input type="text" name="firstName" value="<?=$userInfo['itemName']?>"/>
            <br />
            Item Description:<input type="text" name="lastName" value="<?=$userInfo['itemDescription']?>"/>
            <br/>
            Rating: <input type= "text" name ="email" value="<?=$userInfo['rarity']?>"/>
            <br/>
            Cost if Sold: <input type ="text" name= "phone" value="<?=$userInfo['costIfSold']?>"/>
            <br />
            <input type="submit" value="Update User" name="updateUser">
            <input type="submit" name="backButton" value="Back">
        </form>    
        
        <footer>
               <hr>
               CST336 Hutt &copy;2017
        </footer>
            
    </body>
</html>
