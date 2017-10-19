<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="css/style.css" type="text/css" />
    </head>
    
    <body>
        
        <header>
            <h1>Device Checkout</h1>
            <h2>Using php & sql database</h2>
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
        <br>
           <?php
                // include "database.php";
                
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
                // if($_POST ["sort"] == "clear" && $_POST ["filter"] == "clear") {
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
                // }
           ?>
           
            <footer>
               <hr>
               CST336 Hutt &copy;2017
            </footer>

    </body>
</html>