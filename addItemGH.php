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
    
    $msg = "New item was added!";
    echo "<script type='text/javascript'>alert('$msg');</script>";
    // echo "alert(New item was added!)";
    
}
if (isset($_GET['backButton'])) {
    header("Location: admin.php");
}
?>


<html>
    <head>
        <title>Admin: Add new item to Grand Heroes</title>
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
            <li><a href="gatchaList.php">Gatcha List</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="adminLogin.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
          </ul>
        </div>
      </div>
    </nav>
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
                <input type="submit" value="Add Item" name="addUser">
                <input type="submit" name="backButton" value="Back">
            </form>
            
            <footer>
               <hr>
               CST336 Hutt &copy;2017
            </footer>
    </body>
</html>