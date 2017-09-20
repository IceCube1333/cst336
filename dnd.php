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
            <a href="index.php">Home</a>
            <a href="dnd.php" id="current">DND Dice</a>
            <a href="d2HeadsTails.php">D2 Heads or Tails</a>
            
        </nav>
        
        <div id ="main">
            <h1>DND Dice Generator</h1>
            
            <div id= "dndDice">
                <?php
             
                buildD4();
                buildD6();
                buildD8();
                buildD10();
                buildD12();
                buildD20();
                buildD100();
            ?>
            </div>
             
           <form id="rollDnd">
            <input type="submit" value="Roll"/> 
           </form>
           <hr>
           
        </div>
       
       <footer>
            CST336 2017&copy; Hutt
        </footer>
        
    </body>
</html>