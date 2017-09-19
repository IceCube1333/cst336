<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    
    <body>
        
        <?php
            
            $Dice = array (
                "diceImages" => "images/dice/",
                "dice" => rand(1,6) .".png");
            
            for ($i=1;$i <7;$i++) {
               echo "<img src='".$Dice["diceImages"] .$i.'.png' width="200px" height="200px".'>";
            }


        ?>
    </body>
</html>