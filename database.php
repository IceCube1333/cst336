<html>
    <head>
        <link rel="stylesheet" href="css/style.css" type="text/css" />
    </head>
    
    <body>
        
        <header>
            <h1>Device Checkout</h1>
        </header>        
        
        <!--originally sorted by name and devices are displayed-->
        <form action="database.php" method="post">
            <select name="filter">
                <option value="clear">Choose Filter</option>
                <option value="Computer">Computer</option>
                <option value="Tablet">Tablet</option>
                <option value="Connector">Connector</option>
                <option value="Device Name">Device Name</option>
                <option value="Available Device">Available Device</option>
            </select>
            <select name="sort">
                <option value="clear">Sort By</option>
                <option value="Device Name">Device Name</option>
                <option value="Device Price">Device Price</option>
            </select>
            <input type="submit" name="submit" value="Submit">
        </form>
        
        
        <?php  
        
                $servername = "us-cdbr-iron-east-05.cleardb.net";
                $username = "b924c277a48bcc";
                $password = "82e3f446";
                $dbname = "heroku_e0a3be7f701d904";
                
                // connect to our mysql database server
                $conn = new mysqli($servername, $username, $password, $dbname);
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }
                // echo "Connected successfully";
                 
                // make a query
                if($_POST ["sort"] == "clear" && $_POST ["filter"] == "clear") {
                    $sql = "SELECT id, deviceName FROM Device WHERE 1 ORDER BY deviceName ASC";
                    $result = $conn->query($sql);
                    
                    if ($result->num_rows > 0) {
                        // output data of each row
                        echo "<div id='original'>";
                        while ($row = $result->fetch_assoc()) {
                            echo $row["deviceName"]. "<br>";
                            "<br>";
                        }
                        echo "</div>";
                    } else {
                        echo "0 results";
                    }
                    // $conn->close();
                }
                
                //sort by price 
                else if($_POST ["sort"] == 'Device Price') {
                    $sql = "SELECT id, deviceName, price FROM Device WHERE 1 ORDER BY price DESC";
                    $result = $conn->query($sql);
                    
                    if ($result->num_rows > 0) {
                        // output data of each row
                        while ($row = $result->fetch_assoc()) {
                            echo $row["deviceName"]. " | $". $row["price"]. "<br>";
                            "<br>";
                        }
                    } else {
                        echo "0 results";
                    }
                    // $conn->close();
                 }
                 
                 //sort by name 
                else if($_POST ["sort"] == 'Device Name') {
                    $sql = "SELECT id, deviceName FROM Device WHERE 1 ORDER BY deviceName ASC";
                    $result = $conn->query($sql);
                    
                    if ($result->num_rows > 0) {
                        // output data of each row
                        while ($row = $result->fetch_assoc()) {
                            echo $row["deviceName"]. "<br>";
                            "<br>";
                        }
                    } else {
                        echo "0 results";
                    }
                    // $conn->close();
                 }
                 
                 //filter by computer
                else if($_POST ["filter"] == 'Computer') {
                    $sql = "SELECT id, deviceName, deviceType FROM Device WHERE deviceType = 'Computer' ";
                    $result = $conn->query($sql);
                    
                    if ($result->num_rows > 0) {
                        // output data of each row
                        while ($row = $result->fetch_assoc()) {
                            echo "Item: ". $row["deviceName"]. " | Device: ". $row["deviceType"]. "<br>";
                            "<br>";
                        }
                    } else {
                        echo "0 results";
                    }
                    // $conn->close();
                 }
                 
                 //filter by Tablet
                else if($_POST ["filter"] == 'Tablet') {
                    $sql = "SELECT id, deviceName, deviceType FROM Device WHERE deviceType = 'Tablet' ";
                    $result = $conn->query($sql);
                    
                    if ($result->num_rows > 0) {
                        // output data of each row
                        while ($row = $result->fetch_assoc()) {
                            echo "Item: ". $row["deviceName"]. " | Device: ". $row["deviceType"]. "<br>";
                            "<br>";
                        }
                    } else {
                        echo "0 results";
                    }
                    // $conn->close();
                 }
                 
                 //filter by Connector
                else if($_POST ["filter"] == 'Connector') {
                    $sql = "SELECT id, deviceName, deviceType FROM Device WHERE deviceType = 'Connector' ";
                    $result = $conn->query($sql);
                    
                    if ($result->num_rows > 0) {
                        // output data of each row
                        while ($row = $result->fetch_assoc()) {
                            echo "Item: ". $row["deviceName"]. " | Device: ". $row["deviceType"]. "<br>";
                            "<br>";
                        }
                    } else {
                        echo "0 results";
                    }
                    // $conn->close();
                 }
                 
                 //filter by name 
                else if($_POST ["filter"] == 'Device Name') {
                    $sql = "SELECT id, deviceName FROM Device WHERE 1 ORDER BY deviceName ASC";
                    $result = $conn->query($sql);
                    
                    if ($result->num_rows > 0) {
                        // output data of each row
                        while ($row = $result->fetch_assoc()) {
                            echo $row["deviceName"]. "<br>";
                            "<br>";
                        }
                    } else {
                        echo "0 results";
                    }
                    // $conn->close();
                 }
                 
                 //filter by availability
                else if($_POST ["filter"] == 'Available Device') {
                    $sql = "SELECT id, deviceName, status FROM Device WHERE status ='Available'";
                    $result = $conn->query($sql);
                    
                    if ($result->num_rows > 0) {
                        // output data of each row
                        while ($row = $result->fetch_assoc()) {
                            echo $row["deviceName"]. " | ". $row["status"]. "<br>";
                            "<br>";
                        }
                    } else {
                        echo "0 results";
                    }
                    // $conn->close();
                 }
                 
                 
                 ///////////
                 // combinations of filter and sorting
                 //////////
                 
                // else if ($_POST ["sort"] == "Device Name" && $_POST ["filter"] == "Device Name") {
                //     $sql = "SELECT id, deviceName, status FROM Device WHERE 1 ORDER BY ASC";
                //     $result = $conn->query($sql);
                    
                //     if ($result->num_rows > 0) {
                //         // output data of each row
                //         while ($row = $result->fetch_assoc()) {
                //             echo $row["deviceName"]. "<br>";
                //             "<br>";
                //         }
                //     } else {
                //         echo "0 results";
                //     }
                //     // $conn->close();
                //  }
     
        ?>
        
        <footer>
               <hr>
               CST336 Hutt &copy;2017
        </footer>
        
    </body>
</html>