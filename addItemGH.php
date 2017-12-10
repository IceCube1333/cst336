<?php
include 'database.php';
$conn = getDatabaseConnection();

if (isset($_GET['addUser'])) {  //the add form has been submitted
    $sql = "INSERT INTO grandheroes
             (itemName, itemDescription, rarity, costIfSold) 
             VALUES
             (:iName, :iDes, :rar, :cost)";
    $np = array();
    
    // echo "$sql";
    
    $np[':iName'] = $_GET['firstName'];
    $np['iDes'] = $_GET['lastName'];
    $np[':rar'] = $_GET['email'];
    $np[':cost'] = $_GET['phone'];
    
    $stmt=$conn->prepare($sql);
    $stmt->execute($np);
    
    echo "New item was added!";
    
}
if (isset($_GET['backButton'])) {
    header("Location: admin.php");
}
?>


<!DOCTYPE html>
<html>
    <head>
        <title>Admin: Add new item to Grand Heroes</title>
        <link rel="stylesheet" href="css/style.css" type="text/css" />
    </head>
    <body>

            <h1> Adding New Item to Grand Heroes </h1>

            <!--<h2> Tech Checkout System: Adding a New User </h2>-->
    
            <form method="GET">
                Item Name:<input type="text" name="firstName" />
                <br />
                Item Description:<input type="text" name="lastName"/>
                <br/>
                Rating: <input type= "text" name ="email"/>
                <br/>
                Cost if Sold: <input type ="text" name= "phone"/>
                <br />
                <input type="submit" value="Add User" name="addUser">
                <input type="submit" name="backButton" value="Back">
            </form>
            
            <footer>
               <hr>
               CST336 Hutt &copy;2017
            </footer>
    </body>
</html>