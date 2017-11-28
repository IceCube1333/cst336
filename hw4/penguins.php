<html>
    <head>
        <link rel="stylesheet" href="css/style.css" type="text/css" />
    </head>
    
    <body>
         <nav>
            <a href="index.php">Home</a>
        </nav>
        
        <header>
            <h1>Which Penguin Are You?</h1>
        </header>
        
        <?php 
        
        //img output
        if($_POST["gender"]  == 'Male' && $_POST["numbers"] == '1') {
            
            echo $_POST["firstname"] . " " . $_POST["lastname"];
            echo "<br/>";
            echo "<img src='img/maleBabyPenguin1.png'>";
            
            
        } else if ($_POST["gender"]  == 'Male' && $_POST["numbers"] == '2') {
            
            echo $_POST["firstname"] . " " . $_POST["lastname"];
            echo "<br/>";
            echo "<img src='img/malePenguin2.png'>";
            
        } if($_POST["gender"]  == 'Male' && $_POST["numbers"] == '3') {
            
            echo $_POST["firstname"] . " " . $_POST["lastname"];
            echo "<br/>";
            echo "<img src='img/maleBabyPenguin3.png'>";
            
            
        } else if ($_POST["gender"]  == 'Male' && $_POST["numbers"] == '4') {
            
            echo $_POST["firstname"] . " " . $_POST["lastname"];
            echo "<br/>";
            echo "<img src='img/malePenguin4.png'>";
            
        } else if ($_POST["gender"]  == 'Female' && $_POST["numbers"] == '1') {
            
            echo $_POST["firstname"] . " " . $_POST["lastname"];
            echo "<br/>";
            echo "<img src='img/femaleBabyPenguin1.png'>";
            
        } else if ($_POST["gender"]  == 'Female' && $_POST["numbers"] == '2') {
            
            echo $_POST["firstname"] . " " . $_POST["lastname"];
            echo "<br/>";
            echo "<img src='img/femalePenguin2.png'>";
            
        } else if ($_POST["gender"]  == 'Female' && $_POST["numbers"] == '3') {
            
            echo $_POST["firstname"] . " " . $_POST["lastname"];
            echo "<br/>";
            echo "<img src='img/femaleBabyPenguin3.png'>";
            
        } else if ($_POST["gender"]  == 'Female' && $_POST["numbers"] == '4') {
            
            echo $_POST["firstname"] . " " . $_POST["lastname"];
            echo "<br/>";
            echo "<img src='img/femalePenguin4.png'>";
        
        } else if (($_POST["firstname"] == NULL) || ($_POST["lastname"] == NULL) || ($_POST["gender"] == NULL) || ($_POST["numbers"] == NULL)) {
            
            echo "<h2>Error please make sure to input all data.</h2>";
            echo "<h3>Hit the Home button in the left corner to do it again.</h3>";
        } 
        
        ?>
        
         <footer>
            <hr>
            CST336 Hutt &copy;2017 
        </footer>
    </body>
</html>


