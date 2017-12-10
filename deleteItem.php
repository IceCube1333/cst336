
<?php
    include 'database.php';
    $conn = getDatabaseConnection();
  
    $sql = "DELETE FROM grandheroes
          WHERE itemName = '" .$_GET['itemName']."'";
          
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    
    header("Location: admin.php");
  
?>