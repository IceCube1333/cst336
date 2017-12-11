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
                    costIfSold = :phone
                WHERE itemName = :id";
        
        $np = array();
        $np[':fName'] = $_GET['firstName'];
        $np[':lName'] = $_GET['lastName'];
        $np[':email'] = $_GET['email'];
        $np[':phone'] = $_GET['phone'];
        $np[':id'] = $_GET['itemName'];
        
        
        $stmt = $conn->prepare($sql);
        $stmt->execute($np);
        $msg = "Record has been updated!";
        echo "<script type='text/javascript'>alert('$msg');</script>";
        // echo "Record has been updated!";
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
        <title> Update Item in Grand Heroes </title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/style.css" type="text/css" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="icon" href="favicon/favicon.ico" type="image/gif" sizes="16x16">
    </head>
    
    <body>
    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>                        
          </button>
          <a class="navbar-brand"><img src="favicon/favicon.ico"></a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav">
            <li><a href="index.php">Home</a></li>
            <li><a href="grandheroes.php">Grand Heroes</a></li>
            <li><a href="royals.php">Royals</a></li>
            <li><a href="angels&demons.php">Angels & Demons</a></li>
            <li><a href="gatchaList.php">Gacha List</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="adminLogin.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
          </ul>
        </div>
      </div>
    </nav>       
        <h1> Update Item in Grand Heroes </h1>
    
    <!--<h1> Tech Checkout System: Upating User's Info </h1>-->
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
            <input type="submit" value="Update Item" name="updateUser" id="submit">
            <input type="submit" name="backButton" value="Back" id="submit">
        </form>    
        
        <footer>
               <hr>
               CST336 Hutt &copy;2017
        </footer>
            
    </body>
</html>
