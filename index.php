<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <?php
        
        include 'functions.php';
    
        
        ?>
    </head>
    
    <body>
        
        <nav>
            <a href="index.php" id="current">Home</a>
            <a href="dnd.php">DND Dice</a>
            <a href="d2HeadsTails.php">D2 Heads or Tails</a>
            
            
        </nav>
        
        <div id ="main">
            <h1>Random Dice Generator</h1>
            
            <div id="dice">
                <?php
            
                normalDice();
    
                ?>
               <form id="roll">
                <input type="submit" value="Roll"/> 
               </form>
               <hr>
            </div>
             
           
        </div>
       
        <footer>
            CST336 2017&copy; Hutt
        </footer>
    </body>
</html>