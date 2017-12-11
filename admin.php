<?php
session_start();
if(!isset($_SESSION['username'])) { // checks if admin is logged in
    header("Location: index.php");
}


function avgGrand() {
      include 'database.php';
    $conn = getDatabaseConnection();

    $sql = "SELECT AVG(costIfSold) FROM grandheroes";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
   
//   print_r($records);
    return $records;
}

function avgGrandR() {
      // include 'database.php';
    $conn = getDatabaseConnection();

    $sql = "SELECT AVG(rarity) FROM grandheroes";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
   
//   print_r($records);
    return $records;
}


function grandList() {
    // include 'database.php';
    $conn = getDatabaseConnection();
    
    $sql = "SELECT *
            FROM grandheroes
            ORDER BY itemName";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
   
//   print_r($records);
    return $records;
}

function avgRoyal() {
      // include 'database.php';
    $conn = getDatabaseConnection();

    $sql = "SELECT AVG(costIfSold) FROM royals";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
   
//   print_r($records);
    return $records;
}
function avgRoyalR() {
      // include 'database.php';
    $conn = getDatabaseConnection();

    $sql = "SELECT AVG(rarity) FROM royals";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
   
//   print_r($records);
    return $records;
}


function royalList() {
    // include 'database.php';
    $conn = getDatabaseConnection();
    
    $sql = "SELECT *
            FROM royals
            ORDER BY itemName";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
   
//   print_r($records);
    return $records;
}

function avgAd() {
      // include 'database.php';
    $conn = getDatabaseConnection();

    $sql = "SELECT AVG(costIfSold) FROM angelsdemons";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
   
//   print_r($records);
    return $records;
}

function avgAdR() {
      // include 'database.php';
    $conn = getDatabaseConnection();

    $sql = "SELECT AVG(rarity) FROM angelsdemons";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
   
//   print_r($records);
    return $records;
}

function adList() {
    // include 'database.php';
    $conn = getDatabaseConnection();
    
    $sql = "SELECT *
            FROM angelsdemons
            ORDER BY itemName";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
   
//   print_r($records);
    return $records;
}




?>


<html>
    <head>
        <title>DND Gatcha</title>
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
    
    <h1> Admin Main </h1>
    <h2> Welcome <?=$_SESSION['adminName']?>!</h2>
    
    <!--<div class="col-sm-3 well">-->
      <!--<form>-->
    <!--    <div class="well">-->
          <!--<form>-->
    <!--        <button type="button" class="btn btn-info" onclick="grandHer()">Grand Heroes</button>-->
            <!--<img src="bird.jpg" class="img-circle" height="65" width="65" alt="Avatar">-->
          <!--</form>-->
    <!--    </div>-->
    <!--    <div class="well">-->
    <!--      <button type="button" class="btn btn-info">Royals</button>-->
    <!--    </div>-->
    <!--    <div class="well">-->
    <!--      <button type="button" class="btn btn-info">Angels & Demons</button>-->
    <!--    </div>-->
    <!--    <div class="well">-->
    <!--      <button type="button" class="btn btn-primary disabled">Coming Soon</button>-->
    <!--    </div>-->
    <!--    <div class="well">-->
    <!--      <button type="button" class="btn btn-primary disabled">Coming Soon</button>-->
    <!--    </div>-->
    <!--    <div class="well">-->
    <!--      <button type="button" class="btn btn-primary disabled">Coming Soon</button>-->
    <!--    </div>-->
        <!--<div class="alert alert-success fade in">-->
        <!--  <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>-->
          <!--<p><strong>Ey!</strong></p>-->
          <!--People are looking at your profile. Find out who.-->
    <!--    </div>-->
      <!--</form>-->
    <!--</div>-->
    
    <span id="gatchaInfo"></span>
    
    
    <?php 
              echo "<div class='row'>";
                echo "<div class='col-sm-4'>";
                // echo "<div id='gh'>";
                  echo "Grand Heroes: ";echo"<br> <br>";
                  $users = avgGrand();
                  foreach ($users as $user)
                    echo "<p>Average gold: ".$user['AVG(costIfSold)']. "g</p>";
                  
                  $users = avgGrandR();
                  foreach ($users as $user)
                    echo "<p>Average rating: ".$user['AVG(rarity)']. "*</p>". "<br>";
                  
                  echo "<form action='addItemGH.php'>";
                  echo  "<input type='submit' value='Add new item' id='submit'>";
                  echo "</form>";
                  
                  
                  $users = grandList();
                  
                  foreach($users as $user) {
                      // echo "<div id='gh'>";
                      echo $user['itemName'] . "  " . $user['rarity'] . "<br>";
                      echo "[<a href='updateItem.php?itemName=".$user['itemName']."'>Update</a>]"; 
                      echo "[<a onclick='return confirmDelete()' href='deleteItem.php?itemName=".$user['itemName']."'> Delete </a>] <br />";
                      // echo "</div>";
                  }
                echo "</div>";  
                // echo "</div>";
                
                echo "<div class='col-sm-4'>";
                // echo "<div id='roy'>";
                  echo "Royals: "; echo "<br> <br>";
                  
                  $users = avgRoyal();
                  foreach ($users as $user)
                    echo "<p>Average gold: ". "<br>".$user['AVG(costIfSold)']. "g</p>";
                  
                  $users = avgRoyalR();
                  foreach ($users as $user)
                    echo "<p>Average rating: ".$user['AVG(rarity)']. "*</p>". "<br>";
                  
                  $users = royalList();
                  
                  foreach($users as $user) {
                      // echo "<div id='roy'>";
                      echo $user['itemName'] . "  " . $user['rarity'] . "<br>";
                      // echo "[<a href='updateUser.php?userId=".$user['id']."'>Update</a>]"; 
                      // echo "[<a onclick='return confirmDelete()' href='deleteUser.php?userId=".$user['id']."'> Delete </a>] <br />";
                      // echo "</div>";
                  }
                echo "</div>";
                // echo "</div>";
                
                echo "<div class='col-sm-4'>";
                // echo "<div id='ad'>";
                  echo "Angels & Demons: "; echo "<br> <br>";
                  
                  $users = avgAd();
                  foreach ($users as $user)
                    echo "<p>Average gold: "."<br>".$user['AVG(costIfSold)']. "g</p>";
                  
                  $users = avgAdR();
                  foreach ($users as $user)
                    echo "<p>Average rating: ".$user['AVG(rarity)']. "*</p>". "<br>";
                  
                  $users = adList();
                  
                  foreach($users as $user) {
                      // echo "<div id='ad'>";
                      echo $user['itemName'] . "  " . $user['rarity'] . "<br>";
                      // echo "[<a href='updateUser.php?userId=".$user['id']."'>Update</a>]"; 
                      // echo "[<a onclick='return confirmDelete()' href='deleteUser.php?userId=".$user['id']."'> Delete </a>] <br />";
                      // echo "</div>";
                  }
                echo "</div>";
                // echo "</div>";
    ?>
    <form action="logout.php">
        <input type="submit" value="Logout" id="submit">
    </form>

    
    <script>
        function confirmDelete() {
          return confirm("Are you sure you want to delete this item?");
        }
    </script>

</body>
</html>