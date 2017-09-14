<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    
    <body>
        
        <?php
            
            
            $person = array(
                "name" => "Will",
                "profilePicUrl" => "cards/profile_pics/will.png",
                "cards" => array(
                    array("suit" => "hearts",
                    "value" => rand(1,13)
                        ),
                    array("suit" => "clubs",
                    "value" => rand(1,13)
                        )
                    )
                );
                
                
            function displayPerson($person) {
                // show profile pic
                echo "<img src='".$person["profilePicUrl"]."'>";
                
                // iterate through $persons "cards"
                
                for($i=0;$i< count($person["cards"]);$i++) {
                    $card = $person["cards"][$i];
                    
                    // construct the imgURL for each card
                    $imgURL = "cards/" .$card["suit"]. "/" .$card["value"]. ".png";
                    
                    // translate this to HTML
                    echo "<img src='".$imgURL."'>";
                    
                }
                
                echo calculateHandValue($person["cards"]);
            }    
            
            function calculateHandValue($cards) {
                $sum = 0;
                for($i = 0; $i < count($cards); $i++) {
                    $sum += $cards[$i]["value"];
                }
                
                return $sum;
            }
            displayPerson($person);


        ?>
    </body>
</html>